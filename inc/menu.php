<?php
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
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="../style/css/bootstrap.css">
    <link rel="stylesheet" href="../style/css/main.css">
    <script src="../style/js/jquery.js"></script>
    <script src="../style/js/bootstrap.js"></script>
</head>
<body>
    <div class="menu">
        <h1>Admin</h1>
        <h3>Available actions:</h3>
        <ul>
            <li class="list-group-item"><a href='<?php echo $rent;?>'>Entry rental income</a></li>
            <li class="list-group-item"><a href='<?php echo $costs;?>'>Entry costs</a></li>
            <li class="list-group-item"><a href='<?php echo $pivot;?>'>View pivot table</a></li>
            <li class="list-group-item"><a href='<?php echo $bwa;?>'>View BWA</a></li>
            <li class="list-group-item"><a href='index.php?logout'>End a session</a></li>
        </ul>
    </div>
<?

?>
</body>
</html>