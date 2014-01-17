<?php
class CitiesController extends AppController{

	public function CityAdd(){
		if($this->request->data && $this->request->is('post')){
			$this->City->create();
			if($this->City->save($this->request->data)){
				$this->Session->setFlash('Le City à été ajouter avec success');
				$this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Le City n\'a pas été enregistrer reasseyer');
				$this->redirect($this->referer());	
			}
		}

		$list = $this->City->ListCountry();
		$this->set(compact('list'));
	}

	public function CityList(){
		$list = $this->City->find('all');
		$this->set(compact('list'));
	}

	public function CityEdit( $id = null ){
		 if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		    }

		    $post = $this->City->findById($id);
		    if (!$post) {
		        throw new NotFoundException(__('Invalid City'));
		    }

		    if ($this->request->is(array('post', 'put'))) {
		        $this->City->id = $id;
		        if ($this->City->save($this->request->data)) {
		            $this->Session->setFlash(__('Your City has been updated.'));
		            return $this->redirect(array('action' => 'CityList'));
		        }
		        $this->Session->setFlash(__('Unable to update your City.'));
		    }
		    if (!$this->request->data) {
		        $this->request->data = $post;
		    }
			$list = $this->City->ListCountry();
			$this->set(compact('list')); 
	}

	public function CityDelete($id = null){
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->City->id = $id;
        if (!$this->City->exists()) {
            throw new NotFoundException(__('Invalid Post'));
            $this->redirect(array('action'=>'CityList'));
        }
        if ($this->City->delete()) {
                $this->Session->setFlash('L\'article a été bien supprimer');
                $this->redirect(array('action'=>'CityList'));
        }
        $this->Session->setFlash('Post was not deleted');
        $this->redirect(array('action'=>'CityList'));
	}

}