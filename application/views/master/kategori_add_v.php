<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Master Data
            <small>Kategori</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><i class="fa fa-dashboard"></i> Master</li>
            <li><a href="<?= base_url('admin/master/kategori') ?>"><i class="fa fa-dashboard"></i> Kategori</a></li>
            <li class="active">Tambah Kategori</li>
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
                        <h3 class="box-title">Form Tambah Kategori</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="col-md-12">
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
                    </div>
                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Kategori</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="-- Kebanjiran --" name="category_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Parent Kategori</label>
                                <select id="category_parent_id" name="category_parent_id" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <?php foreach ($rootCategory as $k => $v) : ?>
                                        <option value="<?= $v->category_id ?>"><?= $v->category_name ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Deskripsi</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="-- Banjir --"  name="category_desc">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Icon</label>
                                <input type="file" id="exampleInputFile" name="icon" id="icon">
                                <p class="help-block">Mohon pergunakan extension *.jpg/*.png/*.jpeg</p>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="submit" id="submit" value="save">Simpan</button>
                            <a href="<?= base_url('admin/master/kategori') ?>">
                                <button type="button" class="btn btn-warning" name="submit" id="submit" value="update">Kembali</button>
                            </a>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div><!--/.col (left) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
