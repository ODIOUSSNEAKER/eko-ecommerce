<?php
$querysetting = mysqli_query($koneksi, "SELECT * FROM setting ORDER BY id DESC");
if (isset($_POST['simpan'])) {
    $email_website = $_POST['email_website'];
    $alamat_website = $_POST['alamat_website'];
    $nomer_telepon = $_POST['nomer_telepon'];
    $fb = $_POST['fb'];
    $ig = $_POST['ig'];
    $linkedin = $_POST['linkedin'];
    header("location:?pg=setting&insert=berhasil");

    if (mysqli_num_rows($querysetting) > 0) {
        //update
        $id = mysqli_insert_id($koneksi);
        $update = mysqli_query($koneksi, "UPDATE setting 
        SET email_website = '$email_website', 
        alamat_website = '$alamat_website', 
        nomer_telepon = '$nomer_telepon', 
        fb = '$fb', 
        ig = '$ig', 
        linkedin = '$linkedin' WHERE id = 1");
        header("location:?pg=setting&edit=berhasil");
        if ($update) {
        } else {
            $insert = mysqli_query($koneksi, "INSERT INTO setting (email_website,alamat_website,nomer_telepon,fb,ig,linkedin) VALUES
            ('$email_website', '$alamat_website', '$nomer_telepon', '$fb', '$ig', '$linkedin')");
        }
    }
}
$rowsetting = mysqli_fetch_assoc($querysetting)
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="">Email Website</label>
        <input value="<?= $rowsetting['email_website'] ?>" type="email" class="form-control" name="email_website" placeholder="Email Website">
    </div>
    <div class="mb-3">
        <label for="">Alamat Website</label>
        <input value="<?= $rowsetting['alamat_website'] ?>" type="url" class="form-control" name="alamat_website" placeholder="Alamat Website">
    </div>
    <div class="mb-3">
        <label for="">Telepon Website</label>
        <input value="<?= $rowsetting['nomer_telepon'] ?>" type="text" class="form-control" name="nomer_telepon" placeholder="Telepon Website">
    </div>
    <div class="mb-3">
        <label for="">Facebook</label>
        <input value="<?= $rowsetting['fb'] ?>" type="url" class="form-control" name="fb" placeholder="Facebook">
    </div>
    <div class="mb-3">
        <label for="">Instagram</label>
        <input value="<?= $rowsetting['ig'] ?>" type="url" class="form-control" name="ig" placeholder="Instagram">
    </div>
    <div class="mb-3">
        <label for="">LinkedIn</label>
        <input value="<?= $rowsetting['linkedin'] ?>" type="url" class="form-control" name="linkedin" placeholder="LinkedIn">
    </div>
    <div class="mb-3">
        <label for="">Logo</label>
        <input type="file" class="form-control" name="logo" placeholder="Logo">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" name="simpan" placeholder="Simpan">
    </div>

</form>