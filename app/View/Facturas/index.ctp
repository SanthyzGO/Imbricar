<p>imprimiendo factura</p>
<pre>
<?php var_dump($facturas); ?>
exit();
</pre>
<?php foreach($facturas as $factura):?>
<tr>
<td><?php echo $factura['Factura']['id'];?></td>
 <td><?php echo $factura['Factura']['id_cliente'];?></td>
 <td><?php echo $factura['Factura']['id_repuestos'];?></td>
 <td><?php echo $factura['Factura']['total'];?></td>
 <td> <?php echo $this->Html->link('Detalle',array('controller' => 'facturas','action'=>'ver',$factura['Factura']['id'])); ?></td>
 <td><?php  echo $this->Html->link(__('Export to PDF'), array('action' => 'view',$factura['Factura']['id'], 'ext' => 'pdf'));?></td>
</tr>
<?php endforeach;
