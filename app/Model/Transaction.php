<?php

App::uses('AppModel', 'Model');
App::uses('CakeEvent', 'Event');

/**
* Transaction Model
 *
 * @property User $User
 * @property Operation $Operation
 * @property Cost $Cost
 */

class Transaction extends AppModel {


    public $actsAs = array('Containable');
    public $countpart;


	//The Associations below have been created with all possible keys, those that are not needed can be removed



/**
 * belongsTo associations
 *
 * @var array
 */

	public $belongsTo = array(

		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Operation' => array(
			'className' => 'Operation',
			'foreignKey' => 'operation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cost' => array(
			'className' => 'Cost',
			'foreignKey' => 'cost_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Year' => array(
			'className' => 'Year',
			'foreignKey' => 'year_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

	);

	/**
	 * afterSave callback
	 *
	 * @param $created boolean
	 * @param $options array
	 * @return void
	 */


	/**
	 * @var [integer] [operation id : id du type d'operation]
	 * @return [Array] [transaction: retour du tableau des trabsaction non activé]
	 */

	public function NotActiveTransaction(){
     $transaction = $this->find('all',array(
     	'contain'=>array(
     		'User'=>array(
     		    'fields'=>array('id','email','key_auth','firstname','lastname','parts','rank_id','team_id','role_id')
     		),
     	    'Operation'
     	),
        'conditions'=>array('Transaction.status'=>0,'Transaction.operation_id'=>1),
        'order'=>array('Transaction.created DESC'),
        'group'=>array('Transaction.created')
     ));
     return $transaction;
	}


	/**
	 * [SetRetrailTransaction function d'affichage des détail des transactions]
	 * @param [integer] $id      [id de la transaction]
	 * @param [string] $user_id [id de l'utilisateur auquel la transction appartient]
	 */

	public function SetRetrailTransaction($id = null,$user_id = null){
		$this->id = $id;
		if(!$this->exists()){
			throw new NotFoundException("Tarnsaction introuvable", 404);
			exit();
		}
		if(!$user_id){
			throw new BadRequestException("L'emetteur de cette operation est introuvable", 404);
			exit();
		}
		$more = $this->find('first',array(
		  'contain'=>array('User','Operation'),
          'conditions'=>array('Transaction.id'=>$id, 'Transaction.user_id'=>$user_id)
		));
		return $more;
	}


	/**
	 * [GetRecoverySchedule function du recuperation du borderos de la transaction qui a le ref_id]
	 * @param [integer] $ref_id [id de la transaction qui doit avoir le borderos]
	 */

	public function GetRecoverySchedule($ref_id){
	      if(!$ref_id){
			 	throw new BadRequestException("L'emetteur de cette operation est introuvable", 404);
			 	exit();
	      }
	      $Bor = classRegistry::init('Bordero');
	      $bordero = $Bor->find('first',array(
	       'conditions'=>array('Bordero.ref_id'=>$ref_id)
	      ));
	      if(empty($bordero)){
	         SessionComponent::setFlash('Aucun borderos de versement est lié','info');
	      }
	      return $bordero;
	}
/**
 * [CheckParts function de verification des parts en entrée et en sortie]
 * @param [integer] $id      [id de la transaction]
 * @param [string] $user_id [id du user]
 */
	public function CheckParts($id = null,$user_id = null){
            //recuperation de la quantity commandé:
            $findquantity = $this->find('first',array(
             'contain'=>array('User'=>array('fields'=>array('id'))),
             'fields'=>array('quantity','price'),
             'conditions'=>array('Transaction.id'=>$id, 'Transaction.user_id'=>$user_id)
            ));
             $quantity = $findquantity['Transaction']['quantity'];
	        //recuperation du niveau d'investissement du user_id
	        $userRank = $this->User->find('first',array(
	          'contain'=>array('Rank'=>array(
                 'fields'=>array('name','max','Min')
	          )),
	          'fields'=>array('id','email','parts','key_auth','firstname','lastname','status'),
              'conditions'=>array('User.id'=>$user_id)
	        ));


	        //recuperation du maximum du grade du user
            $max = $userRank['Rank']['max'];
            $parts = $userRank['User']['parts']; //nombre de parts actuel du user
            //calcul du nombre de parts devant etre mise a jour
            $this->countpart = (int)$parts + (int)$quantity;
            //comparaison des nombres de parts
            if($max < $this->countpart){
                //Attacher l'evenement mise à jour du niveau d'investissement
			    $this->getEventManager()->dispatch(new CakeEvent('Model.Transaction.updated', $this, array(
	                'id' => $user_id,'qte'=>$this->countpart
	            )));

	            //Attacher l'evenement  sauvergarde de l'historique de migration
			    $this->getEventManager()->dispatch(new CakeEvent('Model.Transaction.add', $this, array(
	                'id' => $user_id,'qte'=>$this->countpart,'rankname'=>$userRank['Rank']['name']
	            )));
	           return true;
            }
	}


/**
 * [UpdatePartsuser function de mise a jour des parts de l'utilisateur]
 * @param [string] $id [id de l'utilisateur dont les parts doivent etre mise a jour]
 */
	public function UpdatePartsuser($id = null){
		if(!$id){
			throw new NotFoundException("Utilisateur introuvable", 404);
			exit();
		}
		$this->User->id = $id;
		$user = $this->User->saveField('parts',$this->countpart);
		if($user){
			return true;
		}
	}


/**
 * [SaveHistoryPartsuser function de sauvegarde des historique de parts du user]
 * @param [integer] $id      [id de la transaction]
 * @param [string] $user_id [id de l'utilisateur]
 */
	public function SaveHistoryPartsuser($id = null, $user_id = null){
			if(!$id){
				throw new NotFoundException("Utilisateur introuvable", 404);
				exit();
			}

			$userparts = $this->User->find('first',array(
			 'fields'=>array('parts'),
	         'conditions'=>array('User.id'=>$user_id),
	         'recursive' => -1
			));

			$part = $userparts['User']['parts'];
	        //recuperation de la quantity commandé:
	        $findquantity = $this->find('first',array(
	         'contain'=>array('User'=>array('fields'=>array('id'))),
	         'fields'=>array('quantity','price'),
	         'conditions'=>array('Transaction.id'=>$id, 'Transaction.user_id'=>$user_id)
	        ));


	        $quantity = $findquantity['Transaction']['quantity'];
	        $current_part = $part + $quantity;
	        $data = array(
		        'current_part'=>$current_part,
		        'previous_part' => $part,
		        'user_id' => $user_id
	        );

	        $Uparts = classRegistry::init('Uparts');
	        $update = $Uparts->save($data);
	        if($update){
	        	return true;
	        }
	}
}

