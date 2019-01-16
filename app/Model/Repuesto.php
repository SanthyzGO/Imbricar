<?php
class Repuesto extends AppModel
{
    public $validate =array(
        'id'=>array(
            'isUnique'=>array('rule'=>'isUnique','message'=>'Ya existe este serial'),

        ),
        'descripcion'=>array(
            'rule'=>'notBlank'
        ),
        'precio'=>array(
            'not blank'=>array('rule'=>'notBlank'),
            'numeric'=>array('rule'=>'numeric')
        )
    );
}