<?php
	class Event extends AppModel {
	public $name = 'Event';
	public $hasMany = array('Member');
	}
?>