	<style type="text/css">
		<?php 
			$color = isset($_COOKIE["color"])?$_COOKIE["color"]:"white";
		?>
		body{
			background-color: <?= $color ?>;
		}
	</style>