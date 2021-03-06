<style>
    .button{
        height: 30px;
        width: 90px;
        display: table-cell;
        background-color: #dd4444;
        color: white;
        margin-right: 15px;
        text-align: center;
        vertical-align: middle;
        border: 1px solid black;
    }
    #display_tv{
        background-color: cyan;
        color: #dd4444;
        font-size: 18px;
        font-weight: 600;
        width: 320px;
        height: 200px;
    }
    p{
        margin: 0;
    }
</style>
<?php
    require_once 'vendor/autoload.php';

    use Devices\Device;
    use Devices\MobileTelefone;
    use Devices\Tv;
    use Devices\Printer;

    $dev = new Device();
    $dev->parametrListOfDevices['Brand'] = "Samsung";
    $dev->parametrListOfDevices['model'] = "XD-101";
    echo 'Device: '.$dev->parametrListOfDevices['Brand'].' '.$dev->parametrListOfDevices['model']."<br>\n";
    $dev->showPage();

    $mob = new MobileTelefone('+38 (093) 357 99 30');
    $mob->parametrListOfMobiles['Brand'] = "Nokia";
    $mob->parametrListOfMobiles['model'] = "Lumia 900";
    echo 'Mobile telephone: '.$mob->parametrListOfMobiles['Brand'].' '.$mob->parametrListOfMobiles['model']."<br>\n";
    $mob->showPage();
    $mob->callToNumber();

    $tv = new Tv(10,5);
    $tv->parametrListOfTv['Brand'] = "Philips";
    $tv->parametrListOfTv['model'] = "B-350";
    echo 'TV: '.$tv->parametrListOfTv['Brand'].' '.$tv->parametrListOfTv['model']."<br>\n";
    $tv->showPage();

?>
<div>
    <h5>Tv Interface</h5>
    <span class="button" onclick="document.getElementById('display_tv').innerHTML = '<p><?php $tv->checkNextChanel(); ?></p>'">
        NEXT
    </span>
    <span class="button" onclick="document.getElementById('display_tv').innerHTML = '<p><?php $tv->checkPrevChanel(); ?></p>'">
        PREV
    </span>
    <span class="button" onclick="document.getElementById('display_tv').innerHTML = '<p><?php $tv->onTv(); ?></p>'">
        ON
    </span>
    <span class="button" onclick="document.getElementById('display_tv').innerHTML = '<p><?php $tv->offTv(); ?></p>'">
        OFF
    </span>
    <span class="button" onclick="document.getElementById('display_tv').innerHTML = '<p><?php $tv->upVolume(); ?></p>'">
        VOLUME +
    </span>
    <span class="button" onclick="document.getElementById('display_tv').innerHTML = '<p><?php $tv->downVolume(); ?></p>'">
        VOLUME -
    </span>
    <div id="display_tv"></div>
</div>
<?php
    $prt = new Printer();
    $prt->parametrListOfPrinter['Brand'] = "Xerox";
    $prt->parametrListOfPrinter['model'] = "B-350";
    echo 'Printer: '.$prt->parametrListOfPrinter['Brand'].' '.$prt->parametrListOfPrinter['model']."<br>\n";
    $prt->showPage();