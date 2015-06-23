<div class="container box-border col-md-5">
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
			'type'=>'file'));
		echo $this->Form->input('description');
		echo $this->Form->input('user_id', array(
			'class'=>'form-control'));
	?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>