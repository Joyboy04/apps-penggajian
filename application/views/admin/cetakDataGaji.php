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
        h1 {
            text-align: center;
            color: #007bff;
            font-size: 36px;
            margin-bottom: 20px;
        }
        h2 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 5px;
        }
        h3 {
            text-align: center;
            margin-bottom: 5px;
        }
        .info {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
            <?php
            $bulan = $this->input->post('bulan');
            $tahun = $this->input->post('tahun');
            ?>
        <h1>PT. INDONESIA BANGKIT</h1>
        <h2>Daftar Gaji Pegawai</h2>
        <hr style="width: 60%; border-width: 5px; color: black">
        <div class="info">
            <table width="100%">
                <tr>
                    <td width="20%">Bulan</td>
                    <td width="2%">:</td>
                    <td><?php echo $bulan ?></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><?php echo $tahun ?></td>
                </tr>
            </table>
        </div>

        <table class="table table-bordered table-striped text-center mt-3" width="100%">
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

        <table style="text-align:right;" width="100%">
        <td width="200px">
                        <p>Jakarta, <?php echo date("d M Y") ?><br>Finance</p>
                        <br>
                        <br>
                        <p>________________________</p>
                    </td>
                </tr>
            </table>
</body>
</html>

<script type="text/javascript">
    window.print();
    </script>