@include('layouts.header')
<h1>Forget Password Page</h1>
<form method="POST" name="forgetForm" id="forgetForm">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required autofocus>
        <span id="email_error" class="error"></span>
    </div>
    
    <div>
        <button type="submit">Submit</button>
        <span id="error_message" style="color: red;"></span>
        <a href="/login">Register</a>
    </div>
</form>

<script>
    $(document).ready(function() {
        $('#forgetForm').submit(function(event) {
            event.preventDefault();
            var email = $('#email').val();

            var actionUrl = 'http://127.0.0.1:8000/api/forget-password';
            $.ajax({
                url: actionUrl,
                method: 'POST',
                data: {
                    email: email,
                },
                success: function(response) {
                    if (response.success == false) {
                        $('#error_message').text(response.msg);
                    } else if (response.success == true) {                     
                        $('#error_message').text(response.msg);
                        //after 5 second remove the error mesage
                        setTimeout(function() {
                            $('#error_message').text('');
                        }, 5000);
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
                }
            });
        });
    });
</script>
