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
    
        <h1>PT. INDONESIA BANGKIT</h1>
        <h2>Slip Gaji Pegawai</h2>
        <hr style="width: 60%; border-width: 5px; color: black">
        <div class="info">
            
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
 

        <?php foreach ($potongan as $p) {
             $potongan = $p->jml_potongan;
        } ?>
            

            <?php foreach ($print_slip as $ps) : ?>
                <?php $potongan_gaji = $ps->alpha * $potongan; ?>
            <table style="width: 100%">
                <tr>
                    <td width="20%">Nama Pegawai</td>
                    <td width="2%">:</td>
                    <td><?php echo $ps->nama_pegawai ?></td>
                </tr>

                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><?php echo $ps->nik ?></td>
                </tr>

                <tr>
                    <td>Nama jabatan</td>
                    <td>:</td>
                    <td><?php echo $ps->nama_jabatan ?></td>
                </tr>

                <tr>
                    <td>Bulan</td>
                    <td>:</td>
                    <td><?php echo substr($ps->bulan, 0,2)  ?></td><td><?php echo $bulan ?></td>
                </tr>


                <tr>
                    <td>Tahun</td>
                    <td>:</td>
                    <td><?php echo substr($ps->bulan, 2,4)  ?></td>
                </tr>
        </table>

        <table class="table table-bordered table-striped mt-3" width="100%">
            <tr>
                <th class="text-center"  width="5%">No</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center">Jumlah</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Gaji Pokok</td>
                <td>Rp.<?php echo number_format($ps->gaji_pokok, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Tunjangan Transportasi</td>
                <td>Rp.<?php echo number_format($ps->tj_transport, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Uang Makan</td>
                <td>Rp.<?php echo number_format($ps->uang_makan, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Potongan</td>
                <td>Rp.<?php echo number_format($potongan_gaji, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th colspan="2" style="text-align: center;">Total Gaji</th>
                <td>Rp.<?php echo number_format($ps->gaji_pokok + $ps->tj_transport + $ps->uang_makan - $potongan_gaji, 0, ',', '.') ?></td>
            </tr>

        </table>
                

        </div>


        <div class="signature">
            <table width="100%">
                <tr>
                    <td></td>
                    <td>
                        <p>Pegawai</p>
                        <br>
                        <br>
                        <p class="font-weight-bold"><?php echo $ps->nama_pegawai ?></p>
                    </td>
                    <td width="200px">
                        <p>Jakarta, <?php echo date("d M Y") ?><br>Finance</p>
                        <br>
                        <br>
                        <p>_____________________________</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <?php endforeach; ?>
    
</body>
</html>

<script type="text/javascript">
    window.print();
    </script>