<form action="" name="month" method="post">
    <select class="form-control">
        <?php
        for ($i=1; $i<=12;$i++) {
            $month = date('F',mktime(0,0,0,$i));
            echo '<option value="'.$month .'">' . $month .  '</option>';
            echo "\n\t\t";
        }
        ?>
</select>

    <button class="btn btn-default">Submit</button>
</form>

<?php

echo $_POST['month'];