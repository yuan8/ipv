<?php $count=8 ?>

<div class="col-md-12 box-border">

	<form class="col-md-12">
		
		<div class="input-group">

	      <input type="text" class="form-control" placeholder="Search for...">
	   <span class="input-group-btn">
        	<button class="btn btn-success" type="button">Cari-In ! </button>
      </span>
    </div>


	</form>	
</div>


<?php foreach ($events as $event): ?>

<?php if($count<=0){
	break;
}
 
 $count--;
?>

<div class="box-border col-md-6 col-xs-12 x1"> 
<div class="bg-dark row" style="height:15px; margin-top:-20px; margin-bottom:20px;"></div>
								<?php

								if( h($event['Event']['url_pic'])==null){
									$img='pic_kosong.png';
									}
									else{
										$img=h($event['Event']['url_pic']);
									}
								?>

	<div class="col-md-12">
	

	<div class="col-md-12">
	<?php echo $this->Html->image($img, array('class' => 'b-radius img-responsive')) ?>
	</div>
	<!-- div atas -->



	<div class="col-md-12">
		<hr>
		<h4 class="text-center text-uppercase"><?php echo h($event['Event']['title'])?></h4>
		<hr>
		<p class="text-justify" > &nbsp;&nbsp;<?php echo substr(h($event['Event']['description']),0,1000);?>
		 ....
		</p>

	</div>
	<!-- div tengah -->




	<div class="col-md-12 col-xs-12 b-radius bg-dark" style="padding :7px; margin-top:10px;">
	
	<p class="col-md-10 col-xs-8" >
	Berahir Pada : <?php echo h($event['Event']['end'])?>
	</P>

	<a href=<?php echo "/ipv/events/lihat/".h($event['Event']['id']); ?>   class="col-md-2 col-xs-4 btn btn-success">Lihat</a>
	</div>
	<!-- div bawah -->

	</div>


	
</div>



<?php endforeach; ?>

