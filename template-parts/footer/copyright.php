<?php
if(!defined("ABSPATH")){
	exit;
}


$footer_copy = carbon_get_theme_option("est_footer_copyright");
?>

<div class="footer-copy">
        <div class="footer-copy1">
            <div class="footer-copy-pos">
                <a href="#home1" class="scroll"><img src="<?php echo get_template_directory_uri()   ?>/assets/images/arrow.png" alt=" " class="img-responsive" /></a>
            </div>
        </div>
        <div class="container">
            <p>
                <?php
                echo $footer_copy ? $footer_copy : "&copy; 2019 Electronic Store. All rights reserved. Created By Aleksey" ;
                ?>
            </p>
        </div>
    </div>