<?php 
class account {
    public $nama;
    public $nomor;
    public $saldo;

    public function __construct($no, $nama, $saldo){
        $this->nama = $nama;
        $this->nomor = $no;
        $this->saldo = $saldo;
    }
    public function deposit($duit){
        $this->saldo = $this->saldo + $duit;
    }
    public function withdraw($duit){
        $this->saldo = $this->saldo - $duit;
    }
    public function cetak(){
        echo "nomor " .$this->nomor;
        echo "<br>Nama " .$this->nama;
        echo "<br>Saldo Sementara = Rp. " .$this->saldo;
    }
}


?>