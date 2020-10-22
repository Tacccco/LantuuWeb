<!DOCTYPE html>
<html>
    <head>
        <title>Login form</title>
        <meta charset="UTF-8">
        <meta name="description" content="Survey">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
            body { 
                padding: 0;
                margin: 0;
                height: 100vh;
                overflow: hidden;
                font-family: 'Montserrat', sans-serif;
                background: url("https://i.pinimg.com/originals/b5/96/a4/b596a465fb8c1c01f97b075c877899f5.png") no-repeat;
            }
            .center {
                position: relative;
                top: 150px;
            }
            #main {
                width: 50%;
                display: block;
                margin: 0px auto;
            }
            #main h1, p {
                font-size: 30px;
                text-align: center;
                color: white;
            }
            #main h1 {
                margin-bottom: 0px;
                padding-bottom: 0px;
            }
            #main p {
                letter-spacing: 3px;
                font-size: 20px;
                margin: 0px;
                padding: 0px;
                margin-bottom: 25px;
            }
            form {
                display: block;
                margin: auto;
                background-color: rgb(7,29,64,0.7);
                width: 70%;
                height: 400px;
                color: white;
                border-radius: 15px;
                padding-top: 20px;
            }
            .input {
                position: relative;
                top: 10px;
                left: 40px;
                right: 70px;
                padding: 15px 10px;
                width: 50%
            }
            .input label {
                font-size: 20px;
                padding-bottom: 0px;
                display: block;
            }
            .input input {
                padding: 10px 12px;
                width: 530px;
                font-size: 18px;
                font-family: 'Montserrat', sans-serif;
                border-radius: 2px;
                border: none;
                outline: none;
                margin-top: 5px;
            }
            .input_select_menu {
                position: relative;
                top: 10px;
                left: 40px;
                padding: 15px 10px;
            }
            .input_select_menu label {
                display: block;
                font-size: 20px;
                margin-bottom: 5px;
            }
            .input_select_menu #dropdown {
                font-size: 18px;
                font-family: 'Montserrat', sans-serif;
                border: none;
                outline: none;
                border-radius: 2px;
                width: 555px;
                padding: 10px 10px;
            }
            .input_radio_menu {
                position: relative;
                top: 10px;
                left: 40px;
                padding: 15px 10px;
            }
            .input_radio_menu #sp_lab {
                font-size: 20px;
                display: block;
                padding-bottom: 10px;
            }
            .input_radio_menu div label {
                font-size: 17px;
                display: block;
                padding: 3px 15px;
            }
            input[type=submit] {
                width: 300px;
                height: 40px;
                font-family: 'Montserrat', sans-serif;
                font-size: 20px;
                font-weight: bold;
                display: block;
                margin: 50px auto;
                border: none;
                outline: none;
            }
            #survey_first {
                background-color: white;
                position: relative;0px;
            }
        </style>
    </head>
    <body>
        <div class="center">
            <div id="main">
                <form id="survey-form" method="POST" action="{{ route('admin.login.submit') }}">
                    @csrf
        
                    <h1 id="title">Administration login form</h1>

                    <div class="input">
                        <label id="name-label">Login</label>
                        <input id="name" type="text" name="login" placeholder="Enter your entry code" required/>
                    </div>
        
                    <div class="input">
                        <label id="email-label">Password</label>
                        <input id="email" type="password" name="password" placeholder="Enter your password" required/>
                    </div>
        
                    <input id="submit" type="submit" value="{{ __('Login') }}">
                </form>
            </div>
        </div>    
    </body>
</html>
