<?php 
require_once 'class_account.php';
class bank extends account {
    
    const biaya_admin = 6000;
    
    public function transfer($receiver, $duit){
        $receiver->deposit($duit);
        $this->withdraw($duit);
        $this->withdraw(self::biaya_admin);
        // echo "<br>".$duit;
    }
    public function cetak(){
        parent::cetak();
    }
    public function getSaldo(){
        return $this->saldo;
    }
}

$acc1 = new bank("C001", "Gusti", 30000);
$acc2 = new bank("C002", "Putu", 50000);
$acc3 = new bank("C003", "Wirawan", 1000000);
$acc4 = new bank("C004", "Anugerah", 20000);
$acc5 = new bank("C005", "Guntur", 30000);
$acc6 = new bank("C006", "Putra", 40000);
$ar_account = [$acc1, $acc2, $acc3, $acc4, $acc5, $acc6];

echo "<h2> Data Transaksi Bankotan per tanggal 30 maret 2022 pukul 16.00 WIB </h2>";
echo '"C0001 : Gusti"<br>';
echo "Saldo awal = 30000 <br>";
$acc1->deposit(20000);
echo "Nabung = 20000 <br>";
$acc1->withdraw(40000);
echo "Narik uang 40000 <br>";
echo "Saldo sebelum di transfer Putu = " .$acc1->getSaldo();

echo "<hr>";

echo '"C002 : Putu"<br>';
echo "Saldo awal = 50000 <br>";
echo "Nabung = 70000 <br>" .$acc2->deposit(70000);
echo "Narik uang 20000 <br>" .$acc2->withdraw(20000);
echo "Transfer ke Gusti = 40000 + Biaya Admin = 6000 <br>" .$acc2->transfer($acc1, 40000);
echo "Saldo Akhir = " .$acc2->getSaldo() ."<br><br>";
echo "<b>Saldo Gusti setelah di transfer Putu = </b>" .$acc1->getSaldo();


echo "<hr>";

echo '"C003 : Wirawan"<br>';
echo "Saldo awal = 100000 <br>";
echo "Nabung = 50000 <br>" .$acc3->deposit(50000);;
echo "Narik uang 40000 <br>" .$acc3->withdraw(40000);
echo "Transfer ke Gusti = 10000 + Biaya Admin = 6000 <br>" .$acc3->transfer($acc1, 10000);
echo "Saldo Akhir = " .$acc3->getSaldo() ."<br><br>";
echo "<b>Saldo Gusti setelah di transfer Wirawan = </b>" .$acc1->getSaldo();

echo "<hr>";



?>

<h2>Account Bank</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>No Account</th>
            <th>Pemilik</th>
            <th>Saldo</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($ar_account as $acc) {

        ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $acc->nomor; ?></td>
            <td><?= $acc->nama; ?></td>
            <td><?= "Rp. " .$acc->saldo; ?></td>
        </tr>

        <?php } ?>
    </tbody>
</table>

<!-- <?php 
$adam = new bank("C001", "Gusti", 300);
echo "<br>Saldo Gusti setelah deposit Rp. 5000" .$adam->deposit(5000);
echo "<br>";
$adam->deposit(5000);
?> -->