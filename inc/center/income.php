<select class="form-control">
    <?php
    for ($i=1; $i<=12;$i++) {
        echo '<option>' . date('F',mktime(0,0,0,$i)) .  '</option>';
    }
    ?>
</select>