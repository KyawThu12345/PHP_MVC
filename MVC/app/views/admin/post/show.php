<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>
<div class="container-fluid">
    <div class="container my-5">
        <?php flash("pes"); ?>
        <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="d-flex justify-content-start mb-2">
                    <a href="<?php echo URLROOT . "post/home/" . $data['post']->cat_id; ?>" class="btn btn-secondary">Back</a>
                    <div class="p-1"></div>
                    <a href="<?php echo URLROOT . "post/edit/" . $data['post']->id; ?>" class="btn btn-warning">Edit</a>
                </div>
            </div>
            <div class="card-header">
                <h6><?php echo $data['post']->title; ?></h6>
            </div>
            <div class="card-body">
                <img src="<?php echo URLROOT . 'assets/uploads/' . $data['post']->image; ?>" alt="">
                <p class="mt-3">
                    <?php echo $data['post']->content; ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . "/views/inc/footer.php"; ?>