<?php 

foreach($events as $event):
?>
<?php echo h($event['Event']['title']); ?>


anan
<br>
	
	<?php foreach( $event['Memberevent'] as $memberevent): ?>
		<?php echo $memberevent['title']; ?>
		<br>

			<?php foreach( $memberevent['Vote'] as $vote): ?>
			<?php echo 'id voting '. $vote['id']; ?>
			<br>
			<?php echo 'user'. $vote['User']['name']; ?>

			
			<br>
			
		
			

		
				
			<br>




			<?php endforeach; ?>
			<br>

		<?php endforeach; ?>

<br>
<hr style="height:20px; background-color:red;">
<?php endforeach; ?>