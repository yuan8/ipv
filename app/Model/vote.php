<?php
	class Vote extends AppModel {
	public $name = 'Vote';
	public $belongsTo = array('User','Member');
	}
?>