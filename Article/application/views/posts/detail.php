<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Posts
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $posts['Title']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $posts['Content']; ?></h6>
                    <p class="card-text"><?= $posts['Category']; ?></p>
                    <p class="card-text"><?= $posts['Status']; ?></p>
                    <a href="<?= base_url(); ?>posts" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>