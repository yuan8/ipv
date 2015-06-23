<?php 

 class UploadsController extends AppController{

 	public $name='upload';
 	public $components=array('Upload');
 	public $uses=array();

 	public function upload(){

 		if(!empty($this->request->data)){
 			$this->Upload->upload ($this->request->data['Upload']['url']);


 		}

 	}




 }





?>