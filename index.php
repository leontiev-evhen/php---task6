<?php
    require_once 'config.php'; 

    spl_autoload_register(function ($class_name) {
        require_once 'libs/'.$class_name . '.php';
    });

    try
    {
        //create instruments
        $instrument1 = new InstrumentModel('guitar', 'stringed');
        $instrument2 = new InstrumentModel('drum', 'drums');
        $instrument3 = new InstrumentModel('guitar', 'stringed');
        $instrument4 = new InstrumentModel('microphone', 'vocal');

        //create musicians
        $musician1 = new MusicianModel('Max', 'guitar player');
        $musician2 = new MusicianModel('Yevhen', 'drummer');
        $musician3 = new MusicianModel('Alex', 'guitar player');
        $musician4 = new MusicianModel('Nata', 'vocalist');

        //add instrument to musician
        $musician1->addInstrument($instrument1);
        $musician2->addInstrument($instrument2);
        $musician3->addInstrument($instrument3);
        $musician4->addInstrument($instrument4);

        //create band
        $band = new BandModel('MyBand', 'rock');
        $band->addMusician($musician1);
        $band->addMusician($musician2);
        $band->addMusician($musician3);
        $band->addMusician($musician4);

        $nameBand       = $band->getName();
        $genreBand      = $band->getGenre();
        $arrayMusician  = $band->getMusician();

    }
    catch (Exception $e)
    {
        $error = $e->getMessage();
    }

    require_once 'templates/index.php';

?>
