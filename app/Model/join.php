<?php
	class Join extends AppModel {
	public $name = 'Join';
	public $belongsTo = array('User','Event');
	}
?>