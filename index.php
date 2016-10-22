<?php

require_once('classes/Rate.php');

	$objRate = new Rate();
	$posts = $objRate->getPosts();

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Thumbs up and down with PHP and jQuery</title>
	<meta name="description" content="Thumbs up and down with PHP and jQuery" />
	<meta name="keywords" content="Thumbs up and down with PHP and jQuery" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="/css/core.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id = "wrapper">
		<p><a  href="#" class="reset" > Reset </a></p>
		<div id = "comments">
			
			<?php  if(!(empty($posts))) { 

				foreach ($posts as $row) { ?>
					
					<div class = "comment">
						<span class = "name">
						
							Posted By : <?php echo stripcslashes($row['full_name']); ?>
							on 
							<time datetime = <?php echo date('Y-m-d', strtotime($row['date'])); ?>
											 <?php echo $row['date_formatted']; ?>
							</time>

						</span>

						<p><?php echo stripcslashes($row['comment']); ?></p>
						<?php echo $objRate-> buttonSet($row['id']); ?>

					</div>

				<?php } ?>


			<?php } else { ?>

				<p>There are currently no commnets !!</p>

			<?php } ?>	
		</div>

	</div>


<!--<script src="/js/jquery-1.7.1.min.js" type="text/javascript"></script>-->
<script src="/js/core.js" type="text/javascript"></script>
</body>
</html>