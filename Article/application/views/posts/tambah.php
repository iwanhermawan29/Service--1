<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Article
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Title</label>
                            <input type="text" name="title" class="form-control" id="title">
                            <small class="form-text text-danger"><?= form_error('title'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">Content</label>
                            <input type="text" name="content" class="form-control" id="content">
                            <small class="form-text text-danger"><?= form_error('content'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Category</label>
                            <input type="text" name="category" class="form-control" id="category">
                            <small class="form-text text-danger"><?= form_error('category'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="Publish">Publish</option>
                                <option value="Draft">Draft</option>
                                <option value="Thrash">Thrash</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>

