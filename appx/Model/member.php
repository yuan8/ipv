<?php
	class Member extends AppModel {
	public $name = 'Member';
	public $belongsTo = array('Event');
	public $hasMany=array('Vote');
	}
?>