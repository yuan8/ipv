<?php
	class User extends AppModel {
	public $name = 'User';
	public $hasMany = array('Vote');
}
?>