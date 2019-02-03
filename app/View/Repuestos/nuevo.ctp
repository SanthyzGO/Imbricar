<div class="btn-box span10">
  <h2>Crear Repuesto</h2>
  <?php
  echo $this->Form->create('Repuesto');
  echo $this->Form->input('id');
  echo $this->Form->input('codigo');
  echo $this->Form->input('descripcion');
  echo $this->Form->input('precio');
  echo $this->Form->end('Crear Repuesto');
  echo $this->Html->link('Volver',array('controller'=>'repuestos','action'=>'index'));
  ?>
</div>
