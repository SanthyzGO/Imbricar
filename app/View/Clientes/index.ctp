<h2>Lista de Clientes</h2>

<table class="table table-bordered table-striped">
  <tr>
    <td>Id</td>
    <td>Nit</td>
    <td>Nombre</td>
    <td>Telefono</td>
    <td>Direccion</td>
    <td>Editar</td>
    <td>Eliminar</td>
  </tr>
  <?php foreach($clientes as $cliente):?>
    <tr>
      <td><?php echo $cliente['Cliente']['id'];?></td>
      <td><?php echo $cliente['Cliente']['nit'];?></td>
      <td><?php echo $cliente['Cliente']['nombre'];?></td>
      <td><?php echo $cliente['Cliente']['telefono'];?></td>
      <td><?php echo $cliente['Cliente']['direccion'];?></td>
      <td><?php echo $this->Html->link('Editar',array('controller'=>'clientes','action'=>'editar',$cliente['Cliente']['id']),array('class'=>'btn btn-info'));?></td>
      <td><?php echo $this->Form->postlink('Eliminar',array('action'=>'eliminar',$cliente['Cliente']['id']),array('class'=>'btn btn-danger','confirm'=>'Seguro que desea eliminar a '.$cliente['Cliente']['nombre'].'?'));?></td>
    </tr>
  <?php endforeach;?>
</table>
