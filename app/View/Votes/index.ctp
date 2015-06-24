<div class="votes index">
	<h2><?php echo __('Votes'); ?></h2>
	<table class="table-hover" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
			<th class="text-center"><?php echo $this->Paginator->sort('memberevent_id'); ?></th>
			<th class="text-center"><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="text-center"><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions text-center"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($votes as $vote): ?>
	<tr>
		<td class="text-center"><?php echo h($vote['Vote']['id']); ?>&nbsp;</td>
		<td class="text-center">
			<?php echo $this->Html->link($vote['Memberevent']['title'], array('controller' => 'memberevents', 'action' => 'view', $vote['Memberevent']['id'])); ?>
		</td>
		<td class="text-center">
			<?php echo $this->Html->link($vote['User']['name'], array('controller' => 'users', 'action' => 'view', $vote['User']['id'])); ?>
		</td>
		<td class="text-center"><?php echo h($vote['Vote']['created']); ?>&nbsp;</td>
		<td class="actions text-center">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vote['Vote']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vote['Vote']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vote['Vote']['id']), array(), __('Are you sure you want to delete # %s?', $vote['Vote']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>