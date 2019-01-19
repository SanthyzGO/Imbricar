<?php
class RepuestosController extends AppController {
    public $helpers=array('Html','Form');
    public $component=array('Session');
    public function index()
    {
        $this->set('repuestos',$this->Repuesto->find('all'));
    }
    public function ver($id=null)
    {
        if(!$id)
        {
            throw new NotFoundException('Datos invalidos');
        }
        $repuesto=$this->Repuesto->findById($id);
       
        if(!$repuesto)
        {
            throw new NotFoundException('El repuesto no existe');
        }
        $this->set('repuesto',$repuesto);
    }
    public function nuevo()
    {
        if ($this->request->is('post')) 
        {
            $this->Repuesto->create();
            if($this->Repuesto->save($this->request->data))
            {
                $this->Repuesto->setFlash('Los datos han sido guardados','default',array('class'=>'success'));
                return $this->redirect(array('action'=>index));
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
        $repuesto=$this->Repuesto->findById($id);
        if(!$repuesto)
        {
            throw new NotFoundException('No existe el repuesto');
        }
        if($this->request->is('post','put'))
        {
            $this->Repuesto->id=$id;
            if($this->Repuesto->save($this->request->data))
            {
                $this->Session->setFlash('Los Datos Se Han Cambiado');
                return $this->redirect((array('action'=>'index')));
            }
            $this->Session->setFlash('El registro no pudo ser editado');
        }
        if(!$this->request->data)
        {
            $this->request->data=$repuesto;
        }
    }
}
?>