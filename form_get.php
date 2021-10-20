<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FORMULIR PENDATAAN PRODUKSI PERIKANAN TANGKAP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		  <link rel="stylesheet" href="style 2.css" />
    </head>
    <body>
        	<H1 align ="center"> KUISIONER PENDATAAN </br> PRODUKSI PERIKANAN TANGKAP  </H1>
        <div class="container" style=margin-top:50px;>
            <form action="proses_get.php" method="get" name="">
            <table border="1" cellspacing="0" cellpadding="12" width= "100%">

        <tr>
        <th style="background-color: yellow;" colspan="2">BLOK I : KETERANGAN TEMPAT USAHA</th>
        </tr>
        <tr>
        <td width="15%" align="left">Provinsi</td>
        <td align="left" colspan="8">:<input type="text" name="provinsi"  placeholder=""/></td>
        </tr>
        <tr>
        <td align="left">Kabupaten/Kota</td>
        <td align="left" colspan="8">:<input type="text" name="kabupaten"  placeholder=""/></td>
        </tr>
        <tr>
        <td align="left">Kecamatan</td>
        <td align="left" colspan="8">:<input type="text" name="kecamatan"  placeholder=""/></td>
        </tr>
        <tr>
        <td align="left">Desa/Kelurahan</td>
        <td align="left" colspan="8">:<input type="text" name="desa"  placeholder=""/></td>
        </tr>
        </table>
        <table border="1" cellspacing="0" cellpadding="12" width= "100%">
            <tr>
                <th style="background-color: yellow;" colspan="2">BLOK II : IDENTITAS USAHA</th>
            </tr>    
            <tr>
                <td width="20% align="left">Nama RTP/Perusahaan Perikanan</td>
                <td align="left" colspan="10">:<input type="text" name="namaRTP"  placeholder=""/></td>
            </tr>
            <tr>
                <td align="left">Nomor Induk Kependudukan (NIK)/SIUP</td>
                <td align="left" colspan="10">:<input type="text" name="NIK"  placeholder=""/></td>
            </tr>
            <tr>
                <td align="left">Jenis Usaha</td>
                <td align="left" colspan="10">:&ensp;<input type="radio" id="rd" name="jkjj" value="rd">
                    <label> Penangkapan Ikan dilaut</label>
                    <input type="radio" id="rd" name="jkjj" value="rd">
                    <label> Penangkapan ikan di perairan Umum </label>
            </td>
            </tr>
            <tr>
            <td align="left">a. Jenis Perairan</td>
                <td align="left" colspan="10">:&ensp;<input type="radio" id="sgn" name="hsj" value="sgn">
                <label> Sungai </label>
                <input type="radio" id="sgn" name="hsj" value="sgn">
                <label> Danau </label>
                <input type="radio" id="sgn" name="hsj" value="sgn">
                <label> Waduk </label>
                <input type="radio" id="sgn" name="hsj" value="sgn">
                <label> Rawa </label>
                <input type="radio" id="sgn" name="hsj" value="sgn">
                <label> Atau yang Lainnya </label>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">b. Nama Ekosistem</td>
                        <td align="left" colspan="10">:<input type="text" name="namaekosistem"  placeholder="" /></td>
                    </tr>
                    <tr>
                    <td align="left">Sarana Penangkapan</td>
                        <td align="left" colspan="10">:&ensp;<input type="radio" id="srn" name="plk" value="srn">
                            <label> 1. Tanpa Perahu </label>
                            <input type="radio" id="srn" name="plk" value="srn">
                            <label> 2. Perahu Tanpa Motor </label>
                            <input type="radio" id="srn" name="plk" value="srn">
                            <label> 3. Perahu Motor Tempel </label>
                            <input type="radio" id="srn" name="plk" value="srn">
                            <label> 4. Kapal Motor </label>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Ukuran Perahu Kapal <br>a. Perahu Motor Tempel<br>b. Kapal Motor</td>
                        <td align="left" colspan="10"><br>
                            :<input type="text" name="pmt" placeholder="" /><br>
                            :<input type="text" name="km" placeholder="" />
                        </td>
                    <tr>
                        <td align="left">Jumlah ABK</td>
                        <td align="left" colspan="10">:<input type="text" name="jabk" placeholder=""/></td>
                    </tr>
                    <tr>
                        <td align="left">Jenis Alat Tangkap</td>
                        <td align="left" colspan="10"><label> Jenis Alat Tangkap </label> <br>
                            <label> a. Alat Tangkap Utama : </label>
                            <input type="text" name="atu" placeholder=""/> <br>
                            <label> b. Alat Tangkap Tambahan : </label>
                            <input type="text" name="att" placeholder=""/>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Wilayah Penangkapan Ikan</td>
                        <td align="left" colspan="10">:<input type="text" name="pi" placeholder=""/></td>
                    </tr>
                    <tr>
                        <td align="left">Daerah Operasi Penangkapan Ikan</td>
                        <td align="left" colspan="10">:<label> 1. </label>
                            <input type="text" name="dpi" placeholder=""/>
                            <label> 2. </label>
                            <input type="text" name="dpi" placeholder=""/>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Daerah Asal Unit Penangkapan Ikan</td>
                        <td align="left" colspan="10">:&ensp;<input type="radio" id="daupi" name="klm" value="daupi">
                            <label>  Dari Kabupaten Asal </label>
                            <input type="radio" id="daupi" name="klm" value="daupi">
                            <label> Dari Kabupaten Lain </label>
                        </td>
                    </tr>
                </table>

                <table border="1" cellspacing="0" cellpadding="12" width= "100%">
                    <tr>
                        <th style="background-color: yellow;" colspan="2">BLOK III : PRODUKSI PERIKANAN TANGKAP</th>
                    </tr>
                    <tr>
                        <td align="left" width="30%">Jumlah Trip Penangkapan Bulan lalu</td>
                        <td align="left" colspan="10"><br>
                            :<input type="text" name="JTP" placeholder=""/></td>
                    </tr>
                    
                    <tr>
                        <td align="left">Jenis Alat Tangkap Utama<br>
                        <ol>
                            <li>Rata rata Volume hasil tangkapan yang dijual per trip (kg)</li>
                            <li>Rata rata Volume hasil tangkapan yang tidak dijual per trip (kg)</li>
                        </ol>   
                        </td>
                        <td align="left" colspan="10"><br>
                            :<input type="text" name="HTa1" placeholder=""/><br>
                            <br>
                            :<input type="text" name="HTa2" placeholder=""/>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">Jenis Alat Tangkap Tambahan<br>
                        <ol>
                            <li>Rata rata Volume hasil tangkapan yang dijual per trip (kg)</li>
                            <li>Rata rata Volume hasil tangkapan yang tidak dijual per trip (kg)</li>
                        </ol>   
                        </td>
                        <td align="left" colspan="10"><br>
                            :<input type="text" name="HTb1" placeholder=""/><br>
                            <br>
                            :<input type="text" name="HTb2" placeholder=""/>
                        </td>
                    </tr>
                </table>

                <table border="1" cellspacing="0" cellpadding="12" width= "100%">
                    <tr>
                        <th style="background-color: yellow;" colspan="2">BLOK IV : PENGESAHAN</th>
                    </tr>
                    <tr>
                        <td width="15%" align="left">Nama Responden</td>
                        <td align="left" colspan="10">:<input type="text" name="NR" placeholder=""/></td>
                    </tr>
                    <tr>
                        <td align="left">No. Telepon/HP</td>
                        <td align="left" colspan="10">:<input type="text" name="NT" placeholder=""/></td>
                    </tr>
                    <tr>
                        <td align="left">Nama Pengolahan Data</td>
                        <td align="left" colspan="10">:<input type="text" name="NPD" placeholder=""/></td>
                    </tr>
                    <tr>
                        <td align="left">Kode Pengolahan Data/NIK</td>
                        <td align="left" colspan="10">:<input type="text" name="KPD" placeholder=""/></td>
                    </tr>
                    <tr>
                         <td> <label>Tanggal Pencatatan</label> </td>
                         <td align="left" colspan="10">:<input type="date" name="tanggal"></td>
		            </tr>
                </table>

                <table>
                    <tr>
                        <td colspan="2"><input name="tombol" type="submit" value="Simpan" class="btn btn-primary"></td>
                    </tr>
                </table>
            </form>
        </div> 
        <br>
        <br>
    </body>
</html>