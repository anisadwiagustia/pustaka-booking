<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form data siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('siswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>
                        <input type="text" value="<?= set_value('nama') ?>" name="nama" id="nama">
                    </td>
                </tr>


                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" value="<?= set_value('nis') ?>" name="nis" id="nis">
                    </td>
                </tr>


                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" value="<?= set_value('kelas') ?>" name="kelas" id="kelas">
                    </td>
                </tr>

                <tr>
                    <th>Tanggal lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" value="<?= set_value('tgl') ?>" name="tgl" id="tgl">
                    </td>
                </tr>


                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" value="<?= set_value('tempat') ?>" name="tempat" id="tempat">
                    </td>
                </tr>


                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" value="<?= set_value('alamat') ?>" name="alamat" id="alamat">
                    </td>
                </tr>


                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" value="Laki-laki" name="jkel" id="jkel">Laki-laki
                        <input type="radio" value="Perempuan" name="jkel" id="jkel">Perempuan
                    </td>
                </tr>


                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">--</option>
                            <option value="2">Islam</option>
                            <option value="3">Kristen</option>
                            <option value="4">Katolik</option>
                            <option value="5">Budha</option>
                            <option value="6">Hindu</option>
                            <option value="7">Protestan</option>
                            <option value="8">Konghucu</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
</body>

</html>