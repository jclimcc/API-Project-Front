@include('layouts.header')
<h1>Login Page</h1>

<form method="POST" name="loginForm" id="loginForm">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required autofocus>
        <span id="email_error" class="error"></span>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <span id="password_error" class="error"></span>
    </div>
    <div>
        <button type="submit">Login</button>
        <span id="error_message" style="color: red;"></span>
        <a href="/register">Register</a>
        <a href="{{ route('forget-password') }} ">Forgot Password</a>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('#loginForm').submit(function(event) {
            event.preventDefault();

            var email = $('#email').val();
            var password = $('#password').val();

            var actionUrl = 'http://127.0.0.1:8000/api/login';
            $.ajax({
                url: actionUrl,
                method: 'POST',
                data: {
                    email: email,
                    password: password
                },
                success: function(response) {
                    if (response.success == false) {
                        $('#error_message').text(response.msg);
                    } else if (response.success == true) {
                        localStorage.setItem('user_token', response.authorisation.type + " " +
                        response.authorisation.token);
                        window.open('/profile', '_self');
                    } else {

                        console.log(response);

                    }
                },
                error: function(jqXHR, status, error) {
                    var response = JSON.parse(jqXHR.responseText);
                    console.log(jqXHR.responseText);

                    if (response.error.email) {
                        $('#email_error').text(response.error.email[0]);
                    }
                    if (response.error.password) {
                        $('#password_error').text(response.error.password[0]);
                    }

                }
            });
        });
    });
</script>
