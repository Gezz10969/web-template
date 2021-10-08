<?php
if (isset($_POST['submit'])) {
    include_once 'koneksi.php';
    if (!empty($_POST['date']) && !empty($_POST['shift']) && !empty($_POST['no_mesin']) && !empty($_POST['item_name']) && !empty($_POST['item_code']) && !empty($_POST['quantity']) && !empty($unit = $_POST['unit'])) {
        $date = $_POST['date'];
        $shift = $_POST['shift'];
        $no_mesin = $_POST['no_mesin'];
        $item_name = $_POST['item_name'];
        $item_code = $_POST['item_code'];
        $quantity = $_POST['quantity'];
        $unit = $_POST['unit'];

        $masuk = "INSERT into hasil_produksi_assembling (date, shift, no_mesin, item_name, item_code, quantity, unit) VALUES ('$date', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit')";

        $input = mysqli_query($koneksi, $masuk) or die(mysqli_error());

        if ($input) {
            echo "
            <script>
            window.location = 'index.php';
            alert('Data Berhasil Diinput')
            </script>;";
        } else {
            echo "
            <script>
            window.location = 'index.php';
            alert('Data Gagal Diinput')
            </script>;";
        }
    } else {
        echo "Harap isi semua field!!";
    }
}
