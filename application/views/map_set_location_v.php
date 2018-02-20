<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BencanaApps | Map</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?= base_url() ?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- jQuery 2.1.4 -->
        <script src="<?= base_url() ?>asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= SECRET_KEY_GOOGLE ?>&libraries=places"></script>
    <script src="<?= base_url() ?>asset/bootstrap/js/locationpicker.jquery.js"></script>
</head>
<body>
    <div class="row" style="text-align: center;margin-top: 2%">
        <div class="col-md-2" style="margin-top: 10px">
            <a href="<?= base_url() ?>"><input type="button" value="Kembali" class="btn btn-warning btn-md"></a>
        </div>
        <div class="col-md-8">
            <h1>Set Lokasi Anda</h1>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <div class="col-md-12">
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Maps</label>
                <input id="map_search" type="text" name="map_search" placeholder="--- Alamat ---" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Latitude</label>
                <input type="text" class="form-control" id="latitude" placeholder="-- Latitude --" name="latitude" disabled="">
                <input id="latitude_new" type="hidden" name="latitude_new" placeholder="Latitude">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Longitude</label>
                <input type="text" class="form-control" id="longitude" placeholder="-- Longitude --" name="longitude" disabled="">
                <input id="longitude_new" type="hidden" name="longitude_new" placeholder="Latitude">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jarak</label>
                <select id="jarak" name="jarak" class="form-control">
                    <?php for ($i = 1; $i < 30; $i += 3) : ?>
                        <option value="<?= $i ?>"><?= $i?>Km</option>
                    <?php endfor ?>
                </select>
            </div>
            <div class="form-group">
                <input id="btn-save-loc" type="submit" name="btn-save-loc" value="Cari" class="btn btn-primary btn-md">
            </div>
        </form>
    </div>

    <div id="lat_long_pick" style="width: 100%; height: 400px;">Loading Map...</div>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?= SECRET_KEY_GOOGLE ?>&libraries=places"></script>
    <script type="text/javascript">
        $('#lat_long_pick').locationpicker({
            location: {
                latitude: <?= $latitude !== null ? $latitude : DEFAULT_LATITUDE ?>,
                longitude:  <?= $longitude !== null ? $longitude : DEFAULT_LONGITUDE ?>
            },

            inputBinding: {
                latitudeInput: null,
                longitudeInput: null,
                radiusInput: null,
                locationNameInput: $('#map_search')
            },

            enableAutocomplete: true,
            enableAutocompleteBlur: true,
            draggable: true,
            scrollwheel: true,
            radius: 50,
            onchanged: function (currentLocation, radius, isMarkerDropped) {
                $('#latitude').val(currentLocation.latitude);
                $('#latitude_new').val(currentLocation.latitude);
                $('#longitude').val(currentLocation.longitude);
                $('#longitude_new').val(currentLocation.longitude);
            },

            // markerInCenter: true,
            scrollwheel: true,
        });
    </script>
</body>
</html>
