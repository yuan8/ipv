<?php
App::uses('Component','Controller');
class UploadComponent extends Component{


	public function upload($data = null){
		if(!empty($data)){
			// check data apakah ada atau g
			$filename=$data['name'];
			$file_tmp_name=$data['tmp_name'];
			echo "<script> console.log('ini------- '+ ".$data['name'].");</script>";
			$dir= WWW_ROOT.'img'.DS.'upload';

			$allowed=array('png','jpg','jpeg');
			if (!in_array(substr(strrchr($filename ,'.'),1),$allowed)){	
				echo "<script>console.log('data g bisa masuk %%%%%');</script>";
				throw new NotFoundExeption('Error Processing Request',1);
			}
			elseif (is_uploaded_file($file_tmp_name)) {
				move_uploaded_file($file_tmp_name, $dir.DS.String::uuid()."-".$filename);	  
			}

		}


	}


}

?>