<?php
	class Status_user extends AppModel {
	public $name = 'Status_user';
	public $hasMany = array('User');
	public $hasAndBelongsToMany= array('Event');

	}
?>