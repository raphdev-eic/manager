<?php
class ValuesController extends AppController{

	public function ValueAdd(){
		if($this->request->data && $this->request->is('post')){
			$this->Value->create();
			if($this->Value->save($this->request->data)){
				$this->Session->setFlash('Le Value à été ajouter avec success');
				$this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Le Value n\'a pas été enregistrer reasseyer');
				$this->redirect($this->referer());	
			}
		}

		$list = $this->Value->ListFund();
		$this->set(compact('list'));
	}

	public function ValueList(){
		$list = $this->Value->find('all');
		$this->set(compact('list'));
	}

	public function ValueEdit( $id = null ){
		 if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		    }

		    $post = $this->Value->findById($id);
		    if (!$post) {
		        throw new NotFoundException(__('Invalid Value'));
		    }

		    if ($this->request->is(array('post', 'put'))) {
		        $this->Value->id = $id;
		        if ($this->Value->save($this->request->data)) {
		            $this->Session->setFlash(__('Your Value has been updated.'));
		            return $this->redirect(array('action' => 'ValueList'));
		        }
		        $this->Session->setFlash(__('Unable to update your Value.'));
		    }
		    if (!$this->request->data) {
		        $this->request->data = $post;
		    }
			$list = $this->Value->ListFund();
			$this->set(compact('list')); 
	}

	public function ValueDelete($id = null){
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Value->id = $id;
        if (!$this->Value->exists()) {
            throw new NotFoundException(__('Invalid Post'));
            $this->redirect(array('action'=>'ValueList'));
        }
        if ($this->Value->delete()) {
                $this->Session->setFlash('L\'article a été bien supprimer');
                $this->redirect(array('action'=>'ValueList'));
        }
        $this->Session->setFlash('Post was not deleted');
        $this->redirect(array('action'=>'ValueList'));
	}

}