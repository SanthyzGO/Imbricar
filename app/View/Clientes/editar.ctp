<div class="btn-box span10">
  <h2>Editar Cliente</h2>
  <?php echo $this->Form->create('cliente');?>
  <?php echo $this->Form->input('nit');?>
  <?php echo $this->Form->input('nombre');?>
  <?php echo $this->Form->input('direccion');?>
  <?php echo $this->Form->input('telefono');?>
  <?php echo $this->Form->end('Editar Cliente');?>
</div>
