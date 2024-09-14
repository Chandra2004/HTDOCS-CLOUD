<?php
    include '../../../app/core/Database.php';
    include '../../../app/models/MailboxModel.php';
    include '../../../app/models/MilestoneModel.php';
    include '../../../app/models/ProductModel.php';

    $id = $_GET["id"];

    if( hapusMailbox($id) > 0) {
        header("Location: mailbox");
        exit;
    } else {
        echo "
                <script>
                    alert('data gagal');
                </script>
            ";
    }

    if( hapusMilestone($id) > 0) {
        header("Location: milestone");
        exit;
    } else {
        echo "
                <script>
                    alert('data gagal');
                </script>
            ";
    }

    if( hapusProduct($id) > 0) {
        header("Location: product");
        exit;
    } else {
        echo "
                <script>
                    alert('data gagal');
                </script>
            ";
    }
?>