<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Add Event'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('Url_pic', array('type' => 'file'));
		// echo $this->Form->input('url_pic');
		echo $this->Form->input('description');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Memberevents'), array('controller' => 'memberevents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Memberevent'), array('controller' => 'memberevents', 'action' => 'add')); ?> </li>
	</ul>
</div>
