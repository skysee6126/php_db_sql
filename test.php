<?php

include('simple_html_dom.php');
// Create DOM from URL
// $data = file_get_html('https://oceans-nadia.com/recipe/tag?page=1');

// Find all article blocks
$pdo = new PDO("mysql:host=127.0.0.1;dbname=recipe;charset=utf8", "root", "");

$sql = "SELECT * FROM recipe ORDER BY id;";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();

while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
    for($page =1; $page< 2; $page++) {
        $data = file_get_html ( 'https://oceans-nadia.com/recipe/tag'.'?page='.$page );

        $recipes = $data->find(".recipe-titlelink, .c-tag-recipe-list__photo");
    
        foreach($recipes as $recipe){
            $recipe-> href = null ;
            $debugquery = mysql_query("INSERT INTO text VALUES ('$recipe')");
        }
}
}
?>
