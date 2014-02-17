<?php
App::uses("AppController", "Controller");

class CashflowsController extends AppController{

/**
 * beforeFilter callback
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
	}

    public function CashflowAdd($id = null){
      $actions = $this->Cashflow->TypeCash();
      $this->set(compact('actions'));
      if(!empty($this->request->data)){
        $d = $this->request->data;
        if($id){
            $d['Cashflow']['user_id'] = $id;
        }else{
            $d['Cashflow']['user_id'] = $this->Session->read('usertransid');
        }
        $this->Cashflow->create();
        if($this->Cashflow->save($d)){
            $this->Session->delete('usertransid');
            $this->Session->setFlash("Cashflow enregistré avec succèss",'success');
            $this->redirect(array('controller'=>'Users', 'action'=>'AllListUser'));
        }
      }
      $this->Session->setFlash("Désolé le cashflow n'a pas pu etre prit en compte", 'error');
    }
}