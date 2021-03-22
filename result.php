<?php 

$keyword = $_POST["keyword"];
function h ($value) {
    return htmlspecialchars($value, ENT_QUOTES);
}
    ini_set("allow_url_fopen", 1);
    include "simple_html_dom.php";

    for($page =1; $page< 2; $page++) {
        $data = file_get_html ( 'https://oceans-nadia.com/recipe/tag/'.$keyword );

        $recipes = $data->find(".recipe-titlelink, .c-tag-recipe-list__photo");
    
        foreach($recipes as $recipe){
            $recipe-> href = null ;
            echo 
                '<div class="recipe"><form action="bookmark.php" method="post">
                '.$recipe.'<br>
		        <button type="submit" class="submit">Keep</button>
	            </form></div>';
        }        
    }
    
?>