
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<?php echo $this->session->flashdata('pesan'); ?>

<a class="btn btn-sm btn-primary mb-2 mt-2" href="<?php echo base_url('admin/potonganGaji/tambahData') ?>"><i class="fas fa-plus"></i>Tambah Data</a>


<table class="table table-bordered table-striped">
    <tr>
        <td class="text-center">No</td>
        <td class="text-center">Jenis Potongan</td>
        <td class="text-center">Jumlah Potongan</td>
        <td class="text-center">Action</td> 
    </tr>

    <?php $no=1; foreach($pot_gaji as $p) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $p->potongan ?></td>
            <td><?php echo number_format($p->jml_potongan,0,',','.') ?></td>
            <td>
                <center>
                <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/potonganGaji/updateData/'.$p->id) ?>"><i class="fas fa-edit"></i></a>
                <a onclick="return confirm('Yakin Ingin Hapus?')"class="btn btn-sm btn-danger" href="<?php echo base_url('admin/potonganGaji/deleteData/'.$p->id) ?>"><i class="fas fa-trash"></i></a>
                </center>
            </td>
        </tr>

        <?php endforeach; ?>
</table>
</div>

</div>



