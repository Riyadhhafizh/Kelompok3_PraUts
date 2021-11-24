<html>
 <head>
    <title>Input Data Customer</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>desain/css/style.css">
</head>
<body>
    <center>
        <h1>Input Data Customer</h1>
		<label style="color:#FF0000">< ?php echo validation_errors(); ?></label>
    </center>
    <form action="<?php echo base_url(). 'index.php/restaurant/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
        <table style="margin:20px auto;">
        <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <select name="kelas" id="kelas"></select>
                    <option>--Pilih Kelas--</option>
                    <option value="VIP">VIP</option>
                    <option value="Reguler">Reguler</option>
                    <option value="Privat">Privat</option>
                </td>
            </tr>
            <tr>
                <td>Acara</td>
                <td><input type="text" name="acara"></td>
            </tr>
            <tr>
                <th>waktu</th>
                <td>:</td>
                <td>
                    <select name="waktu" id="waktu"></select>
                    <option>--Pilih waktu--</option>
                    <option value="Weekday">Weekday</option>
                    <option value="Weekend">Weekend</option>
                </td>
            </tr>
			<tr>
                <td>Tanggal</td>
                <td><input type="text" name="tanggal"></td>
			</tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"> <input type="reset" value="Batal"> <?php echo anchor('restaurant/index','<input type=button value=Kembali>'); ?></td>
            </tr>
        </table>
    </form>
</body>
</html>