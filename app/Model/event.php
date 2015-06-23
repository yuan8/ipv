<?php

class Event extends AppModel{
public $name="Event";
public $hasMany=array('Memberevent');
public $belongsTo=array('User');
public $validate = array(
'title'=>array(         
'title_tidak_boleh_kosong'=>array(         
'rule'=>'notEmpty',         
'message'=>'masukan title anda!'            
)         
),
'Url_pic'=>array(           
'pic_tidak_boleh_kosong'=>array(           
'rule'=>'notEmpty',  
'message'=>'Maukan gambar!'            
)
),
'description'=>array(           
'description_tidak_boleh_kosong'=>array(           
'rule'=>'notEmpty',  
'message'=>'Masukan Deskripsi anda!'            
)
),
'start'=>array(
	'waktu_tidak_boleh_kosong'=>array(
		'rule'=>'notEmpty',
		'message'=>'Masukkan tanggal mulai!')),
'end'=>array(
	'waktu_tidak_boleh_kosong_juga'=>array(
		'rule'=>'notEmpty',
		'message'=>'Masukkan tanggal selesai!'))
);

}
?>