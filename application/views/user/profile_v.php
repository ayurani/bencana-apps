<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Profile
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Update Profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Form Update</h3>
                        <br>
                        <?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success alert-backpage">
                                <strong>Selamat</strong> <?= htmlspecialchars($this->session->flashdata('success')) ?>.
                            </div>
                        <?php endif ?>
                        <?php if ($this->session->flashdata('error')) : ?>
                            <div class="alert alert-danger alert-backpage">
                                <?= htmlspecialchars($this->session->flashdata('error')) ?>.
                            </div>
                        <?php endif ?>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="-- Nama --" name="user_name" value="<?= $datas->user_name ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="-- Email Pelapor --"  name="user_email" value="<?= $datas->user_email ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Avatar</label>
                                <input type="file" class="form-control" id="user_image" placeholder="-- Telpon Pelapor --"  name="user_image">
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="submit" id="submit" value="save">Simpan</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div><!--/.col (left) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
