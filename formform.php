<html>
<head>
	<title>Membuat Form Login</title>
    <link href="login2.css" rel="stylesheet">
</head>
<body>
    <form id="login-form" action="tabeltabel.php" method="GET">
    <h1>DATA PENDUDUK</h1>
    <h1>Di Pulau Jawa</h1>
        <label for="Provinsi1">Pilih Provinsi 1 :</label>
        <select name="Provinsi1" id="Provins1">
            <option value="timur">Jawa Timur</option>
            <option value="tengah">Jawa Tengah</option>
            <option value="barat">Jawa Barat</option>
        </select><br>
        <label for="jml1">Jumlah Penduduk : </label>
        <input type="number" name="jml1" id="jml1"><br>

        <label for="Provinsi2">Pilih Provinsi 2 :</label>
        <select name="Provinsi2" id="Provinsi2">
            <option value="timur">Jawa Timur</option>
            <option value="tengah">Jawa Tengah</option>
            <option value="barat">Jawa Barat</option>
        </select><br>
        <label for="jml2">Jumlah Penduduk : </label>
        <input type="number" name="jml2" id="jml2"><br>

        <label for="Provinsi3">Pilih Provinsi 3 :</label>
        <select name="Provinsi3" id="Provinsi3">
            <option value="timur">Jawa Timur</option>
            <option value="tengah">Jawa Tengah</option>
            <option value="barat">Jawa Barat</option>
        </select><br>
        <label for="jml3">Jumlah Penduduk : </label>
        <input type="number" name="jml3" id="jml3"><br>
        <input type="submit"></input>
    </form>
    
</body>
</html>