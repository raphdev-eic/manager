<?php
App::uses('CakeEventListener', 'Event');
class RanksEventListener implements CakeEventListener {
/**
 * event lier au niveau d'investissement
 */
        private $current;
        private $previous;

        public function implementedEvents() {
	        return array(
	            'Model.Transaction.updated' =>  'updateRankUser',
	            'Model.Transaction.add'=> 'addHistoryRank',
	        );
        }
/**
 * [updateRankUser Evenement de mise a jour du niveau d'investissement]
 * @param  [type] $event [object]
 * @return [booleen]        [return true]
 */
        public function updateRankUser( $event){
           //recuperation de tous les Ranks
           $user_id = $event->data['id'];
           $Rank = classRegistry::init('Rank');
           $find = $Rank->find('list',array('fields'=>array('Rank.max')));
           $qte =  $event->data['qte'];
           // parcour du tableau
           foreach ($find as $rank_id => $max) {
	           	if($qte >= $max){
	           		$this->current = $rank_id + 1;
	           		$this->migrateRank($user_id, $this->current);
	           	}
           }
        }


/**
 * [addHistoryRank Evenement de creation de l'historique des migrations du niveau d'investissement]
 * @param [type] $event [object]
 * @return [booleen]        [return true]
 */
        public function addHistoryRank( $event){
           //recuperation de tous les Ranks
           $user_id = $event->data['id'];
           $Rank = classRegistry::init('Rank');
           $find = $Rank->find('list',array('fields'=>array('Rank.max')));
           $qte =  $event->data['qte'];
           // parcour du tableau
           foreach ($find as $rank_id => $max) {
	           	if($qte >= $max){
	           		$this->SaveRankHistory($user_id , $this->current , $event->data['rankname']);
	           	}
           }
        }

/**
 * [migrateRank permettre de faire la migration du niveau d'investissement]
 * @param  [string] $user_id [id de l'utilisateur concerné par la migartion]
 * @param  [integer] $maxid [id du niveau de migartion]
 * @return [booleen]          [return true si l'enregistrement c'est bien passé]
 */
        private function migrateRank($user_id, $maxid){
        	$User = classRegistry::init('User');
        	$User->id = $user_id;
	        	if(!$User->exists()){
	               return false;
	        	}
            $updateRank= $User->saveField('rank_id',$maxid);
            return true;
        }

/**
 * [SaveRankHistory permet de sauvegarder l'historique de migration du niveau d'investissement]
 * @param [string] $user_id  [id du l'utilisateur courant]
 * @param [integer] $mid     [id du niveau courent]
 * @param [string] $rankname [name du niveau precedent]
 */
        private function SaveRankHistory($user_id, $mid, $rankname){
             //recupere les noms des niveaux d'investissment
             $Rank = classRegistry::init('Rank');
             $Ugrade = classRegistry::init('Ugrade');
             $curt = $Rank->find('first',array(
              'fields'=>array('name'),
              'conditions'=>array('Rank.id'=>$mid),
              'recursive' => -1
             ));
             $current = $curt['Rank']['name'];
             //creation de l'objet data
             $data = array(
               'previous_grade'=>$rankname,
               'current_grade' => $current,
               'user_id'=>$user_id
             );
             $saveHistory = $Ugrade->save($data);
	         return true;
        }

}