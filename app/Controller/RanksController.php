<?php
class RanksController extends AppController{

    public function RankAdd(){
		if($this->request->data && $this->request->is('post')){
			$this->Rank->create();
			if($this->Rank->save($this->request->data)){
				$this->Session->setFlash('Le Rank à été ajouter avec success');
				$this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Le Rank n\'a pas été enregistrer reasseyer');
				$this->redirect($this->referer());	
			}
		}
	}

	public function RankList(){
		$list = $this->Rank->find('all');
		$this->set(compact('list'));
	}

	public function RankEdit( $id = null ){
		 if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		    }

		    $post = $this->Rank->findById($id);
		    if (!$post) {
		        throw new NotFoundException(__('Invalid Rank'));
		    }

		    if ($this->request->is(array('post', 'put'))) {
		        $this->Rank->id = $id;
		        if ($this->Rank->save($this->request->data)) {
		            $this->Session->setFlash(__('Your Rank has been updated.'));
		            return $this->redirect(array('action' => 'RankList'));
		        }
		        $this->Session->setFlash(__('Unable to update your Rank.'));
		    }
		    if (!$this->request->data) {
		        $this->request->data = $post;
		    }
	}

	public function RankDelete($id = null){
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Rank->id = $id;
        if (!$this->Rank->exists()) {
            throw new NotFoundException(__('Invalid Post'));
            $this->redirect(array('action'=>'RankList'));
        }
        if ($this->Rank->delete()) {
                $this->Session->setFlash('L\'article a été bien supprimer');
                $this->redirect(array('action'=>'RankList'));
        }
        $this->Session->setFlash('Post was not deleted');
        $this->redirect(array('action'=>'RankList'));
	}

}
