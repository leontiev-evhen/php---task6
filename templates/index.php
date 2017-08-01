<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Course PHP -  Task 6</title>

        <!-- Bootstrap -->
        <link href="<?php echo PATH;?>css/bootstrap.min.css" rel="stylesheet">

        <!-- My style -->
        <link href="<?php echo PATH;?>css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container mt-50">

            <div class="row">
                <h2>Task 6</h2>
                <div class="col-md-12">
                    <?php echo (isset($error) ? $error : '');?>
                    <h2>Band name: <?php echo $nameBand;?></h2>
                    <h3>Band genre: <?php echo $genreBand;?></h3>
                    <h3>Band info:</h3>
                    <?php

                    foreach ($arrayMusician as $key=>$musician)
                    {
                        echo '<p>№'.++$key.'</p>';
                        echo '<p>Musician name: <b>'.$musician->getMusicianName().'</b></p>';
                        echo '<p>Musician type: '.$musician->getMusicianType().'</p>';

                        foreach ($musician->getInstrument() as $instrument)
                        {
                            echo '<p>Instrument name: '.$instrument->getName().'</p>';
                            echo '<p>Instrument category: '.$instrument->getCategory().'</p>';
                        }
                    }
                    
                    ?>
                </div>
            </div>

        </div>
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
         <script src="<?php echo PATH;?>js/bootstrap.min.js"></script>

    </body>
</html>

