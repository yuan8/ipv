<?php
App:uses('Component','Controller');
class UploadComponent extends Component{

	public function upload($data =null){
		
		if(!empety($data)){

			$filename=$file['name'];
			$file_tmp_name=$file['tmp_name'];
			$dir=WWW_ROOT.'img'.DS.'upload';
			$allowed=array('png','jpg','jpeg');
			if (!in_array(substr(strrchr($filename ,'.'),1),$allowed)){
				throw new NotFoundExeption('Error Processing Request',1);
			}
		}
		elseif (is_uploaded_file($file_tmp_name)) {
			move_uploaded_file($file_tmp_name, $dir.DS.String::uuid()."-".$filename);	  
		}



	}


}




?>