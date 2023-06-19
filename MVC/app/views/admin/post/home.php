<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>
<div class="container-fluid p-0 m-0">
    <div class="container m-5">
        <?php flash("del_suc"); ?>
        <a href="<?php echo URLROOT . 'post/create' ?>" class="btn btn-primary ms-3">Create</a>
        <div class="row g-0">
            <div class="col-md-4">
                <ul class="list-group m-3">
                    <?php foreach ($data['cats'] as $cat) : ?>
                        <li class="list-group-item rounded-0">
                            <a href="<?php echo URLROOT . 'post/home/' . $cat->id; ?>" class="text-decoration: none"><?php echo $cat->name; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-7 offset-1">
                <!-- Post Card Start -->
                <?php foreach ($data['posts'] as $post) : ?>
                    <div class="card rounded-0 mb-3">
                        <div class="card-header">
                            <h2><?php echo $post->title; ?></h2>
                        </div>
                        <div class="card-body">
                            <p> <?php echo $post->description; ?></p>
                            <div class="row">
                                <div class="d-flex justify-content-end">
                                    <a href="<?php echo URLROOT . 'post/show/' . $post->id; ?>" class="btn btn-success text-white btn-sm">Detail</a>
                                    <div class="p-1"></div>
                                    <a href="<?php echo URLROOT . 'post/edit/' . $post->id; ?>" class="btn btn-warning text-white btn-sm">Edit</a>
                                    <div class="p-1"></div>
                                    <a href="<?php echo URLROOT . 'post/delete/' . $post->id; ?>" class="btn btn-danger text-white btn-sm ">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Post Card End -->
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . "/views/inc/footer.php"; ?>