<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{ asset('dashboard') }}/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <center>
        <h3>{{ $teks }}</h3>
        <hr>
        <a href= {{ Route ('mahasiswa.pendaftaran') }}>DAFTAR</a>
        &nbsp; &nbsp; | &nbsp; &nbsp;
        <a href= {{ Route ('mahasiswa.ujian') }}>UJIAN</a>
        &nbsp; &nbsp; | &nbsp; &nbsp;
        <a href= {{ Route ('mahasiswa.nilai') }}>NILAI</a>
    </center>

</body>
</html>
