<?php $count=8 ?>



<?php foreach ($events as $event): ?>

<?php if($count<=0){
	break;
}
 
 $count--;
?>
<div class="box-border col-md-12 col-xs-12 x1"> 

<?php

if( h($event['Event']['url_pic'])==null){
	$img='pic_kosong.png';
	}
	else{
		$img=h($event['Event']['url_pic']);
	}
?>

<div class="col-md-12">

<div class="col-md-6">
<?php echo $this->Html->image($img, array('class' => 'b-radius img-responsive')) ?>
</div>

<div class="col-md-6">

<h4 ><?php echo h($event['Event']['title'])?></h4>

<p class="text-justify" > &nbsp;&nbsp;<?php echo substr(h($event['Event']['description']),0,1000);?>
 ....
</p>

</div>

	<div class="col-md-12 col-xs-12 b-radius bg-dark" style="padding :7px; margin-top:10px;">
	
	<p class="col-md-11 col-xs-8" >
	Berahir Pada : <?php echo h($event['Event']['end'])?>
	</P>

	<a href=<?php echo "/ipv/events/lihat/".h($event['Event']['id']); ?>   class="col-md-1 col-xs-4 btn btn-success">Lihat</a>
	
	</div>

	</div>
</div>

<?php endforeach; ?>

