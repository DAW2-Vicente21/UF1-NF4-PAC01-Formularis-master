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

  $result = $_POST['op1'] + $_POST['op2'] + $_POST['op3'];

	echo "<table>";
	echo "<tr><td>";
  echo "<h1> Result </h1>";
	echo "<p> ".$_POST['op1']." + ".$_POST['op2']." + ".$_POST['op3']." = ".$result."</p>";
  echo "</td></tr>";
  echo "</table>";

?>
 </body>
</html>
