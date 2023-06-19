<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>
<div class="container-fluid p-0 m-0">
    <div class="row g-0 m-5">
        <div class="col-md-3">
            <!-- Sidebar Start -->
            <div class="card rounded-0">
                <div class="card-header">
                    <h2>Category</h2>
                </div>
                <div class="card-body">
                    <!-- Sidebar Menu Start -->
                    <ul class="list-group">
                        <?php foreach ($data['cats'] as $cat) : ?>
                            <li class="list-group-item rounded-0 d-flex justify-content-between">
                                <span>
                                    <?php echo $cat->name ?></i>
                                </span>
                                <span>
                                    <a href="<?php echo URLROOT . 'category/edit/' . $cat->id ?>"><i class="fa fa-edit text-warning"></i></a>
                                    <a href="<?php echo URLROOT . 'category/delete/' . $cat->id ?>"><i class="fa fa-trash text-danger"></i></a>
                                </span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <!-- Sidebar Menu End -->
                </div>
            </div>
            <!-- Sidebar End -->
        </div>
        <div class="col-md-6 offset-md-2">
            <!-- Login Form Start -->
            <?php flash('register_success'); ?>
            <?php flash('login_fail'); ?>
            <h1 class="text-center text-primary pb-4">Edit Category</h1>
            <form action="<?php echo URLROOT . 'category/edit' ?>" method="post">
                <div class="mb-3 row">
                    <label for="name" class="col ps-4 col-form-label">Category Name</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control 
                        <?php echo !empty($data['name_err']) ? 'is-invalid' : '';
                        ?>" id="name" placeholder="Enter Name" name="name" value="<?php echo $data['currentCat']->name; ?>">
                        <span class="text-danger"><?php echo !empty($data['name_err']) ? $data['name_err'] : ''; ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="d-flex justify-content-end pb-5">
                        <button class="btn btn-outline-secondary">Cancle</button>
                        <div class="p-1"></div>
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
                <!-- Login Form End -->
        </div>
    </div>
    <?php require_once APPROOT . "/views/inc/footer.php"; ?>