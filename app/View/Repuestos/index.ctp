
<div class="btn-box span10">
  <h2>Lista de Repuestos</h2>
  <table class="table table-bordered table-striped">
    <tr>
      <td>Id</td>
      <td>codigo</td>
      <td>Descrpcion</td>
      <td>Precio</td>
      <td>Detalle</td>
      <td>Editar</td>
      <td>Eliminar</td>
    </tr>
    <?php foreach($repuestos as $repuesto):?>
      <tr>
        <td><?php echo $repuesto['Repuesto']['id'];?></td>
        <td><?php echo $repuesto['Repuesto']['codigo'];?></td>
        <td><?php echo $repuesto['Repuesto']['descripcion'];?></td>
        <td><?php echo $repuesto['Repuesto']['precio'];?></td>
        <td> <?php echo $this->Html->link('Detalle',array('controller' => 'repuestos','action'=>'ver',$repuesto['Repuesto']['id'])); ?></td>
        <td><?php echo $this->Html->link('Editar',array('controller'=>'repuestos','action'=>'editar',$repuesto['Repuesto']['id']));?></td>
        <td><?php echo $this->Form->postlink('Eliminar',array('action'=>'eliminar',$repuesto['Repuesto']['id']),array('confirm'=>'Seguro que desea eliminar a '.$repuesto['Repuesto']['descripcion'].'?'));?></td>
      </tr>
    <?php endforeach;?>
  </table>
</div>
