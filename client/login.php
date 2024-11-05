<link rel="stylesheet" href= "sign-in.css">
<?php $title = "Login";
require('components/headerNav.php');
require('../server/db_connect.php');
?>
<br>
<div class="login-form">    
    <form>
		<div class="avatar"><i class="bi bi-person"></i></div>
    	<h4 class="modal-title">Login</h4>
        <div class="form-group">
            <input type="text" id = "accEmail" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" id = "accPassword" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="alert alert-danger" role="alert" hidden="hidden" id="failedLogin"></div>
        <div class="form-group small clearfix">
            <label class="form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="forgot-link">Forgot Password?</a>
        </div> 
        <button type="button" id = "loginButton" class="btn btn-primary btn-lg">Login</button>             
    </form>			
    <div class="text-center small">Don't have an account? <a href="">Sign up</a></div>
</div>


<script type="text/javascript" src = "js/loginValidation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
       