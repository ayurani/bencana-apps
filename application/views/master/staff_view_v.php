<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Master Data
            <small>Staff</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><i class="fa fa-dashboard"></i> Master</li>
            <li><a href="<?= base_url('admin/master/staff') ?>"><i class="fa fa-dashboard"></i> Staff</a></li>
            <li class="active">Ubah Staff</li>
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
                        <h3 class="box-title">Form Ubah Staff</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="adminnomor1" name="user_name" value="<?= $data->user_name ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="adminaja@gmail.com"  name="user_email" value="<?= $data->user_email ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********"  name="user_password" value="<?= $data->user_password ?>">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="active" <?= $data->status === 'active' ? 'selected' : '' ?>>Active</option>
                                    <option value="disabled" <?= $data->status === 'disabled' ? 'selected' : '' ?>>Disabled</option>
                                </select>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary" name="submit" id="submit" value="update">Simpan</button>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div><!--/.col (left) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->