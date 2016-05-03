<?php

session_start();

?>

<!doctype html>
<html>
 	<head>
        <title>Checkerboard Assignment</title>
        <link rel="stylesheet" type="text/css" href="checkerboard.css">
 	</head>
 	<style>
		div {
		margin: 0;
		padding: 0;
		}
		.checkerboard{
			width: 400px;
			height: 400px;
		}
		.checkerboard div{
			display: inline-block;
			width: 50px;
			height: 50px;
		}
		.red{
			background: red;
		}
		.black{
			background: black;
		}
	</style>
 	<body>
<div class='checkerboard'>
<?php
	function create_checkerboard()
	{
	    for ($i = 0; $i < 4; $i++) 
	    {
	    	$black = "<div class='black'></div>";
	        $red = "<div class='red'></div>";
	        
	        $black_first_row = $red . $black . $red . $black . $red . $black . $red . $black;
	        $red_first_row = $black . $red . $black . $red . $black . $red . $black . $red;
	        echo $black_first_row . $red_first_row;
	    }
	}
	create_checkerboard(); 
?>
</div>
</body>
</html> 
