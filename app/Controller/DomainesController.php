<?php
class DomainesController extends AppController{

	public function DomaineAdd(){
		if($this->request->data && $this->request->is('post')){
			$this->Domaine->create();
			if($this->Domaine->save($this->request->data)){
				$this->Session->setFlash('Le Domaine à été ajouter avec success');
				$this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Le Domaine n\'a pas été enregistrer reasseyer');
				$this->redirect($this->referer());	
			}
		}
	}

	public function DomaineList(){
		$list = $this->Domaine->find('all');
		$this->set(compact('list'));
	}

	public function DomaineEdit( $id = null ){
		 if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		    }

		    $post = $this->Domaine->findById($id);
		    if (!$post) {
		        throw new NotFoundException(__('Invalid Domaine'));
		    }

		    if ($this->request->is(array('post', 'put'))) {
		        $this->Domaine->id = $id;
		        if ($this->Domaine->save($this->request->data)) {
		            $this->Session->setFlash(__('Your Domaine has been updated.'));
		            return $this->redirect(array('action' => 'DomaineList'));
		        }
		        $this->Session->setFlash(__('Unable to update your Domaine.'));
		    }
		    if (!$this->request->data) {
		        $this->request->data = $post;
		    }
	}

	public function DomaineDelete($id = null){
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Domaine->id = $id;
        if (!$this->Domaine->exists()) {
            throw new NotFoundException(__('Invalid Post'));
            $this->redirect(array('action'=>'DomaineList'));
        }
        if ($this->Domaine->delete()) {
                $this->Session->setFlash('L\'article a été bien supprimer');
                $this->redirect(array('action'=>'DomaineList'));
        }
        $this->Session->setFlash('Post was not deleted');
        $this->redirect(array('action'=>'DomaineList'));
	}

}