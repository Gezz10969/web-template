<?php
if (isset($_POST['submit_hp_assy'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into hasil_produksi (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_assembling.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_assembling.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_hp_blow'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into hasil_produksi (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_blow.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_blow.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_hp_diecut'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into hasil_produksi (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_diecut.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_diecut.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_hp_extru'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into hasil_produksi (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_extru.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_extru.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_hp_pet'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into hasil_produksi (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_pet.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_pet.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_hp_seal'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into hasil_produksi (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_seal.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_hasil_produksi/form_hp_seal.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_waste_assy'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into waste (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_assembling.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_assembling.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_waste_blow'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into waste (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_blow.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_blow.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_waste_diecut'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into waste (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_diecut.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_diecut.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_waste_extru'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into waste (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_extru.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_extru.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_waste_pet'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into waste (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_pet.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_pet.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_waste_seal'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $no_mesin = $_POST['no_mesin'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into waste (date, username, department, shift, no_mesin, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username','$department', '$shift', '$no_mesin', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_seal.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_waste/form_waste_seal.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_borongan'])) {
    include_once 'koneksi.php';
    $date = $_POST['date'];
    $username = $_POST['username'];
    $shift = $_POST['shift'];
    $proses = $_POST['proses'];
    $item_name = $_POST['item_name'];
    $item_code = $_POST['item_code'];
    $quantity = $_POST['quantity'];
    $unit = $_POST['unit'];
    $quantity_kilo = $_POST['quantity_kilo'];

    $masuk = "INSERT into borongan (date, username, shift, proses, item_name, item_code, quantity, unit, quantity_kilo) VALUES ('$date','$username', '$shift', '$proses', '$item_name','$item_code','$quantity','$unit','$quantity_kilo')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'form/form_borongan/form_borongan.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'form/form_borongan/form_borongan.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_item'])) {
    include_once 'koneksi.php';
    $item_code = $_POST['item_code'];
    $item_name = $_POST['item_name'];
    $department = $_POST['department'];

    $masuk = "INSERT into item_list (item_code, item_name, department) VALUES ('$item_code','$item_name','$department')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'input.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'input.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}

if (isset($_POST['submit_proses'])) {
    include_once 'koneksi.php';
    $proses = $_POST['proses'];

    $masuk = "INSERT into proses_borongan (proses) VALUES ('$proses')";

    $input = mysqli_query($koneksi, $masuk) or die(mysqli_error($koneksi));

    if ($input) {
        echo "
            <script>
            window.location = 'add_proses.php';
            alert('Data Berhasil Diinput')
            </script>;";
    } else {
        echo "
            <script>
            window.location = 'add_proses.php';
            alert('Data Gagal Diinput')
            </script>;";
    }
}
