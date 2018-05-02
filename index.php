<!-- Satpn6
     Final Project
     11/8/17
-->

<!DOCTYPE html>

<html>
<head>
    <title>satpn6 Final Project</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script>
        
    </script>
    <style>
        @font-face {
            font-family: "Rockwell Extra Bold";
            src:url("Rockwell Extra Bold.ttf");
        }
        @font-face{
            font-family: 'Roboto', sans-serif; 
        }
        body{
            background: black;
            color: white;
        }
        #fhlogo{
            display: block;
            width: 20%;
            margin: auto;
        }
        #username{
            width: 11.3%;
            margin: auto;
        }
        #password{
            width: 11.3%;
            margin: auto;
        }
        #submit{
            width: 4%;
            margin: auto;
        }
        #fan{
            display: block;
            width: 20%;
            margin: auto;
            color: RGB(255, 126, 46);
            font-family: 'Rockwell Extra Bold';
            font-size: 42.5px;
            text-align: center;
        }
        .videos{
            width: 70%;
            margin: auto;
            font-family: 'Rockwell Extra Bold';
            font-size: 25px;
            color: #ff7e2e;
            text-decoration: underline;
        }
        a{
            color: white;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
            font-size: 15px;
        }
        img{
            vertical-align: text-top;
        }
        h2{
            color: #ff7e2e;
            text-align: center;
            font-family: 'Rockwell Extra Bold';
        }
        p{
            color: #ff7e2e;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
        }
        .error{
            text-align: center;
        }
    </style>
</head>
<body>
    <a href="http://funhaus.roosterteeth.com/"><img src="images/Funhaus_logo.png" alt="funhaus" id="fhlogo"></a>
    <h1 id="fan">FAN CLUB</h1>
    
        <?php
            if ($error) {
                print "<div class=\"error\">$error</div>\n";
            }
        ?>
    
    <form action="logon.php" method="POST">
        <input type="hidden" name="action" value="do_login">
        
        <div id="username">
            <label for="user"></label>
            <input id="user" type="text" name="user" placeholder="Username" maxlength="15">
        </div>
        <div id="password">
            <label for="pass"></label>
            <input id="pass" type="password" name="pass" placeholder="Password">
        </div>
        <div id="submit">
            <input type="submit" value="login">
        </div>
        
        <div>
            <h2>Never Heard of Funhaus You Say?</h2>
            <p>Have no fear, here are some videos!<br><br></p>
            <hr><br><br>
        </div>
        
        <div class="videos" >Latest Demo Disk <br><a href="demo%20disk.html"> <img src="images/latest demo.jpg"> SK8R BOI - Demo Disk Gameplay</a></div>
        <div class="videos">Latest Open Haus <br><a href="open%20haus.html"><img src="images/open%20haus.jpg"> WE'RE SO HUNGOVER? - Open Haus #142</a></div>
        <div class="videos">Latest Dude Soup Podcast <br><a href="dude%20soup.html"><img src="images/latest%20dude.jpg"> YOUTUBE CONTROLLED BY BOTS? - Dude Soup Podcast #147</a></div>
        <div class="videos">Latest GTA Gameplay <br><a href="GTA.html"><img src="images/latest gta.jpg"> FOOT PLAY FUNNY CARS - GTA 5 Gameplay</a></div>
    </form>
</body>
</html>