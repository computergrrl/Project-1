

//javascript function that for some damn reason won't work!!
function randomizer() {


//call a random number between 0 -4 and then round it so that it's an
//integer, then I assigned it to the variable 'index'
    var index = Math.round(Math.random() * 5);

//create a variable 'ColorValue' to associate with the variable 'index'

    var ColorValue ;

//assign different color names to the possible
//values of the 'ColorValue' variable (I chose darker colors so that
//the white font on index.php page could be ready easily)
    if(index == 0)
       ColorValue = "green";
    if(index == 1)
        ColorValue = "blue";
    if(index == 2)
        ColorValue = "black";
    if(index == 3)
        ColorValue = "purple";
    if(index == 4)
        ColorValue = "teal";
    if(index ==5)
        ColorValue = "maroon";

//assign chosen color to the bgColor of body
   document.getElementsByTagName("body")[0].style.backgroundColor = ColorValue;

//set interval to call randomizer2 function after 3 seconds
window.setInterval("randomizer2()",10000);

}

//function to refresh the page and in doing so also reset the quote and bgColor
function randomizer2() {
window.location.reload(true);

}
