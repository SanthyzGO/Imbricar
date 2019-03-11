<div class="btn-box span8">
	<h2>Crear Factura</h2>
		<?php
		$cantidad=12;
		echo $this->Form->create('Factura');
		?>
			<?php echo $this->Form->input('cliente_id',array('class'=>'dropdown-toggle btn'));; ?>
	<div class="btn-box span8">
		<center>
			<table>
			  <tr>
			    <td><h4>Repuestos</h4></td>
					<td><hr>	</td>
			    <td><h4>Cantidad</h4></td>
			    <td><h4>Agregar</h4></td>
			  </tr>
				<?php 	for($cantidad;$cantidad>=1;$cantidad--){?>
			  <tr>
			    <td>
			      <?php
			        echo $this->Form->input('repuesto'.$cantidad,array('class'=>'span5 tip','label'=>''));
			      ?>
			    </td>
					<td><?php
					echo " *"; ?>
					</td>
			    <td>
			      <?php
			      echo $this->Form->input('cantidad'.$cantidad,array('class'=>'span1	','label'=>''));
			      ?>
			    </td>
			    <td>
			        <?php echo $this->Form->button('Datos', array('type' => 'submit','name'=>'Datos','value'=>'Datos','class' => 'btn btn-success' )); ?></td>
			    </tr>
					<?php }
					// if(!$datos=null){exit();} ?>
				</table>
		</center>

	</div>

	<div class="btn-box span6"><?php
	echo $this->Form->input('total');?>

	<?php
	$this->Form->input('utilidad');
	echo $this->Form->end('Crear Factura',array('class'=>'btn'));
	?>
</div>
