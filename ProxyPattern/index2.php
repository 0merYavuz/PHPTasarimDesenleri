<body style="font-size:20px">
    

<?php

interface Basbakan
{
    public function isBul($yakinim);
    public function dertDinle($dert);
}


class GercekBasbakan implements Basbakan
{
    public function __construct()
    {
        echo "<br><br>🫅<i style=\"color:green\">Gerçek Başbakan geldi</i><br><br>";
    }
    public function isBul($yakinim)
    {
        echo "<br><b>🫅Başbakan:</b> Bana böyle isteklerde bulunmayın.";
    }

    public function dertDinle($dert)
    {
        echo "<br><b>🫅Başbakan:</b> Dinliyorum";
    }

    public function __destruct()
    {
        echo "<br><br>🫅<i style=\"color:red\" >Gerçek Başbakan gitti</i><br><br>";
    }
}


class VekilBasbakan implements Basbakan
{
    private $basbakan;
    public function __construct()
    {
        echo "<br><br>🧑‍💼<i style=\"color:green\">Vekil Başbakan geldi</i><br><br>";
        $this->basbakan = new GercekBasbakan;
    }
    public function isBul($yakinim)
    {
        echo "<br><b>🧑‍💼Vekil Başbakan:</b> İş isteğinizi dinliyorum";
    }

    public function dertDinle($dert)
    {
        echo "<br><b>🧑‍💼Vekil Başbakan:</b> Derdinizi dinliyorum.";
        $ayiklandi = self::ayikla($dert);
        if($ayiklandi){
           self::ilet($dert); 
        }
    }

    private function ayikla($dert)
    {
        $b = true;

        return $b;
    }

    private function ilet($dert)
    {
        $this->basbakan->dertDinle($dert);
    }

    public function __destruct()
    {
        echo "<br><br>🧑‍💼<i style=\"color:red\">Vekil Başbakan gitti</i><br><br>";
    }
}

class BasbakanlikKalemi
{
    public $basbakan; //Vekil Başbakan

    public function __construct()
    {
        echo "<br><br>🖊️<i style=\"color:green\"><b>Başbakanlık Kalemi</b> geldi</i><br><br>";
        $this->basbakan = new VekilBasbakan;
    }
    public function banaBasbakaniVer()
    {
        echo "<br><b>🖊️Başbakanlık Kalemi:</b> Tabii efendim, sizi başbakana yönlendiriyorum.";
        return $this->basbakan;
    }

    public function __destruct()
    {
        echo "<br><br>🖊️<i style=\"color:red\" >Başbakanlık Kalemi gitti</i><br><br>";
    }
}


class Vatandas
{   
    private $basbakan;

    public function __construct()
    {
        echo "<br><br>🙍‍♂️<i style=\"color:green\"><b>Vatandaş</b> geldi</i><br><br>";
        echo "<br>🙍‍♂️<b>Vatandaş:</b> Başbakanla görüşmek istiyorum";
        $kalem= new BasbakanlikKalemi;
        $this->basbakan = $kalem->banaBasbakaniVer();
    }
    public function derdiniAnlat()
    {
        $this->basbakan->dertDinle("<br>Benim derdim...");
        return "<br>Yaşasın!";
    }

    public function isIste()
    {
        $this->basbakan->isBul("<br>Oğlum için iş...");
        return "<br>Yaşasın!";
    }

    public function __destruct()
    {
        echo "<br><br>🙍‍♂️<i style=\"color:red\" >Vatandaş gitti</i><br><br>";
    }
}


//TEST
$vatandas= new Vatandas;
$vatandas->isIste(); //Vekil başbakana iletmiyor
echo "<br><br><br>";
echo "<h1 style=\"color:gray;\"><b> ******** Yeni Vatandaş Kısmı ******** </b></h1>";
echo "<br>";
$vatandas2= new Vatandas;
$vatandas2->derdiniAnlat();

?>

</body>