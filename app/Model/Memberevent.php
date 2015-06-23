<?php

class Memberevent extends AppModel{
public $name='Memberevent';
public $hasMany=array('Vote');
public $belongsTo=array('User','Event');
public $validate = array(       
		'title'=>array(         
			'title_tidak_boleh_kosong'=>array(         
			'rule'=>'notEmpty',         
			'message'=>'masukan title anda!'            
			)         
			),
		'url_pic'=>array(           
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
		);

}
?>