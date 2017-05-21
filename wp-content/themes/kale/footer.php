<?php
/**
* The template for displaying the footer
*
* @package kale
*/
?>
<hr />
        <!-- Footer -->
        <div class="footer" align="center"">
            <a href="https://www.facebook.com/Deluxe-Nail-Salon-191290404253758/"><img src="<?php echo TEMPLATE_DIRECTORY_URI;?>/img/facebook.png" width="32" height="32"></a>
            <a href="https://twitter.com/deluxenailsalo1"><img src="<?php echo TEMPLATE_DIRECTORY_URI;?>/img/twitter.png" width="32" height="32"></a>
            <a href="https://plus.google.com/101666143910801486295/about?hl=en&partnerid=gplp0/"><img src="<?php echo TEMPLATE_DIRECTORY_URI;?>/img/googleplus.png" width="32" height="32"></a>
            <a href="https://www.instagram.com/deluxenailsalon1/"><img src="<?php echo TEMPLATE_DIRECTORY_URI;?>/img/instagram.png" width="32" height="32"></a>
            <?php
            $bottomMenu = array(
                'menu'            => 'BottomMenu',
                'container'         => 'div',
                'container_class'   => 'navbar-collapse collapse',
                'menu_class'        => 'nav navbar-nav'
            );
            wp_nav_menu( $bottomMenu );
            ?>
            <a href="<?php home_url();?>"><div class="footer-copyright">Copyright &copy 2011&ndash;<script language="javascript" type="text/javascript">
                        var today = new Date()
                        var year = today.getFullYear()
                        document.write(year)
                    </script> Deluxe Nail Salon, All Rights Reserved.</a></div>
        </div>
        <!-- /Footer -->
    </div><!-- /Container -->
</div><!-- /Main Wrapper -->
<?php wp_footer(); ?>
</body>
</html>
