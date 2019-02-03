<h2>Crear Cliente</h2>
<?php
 echo $this->Form->create('Cliente');
 echo $this->Form->input('id',array('class'=>'span8'));
 echo $this->Form->input('nit',array('class'=>'span8'));
 echo $this->Form->input('nombre',array('class'=>'span8'));
 echo $this->Form->input('telefono',array('class'=>'span8'));
 echo $this->Form->input('direccion',array('class'=>'span8'));
 echo $this->Form->end('Crear Cliente');

?>
