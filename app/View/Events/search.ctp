<?php $count=8 ?>

<div class="col-md-12 box-border">

  <?php
                        echo $this->Form->create('Event', array(
                          'url' => array('action' => 'search'),
                          'class' => 'input-group '
                        ));

                        echo $this->Form->input("keyword", array(
                          'div' => false,
                          "class" => "form-control",
                          'size' => 18,
                          "type" => "text",
                          "label" => false,
                          "placeholder" => "Cari Artikel...",
                          "value" => (!empty($this->params['url']['keyword']) ? $this->params['url']['keyword'] : '')
                        ));
                      ?>
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                      </span>
                      <?php echo $this->Form->end();?>
</div>


<?php foreach ($result as $event): ?>

<?php if($count<=0){
  break;
}
 
 $count--;
?>

<div class="box-border col-md-6 col-xs-12 x1"> 
<div class="bg-dark row" style="height:15px; margin-top:-20px; margin-bottom:20px;"></div>
                <?php

                if( $event['Event']['url_pic']==null){
                  $img='pic_kosong.png';
                  }
                  else{
                    $img=$event['Event']['url_pic'];
                  }
                ?>

  <div class="col-md-12">
  

  <div class="col-md-12">
  <?php echo $this->Html->image($img, array('class' => 'b-radius img-responsive')) ?>
  </div>
  <!-- div atas -->



  <div class="col-md-12">
    <hr>
    <h4 class="text-center text-uppercase"><?php echo $event['Event']['title']; ?></h4>
    <hr>
    <i class="text-justify" > &nbsp;&nbsp;<?php echo substr($event['Event']['description'],0,1000);?>
     ....
    </i>

  </div>
  <!-- div tengah -->




  <div class="col-md-12 col-xs-12 b-radius bg-dark" style="padding :7px; margin-top:10px;">
  
  <i class="col-md-10 col-xs-8" >
  Berahir Pada : <?php echo h($event['Event']['end'])?>
  </i>

  <a href=<?php echo "/ipv/events/lihat/".h($event['Event']['id']); ?>   class="col-md-2 col-xs-4 btn btn-success">Lihat</a>
  </div>
  <!-- div bawah -->

  </div>


  
</div>



<?php endforeach; ?>

