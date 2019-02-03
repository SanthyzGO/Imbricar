<h2>Editar Factura</h2>
<div class="btn-box span10">
<?php echo $this->Form->create('Factura');?>
<?php echo $this->Form->input('cliente_id');?>
<?php echo $this->Form->input('repuestos');?>
<?php echo $this->Form->input('total');?>
<?php echo $this->Form->end('Editar Factura');?>  
</div>
