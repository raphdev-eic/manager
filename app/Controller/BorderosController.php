<?php
App::uses('AppController', 'Controller');
/**
 * Borderos Controller
 *
 * @property Bordero $Bordero
 * @property PaginatorComponent $Paginator
 * @property nComponent $n
 */
class BorderosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bordero->recursive = 0;
		$this->set('borderos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bordero->exists($id)) {
			throw new NotFoundException(__('Invalid bordero'));
		}
		$options = array('conditions' => array('Bordero.' . $this->Bordero->primaryKey => $id));
		$this->set('bordero', $this->Bordero->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bordero->create();
			if ($this->Bordero->save($this->request->data)) {
				$this->Session->setFlash(__('The bordero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bordero could not be saved. Please, try again.'));
			}
		}
		$users = $this->Bordero->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bordero->exists($id)) {
			throw new NotFoundException(__('Invalid bordero'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bordero->save($this->request->data)) {
				$this->Session->setFlash(__('The bordero has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bordero could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bordero.' . $this->Bordero->primaryKey => $id));
			$this->request->data = $this->Bordero->find('first', $options);
		}
		$users = $this->Bordero->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Bordero->id = $id;
		if (!$this->Bordero->exists()) {
			throw new NotFoundException(__('Invalid bordero'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Bordero->delete()) {
			$this->Session->setFlash(__('The bordero has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bordero could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
