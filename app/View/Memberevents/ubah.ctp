<div class="box-border col-md-offset-3 col-md-6">
	<?php echo $this->Form->create('Memberevent'); ?>
	<fieldset>
		<legend><?php echo __('Edit Memberevent'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('event_id', array(
			'class'=>'form-control'));
		echo $this->Form->input('title', array(
			'class'=>'form-control'));
		echo $this->Form->input('url_pic', array(
			'class'=>'form-control'));
		echo $this->Form->input('description');
		echo $this->Form->input('user_id', array(
			'class'=>'form-control'));
	?>
	</fieldset>
	<?php echo $this->Form->Button('Submit', array(
	'class'=>'btn btn-success'
	)
);
		echo $this->Form->end(); ?>
</div>