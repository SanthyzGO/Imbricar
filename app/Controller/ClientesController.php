<?php
class ClientesController extends AppController {
  public $helpers=array('Html','Form');
  public $component=array('Session');
  public function index()
  {
      $this->set('clientes',$this->Cliente->find('all'));
  }
  public function ver($id=null)
  {
      if(!$id)
      {
          throw new NotFoundException('Datos invalidos');
      }
      $cliente=$this->Cliente->findById($id);

      if(!$cliente)
      {
          throw new NotFoundException('El cliente no existe');
      }
      $this->set('cliente',$cliente);
  }
  public function nuevo()
  {
      if ($this->request->is('post'))
      {
          $this->Cliente->create();
          if($this->Cliente->save($this->request->data))
          {
              $this->Cliente->setFlash('Los datos han sido guardados','default',array('class'=>'success'));
              return $this->redirect(array('action'=>'index'));
          }
          $this->Session->setFlash('Los datos no pudieron ser guardados');
      }
  }
  public function editar($id=null)
  {
      if(!$id)
      {
          throw New NotFoundException('Datos Invalidos');
      }
      $cliente=$this->Cliente->findById($id);
      if(!$cliente)
      {
          throw new NotFoundException('No existe el cliente');
      }
      if($this->request->is('post','put'))
      {
          $this->Cliente->id=$id;
          if($this->Cliente->save($this->request->data))
          {
              $this->Session->setFlash('Los Datos Se Han Cambiado');
              return $this->redirect((array('action'=>'index')));
          }
          $this->Session->setFlash('El registro no pudo ser editado');
      }
      if(!$this->request->data)
      {
          $this->request->data=$cliente;
      }
  }
  public function eliminar($id)
  {
    if ($this->request->is('get'))
    {
      throw new NotFoundException('No se puede eliminar');
    }
    if ($this->Cliente->delete($id))
    {
      $this->Session->setFlash('el registro ha sido eliminado',$element='default',$params=array('class'=>'success'));
    return $this->redirect(array('action'=>'index'));
    }
  }
}
?>
}
