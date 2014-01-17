<?php
class CountriesController extends AppController{

	public function CountryAdd(){
		if($this->request->data && $this->request->is('post')){
			/*debug($this->request->data);
			die();*/
			$this->Country->create();
			if($this->Country->save($this->request->data)){
				$this->Session->setFlash('Le Country à été ajouter avec success');
				$this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Le Country n\'a pas été enregistrer reasseyer');
				$this->redirect($this->referer());	
			}
		}
	}

	public function CountryList(){
		$list = $this->Country->find('all');
		$this->set(compact('list'));
	}

	public function CountryEdit( $id = null ){
		 if (!$id) {
		        throw new NotFoundException(__('Invalid post'));
		    }

		    $post = $this->Country->findById($id);
		    if (!$post) {
		        throw new NotFoundException(__('Invalid Country'));
		    }

		    if ($this->request->is(array('post', 'put'))) {
		        $this->Country->id = $id;
		        if ($this->Country->save($this->request->data)) {
		            $this->Session->setFlash(__('Your Country has been updated.'));
		            return $this->redirect(array('action' => 'CountryList'));
		        }
		        $this->Session->setFlash(__('Unable to update your Country.'));
		    }
		    if (!$this->request->data) {
		        $this->request->data = $post;
		    } 
	}

	public function CountryDelete($id = null){
        if (!$this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        $this->Country->id = $id;
        if (!$this->Country->exists()) {
            throw new NotFoundException(__('Invalid Post'));
            $this->redirect(array('action'=>'CountryList'));
        }
        if ($this->Country->delete()) {
                $this->Session->setFlash('L\'article a été bien supprimer');
                $this->redirect(array('action'=>'CountryList'));
        }
        $this->Session->setFlash('Post was not deleted');
        $this->redirect(array('action'=>'CountryList'));
	}

}