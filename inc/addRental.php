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
    <div class="center-block">
        <table class="table table-bordered">
            <tr>
                <th>Address</th>
                <th>Location</th>
                <th>Room nr.</th>
                <th>Space</th>
                <th>Rent plan</th>
                <th>Costs plan</th>
                <th>Heating plan</th>
                <th>Cable TV</th>
                <th>Comments</th>
                <th>&#8364;/m2</th>
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
                    <form action="">
                        <td><input type="text" class="form-control" placeholder="1200.00"></td>
                        <td><input type="text" class="form-control" placeholder="100.00"></td>
                        <td><input type="text" class="form-control" placeholder="100.00"></td>
                        <td><input type="text" class="form-control" placeholder="50.00"></td>
                        <td><textarea class="form-control textarea" rows="1" placeholder="Comments"></textarea></td>
                        <td>10.00 &#8364;</td>
                    </form>
                </tr>
                <?
            }
        ?>
        </table>
    </div>
</body>
</html>
