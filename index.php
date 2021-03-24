<?php include('header.inc.php'); ?>
<body>
<div class="login">
    <form method="post" action="login_act.php">
    <fieldset>
        <legend>recipe <i class="fas fa-utensils fa-lg fa-spin" style="color: #339af0;"></i> </legend>
        <label>email: <input type="text" name="email"></label><br>
        <label>password: <input type="password" name="password"></label><br>
        <input type="submit" value="ログイン">
        </fieldset>
    </div>
    </form><br>
    <div class="signup">
    <a href="signup.php"><i class="fas fa-edit"></i> Signup now!</a>
    </div>
</body>
</html>