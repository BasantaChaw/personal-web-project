<?php require("navbar.php"); ?>

<div id="banner-registration">
    <div id="imageframe">
        <img src="pics/girlimage.jpg" />
    </div>
    <div id="registrationform">
        <form action="php/registration.php" method="post">
            <input type="text" placeholder="first name" name="first" /><br>
            <input type="text" placeholder="last name" name="last" /><br>
            <input type="text" placeholder="user name" name="user" /><br>
            <input type="email" placeholder="Gmail" name="gmail" /><br>
            <input type="password" placeholder="Password" name="password" />
            <input id="sub" type="submit" value="Submit" name="insert" />
        </form>
    </div>
    <?php require("footer.php") ?>
</div>

</div>
</body>

</html>