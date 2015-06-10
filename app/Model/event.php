<?php
	class Event extends AppModel {
	public $name = 'Event';
	public $hasMany = array('Member');
	public $validate = array(
		'name'=>array(
			'nama_tidak_boleh_kosong'=>array(
				'rule'=>'notEmpty',
				'message'=>'Post ini tidak memiliki nama!'
			),
			'nama_tidak_sama'=>array(
				'rule'=>'isUnique',
				'message'=>'Post lain dengan nama/judul sama sudah ada!'
			)
		)
	)
	}
?>