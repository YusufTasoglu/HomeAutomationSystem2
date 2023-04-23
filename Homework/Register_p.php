<html lang="en">

<head>
    <title>Register for Producer</title>

    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #080710;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
        }

        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }

        .form-signin .checkbox {
            font-weight: normal;
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

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color: #017572;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color: #017572;
        }

        h1 {
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
            height: 400px;
            width: 400px;
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

    <h1>Register for Producer</h1>
    <div class="container form-signin">


    </div>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="container">

        <form class="form-signin" role="form">
            <h4 class="form-signin-heading"></h4>
            <input type="text" class="form-control" name="username" placeholder="Name" required autofocus></br>
            <input type="text" class="form-control" name="username" placeholder="Surname" required autofocus></br>
            <input type="text" class="form-control" name="username" placeholder="E-mail" required autofocus></br>
            <input type="password" class="form-control" name="password" placeholder="Password" required><br>
            <button id="login" class="btn btn-lg btn-primary btn-block" type="submit" name="login" style="margin-top: 5%;">Register</button>

        </form>

    </div>

</body>

</html>