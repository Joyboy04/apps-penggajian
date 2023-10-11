
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<table class="table table-bordered table-striped text-center">
    <tr>
        <th>Bulan/Tahun</th>
        <th>Gaji Pokok</th>
        <th>Tj. Transport</th>
        <th>Uang Makan</th>
        <th>Potongan</th>
        <th>Total Gaji</th>
        <th>Cetak Slip</th>
    </tr>
    <?php foreach($potongan as $p) : ?>
       <?php $potongan = $p->jml_potongan; ?>
    <?php endforeach; ?>

    <?php foreach($gaji as $g) : ?>
    <?php $pot_gaji = $g->alpha * $potongan; ?>
    <?php $g->pot_gaji = $pot_gaji; ?>
    <tr>
        <td><?php echo $g->bulan ?></td>
        <td>Rp.<?php echo number_format($g->gaji_pokok, 0, ',', '.') ?></td>
        <td>Rp.<?php echo number_format($g->tj_transport, 0, ',', '.') ?></td>
        <td>Rp.<?php echo number_format($g->uang_makan, 0, ',', '.') ?></td>
        <td>Rp.<?php echo number_format($g->pot_gaji, 0, ',', '.') ?></td>
        <td>Rp.<?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $g->pot_gaji, 0, ',', '.') ?></td>
        <td>
            <center>
                <a href="<?php echo base_url('pegawai/dataGaji/cetakSlip/'.$g->id_kehadiran) ?>" class="btn btn-sm btn-primary"><i class="fas fa-print"></i></a>
            </center>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


</div>

</div>



