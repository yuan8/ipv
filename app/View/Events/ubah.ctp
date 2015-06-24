<div class="box-border col-md-offset-3 col-md-6">
	<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Edit Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title', array(
			'class'=>'form-control'));
		echo $this->Form->input('url_pic', array(
			'class'=>'form-control'));
		echo $this->Form->input('description');
		echo $this->Form->input('start', array(
			'type'=>'datetime-local',
			'class'=>'form-control'));
		echo $this->Form->input('end', array(
			'type'=>'datetime-local',
			'class'=>'form-control'));
		echo $this->Form->input('user_id');
		echo $this->Form->button('Login', array(
			'class'=>'btn btn-primary'
			)
		);
		echo $this->Form->end(); 
	?>
	</fieldset>
</div>
