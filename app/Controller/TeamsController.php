<?php
class TeamsController extends AppController{

    public function TeamAdd(){
		if($this->request->data && $this->request->is('post')){
			$this->Team->create();
			if($this->Team->save($this->request->data)){
				$this->Session->setFlash('Le Team à été ajouter avec success');
				$this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Le Team n\'a pas été enregistrer reasseyer');
				$this->redirect($this->referer());	
			}
		}

		$list = $this->Team->ListCity();
		$this->set(compact('list'));
	}

	public function TeamList(){
		$list = $this->Team->find('all');
		$this->set(compact('list'));
	}

	public function TeamEdit( $id = null ){
		 if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		    }

		    $post = $this->Team->findById($id);
		    if (!$post) {
		        throw new NotFoundException(__('Invalid Team'));
		    }

		    if ($this->request->is(array('post', 'put'))) {
		        $this->Team->id = $id;
		        if ($this->Team->save($this->request->data)) {
		            $this->Session->setFlash(__('Your Team has been updated.'));
		            return $this->redirect(array('action' => 'TeamList'));
		        }
		        $this->Session->setFlash(__('Unable to update your Team.'));
		    }
		    if (!$this->request->data) {
		        $this->request->data = $post;
		    }
			$list = $this->Team->ListCity();
			$this->set(compact('list'));	
	}

	public function TeamDelete($id = null){
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Team->id = $id;
        if (!$this->Team->exists()) {
            throw new NotFoundException(__('Invalid Post'));
            $this->redirect(array('action'=>'TeamList'));
        }
        if ($this->Team->delete()) {
                $this->Session->setFlash('L\'article a été bien supprimer');
                $this->redirect(array('action'=>'TeamList'));
        }
        $this->Session->setFlash('Post was not deleted');
        $this->redirect(array('action'=>'TeamList'));
	}

}
