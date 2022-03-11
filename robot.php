<?php 

class Robot{

    private $warkep;
    private $warbad;
    private $warkak;
    private $jumsen;

    public function __construct($warkep, $warbad, $warkak, $jumsen){
        $this->warkep = $warkep;
        $this->warbad = $warbad;
        $this->warkak = $warkak;
        $this->jumsen = $jumsen;
    }

    public function getWarnaBadan(){
        return $this->warbad ."<br>". $this->warkep ."<br>". $this->warkak ."<br>". $this->jumsen;

    }   

    public function changeWarnaBadan($warkep, $warbad, $warkak, $jumsen){
        $this->warkep = $warkep;
        $this->warbad = $warbad;
        $this->warkak = $warkak;
        $this->jumsen = $jumsen;
    }


}

$rob = new Robot("Merah", "Hitam", "Biru", 10);
echo $rob->getWarnaBadan();
echo "<br>";
$rob->changeWarnaBadan("Hijau", "Coklat", "Kuning", 20);
echo $rob->getWarnaBadan();

?>