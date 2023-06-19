<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>
<div class="container-fluid">
    <div class="container my-4">
        <div class="col-md-8 offset-md-2">
            <div class="card p-5 bg-light">
                <!-- Login Form Start -->
                <?php flash('register_success'); ?>
                <?php flash('login_fail'); ?>
                
                <h1 class="text-center text-primary pb-4">Login Form</h1>
                <form action="<?php echo URLROOT . 'user/login' ?>" method="post">
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
                    <div class="row">
                        <a href="<?php echo URLROOT . "user/register" ?>">Not a user yet, Please Register!</a>
                        <div class="d-flex justify-content-end pb-5">
                            <button class="btn btn-outline-secondary">Cancle</button>
                            <div class="p-1"></div>
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </div>
                    <!-- Login Form End -->
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . "/views/inc/footer.php"; ?>