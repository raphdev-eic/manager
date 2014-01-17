<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $components = array('Session',
        'Cookie'=>array(
                'name'=>'EicCorporation',
                'domain'=>'.eic-corporation.com',
                'path'=>'/',
                'key'=>'qSI232qs*&11~_+!@#HKAv!@*(XSL#$%)asGb$@is~#sXOw!adre@34S^',
                'httpOnly'=>true
        ),
        'Auth'=>array(
                'authenticate' => array(
                    'Form' => array(
                        'fields' => array('username' => 'email'),
                        'scope'=>array('User.status'=>1)
                )
            )
        )
    );

  public function beforeFilter(){
       parent::beforeFilter();
       $this->Auth->allow();
       if($this->Cookie->check('EicAuth') && !$this->Auth->loggedIn()){
          $this->loadModel('User');//je charge le model 
          // recherche un User qui a ce cookie dans la bd
         $user = $this->User->find('first', array(
                'conditions' => array('User.id' => $this->Cookie->read('EicAuth'))
            ));
        if(!empty($user)){
           $this->Auth->login($user);
           $this->Cookie->write('EicAuth', $this->Cookie->read('EicAuth'),true, time() + 3600 * 24 * 3);
          }else{
           $this->Cookie->write('EicAuth','',true, time() - 3600 * 24 * 3);
           $this->Auth->loginAction = Configure::read('apps');
          }
       }else{
         $this->Auth->loginAction = Configure::read('apps');
       }
    }
}
