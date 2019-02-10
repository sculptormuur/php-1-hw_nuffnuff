<html>
    <head>
		<title> hw05 </title>
    </head>
    <body>


<ol>
	<li>
		<?php // #1
			echo var_dump(1 == 1.0); // bool(true)
		?>
	</li>

	<li>
		<?php // #2
			echo var_dump(1 === 1.0); // bool(false)
		?>
	</li>
	
	<li>
		<?php // #3
			echo var_dump('02' == 2); // bool(true)
		?>
	</li>

	<li>
		<?php // #4
			echo var_dump('02' === 2); // bool(false)
		?>
	</li>

	<li>
		<?php // #5
			echo var_dump('02' == '2'); // bool(true), привёл строки к целым числам
		?>
	</li>
</ol>	
	
	</body>
</html>