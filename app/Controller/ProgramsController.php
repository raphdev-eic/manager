<?php
class ProgramsController extends AppController{
	

	public function ProgramAdd(){
		if($this->request->data && $this->request->is('post')){
			/*debug($this->request->data);
			die();*/
			$this->Program->create();
			if($this->Program->save($this->request->data)){
				$this->Session->setFlash('Le programme à été ajouter avec success');
				$this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Le programme n\'a pas été enregistrer reasseyer');
				$this->redirect($this->referer());	
			}
		}
	}

	public function ProgramList(){
		$list = $this->Program->find('all');
		$this->set(compact('list'));
	}

	public function ProgramEdit( $id = null ){
		 if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		    }

		    $post = $this->Program->findById($id);
		    if (!$post) {
		        throw new NotFoundException(__('Invalid post'));
		    }

		    if ($this->request->is(array('post', 'put'))) {
		        $this->Program->id = $id;
		        if ($this->Program->save($this->request->data)) {
		            $this->Session->setFlash(__('Your Programe has been updated.'));
		            return $this->redirect(array('action' => 'ProgramList'));
		        }
		        $this->Session->setFlash(__('Unable to update your post.'));
		    }
		    if (!$this->request->data) {
		        $this->request->data = $post;
		    } 
	}

	public function ProgramDelete($id = null){
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Program->id = $id;
        if (!$this->Program->exists()) {
            throw new NotFoundException(__('Invalid Post'));
            $this->redirect(array('action'=>'ProgramList'));
        }
        if ($this->Program->delete()) {
                $this->Session->setFlash('L\'article a été bien supprimer');
                $this->redirect(array('action'=>'ProgramList'));
        }
        $this->Session->setFlash('Post was not deleted');
        $this->redirect(array('action'=>'ProgramList'));
	}
}