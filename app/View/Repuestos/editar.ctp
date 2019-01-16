<h2>Editar Repuesto</h2>
<?php echo $this->Form->create('Repuesto');?>
<?php echo $this->Form->input('id');?>
<?php echo $this->Form->input('codigo');?>
<?php echo $this->Form->input('descripcion');?>
<?php echo $this->Form->input('precio');?>
<?php echo $this->Form->end('Editar Repuesto');?>
<?php echo $this->Html->link('Volver',array('controller'=>'repuestos','action'=>'index'));?>