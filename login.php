<?php require("navbar.php");?>
<div id="content">
    <h1>
        I'am <span style="color: rgb(19, 180, 243)">basanta</span> Chaudhary
    </h1>
    <p>
        I think I am a nice person though have negligible weaknesses, have a
        good amount of likeablegood qualities too . I am sincere and
        responsible. I am not avery intelligent student but sure I am dynamic
        as I am capable ofmanagingandhandling serious and difficult situations
        easily and finish all tasks well . I like to stay simple and
        uncomplicated and live joyously enjoying every moment of my life.
    </p>
    <button>see more..</button>
</div>
<div id="loginbox">
    <form action="php/login.php"method="post">
        <div id="im">
            <img src="pics/admin.png" />
        </div>
        <div id="ad">
            <h2>User's</h2>
        </div>
        <input type="text" placeholder="User" name="user" /><br />
        <input type="password" placeholder="Password" name="pass"/><br />
        <input id="hover" style="
              margin-top: 10%;
              border-radius: 4px;
              padding: 4%;
              width: 132px;
              margin-left: 15%;
            " type="submit" value="Sign Up" name="login" />
    </form>
</div>
<?php require("footer.php");?>
</div>
</body>
</html>