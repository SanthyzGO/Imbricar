<?php
class RespuestosController extends Controller {
    public $helpers=array('Html','Form');
    public $component=array('Session');
    public function index()
    {
        $this->set('repuestos',$this->Repuesto->find('all'));
    }
    public function edit()
    {

    }
}
?>