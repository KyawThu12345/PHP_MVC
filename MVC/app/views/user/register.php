<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>
<div class="container-fluid">
    <div class="container my-4">
        <div class="col-md-8 offset-md-2">
            <div class="card p-5 bg-light">
                <!-- Register Form Start -->
                <h1 class="text-center text-primary pb-4">Register Form</h1>
                <form action="<?php echo URLROOT . 'user/register' ?>" method="post">
                    <div class="mb-3 row">
                        <label for="username" class="col ps-4 col-form-label">Username</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control <?php echo !empty($data['name_err']) ? 'is-invalid' : ''; ?>" id="username" placeholder="Enter Username" name="name">
                            <span class="text-danger"><?php echo !empty($data['name_err']) ? $data['name_err'] : ''; ?></span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col ps-4 col-form-label">Email</label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control <?php echo !empty($data['email_err']) ? 'is-invalid' : ''; ?>" id="email" placeholder="Enter Email" name="email">
                            <span class="text-danger"><?php echo !empty($data['email_err']) ? $data['email_err'] : ''; ?></span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col ps-4 col-form-label">Password</label>
                        <div class="col-sm-12">
                            <input type="password" class="form-control <?php echo !empty($data['password_err']) ? 'is-invalid' : ''; ?>" placeholder="Enter Password" id="password" name="password">
                            <span class="text-danger"><?php echo !empty($data['password_err']) ? $data['password_err'] : ''; ?></span>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="confirm_password" class="col ps-4 col-form-label">Confirm Password</label>
                        <div class="col-sm-12">
                            <input type="password" class="form-control <?php echo !empty($data['password_err']) ? 'is-invalid' : ''; ?>" placeholder="Enter Confirm Password" id="confirm_password" name="confirm_password">
                            <span class="text-danger"><?php echo !empty($data['confirm_password_err']) ? $data['confirm_password_err'] : ''; ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <a href="<?php echo URLROOT . "user/login" ?>">Already Register, Please Login!</a>
                        <div class="d-flex justify-content-end pb-5">
                            <button class="btn btn-outline-secondary">Cancle</button>
                            <div class="p-1"></div>
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                    <!-- Register Form End -->
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . "/views/inc/footer.php"; ?>