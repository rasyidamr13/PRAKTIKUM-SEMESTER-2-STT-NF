<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2 align='center'>Bank Ini</h2>
<?php
class Account{
    public $nomor;
    public $nama;
    public $saldo;

    public function __construct($nomor,$nama,$saldo){
        $this->nomor = $nomor;
        $this->nama = $nama;
        $this->saldo = $saldo;
    }
    public function daftar(){
        echo " {$this->nomor} {$this->nama} {$this->saldo}";
    } 
}
class AccountBank extends Account{
    public function deposit($uang){
        echo "Nabung ".number_format($uang). "</br>";
    }
    public function withdraw($uang){
        echo "Tarik Uang ".number_format($uang). "</br>";
    }  
}
?>
<?php
$pemilik1 = new AccountBank("", "Ahmad", "");
$pemilik1->daftar();
$pemilik1->deposit(1000000);
$pemilik2 = new AccountBank("", "Budi","" );
$pemilik2->daftar();
$pemilik2->withdraw(2500000);

$pemilik1 = ['nomor' => 'C001', 'nama' => 'Ahmad', 'saldo' => 6000000];
$pemilik2 = ['nomor' => 'C002', 'nama' => 'Budi', 'saldo' => 5350000];
$pemilik3 = ['nomor' => 'C003', 'nama' => 'Kurniawan', 'saldo' => 2500000];
    
$ar_account = [$pemilik1, $pemilik2, $pemilik3];
?>
    </br></br>
    <table width="100%" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>No Account</th>
                <th>Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
            foreach ($ar_account as $pemilik) {          
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$pemilik['nomor'].'</td>';
                echo '<td>'.$pemilik['nama'].'</td>';
                $jumlah = $pemilik['saldo'];
                echo '<td>'.number_format($jumlah).'</td><tr>';
                $nomor++;
            }
        ?>
        </tbody>
    </table>
</body>
</html>