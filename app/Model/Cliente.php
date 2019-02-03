<?php
class Cliente extends AppModel
{
  public $hasMany=array(
         'Factura'=>array(
             'className'=>'Factura',
             'foreignKey'=>'cliente_id',
             'conditions'=>'',
             // 'order'=>'Cliente.nit DESC',
             'depend'=> false
     )
  );
}
