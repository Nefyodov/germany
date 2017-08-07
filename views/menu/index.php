<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $data['Admin']?></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style/css/bootstrap.css">
        <link rel="stylesheet" href="../style/css/main.css">
        <script src="../style/js/jquery.js"></script>
        <script src="../style/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="menu">
            <h1><?php echo $data['Admin']?></h1>
            <h3><?php echo $data['Available actions']?>:</h3>
            <ul><?php if ($level==='2'){?>
                <li class="list-group-item"><a href='<?php echo $rent; ?>'>Entry rental income</a></li>
                <li class="list-group-item"><a href='<?php echo $costs; ?>'>Entry costs</a></li>
                <?php }?>
                <li class="list-group-item"><a href='<?php echo $pivot; ?>'><?php echo $data['View pivot table']?></a></li>
                <li class="list-group-item"><a href='<?php echo $bwa; ?>'><?php echo $data['View BWA']?></a></li>
                <li class="list-group-item"><a href='../old/sec/logout'><?php echo $data['End a session']?></a></li>
            </ul>
        </div>
    </body>
</html>