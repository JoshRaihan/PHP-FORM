<?php
//cek button    
    if ($_POST['Submit'] == "Submit") {
    $id_nelayan    = $_POST['id_nelayan'];
    $nama		   = $_POST['nama'];
    $daerah_tangkapan   = $_POST['daerah_tangkapan'];
    $alamat            = $_POST['alamat'];
    $telepon        = $_POST['telepon'];

    <?php
    }
    
    $input    ="INSERT INTO nelayan (id_nelayan,nama,daerah_tangkapan,alamat,telepon) VALUES ('$id_nelayan','$nama','$daerah_tangkapan','$alamat','$telepon')";
    $query_input =mysql_query($input);
    if ($query_input) {

    ?>
        <script language="JavaScript">
        alert('Input Data Berhasil');
        document.location='form.php';
        </script>
    <?php
    }
    else {

    echo "Input Data  Gagal!, Silahkan diulangi!";
    }
  
}
?>