<?php foreach ($memberevents as $memberevent): ?>
<div class="box-border">
	&nbsp;
	<div class="row text-center">
		<div class="col-md-offset-1 col-md-3">
			<?php echo h($memberevent['Memberevent']['id']); ?>&nbsp;
		</div>
		<div class="col-md-6">
			<?php echo $this->Html->link($memberevent['Event']['title'], array('controller' => 'events', 'action' => 'view', $memberevent['Event']['id'])); ?>&nbsp;
		</div>
	</div>
	&nbsp;&nbsp;&nbsp;
	<div class="row">
		<div class="col-md-offset-1 col-md-3 text-justify">
			<?php echo h($memberevent['Memberevent']['url_pic']); ?>&nbsp;
			Tempat Member Event Gambar
		</div>
		<div class="col-md-6 text-justify">
			<?php echo h($memberevent['Memberevent']['description']); ?>&nbsp;
		</div>
		
	</div>
	<div class="row col-md-offset-2">
		<?php echo h($memberevent['Memberevent']['title']); ?>&nbsp;
	</div>
	<div class="row col-md-offset-1 text-center">
			<div class="col-md-3">
			<?php echo $this->Html->link($memberevent['User']['name'], array('controller' => 'users', 'action' => 'view', $memberevent['User']['id'])); ?>
			</div>
			<div class="col-md-offset-1 col-md-2">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $memberevent['Memberevent']['id']),array(
				'class'=>array(
					'btn btn-info')
			)
			); ?>
			</div>
			<div class="col-md-offset-1 col-md-2">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $memberevent['Memberevent']['id']), array(
				'class'=>array(
				'btn btn-info')
			)
			); ?>
			</div>
		</div>
	<hr>
</div>
&nbsp;
<?php endforeach; ?>