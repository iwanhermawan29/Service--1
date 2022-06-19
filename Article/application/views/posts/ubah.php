<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Posts
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $posts['Id']; ?>">
                        <div class="form-group">
                            <label for="nama">Title</label>
                            <input type="text" name="title" class="form-control" id="title" value="<?= $posts['Title']; ?>">
                            <small class="form-text text-danger"><?= form_error('Title'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Content</label>
                            <input type="text" name="content" class="form-control" id="content" value="<?= $posts['Content']; ?>">
                            <small class="form-text text-danger"><?= form_error('Content'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Category</label>
                            <input type="text" name="category" class="form-control" id="category" value="<?= $posts['Category']; ?>">
                            <small class="form-text text-danger"><?= form_error('Category'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Status</label>
                            <select class="form-control" id="status" name="status">
                                <?php foreach( $status as $j ) : ?>
                                    <?php if( $j == $posts['Status'] ) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>