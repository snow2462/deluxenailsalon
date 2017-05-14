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
