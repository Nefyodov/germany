<?php
require_once '../lib/config.php';
require_once '../lib/model.php';
require_once '../lib/lib.php';


?>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>Address</th>
	<th>Location</th>
	<th>Room nr.</th>
	<th>Space</th>
</tr>
<?php
$address = selectAllAddress();
foreach ($address as $ad){
    ?>
    <tr>
        <td> <?= $ad['address']?> </td>
        <td> <?= $ad['location']?> </td>
        <td> <?= $ad['room nr']?> </td>
        <td> <?= $ad['space']?> </td>
    </tr>
    <?
}
?>
</table>

