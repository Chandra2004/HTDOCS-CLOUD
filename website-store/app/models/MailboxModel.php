<?php
    include '../../../app/core/Database.php';
    // include '../../../app/models/DeleteModel.php';
    
    // mailbox > list-message
    $sqlKarir = "SELECT * FROM mailbox";
    $resultKarir = mysqli_query($conn, $sqlKarir);
    $dataKarir = mysqli_fetch_all($resultKarir, MYSQLI_ASSOC);

    // mailbox > delete-mailbox
    function hapusMailbox($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mailbox WHERE id = $id");

        return mysqli_affected_rows($conn);
    }
