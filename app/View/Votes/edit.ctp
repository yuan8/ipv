<div class="votes form">
<?php echo $this->Form->create('Vote'); ?>
	<fieldset>
		<legend><?php echo __('Edit Vote'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('memberevent_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Vote.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Vote.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Votes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Memberevents'), array('controller' => 'memberevents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Memberevent'), array('controller' => 'memberevents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
