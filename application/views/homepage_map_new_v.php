<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BencanaApps | Map</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?= base_url() ?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="row" style="text-align: center;margin-top: 2%">
        <div class="col-md-2" style="margin-top: 10px">
            <a href="<?= base_url() ?>"><input type="button" value="Kembali" class="btn btn-warning btn-md"></a>
        </div>
        <div class="col-md-7">
            <h1>Data Pemetaaan <?= ucwords($slug) ?></h1>
        </div>
        <div class="col-md-3">
            <a href="<?= base_url('view/'.$slug.'/terdekat') ?>"><input type="button" name="near-me" id="near-me" class="btn btn-info btn-md" value="Cari Terdekat"></a>
            <a href="<?= base_url('view/'.$slug.'/reset') ?>"><input type="button" name="near-me" id="near-me" class="btn btn-danger btn-md" value="Tampilkan Semua"></a>
        </div>
    </div>

    <div id="map" style="width:100%;height:600px;">Loading Map...</div>

    <div class="col-md-12">
        <span>Lokasi Anda :</span>
    </div>
    <div class="col-md-12">
        <div class="row" style="">
            <div class="col-md-1">
                Latitude
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-10">
                <?= $latitude ?>
            </div>
        </div>
        <div class="row" style="">
            <div class="col-md-1">
                Longitude
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-10">
                <?= $longitude ?>
            </div>
        </div>
        <div class="row" style="">
            <div class="col-md-1">
                Jarak (km)
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-10">
                <?= $jarak ?>
            </div>
        </div>
        <div class="row" style="">
            <div class="col-md-1">
                Alamat Maps
            </div>
            <div class="col-md-1">
                :
            </div>
            <div class="col-md-10">
                <?= $address ?>
            </div>
        </div>
    </div>
    <div style="text-align: center;margin-top: 10px">
        <strong><span style="font-size: 20px">Data <?= $slug ?></span></strong>
    </div>
    <div class="row" style="text-align: center;margin-top: 10px">
        <div class="col-md-12">
            <div class="row" style="font-weight: bold">
                <?php if ($nearme) : ?>
                    <div class="col-md-1">No</div>
                    <div class="col-md-4">Nama</div>
                    <div class="col-md-2">Alamat</div>
                    <?php if ($slug == 'kejahatan') : ?>
                        <div class="col-md-2">Jenis Kejahatan</div>
                        <div class="col-md-2">Total Korban</div>
                    <?php elseif ($slug == 'kebanjiran') : ?>
                        <div class="col-md-2">Tinggi Banjir</div>
                        <div class="col-md-2">Berapa Lama</div>
                    <?php elseif ($slug == 'kemacetan') : ?>
                        <div class="col-md-2">Berapa Kilometer</div>
                        <div class="col-md-2">Berapa Lama</div>
                    <?php endif ?>
                    <div class="col-md-1">Jarak</div>
                <?php else : ?>
                    <div class="col-md-1">No</div>
                    <div class="col-md-5">Nama</div>
                    <div class="col-md-2">Alamat</div>
                    <?php if ($slug == 'kejahatan') : ?>
                        <div class="col-md-2">Jenis Kejahatan</div>
                        <div class="col-md-2">Total Korban</div>
                    <?php elseif ($slug == 'kebanjiran') : ?>
                        <div class="col-md-2">Tinggi Banjir</div>
                        <div class="col-md-2">Berapa Lama</div>
                    <?php elseif ($slug == 'kemacetan') : ?>
                        <div class="col-md-2">Berapa Kilometer</div>
                        <div class="col-md-2">Berapa Lama</div>
                    <?php endif ?>
                <?php endif ?>
            </div>
            <hr>
            <?php $index = 0; foreach ($data as $k => $v) : ?>
                <div class="row">
                    <?php if ($nearme) : ?>
                        <div class="col-md-1"><?= ++$index ?></div>
                        <div class="col-md-4"><strong><?= $v->map_name ?></strong> (<?= $v->map_desc ?>)</div>
                        <div class="col-md-2"><?= $v->map_address ?></div>
                        <div class="col-md-2"><?= $v->total_value ?></div>
                        <div class="col-md-2"><?= $v->total_victims ?></div>
                        <div class="col-md-1"><?= $v->distance_in_km ?></div>
                    <?php else :?>
                        <div class="col-md-1"><?= ++$index ?></div>
                        <div class="col-md-5"><strong><?= $v->map_name ?></strong> (<?= $v->map_desc ?>)</div>
                        <div class="col-md-2"><?= $v->map_address ?></div>
                        <div class="col-md-2"><?= $v->total_value ?></div>
                        <div class="col-md-2"><?= $v->total_victims ?></div>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <script>

        function myMap() {

            var mapCanvas = document.getElementById("map");
            var myCenter = new google.maps.LatLng(<?php echo $latitude ?>, <?php echo $longitude ?>);

            var mapCanvas = document.getElementById("map");
            var mapOptions = {
                center: myCenter,
                zoom: 12
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE
            });
            marker.setMap(map);

            var infowindow = new google.maps.InfoWindow({
                content:"BencanaApps - Mojokerto"
            });

            infowindow.open(map,marker);


            <?php foreach ($data as $k => $v) : ?>
            
                var infowindow<?php echo $v->map_id; ?> = new google.maps.InfoWindow({
                    content: '<?php echo '<b>'.$v->map_name.'</b><br/>Ket : '.$v->map_desc.'<br/>Tanggal : '.$v->map_date ?>'
                });

                var image = '<?php echo base_url(); ?>asset/uploads/<?php echo $v->icon; ?>';
                var marker_sig<?php echo $v->map_id; ?> = new google.maps.Marker({
                    position: {
                        lat: <?php echo $v->latitude; ?>,
                        lng: <?php echo $v->longitude; ?>},
                    map: map,
                    icon: image,
                    title: '<?php echo $v->map_name; ?>'
                });
                marker_sig<?php echo $v->map_id; ?>.addListener('click', function() {
                    infowindow<?php echo $v->map_id; ?>.open(map, marker_sig<?php echo $v->map_id; ?>);
                });
            <?php endforeach ?>
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=<?=SECRET_KEY_GOOGLE ?>&callback=myMap"></script>
</body>
</html>
