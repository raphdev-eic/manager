<?php
class RolesController extends AppController{

	public function RoleAdd(){
		if($this->request->data && $this->request->is('post')){
			$this->Role->create();
			if($this->Role->save($this->request->data)){
				$this->Session->setFlash('Le Role à été ajouter avec success');
				$this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Le Role n\'a pas été enregistrer reasseyer');
				$this->redirect($this->referer());	
			}
		}
	}

	public function RoleList(){
		$list = $this->Role->find('all');
		$this->set(compact('list'));
	}

	public function RoleEdit( $id = null ){
		 if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		    }

		    $post = $this->Role->findById($id);
		    if (!$post) {
		        throw new NotFoundException(__('Invalid Role'));
		    }

		    if ($this->request->is(array('post', 'put'))) {
		        $this->Role->id = $id;
		        if ($this->Role->save($this->request->data)) {
		            $this->Session->setFlash(__('Your Role has been updated.'));
		            return $this->redirect(array('action' => 'RoleList'));
		        }
		        $this->Session->setFlash(__('Unable to update your Role.'));
		    }
		    if (!$this->request->data) {
		        $this->request->data = $post;
		    }
	}

	public function RoleDelete($id = null){
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Role->id = $id;
        if (!$this->Role->exists()) {
            throw new NotFoundException(__('Invalid Post'));
            $this->redirect(array('action'=>'RoleList'));
        }
        if ($this->Role->delete()) {
                $this->Session->setFlash('L\'article a été bien supprimer');
                $this->redirect(array('action'=>'RoleList'));
        }
        $this->Session->setFlash('Post was not deleted');
        $this->redirect(array('action'=>'RoleList'));
	}

}