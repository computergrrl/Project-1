<?php

//include the file with the quotes array
include('inc/quotes.php');
//include the file with the functions
include('inc/functions.php');

//use echo commands to display the html
echo '<!DOCTYPE html>
<html lang="en">
<head>
<script src="inc/randomizer.js"></script>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">

</head>';
echo '
<body onLoad="randomizer()">
  <div class="container">
    <div id="quote-box">';
//call the printQuote function
printQuote();

    echo '</div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>';

?>
