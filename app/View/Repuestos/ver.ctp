<div class="btn-box span10">
  <h2>Detalles de Repuesto</h2>
  <p><strong>Id:</strong><?php echo $repuesto['Repuesto']['id'];?></p>
  <p><strong>Codigo:</strong><?php echo $repuesto['Repuesto']['codigo'];?></p>
  <p><strong>Descripcion:</strong><?php echo $repuesto['Repuesto']['descripcion'];?></p>
  <p><strong>Precio:</strong> <?php echo $repuesto['Repuesto']['precio'];?></p>
  <p><strong>Ultima Modificación:</strong><?php echo$repuesto['Repuesto']['modified'];?></p>
  <?php echo $this->Html->link('Volver',array('controller'=>'repuestos','action'=>'index'));?>
</div>
