<?php
App::uses('AppController','Controller');
App::uses('RanksEventListener', 'Event');
class TransactionsController extends AppController{

	/**
	 * beforeFilter callback
	 *
	 * @return void
	 */
		public function beforeFilter() {
			parent::beforeFilter();
		}

		/**
		 * [GetTransactionAllUser description]
		 */
		public function GetTransactionAllUser(){
			$transaction = $this->Transaction->NotActiveTransaction();
			if(empty($transaction)){
				$this->Session->setFlash('Aucune transaction non active est en cours','info');
			}
			$this->set(compact('transaction'));
		}

		/**
		 * [SetRetrailTrans description]
		 * @param [type] $id      [description]
		 * @param [type] $user_id [description]
		 */

		public function SetRetrailTrans($id = null , $user_id = null){
			$this->Transaction->id = $id;
			if(!$this->Transaction->exists()){
				throw new NotFoundException("Transaction introuvable", 404);
				exit();
			}
			if(!$user_id){
				throw new BadRequestException("L'emetteur de cette operation est introuvable", 404);
				exit();
			}
			$detail = $this->Transaction->SetRetrailTransaction($id,$user_id);
			$bordero = $this->Transaction->GetRecoverySchedule($id);
			$total = ($detail['Transaction']['quantity'] * $detail['Transaction']['price']) + 1100;
			$this->set(compact('detail','bordero','total'));
		}

		/**
		 * [ActiveAccounts fucntion d'activation des achats]
		 * @param [type] $id      [description]
		 * @param [type] $user_id [description]
		 */


		public function ActiveAccounts($id = null,$user_id = null){
			$this->Transaction->getEventManager()->attach(new RanksEventListener());
	        if(!$id){
	        	throw new NoFoundException("L'achat à activer n'existe pas", 404);
	        	exit();
	        }
                //verification si le nbre de parts à depacer la limit
                $checks = $this->Transaction->CheckParts( $id, $user_id);
                //mise a jour du nombre de  parts
                $this->Transaction->UpdatePartsuser($user_id);
			        //affectation de la variable user
		            $this->Transaction->id = $id;
		            $updateTran = $this->Transaction->saveField('status',1);
		            if($updateTran){
		            	$this->Transaction->SaveHistoryPartsuser($id, $user_id);
		            	$this->redirect(array('action'=>'GetTransactionAllUser'));
		            	$this->Session->setFlash("L'ordre d'achat et la mise à jour des parts a été validé avec success !",
		            		'success');
		            }
		            $this->Session->setFlash('Une erreur est survenu lors de la validation','error');
		   }


		   public function AddTransaction($id = null){
		   	if(!$id){
		   		throw new BadRequestException("Mauvaise requete veuillez preciser", 403);
		   	}
		   	 $years = $this->Transaction->getYears();
		   	 $operations = $this->Transaction->getOperations();
             $this->set(compact('years','operations'));

             if(!empty($this->request->data)){
             	$d = $this->request->data;
             	$d['Transaction']['numero'] = $this->Transaction->User->generateKeyInvoce();
             	$d['Transaction']['status'] = 0;
             	$d['Transaction']['user_id'] = $id;
             	$this->Transaction->create();
             	if($this->Transaction->save($d)){
             		$this->Session->write('usertransid',$id);
             		$this->Session->setFlash('transaction effectuer avec success', 'success');
             		$this->redirect(array('controller'=>'Cashflows','action'=>'CashflowAdd'));
             	}
               $this->Session->setFlash('Transaction echouer', 'error');
             }
		   }

}