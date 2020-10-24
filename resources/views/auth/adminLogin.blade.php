<!DOCTYPE html>
<html>
    <head>
        <title>Login form</title>
        <meta charset="UTF-8">
        <meta name="description" content="Survey">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
