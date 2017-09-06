<!DOCTYPE HTML>
<html>
    <head>
        <title>Rental Income</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style/css/bootstrap.css">
        <link rel="stylesheet" href="../style/css/main.css">
        <script src="../style/js/jquery.js"></script>
        <script src="../style/js/bootstrap.js"></script>
        <script src="../style/js/main.js"></script>
    </head>
    <body>
        <div class="center-block header">
            <form id="selected" class="table-main" method="post">
                <label class="radio-inline">
                    <input class="address" type="radio" name="address" value="Mozartstraße 20"> Mozartstraße 20
                </label>
                <label class="radio-inline">
                    <input class="address" type="radio" name="address" value="Duisburger Str. 101"> Duisburger Str. 101
                </label>
                <label class="radio-inline">
                    <input class="address" type="radio" name="address" value="Duisburger Str. 103"> Duisburger Str. 103
                </label>
                <label class="radio-inline">
                    <input class="address" type="radio" name="address" value="Garden/Garage"> Garden/Garage
                </label>
                    <select id="month" class="form-control" name="month" required>
            <?php foreach ($data['listOfMonth'] as $d):?>
            <option value="<?php echo $d?>"><?php echo $d?></option>
            <?php endforeach; ?>        </select>
                <input id="send" class="btn btn-default" type="submit" value="Choose">
            </form>
        </div>
        <div class="center-block header">
            <div id="currentSelection" class="alert alert-success" role="alert">Current selection
            </div>
            <form id="saveRental" method="post">
<!--                <input type="hidden" name="month" value="--><?php //echo $_POST['month']; ?><!--">-->
                <input form="saveRental" class="btn btn-default" type="submit" value="Write to database">
            </form>
            <a class="btn btn-default" href="menu">Back to menu</a>
        </div>
        <div id="tableRentalIncome">
        </div>
    </body>
</html>

