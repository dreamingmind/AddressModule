<?php
/**
 * Addresses Controller
 *
 * @property Address $Address
 */
class AddressesController extends AddressModuleAppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Address->recursive = 0;
		$this->set('addresses', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Address->exists($id)) {
			throw new NotFoundException(__('Invalid address'));
		}
		$options = array('conditions' => array('Address.' . $this->Address->primaryKey => $id));
		$this->set('address', $this->Address->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Address->create();
			if ($this->Address->save($this->request->data)) {
				$this->Session->setFlash(__('The address has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The address could not be saved. Please, try again.'));
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
		if (!$this->Address->exists($id)) {
			throw new NotFoundException(__('Invalid address'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Address->save($this->request->data)) {
				$this->Session->setFlash(__('The address has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The address could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Address.' . $this->Address->primaryKey => $id));
			$this->request->data = $this->Address->find('first', $options);
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
		$this->Address->id = $id;
		if (!$this->Address->exists()) {
			throw new NotFoundException(__('Invalid address'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Address->delete()) {
			$this->Session->setFlash(__('Address deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Address was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	/**
	 * 
	 * @throws NotFoundException
	 */
	public function dynamic_review_edit() {
		$alias = array_keys($this->request->data)[0];

		if (!$this->Address->exists($this->request->data[$alias])) {
			throw new NotFoundException(__('Invalid address'));
		}
		if ($this->Address->save($this->request->data[$alias])) {
			$this->Session->setFlash(__('The address has been saved'));
			$result = 'success';
		} else {
			$this->Session->setFlash(__('The address could not be saved. Please, try again.'));
			$result = 'failure';
		}
		$this->set(compact('result', 'alias'));
		$this->layout = 'ajax';
	}
}
