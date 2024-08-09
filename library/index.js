$(document).ready(function(){
    $("#forgot-btn").click(function(){
        $("#login-box").hide();
        $("#forgot-box").show();
    });
    $("#register-btn").click(function(){
        $("#register-box").show();
        $("#login-box").hide();                
    });
    $("#login-btn").click(function(){
        $("#register-box").hide();
        $("#login-box").show();                
    });
    $("#back-btn").click(function(){
        $("#login-box").show();
        $("#forgot-box").hide();
    });
    //to validate the user details.
    $("#login-form").validate();
    // Using the jquery validation plugin
    // $("#register-form").validate({
    //     rules:{
    //         cpass:{
    //             equalTo:"#pass",
    //         }
    //     }
    // });
    
    // without using the validate method
    $('#uname').on('keyup', function() {     
        var uname = $(this).val();     
        $(".error").remove();
        if (uname.length > 0 && uname.length < 5) {
            $(this).after('<span class="error" style="color: red;">Username should be greater than 5 characters</span>');
        }
    });
    
    $("#register").click(function() {
        // Form validation logic
        var first_name = $('#first_name').val();
        var email = $('#email').val();
        var password = $('#pass').val();
        var cpass = $('#cpass').val();
        var isValid = true;
    
        $(".error").remove();
    
        if (first_name.length < 1) {
            $('#first_name').after('<span class="error" style="color: red;">This field is required</span>');
            isValid = false;
        }
    
        if (email.length < 1) {
            $('#email').after('<span class="error" style="color:red;">This field is required</span>');
            isValid = false;
        } else {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                $('#email').after('<span class="error" style="color:red;">Enter a valid email in the format example@gmail.com</span>');
                isValid = false;
            }
        }
    
        if (password.length < 1) {
            $('#pass').after('<span class="error" style="color:red;">This field is required</span>');
            isValid = false;
        } else if (password.length < 6) {
            $('#pass').after('<span class="error" style="color:red;">Password must be at least 6 characters long</span>');
            isValid = false;
        }
    
        if (password !== cpass) {
            $('#cpass').after('<span class="error" style="color:red;">Passwords do not match</span>');
            isValid = false;
        }
    
        if (!isValid) {
            return false; 
        }
    
        // Serialize form data
        var formData = $("#register-form").serialize();
    
        // Make an AJAX call to submit the form data
        $.ajax({
            url: 'action.php',
            method: 'post',
            data: formData + '&action=register',
            success: function(response) {
                var data = JSON.parse(response);
                if (data.success) {
                    alertify.success('Registered successfully. Login Now!');
                    $("#register-form")[0].reset();
                    setTimeout(function() {
                        window.location.href = "login.php";
                    }, 2000);
                } else {
                    alertify.error(data.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("AJAX error:", xhr.responseText);
            }
        });
    

    $("#forgot-form").validate();

    $("#login").click(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'action.php',
                method: 'post',
                data: $("#login-form").serialize() + '&action=check_user', 
                success: function(response) {
                    // Parse the response to check if user exists
                    var data_found = JSON.parse(response); 
                    console.log(data_found);              
                    if (data_found.success) {
                        // If user exists in the database, proceed with login
                        $.ajax({
                            url: 'action.php',
                            method: 'post',
                            data: $("#login-form").serialize() + '&action=login',
                            success: function(login_response) { 
                                // Parse the login response to check if login was successful
                                var data = JSON.parse(login_response);                        
                                if (data.success) {
                                    // If login is successful, navigate to homepage.php
                                    window.location.href = 'HomePage.php';
                                }
                            }
                        });
                    } else {
                        // If user does not exist, show appropriate message to the user
                        $("#alert").show();
                        $("#result").html("User does not exist.");
                    }
                }              
            });
            console.log(data);
        });
        return false;
    });
    

    $("#forgot").click(function(event) {
        console.log('Reset button clicked.');
        event.preventDefault(); 

        var formData = $("#forgot-form").serialize();

        $.ajax({
            url: 'action.php',
            method: 'POST',
            data: formData + '&action=forgotPassword',
            dataType: 'json',
            success: function(response) {
                
                console.log('Response:', response);
                var responseMessage = $('#response-message');
                responseMessage.text(''); 

                if (response.success) {
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred. Please try again later.');
            }
        });

        return false; 
    });    

});