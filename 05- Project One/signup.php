<?php include "partials/header.php"; ?>

   <div class="card-body px-5 py-5" style="background-color:darkgray;">
        <h3 class="card-title text-left mb-3">Register</h3>
        <?php include 'partials/error_success.php'; ?>
        <form action="handle/handle-signup.php" method="post">
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="username" class="form-control p_input" id="name" value="<?php if(isset($_SESSION['username'])) {echo $_SESSION['username']; unset($_SESSION['username']);} ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control p_input" id="email" value="<?php if(isset($_SESSION['email'])) {echo $_SESSION['email']; unset($_SESSION['email']);} ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control p_input" id="password">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control p_input" id="phone" value="<?php if(isset($_SESSION['phone'])) {echo $_SESSION['phone']; unset($_SESSION['phone']);} ?>">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control p_input" id="address" value="<?php if(isset($_SESSION['address'])) {echo $_SESSION['address']; unset($_SESSION['address']);} ?>">
            </div>
        
            <div class="form-group d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <div class="text-center">
                        <button type="submit" name="signup" class="btn btn-primary btn-block enter-btn mt-4">Signup</button>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-facebook col me-2">
                            <i class="mdi mdi-facebook"></i> Facebook </button>
                        <button class="btn btn-google col">
                            <i class="mdi mdi-google-plus"></i> Google plus </button>
                    </div>
                    <p class="sign-up text-center">Already have an Account?<a href="login.php"> Login</a></p>
                    <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                </div>
            </div>
        </form>
   </div>

<?php include "partials/footer.php"; ?>
