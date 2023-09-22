
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<div class="card mb-3">
  <div class="card-header bg-primary text-white">
    Filter Data Absensi
  </div>
  <div class="card-body">
  <form class="form-inline">
  <div class="form-group mb-2 ml-2">
    <label for="staticEmail2">Bulan: </label>
     <select class="form-control ml-3" name="bulan">
        <option value="">--Pilih Bulan--</option>
        <option value="01">Januari</option>
        <option value="02">Februari</option>
        <option value="03">Maret</option>
        <option value="04">April</option>
        <option value="05">Mei</option>
        <option value="06">Juni</option>
        <option value="07">Juli</option>
        <option value="08">Agustus</option>
        <option value="09">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>

     </select>
  </div>

  <div class="form-group mb-2 ml-5">
    <label for="staticEmail2">Tahun: </label>
     <select class="form-control ml-3" name="bulan">
        <option value="">--Pilih Tahun--</option>
        <?php $tahun = date('Y'); 
        for($i=2020;$i<$tahun+3;$i++) {?>
        <option value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php } ?>

     </select>
        </div>
  <button type="submit" class="btn btn-primary mb-2 ml-auto"><I class="fas fa-eye"></I>Tampilkan Data</button>
  <a href="" class="btn btn-success mb-2 ml-3"><i class="fas fa-plus"></i>Input Kehadiran</a>
</form>
  </div>
<div class="alert alert-info">
    Menampilkan Data Kehadiran Pegawai Bulan:  Tahun:
</div>
</div>




</div>

</div>



