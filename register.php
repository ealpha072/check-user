<?php include ("header.php"); ?>
        <div class="form-holder">
            <div>
                <h2 class="text-center">Register</h2>
            </div>
            <form method="POST" action="register.php">
                <div class="form-group">
                    <label for="uername">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password_1">
                </div>
                <div class="form-group">
                    <label for="confirm">Confirm Password</label>
                    <input type="password" class="form-control" name="password_2">
                </div>
                <button type ="submit" class="btn btn-primary btn-block" name="reg_btn"><i class="fa fa-paper-plane"></i> Register</button>
            </form>
        </div>
<?php include("footer.php"); ?>