<body>
<div class="result">
<?php

session_start();
include('header.inc.php');
include("function.php");

//Check to the inserted keyword
if(
!isset($_POST["keyword"]) || $_POST["keyword"]==""
){
exit('ParamError');
}

//Receive inserted keyword
$keyword = $_POST["keyword"];
function h ($value) {
return htmlspecialchars($value, ENT_QUOTES);
}

//Start to scrape from the URL
ini_set("allow_url_fopen", 1);
include "simple_html_dom.php";
$html = file_get_html ( 'https://oceans-nadia.com/recipe/tag/'.$keyword );

//Show the searched result
foreach($html->find('.c-tag-recipe-list__photo img') as $element) {
$url = $element->src;
$text = $element->alt;
echo 
'<div class="preview">
<p class="preview__text">'.$text.'</p>
<img class="preview__image" src="'.$url.'">
</div>
<div class="recipe"><form action="bookmark.php" method="post">
    <p><input type="hidden" name="text" value="'.$text.'"></p>
    <p><input type="hidden" name="recipe" value="'.$url.'"></p>
    <button type="submit" class="submit">Keep</button>
    </form></div>';
// if( index($url) %2 ==0) {
//     break;
// } else {
//     continue;
// }
}


?>
</div>
</body>
</html>