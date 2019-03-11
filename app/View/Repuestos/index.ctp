
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
        <td> <?php echo $this->Html->link('Detalle',array('controller' => 'repuestos','action'=>'ver',$repuesto['Repuesto']['id']),array('class'=>'btn btn-warning')); ?></td>
        <td><?php echo $this->Html->link('Editar',array('controller'=>'repuestos','action'=>'editar',$repuesto['Repuesto']['id']),array('class'=>'btn btn-info'));?></td>
        <td><?php echo $this->Form->postlink('Eliminar',array('action'=>'eliminar',$repuesto['Repuesto']['id']),array('class'=>'btn btn-danger','confirm'=>'Seguro que desea eliminar a '.$repuesto['Repuesto']['descripcion'].'?'));?></td>
      </tr>
    <?php endforeach;?>
  </table>
  <?php
      echo "<center><div class='btn-group'>";

          // the 'first' page button
          //echo $this->Paginator->first("First");
          echo $this->Paginator->first('<<', array(
              'escape' => false,
              'tag' => 'button',
              'class' => 'btn btn-white',
            ));




          // 'prev' page button,
          // we can check using the paginator hasPrev() method if there's a previous page
          // save with the 'next' page button
          if($this->Paginator->hasPrev()){
              //echo $this->Paginator->prev('<button type="button" class="btn btn-white"><i class="fa fa-angle-left"></i></button>',  array('escape' => false));
              echo $this->Paginator->prev('<', array(
                  'escape' => false,
                  'tag' => 'button',
                  'class' => 'btn btn-white',
                ));

          }

          // the 'number' page buttons
          //echo $this->Paginator->numbers(array('modulus' => 1));
          echo $this->Paginator->numbers(array(
            'modulus' => 9,
             'class' => 'btn btn-white',
              'tag' => 'button',
               'separator' => false,
               'currentClass' => 'btn btn-white active',
             ));


          // for the 'next' button
          if($this->Paginator->hasNext()){
              //echo $this->Paginator->next('<button type="button" class="btn btn-white"><i class="fa fa-angle-right"></i> </button>',  array('escape' => false));


              echo $this->Paginator->next('>', array(
                  'escape' => false,
                  'tag' => 'button',
                  'class' => 'btn btn-white',
                ));

          }

          // the 'last' page button
          //echo $this->Paginator->last('<button type="button" class="btn btn-white"><i class="fa fa-angle-double-right"></i> </button>',  array('escape' => false));

          echo $this->Paginator->last('>>', array(
              'escape' => false,
              'tag' => 'button',
              'class' => 'btn btn-white',
            ));?>
</div>
