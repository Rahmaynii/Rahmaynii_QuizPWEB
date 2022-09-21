
<!DOCTYPE html>

<html>

<head>

 <title>Pendaftaran Berhasil!</title>

 <style type="text/css">

body {

    margin: 0;

    padding: 0;

   }

 * {

  box-sizing: border-box;

}

form {

  padding: 1em;

  background: #f9f9f9;

  border: 1px solid #c1c1c1;

  margin-top: 2rem;

  max-width: 600px;

  margin-left: auto;

  margin-right: auto;

  padding: 1em;

}

form input {

  margin-bottom: 1rem;

  background: #fff;

  border: 1px solid #9c9c9c;

}

form button {

  background: lightgrey;

  padding: 0.7em;

  border: 0;

}



form button:hover {

  background: blue;

  color: white;

}

form span a{

  background: lightblue;

  padding: 0.7em;

  border: 0;

  text-decoration: none;

  color: black;

  text-align: center;

}



form span a:hover {

  background: blue;

  color: white;

}





label {

  text-align: right;

  display: block;

  padding: 0.5em 1.5em 0.5em 0;

}

input {

  width: 100%;

  padding: 0.7em;

  margin-bottom: 0.5rem;

}

input:focus {

  outline: 3px solid blue;

}

select {

  width: 100%;

  padding: 0.7em;

  margin-bottom: 0.5rem;

}

select:focus {

  outline: 3px solid blue;

}

@media (min-width: 400px) {

  form {

    overflow: hidden;

  }

  label {

    float: left;

    width: 200px;

  }

  input {

    float: left;

    width: calc(100% - 200px);

  }



    select {

    float: left;

    width: calc(100% - 200px);

  }

  button {

    float: right;

    width: calc(100% - 200px);

  }

 </style>

 </style>

</head>

<body>

<form>

  <h1>Pendaftaran Kamu Berhasil!</h1>

  <p>

   Nama Peserta: <?php echo $_GET["nama_peserta"]; ?><br>

   TTL: <?php echo $_GET["tempat_lahir"]; ?>, <?php echo $_GET["tanggal_lahir"]; ?><br>

   Utusan Unit TKA/TPA: <?php echo $_GET["utusan_unit"]; ?><br>

   Kelurahan/Desa: <?php echo $_GET["kelurahan_desa"]; ?><br>

   Kecamatan: <?php echo $_GET["nama_kecamatan"]; ?><br>

   No.HP: <?php echo $_GET["no_hp"]; ?>

   Jenis Lomba: <?php echo $_GET["jenis_lomba"]; ?><br>

  </p>

</form>

</body>

</html> 