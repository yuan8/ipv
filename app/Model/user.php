<?php

class User extends AppModel{

public $name='User';
public $hasMany= array('Event','Memberevent','Vote');
public $displayField = 'name';
public $validate=array(
'name'=> array(
	'notEmpty'=>array(
	'rule'=>'notEmpty',
	'message'=>'Usernamenya ngak boleh kosong !'
	)
),
'username'=> array(
	'notEmpty'=>array(
	'rule'=>'notEmpty',
	'message'=>'Usernamenya ngak boleh kosong !'
	),
	'uniq'=>array(
	'rule'=>'isUnique',
	'message'=>'Usernamenya udah ada yang make !'
	)
),
'email'=>array(
	'notEmpty'=>array(
	'rule'=>'notEmpty',
	'message'=>'Emailnya ngak boleh kosong !'
	),
	'notEmpty'=>array(
	'rule'=>'isUnique',
	'message'=>'Emailnya udah ada yang make !'
	)

),
'password'=>array( 
			'Not empty'=>array( 
			'rule'=>'notEmpty', 
			'message'=>'Mohon masukkan password anda' 
			), 
			'Match passwords' =>array( 
			'rule'=>'matchPasswords', 
			'message'=>'Password anda tidak cocok' 
			) 
		), 
		'password_confirmation'=>array( 
			'Not empty'=>array( 
			'rule'=>'notEmpty', 
			'message'=>'Password anda tidak cocok' 
			) 
		) 

);

}


?>