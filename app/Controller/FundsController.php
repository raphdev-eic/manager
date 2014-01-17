<?php
class FundsController extends AppController{

	public function beforeFilter(){
      parent::beforeFilter();
	}

	public function FundAdd(){
		if($this->request->data && $this->request->is('post')){
			/*debug($this->request->data);
			die();*/
			$this->Fund->create();
			if($this->Fund->save($this->request->data)){
				$this->Session->setFlash('Le Fund à été ajouter avec success');
				$this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Le Fund n\'a pas été enregistrer reasseyer');
				$this->redirect($this->referer());
			}
		}
		$list = $this->Fund->ListCountry();
		$this->set(compact('list'));
	}

	public function FundList(){
		$list = $this->Fund->find('all');
		$this->set(compact('list'));
	}

	public function FundEdit( $id = null ){
		 if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		    }

		    $post = $this->Fund->findById($id);
		    if (!$post) {
		        throw new NotFoundException(__('Invalid Fund'));
		    }

		    if ($this->request->is(array('post', 'put'))) {
		        $this->Fund->id = $id;
		        if ($this->Fund->save($this->request->data)) {
		            $this->Session->setFlash(__('Your Fund has been updated.'));
		            return $this->redirect(array('action' => 'FundList'));
		        }
		        $this->Session->setFlash(__('Unable to update your Fund.'));
		    }
		    if (!$this->request->data) {
		        $this->request->data = $post;
		    }
			$list = $this->Fund->ListCountry();
			$this->set(compact('list')); 
	}

	public function FundDelete($id = null){
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Fund->id = $id;
        if (!$this->Fund->exists()) {
            throw new NotFoundException(__('Invalid Post'));
            $this->redirect(array('action'=>'FundList'));
        }
        if ($this->Fund->delete()) {
                $this->Session->setFlash('L\'article a été bien supprimer');
                $this->redirect(array('action'=>'FundList'));
        }
        $this->Session->setFlash('Post was not deleted');
        $this->redirect(array('action'=>'FundList'));
	}

}