<?php
if(!defined("ABSPATH")){
    exit;
}


if(is_active_sidebar("est_shop_widgets")){
    ?>
    <aside class="col-md-4 w3ls_mobiles_grid_left">

<?php
    dynamic_sidebar("est_shop_widgets");
?>
    </aside>
        <?php
}

