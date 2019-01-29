<?php
App::uses('AppController', 'Controller');

class FacturasController extends AppController {
  public $components = array('RequestHandler');
  public function index(){
    $this->set('facturas',$this->Factura->find('all'));
  }
  public function view($id = null)
	{
		if (!$id) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('Factura.' . $this->Factura->primaryKey => $id));
		$this->pdfConfig = array(
			'download' => true,
			'filename' => 'factura_' . $id .'.pdf'
		);
		$this->set('factura', $this->Factura->find('first', $options));
	}
}
?>
