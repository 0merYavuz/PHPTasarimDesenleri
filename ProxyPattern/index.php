<?php
echo "<a href=\"index2\">nesnelerin çağırılma durumları</a><br><br>";
interface Basbakan
{
    public function isBul($yakinim);
    public function dertDinle($dert);
}


class GercekBasbakan implements Basbakan
{
    public function isBul($yakinim)
    {
        echo "<br><b>Başbakan:</b> Bana böyle isteklerde bulunmayın.";
    }

    public function dertDinle($dert)
    {
        echo "<br><b>Başbakan:</b> Dinliyorum";
    }
}


class VekilBasbakan implements Basbakan
{
    private $basbakan;
    public function __construct()
    {
        $this->basbakan = new GercekBasbakan;
    }
    public function isBul($yakinim)
    {
        echo "<br><b>Vekil Başbakan:</b> İş isteğinizi dinliyorum";
    }

    public function dertDinle($dert)
    {
        echo "<br><b>Başbakan:</b> Derdinizi dinliyorum.";
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
}

class BasbakanlikKalemi
{
    public $basbakan; //Vekil Başbakan

    public function __construct()
    {
        $this->basbakan = new VekilBasbakan;
    }
    public function banaBasbakaniVer()
    {
        echo "<br><b>Başbakanlık Kalemi:</b> Tabii efendim, sizi başbakana yönlendiriyorum.";
        return $this->basbakan;
    }
}


class Vatandas
{   
    private $basbakan;

    public function __construct()
    {
        echo "<br><b>Vatandaş:</b> Başbakanla görüşmek istiyorum";
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
        $this->basbakan->isBul("<br>Oğlum için...");
        return "<br>Yaşasın!";
    }
}


//TEST
$vatandas= new Vatandas;
$vatandas->isIste(); //Vekil başbakana iletmiyor
echo "<br><br><br>";
$vatandas2= new Vatandas;
$vatandas2->derdiniAnlat();