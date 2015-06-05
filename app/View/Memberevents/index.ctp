<div class="memberevents index">
	<h2><?php echo __('Memberevents'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('event_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('url_pic'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($memberevents as $memberevent): ?>
	<tr>
		<td><?php echo h($memberevent['Memberevent']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($memberevent['Event']['title'], array('controller' => 'events', 'action' => 'view', $memberevent['Event']['id'])); ?>
		</td>
		<td><?php echo h($memberevent['Memberevent']['title']); ?>&nbsp;</td>
		<td><?php echo h($memberevent['Memberevent']['url_pic']); ?>&nbsp;</td>
		<td><?php echo h($memberevent['Memberevent']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($memberevent['User']['name'], array('controller' => 'users', 'action' => 'view', $memberevent['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $memberevent['Memberevent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $memberevent['Memberevent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $memberevent['Memberevent']['id']), array(), __('Are you sure you want to delete # %s?', $memberevent['Memberevent']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Memberevent'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Votes'), array('controller' => 'votes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vote'), array('controller' => 'votes', 'action' => 'add')); ?> </li>
	</ul>
</div>
