<html>
    <head>
		<title> hw3-3 </title>
    </head>
    <body>
	
<ol>
	
	 <li>
<?php
	echo var_dump(3/1); // int(3)
?>
</li>
<li>
<?php
	echo var_dump(1/3); // float(0.33333333333333)
?>
</li>
<li>
<?php
// потому что операция решает к какому типу приводить
	echo var_dump('20cats' + 40); // int(60)
?>
</li>
<li>
<?php
	echo var_dump(18%4); // int(2)
?>
</li>

</ol>

	</body>
</html>