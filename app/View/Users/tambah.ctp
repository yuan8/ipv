<div class="container box-border col-md-offset-2 col-md-8">
&nbsp;&nbsp;
<center><?php echo $this->Form->create('User'); ?></center>

	<fieldset>
		<legend><center><?php echo __('Add User'); ?></center></legend>
	<div>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
	<?php 
		echo $this->Form->button('Submit', array(
			'class'=>'btn btn-success'
			)
		);
		echo $this->Form->end();
	?>
	</div>
</div>