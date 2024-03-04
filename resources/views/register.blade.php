@include('layouts.header')
<h1>Welcome register</h1>
<form method="POST" name="register_form" id="register_form">
    @csrf

    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
        <span id="name_error" class="error"></span>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        <span id="email_error" class="error"></span>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        <span id="password_error" class="error"></span>
    </div>

    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
        <span id="password_confirmation_error" class="error"></span>
    </div>

    <div>
        <button type="submit">Register</button>
        <span id="success_message" style="color: green;"></span>
    </div>
</form>

<script>
    document.getElementById('register_form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        var form = event.target;
        var formData = new FormData(form);

        // Customize the action URL here
        var actionUrl = 'http://127.0.0.1:8000/api/register';

        // Make an AJAX request to submit the form data
        $.ajax({
            url: actionUrl,
            type: 'POST',
            data: new FormData($('#register_form')[0]),
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    // Display success message
                    $('#success_message').text('User created successfully');

                    // Reset the form and clear the success message after 5 seconds
                    setTimeout(function() {
                        $('#register_form')[0].reset();
                        $('#success_message').text('');
                        $('#name_error').text('');
                        $('#email_error').text('');
                        $('#password_error').text('');
                        $('#password_confirmation_error').text('');

                    }, 5000);
                }
            },
            error: function(jqXHR) {
                var response = JSON.parse(jqXHR.responseText);
                console.log(jqXHR.responseText);
                if (response.error.name) {
                    $('#name_error').text(response.error.name[0]);
                }
                if (response.error.email) {
                    $('#email_error').text(response.error.email[0]);
                }
                if (response.error.password) {
                    $('#password_error').text(response.error.password[0]);
                }
                if (response.error.password_confirmation) {
                    $('#password_confirmation_error').text(response.error.password_confirmation[0]);
                }
            }
        });
    });
</script>
