<?php
//echo '<pre>';
//print_r($data);
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
<!--            <form id="saveRental" action="rental/addRental" method="post">-->
<!--                <input type="hidden" name="month" value="--><?php //echo $_POST['month']; ?><!--">-->
<!--                <input form="saveRental" class="btn btn-default" type="submit" value="Write to database">-->
<!--            </form>-->
<!--            <a class="btn btn-default" href="menu.php">Back to menu</a>-->
        </div>
<!--        <div class="center-block">-->
<!--            <table class="table table-bordered rental-table">-->
<!--                <tr>-->
<!--                    <th>Address</th>-->
<!--                    <th>Location</th>-->
<!--                    <th>Room nr.</th>-->
<!--                    <th>Space</th>-->
<!--                    <th>Rent plan</th>-->
<!--                    <th>Costs plan</th>-->
<!--                    <th>Heating plan</th>-->
<!--                    <th>Cable TV</th>-->
<!--                    <th>Comments</th>-->
<!--                    <th>&#8364;/m2</th>-->
<!--                </tr>-->
<!--            --><?php
//            $m = $_POST['month'];
//            $placeholder = selectTableAndPlaceholder($m);
//            $address = selectFromDatabaseRental();
//            foreach ($address as $ad) { ?>
<!--                <tr>-->
<!--                    <td> --><?//= $ad['address'] ?><!-- </td>-->
<!--                    <td> --><?//= $ad['location'] ?><!-- </td>-->
<!--                    <td> --><?//= $ad['room nr'] ?><!-- </td>-->
<!--                    <td> --><?//= $ad['space'] ?><!-- </td>-->
<!--                    <td><input form="saveRental" type="text" class="form-control"-->
<!--                               name="--><?php //echo $ad['id'] . ':' . 'Rent plan'; ?><!--" placeholder="--><?php //echo placeholder($placeholder,$ad,'Rent_plan');?><!--"></td>-->
<!--                    <td><input form="saveRental" type="text" class="form-control"-->
<!--                               name="--><?php //echo $ad['id'] . ':' . 'Costs plan'; ?><!--" placeholder="--><?php //echo placeholder($placeholder,$ad,'Costs_plan');?><!--"></td>-->
<!--                    <td><input form="saveRental" type="text" class="form-control"-->
<!--                               name="--><?php //echo $ad['id'] . ':' . 'Heating plan'; ?><!--" placeholder="--><?php //echo placeholder($placeholder,$ad,'Heating_plan');?><!--"></td>-->
<!--                    <td><input form="saveRental" type="text" class="form-control"-->
<!--                               name="--><?php //echo $ad['id'] . ':' . 'Cable TV'; ?><!--" placeholder="--><?php //echo placeholder($placeholder,$ad,'Cable_TV');?><!--"></td>-->
<!--                    <td><textarea form="saveRental" class="form-control textarea"-->
<!--                                  name="--><?php //echo $ad['id'] . ':' . 'Comments'; ?><!--" rows="1"-->
<!--                                  placeholder="Comments"></textarea></td>-->
<!--                    <td>--><?php //echo round(placeholder($placeholder,$ad,'Rent_plan')/$ad['space'],2);?><!-- &#8364;</td>-->
<!--                </tr>-->
<!--            --><?// } ?>
<!--            </table>-->
<!--        </div>-->
    </body>
</html>

