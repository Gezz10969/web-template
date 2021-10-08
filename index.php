<!--link item name dgn item code, download as csv button-->
<?php
include_once 'koneksi.php';

// mysql select query
$query = "SELECT * FROM `item_assembling`";

// for method 2

$item_assembling = mysqli_query($koneksi, $query);

$item_code = "";
$item_name = "";

while ($item = mysqli_fetch_array($item_assembling)) {
    $item_code = $item_code . "<option>$item[0]</option>";
    $item_name = $item_name . "<option>$item[1]</option>";
}

?>

<!DOCTYPE html>
<html>
<!--process pilihan-->

<head>
    <style>
        body {
            font-family: Arial;
        }

        input[type=radio],
        input[type=number],
        input[type=date],
        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        input[type=submit] {
            width: 100%;
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type=reset] {
            width: 100%;
            background-color: #FCF951;
            color: #422057ff;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        div.container {
            border-radius: 5px;
            background-color: #636363;
            padding: 5px 20px;
        }

        .center {
            margin: auto;
            width: fit-content;
            padding: 10px;
        }

        .btn {
            display: inline-block;
            width: fit-content;
            background-color: #04AA6D;
            border: none;
            color: white;
            font-size: large;
            border-radius: 4px;
            font-weight: bold;
            margin: 5px;
            top: 50%;
            left: 50%;
            padding: 10px;
        }

        .active,
        .btn:hover {
            background-color: #636363;
            color: white;
        }

        button {
            display: inline-block;
            width: fit-content;
            background-color: #d6e412;
            border: none;
            color: black;
            font-size: large;
            border-radius: 4px;
            font-weight: bold;
            margin: 5px;
            top: 50%;
            left: 50%;
            padding: 10px;
        }

        button:hover {
            background-color: black;
            color: #d6e412;
        }

        label {
            color: white;
            font-weight: bold;
            font-size: large;
        }

        i {
            color: yellow;
            font-weight: normal;
            font-size: small;
        }

        .hide {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
</head>

<body>
    <div class="center">
        <button class="btn" onclick="openFormHasilProduksi()">Hasil Produksi</button>
        <button class="btn" onclick="openFormWaste()">Waste</button>
        <button class="btn" onclick="openformWasteBorongan()">Borongan</button>
    </div>


    <!--Start Form Hasil Produksi-->
    <div id="formHasilProduksi" class="container" style="display: none;">
        <div class="center">
            <button type="button" onclick="openFormHasilProduksiAssembling()">Assembling</button>
            <button type="button" onclick="openFormHasilProduksiBlowing()">Blowing</button>
            <button type="button" onclick="openFormHasilProduksiDieCut()">DieCut</button>
            <button type="button" onclick="openFormHasilProduksiExtru()">Extru</button>
            <button type="button" onclick="openFormHasilProduksiPET()">PET</button>
            <button type="button" onclick="openFormHasilProduksiSeal()">Seal</button>
        </div>
    </div>

    <!--start Hasil Produksi Assembling-->
    <div id="formHasilAssembling" class="container" style="display: none;">
        <form action="submit.php" method="POST">
            <h1 style="text-align: center; color: white;">Hasil Produksi Assembling</h1>

            <label for="date">Date</label>
            <input type="date" name="date" required>

            <label for="shift">Shift</label>
            <select name="shift" required>
                <option value="" disabled selected hidden>Klik untuk memilih</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>

            <label for="noMesin">No mesin</label>
            <select name="no_mesin">
                <option value="">Klik untuk memilih</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>

            <label for="item_name">Item Name</label>
            <select name="item_name" required>
                <option value="">Ketik Item name</option>
                <?php echo $item_name; ?>
            </select>

            <label for="item_code"> Item Code</label>
            <select name="item_code" required>
                <option value="">Ketik Item Code</option>
                <?php echo $item_code; ?>
            </select>

            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" placeholder="contoh : 1500">

            <label for="unit">Unit</label>
            <select name="unit" required>
                <option value="" disabled selected hidden>Klik untuk memilih</option>
                <option value="pcs">Pcs</option>
                <option value="dus">Dus</option>
                <option value="set">Set</option>
                <option value="kg">Kg</option>
            </select>

            <input type="reset" value="Reset">
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
    <!--End Hasil Produksi Assembling-->

    <div id="formWaste" class="container" style="display: none;">
        <form action="/action_page.php">
            <h1 style="text-align: center; color: white;">Waste</h1>

            <label for="date">Date</label>
            <input type="date" name="date" required>

            <label for="shift">Shift</label>
            <select name="shift" required>
                <option value="" disabled selected hidden>Klik untuk memilih</option>
                <option value="satu">1</option>
                <option value="dua">2</option>
            </select>

            <label for="item_code"> Item Code <i>Abaikan</i></label>
            <input type="text" name="item_code" value="xxx" readonly>

            <label for="item_name">Item Name <i>Abaikan</i></label>
            <input type="text" name="item_name" value="xxx" readonly>

            <label for="quantity_waste">Quantity Waste</label>
            <input type="text" name="quantity_waste" placeholder="contoh : 1500">

            <label for="quantity_rework">Quantity Rework</label>
            <input type="text" name="quantity_rework" placeholder="contoh : 1500">

            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </form>
    </div>

    <div id="formBorongan" class="container" style="display: none;">
        <form action="/action_page.php">
            <h1 style="text-align: center; color: white;">Borongan</h1>

            <label for="date">Date</label>
            <input type="date" name="date" required>

            <label for="shift">Shift</label>
            <select name="shift" required>
                <option value="" disabled selected hidden>Klik untuk memilih</option>
                <option value="satu">1</option>
                <option value="dua">2</option>
            </select>

            <label for="item_code"> Item Code <i>Abaikan</i></label>
            <input type="text" name="item_code" value="xxx" readonly>

            <label for="item_name">Item Name <i>Abaikan</i></label>
            <input type="text" name="item_name" value="xxx" readonly>

            <label for="process">Process</label>
            <input type="text" name="process">

            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" placeholder="contoh : 1500">

            <input type="reset" value="Reset">
            <input type="submit" value="Submit">
        </form>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('select').selectize({
                sortField: 'text'
            });
        });
        //start script Hasil Produksi
        function openFormHasilProduksi() {
            document.getElementById("formHasilProduksi").style.display = "block";
            document.getElementById("formWaste").style.display = "none";
            document.getElementById("formBorongan").style.display = "none";
        }
        //start script Hasil Produksi Assembling
        function openFormHasilProduksiAssembling() {
            document.getElementById("formHasilAssembling").style.display = "block";
            document.getElementById("formHasilBlowing").style.display = "none";
            document.getElementById("formHasilDieCut").style.display = "none";
            document.getElementById("formHasilExtru").style.display = "none";
            document.getElementById("formHasilPET").style.display = "none";
            document.getElementById("formHasilSeal").style.display = "none";
        }
        //end script Hasil Produksi Assembling

        //start script Hasil Produksi Blowing
        function openFormHasilProduksiDieCut() {
            document.getElementById("formHasilAssembling").style.display = "none";
            document.getElementById("formHasilBlowing").style.display = "block";
            document.getElementById("formHasilDieCut").style.display = "none";
            document.getElementById("formHasilExtru").style.display = "none";
            document.getElementById("formHasilPET").style.display = "none";
            document.getElementById("formHasilSeal").style.display = "none";
        }
        //end script Hasil Produksi Blowing

        //start script Hasil Produksi DieCut
        function openFormHasilProduksiDieCut() {
            document.getElementById("formHasilAssembling").style.display = "none";
            document.getElementById("formHasilBlowing").style.display = "none";
            document.getElementById("formHasilDieCut").style.display = "block";
            document.getElementById("formHasilExtru").style.display = "none";
            document.getElementById("formHasilPET").style.display = "none";
            document.getElementById("formHasilSeal").style.display = "none";
        }
        //end script Hasil Produksi DieCut

        //start script Hasil Produksi Extru
        function openFormHasilProduksiExtru() {
            document.getElementById("formHasilAssembling").style.display = "none";
            document.getElementById("formHasilBlowing").style.display = "none";
            document.getElementById("formHasilDieCut").style.display = "none";
            document.getElementById("formHasilExtru").style.display = "block";
            document.getElementById("formHasilPET").style.display = "none";
            document.getElementById("formHasilSeal").style.display = "none";
        }
        //end script Hasil Produksi Extru

        //start script Hasil Produksi PET
        function openFormHasilProduksiPET() {
            document.getElementById("formHasilHasilAssembling").style.display = "none";
            document.getElementById("formHasilBlowing").style.display = "none";
            document.getElementById("formHasilDieCut").style.display = "none";
            document.getElementById("formHasilExtru").style.display = "none";
            document.getElementById("formHasilPET").style.display = "block";
            document.getElementById("formHasilSeal").style.display = "none";
        }
        //end script Hasil Produksi PET

        //start script Hasil Produksi Seal
        function openFormHasilProduksiSeal() {
            document.getElementById("formHasilAssembling").style.display = "none";
            document.getElementById("formHasilBlowing").style.display = "none";
            document.getElementById("formHasilDieCut").style.display = "none";
            document.getElementById("formHasilExtru").style.display = "none";
            document.getElementById("formHasilPET").style.display = "none";
            document.getElementById("formHasilSeal").style.display = "block";
        }
        //end script Hasil Produksi Seal
        //end script Hasil Produksi

        function openFormWaste() {
            document.getElementById("formWaste").style.display = "block";
            document.getElementById("formHasilProduksi").style.display = "none";
            document.getElementById("formBorongan").style.display = "none";
        }

        function openformWasteBorongan() {
            document.getElementById("formBorongan").style.display = "block";
            document.getElementById("formHasilProduksi").style.display = "none";
            document.getElementById("formWaste").style.display = "none";
        }
    </script>
</body>

<!--<select name="country" id="showPilihan">
                <option value="" disabled selected hidden>Pilih</option>
                <option value="produksi1">Produksi 1</option>
                <option value="produksi2">Produksi 2</option>
            </select>

            <div id="prod1" style="display: none;">
                <label for="opsi1">Submenu Produksi 1</label>
                <input type="text" placeholder="text">

                <label for="opsi2">Submenu Produk 1</label>
                <input type="text" placeholder="text">
            </div>

            <div id="prod2" style="display: none;">
                <label for="opsi1">Submenu Produksi 2</label>
                <input type="text" placeholder="text">

                <label for="opsi2">Submenu Produk 2</label>
                <input type="text" placeholder="text">
            </div>

            <script>
                $('#showPilihan').on('change', function () {
                    if (this.value == 'produksi1') {
                        $("#prod2").hide();
                        $("#prod1").show();
                    }
                    else if (this.value == 'produksi2') {
                        $("#prod1").hide();
                        $("#prod2").show();
                    }
                }).trigger("change");

                var qrcode = document.getElementById("myBtn");
                var btns = qrcode.getElementsByClassName("btn");
                for (var i = 0; i < btns.length; i++) {
                    btns[i].addEventListener("click", function () {
                        var current = document.getElementsByClassName("active");
                        current[0].className = current[0].className.replace(" active", "");
                        this.className += " active";
                    });
                }
            </script>-->

</html>