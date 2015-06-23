<style type="text/css">
.box{
	border: 1px solid black;
	border-radius: 10px;
}
</style>

<div class="container box-border col-md-offset-2 col-md-8">
&nbsp;&nbsp;
<center><?php echo $this->Form->create('Memberevent'); ?></center>
<div class="container col-md-offset-3 col-md-6">
	<fieldset>
		<legend><?php echo __('Add Memberevent'); ?></legend>
	<?php
		echo $this->Form->input('event_id',
			array(
			'class'=>'form-control'
			)
		);
		echo $this->Form->input('title',array(
			'class'=>'form-control'));
		echo $this->Form->input('url_pic',array(
			'type'=>'file',
			'label'=>false));
		echo $this->Form->input('description',array(
			));

		echo $this->Form->input('user_id',array(
			'class'=>array(
				'form-control'
				))
		);
		echo $this->Form->button('Submit', array(
			'class'=>'btn btn-success'
			)
		);
		echo $this->Form->end(); 
	?>
	</fieldset>
</div>
</div>