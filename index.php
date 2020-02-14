<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>민석민지네 가족 홈페이지</title>
</head>

<body id="target">
	<header>
			<img src="https://s3-ap-northeast-2.amazonaws.com/opentutorials-user-file/course/1/5641.png" alt="민석민지네">
			<h1><a href="index.php">민석민지네</a></h1>
	</header>

	<nav>
		<ol>
			<?php
				echo file_get_contents("list.txt");
			?>
 		</ol>
	</nav>

	<div id="control">
		<input type="button" value="white" id="white_btn"/>
		<input type="button" value="black" id="black_btn"/>
	</div>

	<script src="script.js"></script>

	<article>
		<?php
		 if (empty($_GET['id']) == false) {
				echo file_get_contents($_GET['id'].".txt");
		 }
	  ?>
	</article>


<body>

</html>
