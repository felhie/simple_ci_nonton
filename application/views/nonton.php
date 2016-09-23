<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Nonton Film @felix.net hotspot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" />
    <!-- player skin -->
    <link rel="stylesheet" href="<?=base_url()?>assets/player/skin/functional.css">
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- include flowplayer -->
    <script src="<?=base_url()?>assets/player/flowplayer.min.js"></script>
    <!-- costum css flowplayer -->
    <style>
    .flowplayer .fp-subtitle {
        /*this one is for subtitles in the normal player*/
        background-color: transparent;
    }
    
    .flowplayer.is-fullscreen .fp-subtitle {
        /*this one is for full-screen, so make the font bigger*/
        background-color: transparent;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="page-header">
            <a href="<?=base_url()?>"><h1>Nonton ki'<small> Nonton film rong</small></h1></a>
        </div>
        <!-- Gallery - START -->
        <div class="container">
            <div class="row">
                <?
        foreach ($data as $data) 
        {
        ?>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="well ">
                                <span><strong><? echo strtoupper(str_replace("-"," ",$data->judul));?></strong></span>
                                <!-- the player -->
                                <div class="flowplayer" data-swf="<?=base_url()?>assets/player/flowplayerhls.swf" data-ratio="0.4167">
                                    <video>
                                        <source type="video/webm" src="<?=base_url('film/'.$data->link);?>">
                                    </video>
                                </div>
                            </div>
                        </div>
                        <?
    }   
        ?>
                    </div>
            </div>
            <!-- Gallery - END -->
        </div>
</body>

</html>
