<div id="content" class="container well" style="max-width:400px;">
		
		<h2 class="text-center">Login</h2> 
		<?php 
		echo $this->Form->create(array());
		 
		echo $this->Form->Input('username', array(
			'label'=>false,
			'class'=>'form-control',
			'placeholder'=>'Input your username'
			)
		);
		
		echo $this->Form->Input('password',array(
			'label'=>false,
			'class'=>'form-control',
			'placeholder'=>'Input your password'
			)
		);
		echo $this->Form->button('Login', array(
			'class'=>'btn btn-primary col-md-12'
			)
		);
		?>
		<br>
		<a class="btn btn-danger col-md-12" href="/ipv/users/tambah">Daftar</a>
		<?php
		echo $this->Form->end(); 
		?>

		
	</div>
	
		