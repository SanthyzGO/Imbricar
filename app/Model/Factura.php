<?php
class Factura extends AppModel
{
  public $belongsTo =array(
      'Cliente'=>array(
        'className' =>'Cliente',
        'foreignKey'=>'cliente_id'
      )
  );
}
