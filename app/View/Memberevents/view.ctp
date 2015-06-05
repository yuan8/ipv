<div class="memberevents view">
<h2><?php echo __('Memberevent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($memberevent['Memberevent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Event'); ?></dt>
		<dd>
			<?php echo $this->Html->link($memberevent['Event']['title'], array('controller' => 'events', 'action' => 'view', $memberevent['Event']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($memberevent['Memberevent']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url Pic'); ?></dt>
		<dd>
			<?php echo h($memberevent['Memberevent']['url_pic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($memberevent['Memberevent']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($memberevent['User']['name'], array('controller' => 'users', 'action' => 'view', $memberevent['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Memberevent'), array('action' => 'edit', $memberevent['Memberevent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Memberevent'), array('action' => 'delete', $memberevent['Memberevent']['id']), array(), __('Are you sure you want to delete # %s?', $memberevent['Memberevent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Memberevents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Memberevent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Votes'), array('controller' => 'votes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vote'), array('controller' => 'votes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Votes'); ?></h3>
	<?php if (!empty($memberevent['Vote'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Memberevent Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($memberevent['Vote'] as $vote): ?>
		<tr>
			<td><?php echo $vote['id']; ?></td>
			<td><?php echo $vote['memberevent_id']; ?></td>
			<td><?php echo $vote['user_id']; ?></td>
			<td><?php echo $vote['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'votes', 'action' => 'view', $vote['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'votes', 'action' => 'edit', $vote['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'votes', 'action' => 'delete', $vote['id']), array(), __('Are you sure you want to delete # %s?', $vote['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vote'), array('controller' => 'votes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
