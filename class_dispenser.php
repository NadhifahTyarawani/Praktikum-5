<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const VOLUME_GELAS = 250;
    public $namaMinuman;

    public function __construct($namaMinuman, $volume, $hargaGelas){
         $this->namaMinuman = $namaMinuman;
         $this->volume = $volume;
         $this->hargaSegelas = $hargaGelas;

         echo "Nama Minuman " .$this->namaMinuman;
         echo "<hr>Volume galon nya adalah " .$this->volume ." ML";
         echo "<br>Harga Segelas nya adalah Rp." .$this->hargaSegelas;
    }
    public function volume(){
        return "<br>Andi beli air 1 gelas yang volumenya " .self::VOLUME_GELAS ." ML";
    }
    public function hasil(){
        $hasil = $this->volume-self::VOLUME_GELAS;
        echo "<br>Hasil Volume Sekarang adalah " .$hasil ." ML";
    }
}

$andi = new Dispenser("Le Minho", 100, 50000);
echo $andi->volume();
echo $andi->hasil();

?>