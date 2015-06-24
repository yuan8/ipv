<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())

?>

<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

		<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle btn btn-success" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
             <span class="glyphicon glyphicon-menu-hamburger"> </span>
             
            </button>

            <a class="navbar-brand" href="/ipv/events/home">Internal Paramadina Voting <br><i style="font-size:12px;">Appaa...?</i></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse" aria-expanded="true">
          	<!-- class =  -->
            
            <ul class="nav navbar-nav navbar-right">


	           <li> <?php if($logged_in): ?>
 
				  <?php
					echo "<a  href='/ipv/users/logout' ><button class='btn btn-success'>
					".$current_user['username']." | logout </button> </a>"; ?>
				 <?php else: ?>
				<?php  echo "<a  href='/ipv/users/login' ><button class='btn btn-success'>
					 - masuk -</button> </a>";?>
				 <?php endif; ?></li>
				 <li><?php 
				 if($current_user['role']=='admin'){
				 	echo  "<a  href='/ipv/events/index' ><button class='btn btn-danger'>
					 - Admin -</button> </a>";

				 }


				 ?></li>
				 



              
             <!--   <li class=""><a href="./"  > <button class="btn btn-success">Keluar</button> </a></li> -->
             
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

	<div id="container"  class="container" >
		<div>

			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
			<p>
				
			</p>
		</div>
	</div>
	<?php echo  $this->Element('sql_dump'); ?>
</body>
</html>
