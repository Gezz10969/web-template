<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
</head>


<body>
    <form action="./submit.php" method="POST">
        <a href="./admin.php"><img style="float: left;width:40px;height:40px;display:block" alt="back" title="back" src="./assets/img/back-button.png" /></a>

        <h1 style="text-align: center; color: black;">Input Item Baru</h1>

        <label for="item_code">Item Code</label>
        <input type="text" name="item_code" required>

        <label for="item_name">Item Name</label>
        <input type="text" name="item_name" required>

        <label for="quantity_kilo">Dikerjakan di departemen</label>
        <select name="department" required>
            <option value="">Klik untuk memilih</option>
            <option value="Assy">Assy</option>
            <option value="Blow">Blow</option>
            <option value="DieCut">DieCut</option>
            <option value="Extru">Extru</option>
            <option value="PET">PET</option>
            <option value="Seal">Seal</option>
        </select>

        <div style="padding: 10px 0px;">
            <input type="submit" value="Submit" name="submit_item">
            <input type="reset" value="Hapus Jawaban">
        </div>
    </form>

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
    </script>
</body>

</html>