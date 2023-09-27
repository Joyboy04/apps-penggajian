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
            margin-bottom: 10px;
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
<body>
    
        <h1>PT. INDONESIA BANGKIT</h1>
        <h2>Laporan Absensi Pegawai</h2>
        <h3>-------------------------------------------------------------------------------------------------------------</h3>
        <div class="info">
            <?php
            $bulan = $this->input->post('bulan');
            $tahun = $this->input->post('tahun');
            ?>

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

        </div>

        <table class="table table-bordered table-striped">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Pegawai</th>
                <th class="text-center">NIK</th>
                <th class="text-center">Jabatan</th>
                <th class="text-center">Hadir</th>
                <th class="text-center">Sakit</th>
                <th class="text-center">Alpha</th>
            </tr>
            
            <?php $no = 1; foreach ($lap_kehadiran as $l) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $l->nama_pegawai ?></td>
                    <td><?php echo $l->nik ?></td>
                    <td><?php echo $l->nama_jabatan ?></td>
                    <td><?php echo $l->hadir ?></td>
                    <td><?php echo $l->sakit ?></td>
                    <td><?php echo $l->alpha ?></td>
 
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="signature">
            <p>Jakarta, <?php echo date("d M Y") ?><br>HRD</p>
            <br>
            <br>
            <p>_____________________________</p>
        </div>
    
</body>
</html>

<script type="text/javascript">
    window.print();
    </script>