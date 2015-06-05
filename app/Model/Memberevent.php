<?php

class Memberevent extends AppModel{
public $name='Memberevent';
public $hasMany=array('Vote');
public $belongsTo=array('User','Event');

}
?>