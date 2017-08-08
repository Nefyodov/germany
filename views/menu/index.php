<?php
$menuArr = $data['menu'];
$accessLevel = $data['access'];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $menuArr['Admin']?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style/css/bootstrap.css">
        <link rel="stylesheet" href="../style/css/main.css">
        <script src="../style/js/jquery.js"></script>
        <script src="../style/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="menu">
            <h1><?php echo $menuArr['Admin']?></h1>
            <h3><?php echo $menuArr['Available actions']?>:</h3>
            <ul><?php if ($accessLevel=='2'){?>
                <li class="list-group-item"><a href='rental'>Entry rental income</a></li>
                <li class="list-group-item"><a href='costs'>Entry costs</a></li>
                <?php }?>
                <li class="list-group-item"><a href='pivot'><?php echo $menuArr['View pivot table']?></a></li>
                <li class="list-group-item"><a href='bwa'><?php echo $menuArr['View BWA']?></a></li>
                <li class="list-group-item"><a href='menu/logout'><?php echo $menuArr['End a session']?></a></li>
            </ul>
        </div>
    </body>
</html>