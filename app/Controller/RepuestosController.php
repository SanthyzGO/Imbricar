<?php
class RespuestosController extends Controller {
    public function index()
    {
        $repuesto=$this->set->find($datos,'all');
        
    }
}
?>