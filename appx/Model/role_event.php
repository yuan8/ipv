 <?php
	class Role_event extends AppModel {
	public $name = 'Role_event';
	public $belongsTo = array('Event','Status_user');

	}
?>