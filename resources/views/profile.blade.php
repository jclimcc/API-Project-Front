@include('layouts.header')
<h1>Welcome to your profile</h1>

<h2> Hi , <span class="username"></span></h2>
<div class="email_verify">
    <p><b>Email: <span class="email"></span> &nbsp; <span class="verify"></span>
        <span id="verify_error" class="error"></span></b></p>
</div>

<form method="POST" name="editForm" id="editForm">
    @csrf
    
    <input type="hidden" id="userid" name="id" required>

    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required autofocus>
        <span id="name_error" class="error"></span>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span id="email_error" class="error"></span>
    </div>
  
    <div>
        <button type="submit">update Profile</button>
        <span id="error_message" style="color: red;"></span>
    </div>
</form>

<script>
    $(document).ready(function() {
            var actionUrl = 'http://127.0.0.1:8000/api/profile';
            var token = localStorage.getItem('user_token');
           
            $.ajax({
                url: actionUrl,
                method: 'GET',
                headers: {
                    'Authorization': token,
                },
                success: function(response) {
                    
                    
                    if (response.success == false) {
                        $('#error_message').text(response.msg);
                    } else if (response.success == true) {
                        console.log(response);
                        $('.username').text(response.data.name);
                        $('span.email').text(response.data.email);
                        $('input[name=name]').val(response.data.name);
                        $('input[name=email]').val(response.data.email);
                        $('input[name=id]').val(response.data.id);
                      
                    } else {

                        console.log(response);

                    }

                    if(response.data.is_verified == null || response.data.is_verified == 0){
                        $('span.verify').html('<button class="verify-btn" data-email="'+response.data.email+'">Verify Email</button>');  
                    }
                    else{
                        $('span.verify').text('Verified');
                    }
                },
                error: function(jqXHR, status, error) {
                    var response = JSON.parse(jqXHR.responseText);
                    console.log(jqXHR.responseText);

                }
            });
            $('#editForm').on('submit', function (event) {
            event.preventDefault();
            // Get the form
            
            var formData = $(this).serialize();
            var token = localStorage.getItem('user_token');
            var actionUrl = 'http://127.0.0.1:8000/api/profile-update';
            $.ajax({
                url: actionUrl,
                method: 'POST', 
                headers: {
                    'Authorization': token,
                },
                data:formData,
                success: function(response) {
                    if (response.success == false) {
                        $('#error_message').text(response.msg);
                    } else if (response.success == true) {
                        $('#error_message').text('Profile updated successfully');
                    } else {

                        console.log(response);

                    }
                    $('.username').text(response.data.name);
                    $('span.email').text(response.data.email);

                    if(response.data.is_verified == null || response.data.is_verified == 0){
                     
                        $('span.verify').html('<button class="verify-btn" data-email="'+response.data.email+'">Verify Email</button>');  
                    }

                },
                error: function(jqXHR, status, error) {
                    
                    var response = JSON.parse(jqXHR.responseText);
                    if (response.error.name) {
                        $('#name_error').text(response.error.name[0]);
                    }
                    if (response.error.email) {
                        $('#email_error').text(response.error.email[0]);
                    }
                    

                }
            });
        });

       $(document).on('click','.verify-btn',function (event) {
            event.preventDefault();
            // Get the form
            
            var formData = $(this).serialize();
            var token = localStorage.getItem('user_token');
            
            var dataEmail = $('.verify-btn').data('email');
            var actionUrl = 'http://127.0.0.1:8000/api/send-verify-email/'+dataEmail;
            $.ajax({
                url: actionUrl,
                method: 'POST', 
                headers: {
                    'Authorization': token,
                },
                data:formData,
                success: function(response) {
                    if (response.success == false) {
                        $('#verify_error').text(response.msg);
                    } else if (response.success == true) {
                        $('#verify_error').text(response.msg);

                    } else {
                        console.log(response);

                    }
                },
                error: function(jqXHR, status, error) {
                    
                 console.log(jqXHR.responseText);
                    

                }
            });
        });
    });
</script>
