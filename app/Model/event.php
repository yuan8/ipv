<?php
	class Event extends AppModel {
	public $name = 'Event';
<<<<<<< HEAD
	public $hasMany = array('Member');
=======
	public $hasMany = array('Member','User');
	public $hasAndBelongsToMany= array('Status_user');
>>>>>>> daf17d2f16393b94d50e2ec9b4f14d0f922c2da1
	}
?>