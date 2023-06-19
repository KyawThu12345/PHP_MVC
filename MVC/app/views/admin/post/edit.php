<?php require_once APPROOT . "/views/inc/header.php"; ?>
<?php require_once APPROOT . "/views/inc/nav.php"; ?>
<div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
            <div class="card p-5 bg-light">
                <?php flash('pef'); ?>
                <!-- Register Form Start -->
                <h1 class="text-center text-primary pb-4">Create Post</h1>
                <form action="<?php echo URLROOT . 'post/edit' ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleSelect1">Post Category</label>
                        <select class="form-control" id="cat_id" name="cat_id">
                            <?php foreach ($data['cats'] as $cat) : ?>
                                <?php if ($cat->id == $data['post']->cat_id) : ?>
                                    <option value="<?php echo $cat->id; ?>" selected><?php echo $cat->name;  ?></option>
                                <?php else : ?>
                                    <option value="<?php echo $cat->id; ?>"><?php echo $cat->name;  ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3 row">
                        <label for="title" class="col ps-4 col-form-label">Title</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control <?php echo !empty($data['title_err']) ? 'is-invalid' : ''; ?>" id="title" placeholder="Enter Title" name="title" value="<?php echo $data['post']->title; ?>
                            " text-danger"><?php echo !empty($data['title_err']) ? $data['title_err'] : ''; ?>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="desc">Post Description</label>
                        <textarea class="form-control <?php echo !empty($data['desc_err']) ? 'is-invalid' : ''; ?>" id="desc" name="desc" rows="3">
                        <?php echo $data['post']->description ?>
                    </textarea>
                        <span class="text-danger"><?php echo !empty($data['desc_err']) ? $data['desc_err'] : ''; ?></span>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="file" class="form-label">File Input</label>
                        <input class="form-control <?php echo !empty($data['file_err']) ? 'is-invalid' : ''; ?>" type="file" id="file" name="file">
                        <span class="text-danger"><?php echo !empty($data['file_err']) ? $data['file_err'] : ''; ?></span>
                        <input type="hidden" name="old_file" value="<?php echo $data['post']->image ?>" />
                        <div class="form-group mb-3">
                            <label for="content">Post Content</label>
                            <textarea class="form-control <?php echo !empty($data['content_err']) ? 'is-invalid' : ''; ?>" id="content" name="content" rows="3">
                        <?php echo $data['post']->content ?>
                        </textarea>
                            <span class="text-danger"><?php echo !empty($data['content_err']) ? $data['content_err'] : ''; ?></span>
                        </div>
                        <div class="row">
                            <div class="d-flex justify-content-end pb-5">
                                <button class="btn btn-outline-secondary">Cancle</button>
                                <div class="p-1"></div>
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        <!-- Register Form End -->
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . "/views/inc/footer.php"; ?>