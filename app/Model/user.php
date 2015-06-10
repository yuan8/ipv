<?php
	class User extends AppModel {
	public $name = 'User';
<<<<<<< HEAD
	public $hasMany = array('Vote');
=======
	public $hasMany = array('Vote','Join');
	public $belongsTo=  array('Status_user');
>>>>>>> daf17d2f16393b94d50e2ec9b4f14d0f922c2da1
}
?>