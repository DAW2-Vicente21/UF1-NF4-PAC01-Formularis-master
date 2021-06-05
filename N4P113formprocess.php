<html>
 <head>
  <title>Form</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
<?php

	echo "<table>";
	echo "<tr><td>";
	echo "<select>
       		<option value='1'> ".$_POST['op1'] ." </option>
	      	<option value='2'> ".$_POST['op2'] ." </option>
	       	<option value='3'> ".$_POST['op3'] ." </option>
      	</select>";
    echo "</td></tr>";
    echo "</table>";

?>
 </body>
</html>
