<h2>Crear Factura</h2>
	<div class="btn-box span10">
<?php
 echo $this->Form->create('Factura');
 echo $this->Form->input('id',array('class'=>'span8'));
 echo $this->Form->input('cliente_id',array('class'=>'span8'));
 echo $this->Form->input('repuestos',array('class'=>'span4'));
 echo $this->Form->input('cantidad',array('class'=>'span4'));
 ?>
 <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form><?php
 echo $this->Form->input('total');
  $this->Form->input('utilidad');
 echo $this->Form->end('Crear Factura');

?>

</div>
