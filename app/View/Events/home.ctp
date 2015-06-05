
<div class="col-md-12">
<?php foreach ($events as $event): ?>

<div class="col-md-10 col-md-offset-1 x1" >
	<div class="col-md-12 box-border" style="height:450px;">
		<h4 class="text-center">

		<?php echo h($event['Event']['title']); ?>

		</h4>
		<br>
		<div style="">
		<div style=" background-color:#222; width:220px; position:absolute; height:51%; opacity:0.8;"></div>
		<div style="position:absolute; width:200px; margin:10px;" >
		<p class="text-justify" style="color:#fff;"><?php echo  h($event['Event']['description']); ?>
		</p></div>
		
		</div>
		<img  class="" style="height:226px; background-color:#E6E6E6; width:100%; border-radius:4px;" src=<?php 
		if(h($event['Event']['url_pic'])!=NULL){

		echo "/voting/img/".h($event['Event']['url_pic']);
		}
		else{
			echo "/voting/img/pic_kosong.png";
		}

		 ?>>
		<br> 
		
		<p class="bg-warning">
		End is <?php echo h($event['Event']['end']); ?>
		</p>
		
		<a class="btn btn-primary col-md-1" href=<?php echo "/voting/events/lihat/". h($event['Event']['id']); ?> >view</a>
	</div>
</div>
<?php endforeach; ?>
</div>
