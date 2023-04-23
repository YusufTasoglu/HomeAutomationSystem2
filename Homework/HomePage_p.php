<div>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="HomePage_c.php">Smart Home</a>
            </div>
            <ul>
                <li><a href="Communication.php">Communication</a></li>
            </ul>

        </div>.
        <h1 class="headerh1">What do you want to check?</h1>
        <div class="selections">
            <a href="temperature_p.html" class="select">
                <h1 class="selecth1">Temperature</h1>
            </a>
            <a href="WIFI_p.html" class="select">
                <h1 class="selecth1">WIFI</h1>
            </a>
            <a href="Lights_p.html" class="select">
                <h1 class="selecth1">Lights</h1>
            </a>
            <a href="GarageDoor_p.html" class="select">
                <h1 class="selecth1">Garage Door</h1>
            </a>
            <a href="camera_p.html" class="select">
                <h1 class="selecth1">Cameras</h1>
            </a>
            <a href="Water-temperature_p.html" class="select">
                <h1 class="selecth1">Water Temperature</h1>
            </a>
        </div>







    </div>
    <style>
        h1 {
            text-align: center;
        }

        .select:link,
        .select:visited {
            background-color: #080710;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            padding-top: 35px;
            padding-bottom: 35px;
            width: 30%;
            height: 25%;
            margin-top: 3%;

        }

        .navbar .logo {
            float: left;
            margin-left: 40px;
            margin-top: 20px;
        }

        .navbar {

            width: 100%;
            height: 80px;
            background-color: 080710;

        }

        .navbar a {
            float: right;
            color: white;
            margin: 15px;

        }

        .navbar .logo {
            text-decoration: none;
            font-size: 30px;
            margin-bottom: 30px;
        }

        .navbar ul li {
            list-style: none;
            display: inline;
            font-size: 20px;
            margin: 10px;

        }


        .select:hover,
        .select:active {
            background-color: 05050;
            color: black;            
        }

        .selections {
            display: block;
            text-align: center;
        }
        .selecth1{
            text-align: center;
        }
        
    
    </style>