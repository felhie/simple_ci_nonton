<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Nonton Film @felix.net hotspot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" />
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="page-header">
            <a href="index.php"><h1>Nonton ki'<small> Nonton film rong</small></h1></a>
        </div>
        <!-- Gallery - START -->
        <div class="container">
            <?php
                        $i=1;
                        foreach ($data as $data)
                          {
                          if ($i%4==0) echo '<div class="row">';
                          echo 
                          '<a href="'.base_url("home/nonton/").$data->id.'"> ';
                          echo '<div class="col-md-3">';
                          echo '<div class="thumbnail">';
                          echo '
                          <img class="img-responsive " src="'.base_url().'film/'.$data->cover.'">
                          ';
                          echo '<div class="caption"><h3>'.$data->judul.'</h3></div>';
                          echo '</div>';
                          echo '</div>';
                          echo "</a>";

                          if ($i%4==0) echo '</div>';
                          $i++;
                          }

                        ?>
        </div>
    </div>
    <!-- Gallery - END -->
    <section class="section text-center">
        <?php echo $this->pagination->create_links(); ?>
    </section>
    </div>
</body>

</html>
