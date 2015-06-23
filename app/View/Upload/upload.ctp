<?php 
echo $this->Form->create('Upload',array('type'=>'file'));?>

<?php
echo $this->Form->file('url');
echo $this->Form->end('submit');
?>