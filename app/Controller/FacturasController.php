<?php
App::uses('AppController', 'Controller');

class FacturasController extends AppController {

  public $components = array('RequestHandler');

  public function imp(){

    // incluimos la libreria en el controller
    require_once '../Vendor/dompdf/autoload.inc.php';

    // instantiate and use the dompdf class
    $dompdf = new Dompdf\Dompdf();
    $dompdf->loadHtml('hello world');

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('Letter', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

    $this->set('facturas',$this->Factura->findById($id));
  }
  public function index()
  {
      if ($this->request->is('post'))
      {
          $this->Factura->create();
          if($this->Factura->save($this->request->data))
          {
              $this->Factura->setFlash('Los datos han sido guardados','default',array('class'=>'success'));
              return $this->redirect(array('action'=>'index'));
          }
          $this->Session->setFlash('Los datos no pudieron ser guardados');
      }
      $clientes=$this->Factura->Cliente->find('list',array('fields'=>array('id','nombre')));
      $this->set('clientes',$clientes);
  }
}
?>
