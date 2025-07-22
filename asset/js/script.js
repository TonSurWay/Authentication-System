$(document).ready(function() {

    // --- Register Handler ---
    $('#register_form').on('submit', function(e){
        e.preventDefault();

        $('#message-area').html('');

        const Username = $('#username').val().trim();
        const Email = $('#email').val().trim();
        const Password = $('#password').val();
        const Confirm_password = $('#confirm_password').val();
   
        if(!Username || !Email || !Password || !Confirm_password) {
            displayMessage('Please fill you info.', 'danger');
            return;
        } 
        
        if(Password !== Confirm_password){
            displayMessage('You password and confirm password do not match.', 'danger');
            return;
        } 
        
        if (Password.length < 8) {
            displayMessage('You password must be at least 8 character long.', 'danger');
            return;
        } 

        let formData = {
            username: Username,
            email: Email,
            password: Password,
            confirm_password: Confirm_password
        };

        $.ajax({
            type: 'POST',
            url: 'api/register.php',
            data: formData,
            dataType: 'json',
            success(response){
                if(response.status === 'success'){
                    displayMessage(response.message, 'success');
                    $('#register_form')[0].reset();
                }else {
                    displayMessage(response.message, 'danger');
                }
            },
            error(xhr, status, error) {
                console.error('AJAX Error: ', status, error, xhr.responseText);
                displayMessage('An error occured while sending data: ' + error + 'Please check your console', 'danger');
            }
        })
                
        console.log(formData);
    })

    // --- Login Handler ---

    $('#login_form').on('submit', function(e){
        e.preventDefault();

        $('#message-area').html('');

        const username = $('#username').val().trim();
        const password = $('#password').val();
   
        if(!username || !password ) {
            displayLoginMessage('Please enter your username and password.', 'danger');
            return;
        } 
        
        let formData = {
            username: username,
            password: password
        };

        $.ajax({
            type: 'POST',
            url: 'api/login.php',
            data: formData,
            dataType: 'json',
            success(response){
                if(response.status === 'success'){
                    displayLoginMessage(response.message, 'success');
                    if(response.redirect_url){
                        setTimeout(function(){
                            window.location.href = response.redirect_url;
                        }, 1500);
                    }
                }else {
                    displayLoginMessage(response.message, 'danger');
                }
            },
            error(xhr, status, error) {
                console.error('AJAX Error: ', status, error, xhr.responseText);
                displayLoginMessage('An error occured while sending data: '+ error , 'danger');
            }
        })
                
        console.log(formData);
    })

    // --- Logout Handler ---
    $('#logoutbtn').on('click', function(e){
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'api/logout.php',
            dataType: 'json',
            success(response){

                if(response.status === 'success'){
                    window.location.href = 'login.html';
                    window.location.reload();
                }
            }, 
            error(xhr, status, error){
                console.error('AJAX Logout error', status, error, xhr.responseText);

            }
        })
    })

    
    // Function to display Message in message-area in registerForm
    function displayMessage(message, type){
        $('#message-area').html(
            `<div class='alert alert-${type} alert-dismissible fade show' role='alert'>
                ${message}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>`
        )
    }
    // Function to display Message in message-area in loginForm
    function displayLoginMessage(message, type){
        $('#login-message-area').html(
            `<div class='alert alert-${type} alert-dismissible fade show' role='alert'>
                ${message}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>`
        )
    }

})