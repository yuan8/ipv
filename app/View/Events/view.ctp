<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($event['Event']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Pic'); ?></dt>
		<dd>
			<?php echo h($event['Event']['url_pic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($event['Event']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($event['Event']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($event['Event']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['User']['name'], array('controller' => 'users', 'action' => 'view', $event['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), array(), __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Memberevents'), array('controller' => 'memberevents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Memberevent'), array('controller' => 'memberevents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Memberevents'); ?></h3>
	<?php if (!empty($event['Memberevent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Url Pic'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['Memberevent'] as $memberevent): ?>
	
		<tr>
			<td><?php echo $memberevent['id']; ?></td>
			<td><?php echo $memberevent['event_id']; ?></td>
			<td><?php echo $memberevent['title']; ?></td>
			<td><?php echo $memberevent['url_pic']; ?></td>
			<td><?php echo $memberevent['description']; ?></td>
			<td><?php echo $memberevent['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'memberevents', 'action' => 'view', $memberevent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'memberevents', 'action' => 'edit', $memberevent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'memberevents', 'action' => 'delete', $memberevent['id']), array(), __('Are you sure you want to delete # %s?', $memberevent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Memberevent'), array('controller' => 'memberevents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
