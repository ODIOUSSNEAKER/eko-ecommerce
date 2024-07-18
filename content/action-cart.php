<?php
if (!isset($_SESSION['id_member'])) {
    header("location:?pg=member&message=Upps-Harus-Register-dulu");
    }else{
        header(location:);

    }

?>