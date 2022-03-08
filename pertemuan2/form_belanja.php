<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Belanja</title>
</head>
<body>
<h1>Belanja Online</h1>
    <div class=" d-flex m-5">
        <div class="container_fluid1 col-6">
        <form action="form_belanja.php" method="post">
            <div class="form-group row">
                <label class="col-4 col-form-label" for="name">Customer</label> 
                <div class="col-8">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mcu" required="required"> 
                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-4">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="kirim" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </form>
        </div>
        <div class="container_fluid2 col-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                Daftar Harga
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">KULKAS : 3.100.000</li>
                    <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                </ul>
                <div class="card-footer bg-primary text-white">
                Harga Dapat Berubah Setiap saat
                </div>
            </div>
        </div>
    </div>
    <?php
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];


        if ($produk == 'tv'){
            $harga = 4200000;
        }elseif ($produk == 'kulkas'){
            $harga = 3100000;
        }elseif ($produk == 'mcu'){
            $harga = 3800000;
        }

        $total = $jumlah * $harga;

        echo ' Nama Customer : '.$customer; 
        echo '<br/>Produk Pilihan : '.$produk;
        echo '<br/>Jumlah Beli : '.$jumlah; 
        echo '<br/> Total Belanja : '.$total; 
    ?>
</body>
</html>