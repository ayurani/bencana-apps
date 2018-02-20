<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pendataan
            <small>Peta</small>
            <a href="<?= base_url('admin/maps/report/add/'.$slug) ?>">
                <button class="btn btn-sm btn-primary">Tambah Pemetaaan</button>
            </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><i class="fa fa-dashboard"></i> Maps</li>
            <li class="active"><?= ucwords($slug) ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Pemetaan</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
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
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Desc</th>
                                    <th>Jenis</th>
                                    <th>Pelapor</th>
                                    <th>Waktu</th>
                                    <!--<th>Status</th>-->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1; foreach ($data as $k => $v) : ?>
                                    <tr>
                                        <td><?= $index++ ?></td>
                                        <td><?= htmlspecialchars($v->map_name) ?></td>
                                        <td><?= htmlspecialchars($v->map_desc) ?></td>
                                        <td><strong><?= htmlspecialchars($v->category_name) ?></strong> <?= htmlspecialchars($v->category_name) ?></td>
                                        <td><span class="label label-success"><?= htmlspecialchars(strtoupper($v->report_email)) ?></span></td>
                                        <td><?= htmlspecialchars($v->map_date) ?></td>
                                        <!--<td><span class="label label-success"><?= htmlspecialchars(strtoupper($v->status)) ?></span></td>-->
                                        <td>
                                            <a href="<?= base_url('admin/maps/report/view/'.$v->map_id) ?>">
                                                <button class="btn btn-block btn-primary btn-sm">Edit</button>
                                            </a>
                                            <!--<a href="<?= base_url('admin/maps/report/delete/'.$v->map_id) ?>" onclick="confirm('Apakah Anda Yakin?')">
                                                <button class="btn btn-block btn-danger btn-sm">Delete</button>
                                            </a>-->
                                        </td>
                                    </tr>
                                <?php  endforeach ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Desc</th>
                                    <th>Pelapor</th>
                                    <th>Waktu</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
