<style type="text/css">
.box-border{
	padding:25px 50px 50px 50px;
}
h2{
	padding: 25px;
}
</style>
<div class="box-border col-md-offset-1">
	<h2><center><?php echo __('Users'); ?></center></h2>
	<table class="table-bordered" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th class="text-center"><?php echo $this->Paginator->sort('id'); ?></th>
			<th class="text-center"><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="text-center"><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="text-center"><?php echo $this->Paginator->sort('username'); ?></th>
			<th class="text-center"><?php echo $this->Paginator->sort('password'); ?></th>
			<th class="text-center"><?php echo $this->Paginator->sort('role'); ?></th>
			<th class="actions text-center"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td class="text-center"><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td class="text-center"><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td class="actions">
		<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
		<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>