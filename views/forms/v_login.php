<div class="container">
    <form action="<?php echo site_url("controllers/c_dologin.php") ?>" method="post">
        <div class="imgcontainer">
            <img src="<?php echo base_url() ?>/assets/img/sample_user.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            
            <button type="submit">Login</button>
            <label>
            <input type="checkbox" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>