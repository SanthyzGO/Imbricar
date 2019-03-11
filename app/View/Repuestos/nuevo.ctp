<div class="btn-box span10">
  <h2>Crear Repuesto</h2>
  <center>
    <table>
      <?php
      echo $this->Form->create('Repuesto');?>
      <tr>
        <td><?php echo $this->Form->input('id'); ?></td>
      </tr>
      <tr>
        <td><?php echo $this->Form->input('codigo'); ?></td>
      </tr>
      <tr>
        <td><?php echo $this->Form->input('descripcion'); ?></td>
      </tr>
      <tr>
        <td><?php echo $this->Form->input('precio'); ?></td>
      </tr>
      <tr>
        <td><?php echo $this->Form->end('Crear Repuesto'); ?></td>
      </tr>

    </table>
  </center>
</div>
