<?php foreach ($event['Memberevent'] as $memberevent): ?>
		ini id <?php echo $memberevent['id']; ?>
			<?php echo $memberevent['title']; ?><br>
			<?php echo $memberevent['url_pic']; ?><br>
			<?php echo $memberevent['description']; ?><br>
			<?php  /*  ini untuk admin echo $memberevent['user_id']; */ ?><br>

<?php endforeach; ?>
