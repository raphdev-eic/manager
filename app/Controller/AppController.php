<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {
  public $helpers = array('Form', 'Html', 'Js', 'Time');
  public $components = array('Session',
      'Cookie'=>array(
            'name'=>'EicCorporation',
            'domain'=>'.eic-corporation.com',
            'path'=>'/',
            'key'=>'qSI232qs*&11~_+!@#HKAv!@*(XSL#$%)asGb$@is~#sXOw!adre@34S^',
            'httpOnly'=>true
      ),'Auth','RequestHandler');

  public function beforeFilter(){
    /*debug($this->Cookie->read('EicAuth'));
    die();*/
       parent::beforeFilter();
       //request ajax component configuration
       if($this->RequestHandler->isAjax()){
           $this->layout = false;
           Configure::write('debug',0);
                if($this->request->is('ajax')){
                    $this->disableCache();
                }
       }

       $this->Auth->loginAction = Configure::read('accounts');

       if($this->Cookie->check('EicAuth') && !$this->Auth->loggedIn()){
          $this->loadModel('User');
          //je charge le model
          // recherche un User qui a ce cookie dans la bd
         $user = $this->User->find('first', array(
                'conditions' => array('User.id' => $this->Cookie->read('EicAuth'))
            ));
        if(!empty($user)){
           //debug($user); die();
           //enregistrement du role de l'utilisateur
           $role = $user['Role']['name'];
           //deermination des roles autorisés
           $autRole = array('SuperAdmin','Manager','Collaborateur');
           //verification de son role dans le tableaux des roles permis
             if(!in_array($role,$autRole)){
               $this->redirect(Configure::read('platform'));
               return false;
             }
           $this->Auth->login($user);
           $this->Cookie->write('EicAuth', $this->Cookie->read('EicAuth'),true, time() + 3600 * 24 * 3);
          }else{
           $this->Cookie->write('EicAuth','',true, time() - 3600 * 24 * 3);
           $this->Auth->loginAction = Configure::read('accounts');
          }
       }else{
         $this->Auth->loginAction = Configure::read('accounts');
       }
    }

}