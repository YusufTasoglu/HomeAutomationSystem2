<html lang="en">

<head>
    <title>Home Automation Systems</title>

    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #080710;
        }

        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }



        h1 {
            margin-top: 5%;
            text-align: center;
            color: #cdd0d6;
        }

        button {
            margin-top: 45px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        form {
            height: 300px;
            width: 300px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(#cdd0d6,
                    #285777);
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(to right,
                    #644640,
                    #d8ab6c);
            right: -30px;
            bottom: -80px;
        }
    </style>

</head>

<body>

    <h1>Home Automation Systems</h1>
    <div class="container form-signin">
    </div>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="container">

        <form class="form-signin" role="a">
            <button style="width: 250px; margin-left: 8%; margin-top:23%" formaction="producer.php">Login for Producer</button>
            <button style="width: 250px; margin-left: 8%; margin-top:15%" formaction="consumer.php">Login for Consumer</button>
        </form>

    </div>

</body>

</html>