<?php
class Factura extends AppModel
{
  public $belongsTo =array(
      'Cliente'=>array(
        'className' =>'Cliente',
        'ForeignKey'=>'cliente_id'
      )
  );
}
