<?php
    session_start();
    include("header.inc.php");
    include("function.php");

?>
<body>
<div class="serach">
    <form method="post" action="result.php">
    <fieldset>
        <legend>Serach</legend>
        <input type="text" name="keyword" placeholder="Please fill in the keyword">
        <input type="submit" value="検索">
        </fieldset>
    </form><br>
</div>
<div class="bookmark">
    <a href="bookmark.php"><i class="fas fa-star"></i> bookmark</a>
</div>

<div class="logout">
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>
</body>
</html>