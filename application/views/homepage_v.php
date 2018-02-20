<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BencanaApps | Menu</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href="<?= base_url() ?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="row" style="text-align: center;margin-top: 10%">
            <?php foreach ($category as $k => $v) :?>
                <div class="col-md-4" style="margin-bottom: 10%">
                    <a href="<?= base_url('view/'.$v->category_value) ?>">
                    <input type="button" name="pilih-<?= $v->category_value ?>" class="btn btn-primary btn-lg" value="<?= $v->category_name ?>" id="pilih-<?= $v->category_value ?>">
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </body>
</html>
