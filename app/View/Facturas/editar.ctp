<h2>Editar Factura</h2>
<?php echo $this->Form->create('Factura');?>
<?php echo $this->Form->input('cliente_id');?>
<?php echo $this->Form->input('repuestos');?>
<?php echo $this->Form->input('total');?>
<?php echo $this->Form->end('Editar Factura');?>
<?php echo $this->Html->link('Volver',array('controller'=>'
