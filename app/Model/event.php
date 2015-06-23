<?php

class Event extends AppModel{
public $name="Event";
public $hasMany=array('Memberevent');
public $belongsTo=array('User');
}
?>