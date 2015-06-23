<div class="box-border col-md-offset-3 col-md-6"><?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('title',array(
			'class'=>'form-control'));
		echo $this->Form->input('Url_pic', array('type' => 'file'));
		// echo $this->Form->input('url_pic');
		echo $this->Form->input('description');
		echo $this->Form->input('start', array(
			'class'=>'well form-control',
			'type'=>'datetime-local'));
		echo $this->Form->input('end', array(
			'class'=>'well form-control',
			'type'=>'datetime-local'));
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