<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 CRUD Application</title>
    @vite('resources/css/app.css')
    </header>

<body>
    <h1 class="text-3xl font-bold underline">
        Hello world!
      </h1>
  
    <button class="logout">Logout</button>
    <button class="refresh">Refresh</button>
    <span class="notification"></span>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var token = localStorage.getItem('user_token');
        var exception = ['/login', '/register', '/forget-password'];
        if (exception.includes(window.location.pathname)) {
            if (token != null) {
                window.open('/profile', '_self');
            }
            $("button.logout").hide();
            $("button.refresh").hide();
        } else {
            if (token == null) {
                window.open('/login', '_self');
            }
        }

        $(document).ready(function() {
            $("button.logout").click(function() {

                // send a request using jQuery to the server, passing the authorization bearer token
                var token = localStorage.getItem('user_token');
                var actionUrl = 'http://127.0.0.1:8000/api/logout';
                $.ajax({
                    url: actionUrl,
                    type: 'GET',
                    headers: {
                        'Authorization': token
                    },
                    success: function(response) {
                        localStorage.removeItem('user_token');
                        window.open('/login', '_self');
                    },
                    error: function(xhr, status, error) {
                        
                        localStorage.removeItem('user_token');
                        window.open('/login', '_self');
                    }
                });
            });
            $("button.refresh").click(function() {
                // send a request using jQuery to the server, passing the authorization bearer token
                var token = localStorage.getItem('user_token');
                
                var actionUrl = 'http://127.0.0.1:8000/api/refresh-token';
                $.ajax({
                    url: actionUrl,
                    type: 'GET',
                    headers: {
                        'Authorization': token
                    },
                    success: function(response) {
                        localStorage.setItem('user_token', response.authorisation.type + " " +
                        response.authorisation.token);
                        //set the span notifcation say token refresh 5 second later remove
                        $('span.notification').text('Token Refreshed');
                        setTimeout(function() {
                            $('span.notification').text('');
                        }, 5000);
                    },
                    error: function(xhr, status, error) {
                        
                        localStorage.removeItem('user_token');
                    }
                });
            });
        });
    </script>
    
</body>
