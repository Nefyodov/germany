<?php
require_once '../lib/config.php';
require_once '../lib/language.php';
if ($_SERVER['REQUEST_URI'] == '/inc/menu') {
    $rent = 'addRental';
    $costs = 'addCosts';
    $pivot = 'pivot';
    $bwa = 'bwa';
}else{
    $rent = 'inc/addRental';
    $costs = 'inc/addCosts';
    $pivot = 'inc/pivot';
    $bwa = 'inc/bwa';
}
if (isset($_COOKIE['auth'])) {
    $level = unserialize(base64_decode($_COOKIE['auth']));
    if ($level === '1') $menu = $menuRU;
    else $menu = $menuEN;
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../old/style/css/bootstrap.css">
        <link rel="stylesheet" href="../old/style/css/main.css">
        <script src="../old/style/js/jquery.js"></script>
        <script src="../old/style/js/bootstrap.js"></script>
    </head>
    <body>
    <div class="menu">
        <h1><?php echo $menu['Admin']?></h1>
        <h3><?php echo $menu['Available actions']?>:</h3>
        <ul><?php if ($level==='2'){?>
            <li class="list-group-item"><a href='<?php echo $rent; ?>'>Entry rental income</a></li>
            <li class="list-group-item"><a href='<?php echo $costs; ?>'>Entry costs</a></li>
            <?php }?>
            <li class="list-group-item"><a href='<?php echo $pivot; ?>'><?php echo $menu['View pivot table']?></a></li>
            <li class="list-group-item"><a href='<?php echo $bwa; ?>'><?php echo $menu['View BWA']?></a></li>
            <li class="list-group-item"><a href='../old/sec/logout'><?php echo $menu['End a session']?></a></li>
        </ul>
    </div>
    <?
    ?>
    </body>
    </html>
    <?php
}else{
    header('Location:../');
}
