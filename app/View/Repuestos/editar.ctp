<div class="btn-box span10">
  <h2>Editar Repuesto</h2>
  <?php echo $this->Form->create('Repuesto');?>
  <?php echo $this->Form->input('codigo');?>
  <?php echo $this->Form->input('descripcion');?>
  <?php echo $this->Form->input('precio');?>
  <?php echo $this->Form->end('Editar Repuesto');?>
</div>
