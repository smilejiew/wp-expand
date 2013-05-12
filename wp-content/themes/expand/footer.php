<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #body, #site-wrapper and #page div elements.
 */
?>
    </div><!-- #body .wrapper -->

    <!-- FOOTER -->
    <div id="footer">
      <?php /* Footer menu */ ?>
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-footer', 'depth' => 1 ) ); ?>

      <?php /* Credits */ ?>
      <p><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'expand' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Powered by %s',  'twentytwelve' ), 'WordPress' ); ?></a></p>
    </div>
  </div><!-- #site-wrapper .wrapper -->
</div><!-- #page .wrapper -->

<?php wp_footer(); ?>
</body>
</html>