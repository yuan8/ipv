<style type="text/css">
	.judulEvent{
		position: absolute;
		top: 15px;
		left: -300px;
	}
	.imageUrl{
		position: absolute;
		height: 220px;
		top: 50px;
	}
	.userName{
		position: absolute;
		left: 80px;
		top: 300px;
	}
	.title{
		position:absolute; 
		top:280px;
		left: 100px;
	}
	
</style>
<div class="container">
<h2 class="text-center"><?php echo __('Member Event'); ?></h2>
	<div class="col-md-12">
		<div class="col-md-offset-1 col-md-3 imageUrl img-thumbnail">
			<?php echo h($memberevent['Memberevent']['url_pic']); ?>
			&nbsp;
		</div>
		<div class="col-md-offset-5 judulEvent">
			<?php echo $this->Html->link($memberevent['Event']['title'], array('controller' => 'events', 'action' => 'view', $memberevent['Event']['id'])); ?>
		</div>
		<div class="col-md-offset-1 title">
			<?php echo h($memberevent['Memberevent']['title']); ?>
		</div>
		<div class="col-md-offset-6 col-md-5 text-justify desc">
			<?php echo h($memberevent['Memberevent']['description']); ?>
			&nbsp;
		</div>
		<div class="col-md-offset-1 userName">
			<?php echo $this->Html->link($memberevent['User']['name'], array('controller' => 'users', 'action' => 'view', $memberevent['User']['id'])); ?>
			&nbsp;
		</div>
	</div>
	<div class="row">
			<?php echo $this->Html->link(__('Edit Memberevent'), array('action' => 'edit', $memberevent['Memberevent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete Memberevent'), array('action' => 'delete', $memberevent['Memberevent']['id']), array(), __('Are you sure you want to delete # %s?', $memberevent['Memberevent']['id'])); ?>
		</div>
</div>