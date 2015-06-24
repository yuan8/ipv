
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
<h4 class="text-center text-uppercase"><?php echo "# ". h($event['Event']['title'])?></h4>
<hr>

<?php echo $this->Html->image($img, array('class' => 'b-radius img-responsive')) ?>
<br>
<i class="text-justify">&nbsp;&nbsp; <?php echo h($event['Event']['description']); ?></i>
<hr>
<div class="box-border bg-dark col-md-12">
<i class="col-md-4">Start : <?php echo h($event['Event']['start']); ?></i>
<i class=" col-md-4">End : <?php echo h($event['Event']['end']); ?></i>
</div>
</div>
</div>


<div class="col-md-6 col-xs-12">
<div class="row">
<?php 
$cont_member=1;
foreach ($event['Memberevent'] as $memberevent): ?>
<div class="col-md-6 col-xs-12 box-border text-justify">

			<h4 class="text-center text-uppercase" ><?php echo $cont_member.". ". $memberevent['title']; ?></h4>
			<hr>
			<?php

	if( $memberevent['url_pic']==null){
	$img='images.jpg';
	}
	else{
		$img=$memberevent['url_pic'];
	}
?>

			<?php echo $this->Html->image($img, array('class' => 'b-radius img-responsive')) ?>
			<br>
			<i class="text-justify ">&nbsp;&nbsp;<?php echo substr($memberevent['description'],0,300); ?> . . .</i>
			<br>
			<br>
			<div class="col-md-10 col-md-offset-1">
			<form action="/ipv/votes/add" id="VoteAddForm" method="post" accept-charset="utf-8">
				<div style="display:none;">
					<input type="hidden" name="_method" value="POST">
				</div>

			<input name="data[Vote][memberevent_id]" id="VoteMembereventId" value=<?php echo "".$memberevent['id']?> style="display:none;">
			<input name="data[Vote][user_id]" id="VoteUserId" style="display:none;" value=<?php echo "". $current_user['id']." "; ?>  />
			<div class="btn-group col-md-12">

			<button type="submit" class="btn btn-danger  ">Vote <span class="glyphicon glyphicon-heart"></span></button>

			<a href= <?php echo "/ipv/memberevents/view/".$memberevent['id']; ?> class="btn btn-success">Lihat</a>
			</div>

			</form>

			<?php  
			$cuk=$memberevent['id'];
			$connection = mysql_connect("localhost","root");
      		$db = mysql_select_db( "voting");

      		$msql="SELECT COUNT(memberevent_id) AS n FROM `votes` WHERE `memberevent_id`='$cuk'";
			$has=mysql_query($msql);
			$values = mysql_fetch_array($has); 
			$has = $values[0]; 
		
			?>
			<div class="col-md-12 bg-danger b-radius">

			<h5 class="text-center">hasil voting= <?php echo $has;  ?> </h5>
			<h5 class="text-center">  </h5>
</div>		</div>
</div>

<?php
$cont_member++;

?>
	<?php endforeach; ?>

</div>
</div>