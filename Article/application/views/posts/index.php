<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

    

   

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>All Posts</h3>
            <?php if (empty($posts)) : ?>
                <div class="alert alert-danger" role="alert">
                data Posts tidak ditemukan.
                </div>
            <?php endif; ?>


            
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 
               
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Publish</a></li>
                  <li class="nav-item"><a class="nav-link " href="#activity" data-toggle="tab">Draft</a></li>
                  <li class="nav-item"><a class="nav-link " href="#thrash" data-toggle="tab">Thrash</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane" id="settings">
                    <!-- Post -->
                   
                    <!-- Post -->
        
                    <!-- Post -->
                    <form class="form-horizontal">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th >Title1</th>
                        <th >Category</th>
                        <th align="center">Action</th>
                        </tr>
                    </thead>
                    <?php foreach ($posts as $mhs) : ?>
                    <tbody>
                        <tr>
                        
                        <td> <?= $mhs['Title']; ?></td>
                        <td> <?= $mhs['Category']; ?></td>
                        <td align="center"> 
                        <a href="<?= base_url(); ?>posts/hapus/<?= $mhs['Id']; ?>" class="badge badge-danger tombol-hapus">Thrash</a>
                        <a href="<?= base_url(); ?>posts/ubah/<?= $mhs['Id']; ?>" class="badge badge-success ">edit</a>
                        <a href="<?= base_url(); ?>posts/detail/<?= $mhs['Id']; ?>" class="badge badge-primary ">preview</a></td>
                        </tr>
            
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                     
                    </form>
                  

                   
                    
                    <!-- /.post -->
                  </div>



                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="activity">
                    <!-- Post -->
                   
                    <!-- Post -->
        
                    <!-- Post -->
                    <form class="form-horizontal">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th >Title2</th>
                        <th >Category</th>
                        <th align="center">Action</th>
                        </tr>
                    </thead>
                    <?php foreach ($posts as $mhs) : ?>
                    <tbody>
                        <tr>
                        
                        <td> <?= $mhs['Title']; ?></td>
                        <td> <?= $mhs['Category']; ?></td>
                        <td align="center"> 
                        <a href="<?= base_url(); ?>posts/hapus/<?= $mhs['Id']; ?>" class="badge badge-danger tombol-hapus">Thrash</a>
                        <a href="<?= base_url(); ?>posts/ubah/<?= $mhs['Id']; ?>" class="badge badge-success ">edit</a>
                        <a href="<?= base_url(); ?>posts/detail/<?= $mhs['Id']; ?>" class="badge badge-primary ">preview</a></td>
                        </tr>
            
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                     
                    </form>
                  

                   
                    
                    <!-- /.post -->
                  </div>


                  <div class="tab-pane" id="thrash">
                    <!-- Post -->
                   
                    <!-- Post -->
        
                    <!-- Post -->
                    <form class="form-horizontal">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th >Title3</th>
                        <th >Category</th>
                        <th align="center">Action</th>
                        </tr>
                    </thead>
                    <?php foreach ($posts as $mhs) : ?>
                    <tbody>
                        <tr>
                        
                        <td> <?= $mhs['Title']; ?></td>
                        <td> <?= $mhs['Category']; ?></td>
                        <td align="center"> 
                        <a href="<?= base_url(); ?>posts/hapus/<?= $mhs['Id']; ?>" class="badge badge-danger tombol-hapus">Thrash</a>
                        <a href="<?= base_url(); ?>posts/ubah/<?= $mhs['Id']; ?>" class="badge badge-success ">edit</a>
                        <a href="<?= base_url(); ?>posts/detail/<?= $mhs['Id']; ?>" class="badge badge-primary ">preview</a></td>
                        </tr>
            
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                     
                    </form>
                  

                   
                    
                    <!-- /.post -->
                  </div>

              
        

            
                    </div>
    </div>

</div>