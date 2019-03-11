<div class="btn-box span10">
  <h2>Crear Cliente</h2>
  <center>
    <table>
      <?php
      echo $this->Form->create('Cliente');  ?>
      <tr>
        <td><?php echo $this->Form->input('id') ; ?></td>
      </tr>
      <tr>
        <td><?php echo $this->Form->input('nit'); ?></td>
      </tr>
      <tr>
        <td><?php   echo $this->Form->input('nombre'); ?></td>
      </tr>
      <tr>
        <td><?php echo $this->Form->input('telefono'); ?></td>
      </tr>
      <tr>
        <td><?php   echo $this->Form->input('direccion'); ?></td>
      </tr>
      <tr>
        <td><?php echo $this->Form->end('Crear Cliente'); ?></td>
      </tr>
    </table>
  </center>
</div>
