<?php
App::uses('AppController', 'Controller');

/**
* Class de gestion des comptes bancaire des utilisateur
*/
class ComptesController extends AppController{
	
    public function AddComptes(){
     	if(!empty($this->request->data)){
     		$this->request->data['Compte']['user_id'] = $this->Session->read('UserCompte_id');
	        $this->Compte->create();
	        if ($this->Compte->save($this->request->data)){
	            $this->Session->setFlash(__('Your Compte has been saved.','success'));
	            $this->Session->delete('UserCompte_id');
	            $this->redirect(array('controller'=>'Users','action' => 'UserList'));
	        }
	        $this->Session->setFlash(__('Unable to add your Compte.','error'));
        }
    }
}