<?php
App::uses('AppController', 'Controller');
/**
 * CodigoFs Controller
 *
 * @property CodigoF $CodigoF
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CodigoFsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CodigoF->recursive = 0;
		$this->set('codigoFs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CodigoF->exists($id)) {
			throw new NotFoundException(__('Invalid codigo f'));
		}
		$options = array('conditions' => array('CodigoF.' . $this->CodigoF->primaryKey => $id));
		$this->set('codigoF', $this->CodigoF->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CodigoF->create();
			if ($this->CodigoF->save($this->request->data)) {
				$this->Session->setFlash(__('The codigo f has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The codigo f could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CodigoF->exists($id)) {
			throw new NotFoundException(__('Invalid codigo f'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CodigoF->save($this->request->data)) {
				$this->Session->setFlash(__('The codigo f has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The codigo f could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CodigoF.' . $this->CodigoF->primaryKey => $id));
			$this->request->data = $this->CodigoF->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CodigoF->id = $id;
		if (!$this->CodigoF->exists()) {
			throw new NotFoundException(__('Invalid codigo f'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CodigoF->delete()) {
			$this->Session->setFlash(__('The codigo f has been deleted.'));
		} else {
			$this->Session->setFlash(__('The codigo f could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
