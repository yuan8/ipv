<div class="memberevents view box-border text-center">
	<h2><?php echo __('Member Event'); ?></h2>

	<div class="container">
		<div class="container">
			<div class="row">
			<div class="col-md-5">
				<dt>
					<?php echo h($memberevent['Memberevent']['id']); ?>
					&nbsp;
				</dt>
			</div>
			<div class="col-md-5">
				<dt>
					<?php echo $this->Html->link($memberevent['Event']['title'], array('controller' => 'events', 'action' => 'view', $memberevent['Event']['id'])); ?>
					&nbsp;
				</dt>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">	
				<dt>
					<?php echo h($memberevent['Memberevent']['url_pic']); ?>
					&nbsp;
				</dt>
				<dt>
					<?php echo h($memberevent['Memberevent']['title']); ?>
					&nbsp;
				</dt>
				<dt>
					<?php echo $this->Html->link($memberevent['User']['name'], array(
					'controller' => 'users', 
					'action' => 'view', 
					$memberevent['User']['id'])); ?>
					&nbsp;
				</dt>
			</div>
		</div>
		<div class="col-md-offset-3 col-md-5">
			<div>
				<dd class="text-justify">
					<?php echo h($memberevent['Memberevent']['description']); ?>
					&nbsp;
				</dd>
			</div>
		</div>
		</div>
	</div>
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
