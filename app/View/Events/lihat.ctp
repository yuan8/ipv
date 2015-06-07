
<?php



if( h($event['Event']['url_pic'])==null){
	$img='pic_kosong.png';
	}
	else{
		$img=h($event['Event']['url_pic']);
	}
?>
<div class="col-md-6 box-border">
<div class="col-md-12">
<h4><?php echo h($event['Event']['title'])?></h4>
<?php echo $this->Html->image($img, array('class' => 'b-radius img-responsive')) ?>
<br>
<p class="text-justify">&nbsp;&nbsp; <?php echo h($event['Event']['description']); ?></p>

</div>
</div>


<div class="col-md-6 col-xs-12">
<div class="row">
<?php 
foreach ($event['Memberevent'] as $memberevent): ?>
<div class="col-md-6 col-xs-12 box-border text-justify">

			<h4><?php echo $memberevent['title']; ?></h4>
			<?php

	if( $memberevent['url_pic']==null){
	$img='pic_kosong.png';
	}
	else{
		$img=$memberevent['url_pic'];
	}
?>

			<?php echo $this->Html->image($img, array('class' => 'b-radius img-responsive')) ?>
			<p class="text-justify">&nbsp;&nbsp;<?php echo substr($memberevent['description'],0,300); ?> . . .</p>
			<div class="btn-group">
			<form action="/ipv/votes/add" id="VoteAddForm" method="post" accept-charset="utf-8"><div style="display:none;"><input 
				type="hidden" name="_method" value="POST"></div>

			<input name="data[Vote][memberevent_id]" id="VoteMembereventId" value=<?php echo "".$memberevent['id']?> style="display:none;">
			<input name="data[Vote][user_id]" id="VoteUserId"  value="1" style="display:none;">
			<div class="btn-group">
			<button type="submit" class="btn btn-danger">Vote <span class="glyphicon glyphicon-heart"></span></button>
			<a href= <?php echo "/ipv/memberevents/view/".$memberevent['id']; ?> class="btn btn-success">Lihat</a>
			</div>
			</form>
</div>
</div>

	<?php endforeach; ?>

</div>
</div>