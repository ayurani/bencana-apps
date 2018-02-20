<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Pemetaan
            <small><?= strtoupper($slug) ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?= base_url('admin/maps/'.$slug) ?>"><i class="fa fa-dashboard"></i> <?= ucwords($slug) ?></a></li>
            <li class="active">Tambah <?= ucwords($slug) ?></li>
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
                        <h3 class="box-title">Form Tambah <?= ucwords($slug) ?></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="" method="post">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="-- Judul --" name="map_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Deskripsi</label>
                                <textarea name="map_desc" id="map_desc" class="form-control">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal</label>
                                <input type="text" class="form-control" id="map_date" placeholder="-- Tanggal --" name="map_date">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kategori</label>
                                <select id="map_category_id" name="map_category_id" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <?php foreach ($allCategory as $k => $v) : ?>
                                        <option value="<?= $v->category_id ?>"><?= $v->category_name ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <hr/>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Maps</label>
                                <input id="map_search" type="text" name="map_search" placeholder="--- Alamat ---" class="form-control">
                                <input id="address_new" type="hidden" name="address_new" placeholder="address_new">
                            </div>
                            <div id="lat_long_pick" style="width: 100%; height: 400px;"></div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Latitude</label>
                                <input type="text" class="form-control" id="latitude" placeholder="-- Latitude --" name="latitude" readonly="" ="">
                                <input id="latitude_new" type="hidden" name="latitude_new" placeholder="Latitude">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Longitude</label>
                                <input type="text" class="form-control" id="longitude" placeholder="-- Longitude --" name="longitude" readonly="" ="">
                                <input id="longitude_new" type="hidden" name="longitude_new" placeholder="Latitude">
                            </div>
                            <hr/>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Total Korban / Berapa Lama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="-- Mohon Isi --" name="total_victims">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Panjang (Kilometer) / Tinggi Banjir / Jenis Kejahatan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="-- Mohon Isi --" name="total_value">
                            </div>
                            <hr/>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Pelapor</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="-- Nama Pelapor --" name="report_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="-- Email Pelapor --"  name="report_email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="-- Telpon Pelapor --"  name="report_phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="-- Alamat Pelapor --"  name="report_address">
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
