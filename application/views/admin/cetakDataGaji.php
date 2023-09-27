<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        h1 {
            text-align: center;
            color: #007bff;
            font-size: 36px;
            margin-bottom: 20px;
        }
        h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .info {
            margin-bottom: 20px;
        }
        .signature {
            text-align: right;
            margin-top: 20px;
        }
        .signature p {
            margin: 0;
            font-style: italic;
        }
    </style>
</head>
<?php 
    if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
      $bulan = $_GET['bulan'];
      $tahun = $_GET['tahun'];
      $bulantahun= $bulan.$tahun;
    }else{
      $bulan = date('m');
      $tahun = date('Y');
      $bulantahun= $bulan.$tahun;
    }

  ?>
<body>
    <div class="container">
        <h1>PT. INDONESIA BANGKIT</h1>
        <h2>Daftar Gaji Pegawai</h2>
        <div class="info">
            <table>
                <tr>
                    <td>Bulan</td>
                    <td>:</td>
                    <td><?php echo $bulan ?></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><?php echo $tahun ?></td>
                </tr>
            </table>
        </div>

        <table>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">NIK</th>
                <th class="text-center">Nama Pegawai</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Jabatan</th>
                <th class="text-center">Gaji Pokok</th>
                <th class="text-center">Tj. Transport</th>
                <th class="text-center">Uang Makan</th>
                <th class="text-center">Potongan</th>
                <th class="text-center">Total Gaji</th>
            </tr>

            <?php foreach ($potongan as $p) : ?>
                <?php $alpha = $p->jml_potongan; ?>
            <?php endforeach; ?>
            
            <?php $no = 1; foreach ($cetakGaji as $g) : ?>
                <?php $potongan = $g->alpha * $alpha; ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $g->nik ?></td>
                    <td><?php echo $g->nama_pegawai ?></td>
                    <td><?php echo $g->jenis_kelamin ?></td>
                    <td><?php echo $g->nama_jabatan ?></td>
                    <td>Rp.<?php echo number_format($g->gaji_pokok, 0, ',', '.') ?></td>
                    <td>Rp.<?php echo number_format($g->tj_transport, 0, ',', '.') ?></td>
                    <td>Rp.<?php echo number_format($g->uang_makan, 0, ',', '.') ?></td>
                    <td>Rp.<?php echo number_format($potongan, 0, ',', '.') ?></td>
                    <td>Rp.<?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan, 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="signature">
            <p>Jakarta, <?php echo date("d M Y") ?><br>Finance</p>
            <br>
            <br>
            <p>_____________________________</p>
        </div>
    </div>
</body>
</html>
