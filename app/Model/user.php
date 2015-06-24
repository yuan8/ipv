<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel{


public function beforeSave($options = array()){
 if (isset($this->data['User']['password'])){
 $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
  }
 return true;
 }

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
			)
	), 
			

);



}


?>