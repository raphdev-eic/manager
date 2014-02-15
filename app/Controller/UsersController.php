<?php
App::uses('AppController','Controller');

class UsersController extends AppController{

     public function beforFilter(){
     	 parent::beforFilter();
     }

     public function UserList(){
        $listuser = $this->User->find('all',array(
          'contain'=>array('ParentUser'=>array(
             'fields'=>array('username','email','firstname','lastname'),
            )),
           'fields'=>array('id','email','firstname','lastname','status','code'),
           'conditions'=>array('User.status <>'=>1),
           'order'=>array('User.created'=>'Desc')
          ));
        //debug($listuser); die();
       // if(!empty($listuser)){
          $this->set(compact('listuser'));
       // }/*else{
          /*throw new NotFoundException("La liste des utilisateur est indisponible", 404);
        }*/
     }

    public function UserAdd(){
      //les liste deroulantes96+
      $rank = $this->User->ListRank();
      $team = $this->User->ListTeam();
      $domaine = $this->User->ListDomaine();
      $role = $this->User->ListRole();
      $program = $this->User->ListProgm();
      $country = $this->User->ListCountry();
      $city = $this->User->ListCity();
      $this->set(compact('rank','team','domaine','role','program','country','city'));

      if(!empty($this->request->data)){
         $d = $this->request->data;

         if($this->request->is('get')){
               throw new  MethodNotAllowedException('Methode de la requete est interdit',405);
               $this->layout = 'error405';
               die();
         }

         if($this->request->is('post')){
               $d['User']['code'] = $this->User->genarateCodeinc(8);
               $d['User']['key_auth'] = $this->User->generateKeyAuth();
               if(!empty($d['User']['password'])){
                  $d['User']['password'] = Security::hash($d['User']['password'],null,true);
               }
               //enregistrement
               $this->User->create($d);
               if($this->User->save()){
               //envoi de l'email
                    $this->User->send($this->request->data['User'],'info');
                    $this->Session->setFlash('Enregistrement effectué avec success','success');
                    $this->redirect(array('action'=>'UserList'));
               }else{
                    $this->Session->setFlash('Warning! Enregistrement echoué ,  veuillez réessayer','error');
               }
         }
      }
   }

    public function ActiveUser( $id = null){
      //on verifie que l'id existe

      if (!$id){
          throw new NotFoundException(__('L\'utilisateur est introuvable',404));
          die();
      }

      //affectation de l'id
      $this->User->id = $id;

      if(!$this->User->exists()){
          throw new NotFoundException(__('L\'utilisateur est introuvable',404));
          die();
      }
      //affactation d'un variable de session pour la page comptes

      $this->Session->write('UserCompte_id',$id);
      //recuperation des liste deroulante
      $rank = $this->User->ListRank();
      $team = $this->User->ListTeam();
      $domaine = $this->User->ListDomaine();
      $role = $this->User->ListRole();
      $program = $this->User->ListProgm();
      $country = $this->User->ListCountry();
      $city = $this->User->ListCity();


      $UserInfo = $this->User->findById($id);

      $this->set(compact('rank','team','domaine','role','program','country','city','UserInfo'));

      //activation de l'utilisateur

      if(!empty($this->request->data)){

          $d = $this->request->data;

          //affectation des valeur des requests
          $d['User']['code'] = $this->User->genarateCodeinc(8);
          $d['User']['key_auth'] = $this->User->generateKeyAuth();
          $d['User']['email'] = $UserInfo['User']['email'];

          //Updated the user info

          if($this->User->save($d,false,array('email','code','key_auth','parts','program_id','country_id',
            'date_debut','role_id','rank_id','team_id','city_id','date_expire','sexe'))){

          //Si tous c'est bien passé ! envoi de l'email

              $this->User->send($d['User'],'code');

          //retourne le code de status ok

              $this->Session->setFlash('L\'utilisateur  à été activé avec success', 'success');
              $this->redirect(array('controller'=>'Comptes','action'=>'AddComptes'));
          }

          $this->Session->setFlash('L\'utilisateur  n\'a pu être activité', 'error');
      }

      if(!$this->request->data){
          $this->request->data = $UserInfo;
      }
   }

 /**
 * desactivation d'un user de type investisseur
 */
   public function AllListUser(){
      $alluser = $this->User->find('all',array(
        'contain'=>array('Rank','Team','Role','Program'=>array('fields'=>array('name')),'Country'),
         'conditions'=>array('User.status'=>1),
         'order'=>array('User.created'=>'Desc')
        ));
      if(!empty($alluser)){
        $this->set(compact('alluser'));
      }
   }

   public function DesactiveUser( $id = null){
    debug($id);
    die();
   }

   public function EditerUser( $id = null){
    debug($id);
    die();
   }

   public function ViewUser( $id = null){
    debug($id);
    die();
   }

    public function logout() {
      $this->Cookie->write('EicAuth','',true, time() - 3600 * 24 * 3);
      $this->Cookie->delete('EicAuth');
      return $this->redirect($this->Auth->logout());
    }
}