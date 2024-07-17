<?php
if (isset($_POST['simpan'])) {
    $email_website = $_POST['email_website'];
    $alamat_website = $_POST['alamat_website'];
    $nomer_telepon = $_POST['nomer_telepon'];
    $fb = $_POST['fb'];
    $ig = $_POST['ig'];
    $linkedin = $_POST['linkedin'];


    $querysetting = mysqli_query($koneksi, "SELECT * FROM setting ORDER BY id DESC");
    if (mysqli_num_rows($querysetting) > 0) {
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO setting (email_website,alamat_website,nomer_telepon,fb,ig,linkedin) VALUES
         ('$email_website', '$alamat_website', '$nomer_telepon', '$fb', '$ig', '$linkedin')");
    }
}
?>



<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="">Email Website</label>
        <input type="email" class="form-control" name="email_website" placeholder="Email Website">
    </div>
    <div class="mb-3">
        <label for="">Alamat Website</label>
        <input type="url" class="form-control" name="alamat_website" placeholder="Alamat Website">
    </div>
    <div class="mb-3">
        <label for="">Telepon Website</label>
        <input type="text" class="form-control" name="nomer_telepon" placeholder="Telepon Website">
    </div>
    <div class="mb-3">
        <label for="">Facebook</label>
        <input type="url" class="form-control" name="fb" placeholder="Facebook">
    </div>
    <div class="mb-3">
        <label for="">Instagram</label>
        <input type="url" class="form-control" name="ig" placeholder="Instagram">
    </div>
    <div class="mb-3">
        <label for="">LinkedIn</label>
        <input type="url" class="form-control" name="linkedin" placeholder="LinkedIn">
    </div>
    <div class="mb-3">
        <label for="">Logo</label>
        <input type="file" class="form-control" name="logo" placeholder="Logo">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" name="simpan" placeholder="Simpan">
    </div>

</form>