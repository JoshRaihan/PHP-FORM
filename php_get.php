<?php
    //Blok I
    $provinsi = $_GET['provinsi'];
    $kabupaten = $_GET['kabupaten'];
    $kecamatan = $_GET['kecamatan'];
    $desa = $_GET['desa'];
    
    //Blok II
    $namaRTP = $_GET['namaRTP'];
    $NIK = $_GET['NIK'];
    $jkjj = $_GET['jkjj'];
    $hsj = $_GET['hsj'];
    $namaekosistem = $_GET['namaekosistem'];
    $pmt = $_GET['pmt'];
    $km = $_GET['km'];
    $jabk = $_GET['jabk'];
    $atu = $_GET['atu'];
    $att = $_GET['att'];
    $pi = $_GET['pi'];
    $dpi = $_GET['dpi'];
    $daupi =$_GET['daupi']

    //Blok III
    $JTP = $_GET['JTP']
    $HTa1 = $_GET['HTa1']
    $HTa2 = $_GET['HTa2']
    $HTb1 = $_GET['HTb1']
    $HTb2 = $_GET['HTb2']

    //Blok IV
    $NR =$_GET['NR']
    $NT =$_GET['NT']
    $NPD =$_GET['NPD']
    $KPD =$_GET['KPD']
    $TP =$_GET['TP']
    
    //Tombol
    $tombol = $_GET['tombol'];
    
    //Blok I
    echo "<h1>Data Nelayan</h1>";
    echo "Provinsi : ".$provinsi."<br>";
    echo "Kabupaten/Kota : ".$kabupaten."<br>";
    echo "Kecamatan : ".$kecamatan."<br>";
    echo "Desa/Kelurahan : ".$desa."<br>";

    //Blok II
    echo "Nama RTP/Perusahaan Perikanan : ".$namaRTP."<br>";
    echo "Nomor Induk Kependudukan (NIK)/SIUP : ".$NIK."<br>";
    echo "Jenis Usaha : ".$jkjj."<br>";
    echo "a. Jenis Perairan : ".$hsj."<br>";
    echo "b. Nama Ekosistem : ".$namaekosistem."<br>";
    echo "Sarana Penangkapan : ".$plk."<br>";
    echo "Ukuran Perahu Kapal <br>"
    echo "a. Perahu Motor Tempel : ".$pmt."<br>";
    echo "b. Kapal Motor : ".$km."<br>";
    echo "Jumlah ABK : ".$jabk."<br>";
    echo "Jenis Alat Tangkap <br>"
    echo "a. Alat Tangkap Utama : ".$atu."<br>";
    echo "b. Alat Tangkap Tambahan : ".$att."<br>";
    echo "Wilayah Penangkapan Ikan : ".$pi."<br>";
    echo "Daerah Operasi Penangkapan Ikan : ".$dpi."<br>";
    echo "Daerah Asal Unit Penangkapan Ikan : ".$daupi."<br>";

    //Blok III
    echo "Jumlah Trip Penangkapan Bulan lalu : ".$JTP."<br>";
    echo "Jenis Alat Tangkap Utama <br>";
    echo "a. Rata rata Volume hasil tangkapan yang dijual per trip (kg) : ".$HTa1."<br>";
    echo "b. Rata rata Volume hasil tangkapan yang tidak dijual per trip (kg) : ".$HTa2."<br>";
    echo "Jenis Alat Tangkap Tambahan <br>";
    echo "a. Rata rata Volume hasil tangkapan yang dijual per trip (kg) : ".$HTb1."<br>";
    echo "b. Rata rata Volume hasil tangkapan yang tidak dijual per trip (kg) : ".$HTb2."<br>";
    
    //Blok IV
    echo "Nama Responden : ".$NR."<br>";
    echo "No. Telepon/HP : ".$NT."<br>";
    echo "Nama Pengolahan Data : ".$NPD."<br>";
    echo "Kode Pengolahan Data/NIK : ".$KPD."<br>";
    echo "Tanggal Pencatatan : ".$TP."<br>";
?>