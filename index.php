<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>SEPATU</title>
</head>
<body>
    <h1>SHOES KINIAN </h1>

    <center>
        <table>
            <tr> 
                <td>Jenis sepatu</td>
                <td>Harga Per item</td>
            </tr>

            <tr>
                <td>air jordan</td>
                <td>Rp.1.500.000</td>
            </tr>
            <tr>
                <td>crazy boost</td>
                <td>Rp.1.300.000</td>
            </tr>
            <tr>
                <td>clyde hardwood</td>
                <td>Rp.1.000.000</td>
            </tr>
        </table>
    </center>
    <br><br>

    <center>
    <form method="POST" onsubmit="totalBelanja()">
    <ul>
        <li>
            <label for="nike" class="form-label"> air jordan </label>
            <input type="number" name="nike" id="nike" class="form-control" required> <br>
        </li>
        <li>
            <label for="adidas" class="form-label"> crazy boost </label>
            <input type="number" name="adidas" id="adidas"  class="form-control" required> <br>
        </li>
        <li>
            <label for="puma" class="form-label"> clyde hardwood </label>
            <input type="number" name="puma" id="puma" class="form-control" required> <br>
        </li>
        <li>
            <input type="submit" name="submit" value="hitung">
        </li>
    </ul>
        </form>  
    </center>
    

    <div id="hasil"></div>
    <script type="text/javascript">
        <?php

            class nike{
                private $biaya;
                public function __construct($banyak)
                {
                    $this->banyak = $banyak;
                    $this->biaya  = 1500000;
                }

                public function banyaknike()
                {
                    return $this->banyak;
                }

                public function biayanike()
                {
                    return $this->biaya;
                }
            }

            class adidas{
                private $biaya;
                public function __construct($banyak)
                {
                    $this->banyak = $banyak;
                    $this->biaya  = 1300000;
                }

                public function banyakadidas()
                {
                    return $this->banyak;
                }

                public function biayaadidas()
                {
                    return $this->biaya;
                }
            }

            class puma{
                private $biaya;
                public function __construct($banyak)
                {
                    $this->banyak = $banyak;
                    $this->biaya  = 1000000;
                }

                public function banyakpuma()
                {
                    return $this->banyak;
                }

                public function biayapuma()
                {
                    return $this->biaya;
                }
            }

        ?>

        function totalBelanja(){
            event.preventDefault()

            var jumlahnike = document.getElementById('nike').value;
            var jumlahadidas  = document.getElementById('adidas').value;
            var jumlahpuma  = document.getElementById('puma').value;

            var biayanike = 1500000;
            var biayaadidas  = 1300000;
            var biayapuma  = 1000000;

            var total = jumlahnike*biayanike + jumlahadidas*biayaadidas + jumlahpuma*biayapuma;

            output = document.getElementById('hasil');
            output.innerHTML = "Total Belanja :"+total;
        }
</script>
</body>
</html>