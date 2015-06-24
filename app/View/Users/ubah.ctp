<div class="container box-border col-md-offset-2 col-md-8">
&nbsp;&nbsp;
<center><?php echo $this->Form->create('User'); ?></center>

	<fieldset>
		<legend><center><?php echo __('Edit User'); ?></center></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('role');
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

