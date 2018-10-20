<?php



//include the file with the quotes array
include('inc/quotes.php');
//include the file with the functions
include('inc/functions.php');


echo '<!DOCTYPE html>
<html lang="en">
<head>
<script lang="JavaScript">
function randomizer() {
  window.location.reload(true);
}
  </script>


  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">

</head>';
echo '
<body onLoad=window.setTimeout("randomizer()",5000)>
  <div class="container">
    <div id="quote-box">';
printQuote();

    echo '</div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>';












?>
