<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */

?>




<?php
/***
 * show parts of footer
 *newsletters block 15
 * start footer container 20
 *widgets block 25
 * copyright block 30
 * end footer container 35
 */
do_action("est_footer_parts");
?>


<?php wp_footer(); ?>
<!-- cart-js -->
<script>
    w3ls.render();

    w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
            }
        }
    });
</script>
<!-- //cart-js -->

</body>
</html>