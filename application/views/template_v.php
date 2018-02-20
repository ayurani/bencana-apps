<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BencanaApps | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href="<?= base_url() ?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- FontAwesome 4.3.0 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?= base_url() ?>asset/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="<?= base_url() ?>asset/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?= base_url() ?>asset/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="<?= base_url() ?>asset/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="<?= base_url() ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="<?= base_url() ?>asset/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="<?= base_url() ?>asset/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="<?= base_url() ?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

        <link href="<?= base_url() ?>asset/bootstrap/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>asset/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />

        <link href="<?= base_url() ?>asset/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <?php $this->load->view('partial/header_v') ?>

            <?php $this->load->view('partial/menu_bar_v') ?>


            <?php $this->load->view($content) ?>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
                <!--<strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.-->
            </footer>

            <?php //$this->load->view('partial/side_bar_v')?>

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class='control-sidebar-bg'></div>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="<?= base_url() ?>asset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?= base_url() ?>asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?= base_url() ?>asset/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?= base_url() ?>asset/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?= base_url() ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?= base_url() ?>asset/plugins/knob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>asset/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="<?= base_url() ?>asset/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?= base_url() ?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="<?= base_url() ?>asset/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src='<?= base_url() ?>asset/plugins/fastclick/fastclick.min.js'></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>asset/dist/js/app.min.js" type="text/javascript"></script>

        <script src="<?= base_url() ?>asset/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>asset/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

        <script src="<?= base_url() ?>asset/bootstrap/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>asset/bootstrap/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=<?= SECRET_KEY_GOOGLE ?>&libraries=places"></script>
         <script src="<?= base_url() ?>asset/bootstrap/js/locationpicker.jquery.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
            $('#lat_long_pick').locationpicker({
                location: {
                    latitude: <?= isset($data->latitude) ? $data->latitude : DEFAULT_LATITUDE ?>,
                    longitude:  <?= isset($data->longitude) ? $data->longitude : DEFAULT_LONGITUDE ?>
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
            //Date picker
            $("#map_date").datetimepicker({
                dateFormat: 'yyyy-mm-dd hh:ii'
            });
        </script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?= base_url() ?>asset/dist/js/pages/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url() ?>asset/dist/js/demo.js" type="text/javascript"></script>


    </body>
</html>
