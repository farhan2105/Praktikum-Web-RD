<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIKUM ALVIN PASMAH</title>
</head>
<body>
    <hr>
    <section class="">
        <div class="row">
            <div class="col-6">
                <div id="read_data"></div>
            </div>
            <div class="col-6">
                <h1>FORM DATA MAHASISWA</h1>
                <form action="" method="POST" id="form_mahasiswa">
                    <label for="id" id="id_label" hidden >No :</label>
                    <input type="text" name="id" id="id" hidden readonly> <br> <br>
                    <label for="">Nama : </label>
                    <input type="text" name="nama" id=""> <br> <br>
                    <label for="">Nim : </label>
                    <input type="text" name="nim" id=""> <br> <br>
                    <input type="radio"
                    <label for="">Prodi : </label>
                        <input type="radio" name="prodi" value="1"/>1. geofisika<br />
                        <input type="radio" name="prodi" value="2"/>2. Informatika<br />
                        <input type="radio" name="prodi" value="3"/>3. Telekomunikasi<br />
                        <input type="radio" name="prodi" value="4"/>4. Mesin<br />
                        <input type="radio" name="prodi" value="5"/>4. kereta api<br />
                    </select> <br> <br>
                    <label for="">Angkatan : </label>
                    <input type="text" name="angkatan" id=""> <br> <br>
                    <button class="btn btn-success" id="submit">Tambahkan</button>
                    <button class="btn btn-primary" id="update" hidden>Update</button>
                    <button class="btn btn-danger" id="cancel" hidden>Cancel Update</button>
                </form>
            </div>
        </div>
    </section>
</body>
<script src="jquery-3.5.1.min.js"></script>
<script src="index.js"></script>
</html>