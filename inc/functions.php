<?php
function getRandomQuote() {
//make the $quotes array global to be able to call it from within
//the getRandomQuote function
global $quotes;

//store a random number into $pickQuote variable
  $pickQuote = rand(0,6);
//use $pickQuote to choose an element from the $quotes array and
//assign it to the variable randQuote
  $randQuote = $quotes[$pickQuote];
//return the selected array element
  return $randQuote;

}



function printQuote() {
//call the getRandomQuote() function and assign the returned array element
//to a variable called $getQuote
 $getQuote = getRandomQuote();

 //display the quote variable
echo '<p class="quote"> '.$getQuote['quote'].' </p>';
echo '<p class="source"> '.$getQuote['source'];
//determine if the selected quote has values stored for
//'citation' and 'year'
if($getQuote['citation'] && $getQuote['year']) {
// if values for 'citation' and 'year'
//are found then display the values

   echo '<span class="citation"> '.$getQuote['citation'].'</span>';
   echo '<span class="year">'.$getQuote['year'].'</span></p>';
 }
 //if values for 'citation' and 'year' are NOT found then
 //close p tag and end display
 else {
   echo '</p>';
 }
//display additional 'quotes by' info
echo '<br><span class="quotesby">quotes from '.$getQuote['quotesfrom'].'</span>';
}

?>
