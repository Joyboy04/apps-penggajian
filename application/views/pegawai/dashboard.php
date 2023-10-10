
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<div class="alert alert-success font-weight-bold mb-3" style="width: 65%;">
    Selamat Datang <?php echo $this->session->userdata('nama_pegawai') ?> Semoga Harimu Menyenangkan!</div>

<div class="card" style="margin-bottom: 120px; width: 60%">
<div class="card-header font-weight-bold bg-primary text-white">
Data Pegawai
</div>

<?php foreach($pegawai as $p) : ?>
<div class="class card-body">
<div class="row">
    <div class="col-md-5">
        <img src="<?php echo base_url().'assets/photo/'.$p->photo ?>" style="width: 300px;">
    </div>
    <div class="col-md-7">
        <table class="table mt-4">
            <tr>
                <td>Nama Pegawai</td>
                <td>:</td>
                <td><?php echo $p->nama_pegawai ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo $p->jenis_kelamin ?></td>
            </tr>
            <tr>
                <td>Tanggal Masuk</td>
                <td>:</td>
                <td><?php echo $p->tanggal_masuk ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><?php echo $p->status ?></td>
            </tr>
        </table>
    </div>
    </div>
</div>
<?php endforeach; ?>
</div>

</div>

</div>



