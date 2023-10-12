<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <div class="card" style="width: 60%;">
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('pegawai/gantiPassword/gantiPasswordAksi') ?>">
                <div class="form-group">
                    <label>Masukkan Password Baru</label>
                    <input type="password" name="passBaru" class="form-control" id="passwordField">
                    <?php echo form_error('passBaru', '<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">
                    <label>Masukkan Ulang Password</label>
                    <input type="password" name="ulangPass" class="form-control" id="confirmPasswordField">
                    <?php echo form_error('ulangPass', '<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="togglePasswordVisibility()"> Show Password
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("passwordField");
        var confirmPasswordField = document.getElementById("confirmPasswordField");
        var checkbox = document.querySelector('input[type="checkbox"]');
        if (checkbox.checked) {
            passwordField.type = "text";
            confirmPasswordField.type = "text";
        } else {
            passwordField.type = "password";
            confirmPasswordField.type = "password";
        }
    }
</script>
