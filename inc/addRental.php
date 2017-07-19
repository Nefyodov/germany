<?php
require_once '../lib/config.php';
require_once '../lib/model.php';
require_once '../lib/lib.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Rental Income</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style/css/bootstrap.css">
    <link rel="stylesheet" href="../style/css/main.css">
    <script src="../style/js/jquery.js"></script>
    <script src="../style/js/bootstrap.js"></script>
</head>
<body>
    <div class="center-block">
        <form class="center-block" action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post">
            <label class="radio-inline">
                <input type="radio" name="address" value="Mozartstraße 20"> Mozartstraße 20
            </label>
            <label class="radio-inline">
                <input type="radio" name="address" value="Duisburger Str. 101"> Duisburger Str. 101
            </label>
            <label class="radio-inline">
                <input type="radio" name="address" value="Duisburger Str. 103"> Duisburger Str. 103
            </label>
            <label class="radio-inline">
                <input type="radio" name="address" value="Garden/Garage"> Garden/Garage
            </label>
            <input class="btn btn-default" type="submit" value="Choose address">
        </form>
    </div>
    <table class="table table-bordered center-block">
        <tr>
            <th>Address</th>
            <th>Location</th>
            <th>Room nr.</th>
            <th>Space</th>
        </tr>
    <?php
    $address = selectAllAddress();
        foreach ($address as $ad) {
            ?>
            <tr>
                <td> <?= $ad['address'] ?> </td>
                <td> <?= $ad['location'] ?> </td>
                <td> <?= $ad['room nr'] ?> </td>
                <td> <?= $ad['space'] ?> </td>
            </tr>
            <?
        }
    ?>
    </table>
</body>
</html>
