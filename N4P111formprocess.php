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

if ($_POST['submit'] == 'See') {

  echo "<h1> Comment: </h1>";
  
  echo "<p> ".$_POST['name']." </p>";

  echo "<h1> Option Selected: </h1>";

  if ($_POST['type'] == 'stars'){

    echo "<p> Stars </p>";

  } else if ($_POST['type'] == 'thumbsUp'){

    echo "<p> Thumbs Up </p>";

  } else if ($_POST['type'] == 'number'){

    echo "<p> Number </p>";

    echo "<h1> Number Selected: </h1>";
    echo "<p> ".$_POST['numberSel']." </p>";

  } else if ($_POST['type'] == 'whatever'){

    echo "<p> Whatever </p>";

  }

}



?>
 </body>
</html>
