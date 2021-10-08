<?php
//import koneksi ke database
?>
<html>

<head>
    <title>Stock Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <h2>Stock Bahan</h2>
        <h4>(Inventory)</h4>
        <div class="data-tables datatable-dark">

            <table class="table table-bordered" id="tabel_hasil_produksi_assembling" width="100%" cellspacing="0">
                <?php
                $filename = "hasil produksi-" . date('Ymd') . ".xls";
                header('Content-Type: application/vnd-ms-excel');
                header('Content-Disposition: attachment; filename="' . $filename . '";');
                ?>
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Date</td>
                        <td>Shift</td>
                        <td>No Mesin</td>
                        <td>Item Name</td>
                        <td>Item Code</td>
                        <td>Quantity</td>
                        <td>Unit</td>
                    </tr>
                </thead>

                <?php
                include_once 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "select * from hasil_produksi_assembling");
                while ($d = mysqli_fetch_array($data)) {
                    $date = $d['date'];
                    $shift = $d['shift'];
                    $no_mesin = $d['no_mesin'];
                    $item_name = $d['item_name'];
                    $item_code = $d['item_code'];
                    $quantity = $d['quantity'];
                    $unit = $d['unit'];
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $date; ?></td>
                            <td><?php echo $shift; ?></td>
                            <td><?php echo $no_mesin; ?></td>
                            <td><?php echo $item_name; ?></td>
                            <td><?php echo $item_code; ?></td>
                            <td><?php echo $quantity; ?></td>
                            <td><?php echo $unit; ?></td>
                        </tr>
                    <?php
                }
                    ?>
                    </tbody>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#tabel_hasil_produksi_assembling').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>