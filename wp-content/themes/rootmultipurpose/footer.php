
<div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-5">
              <div class="ft-left">
                <div class="footer-img">
                <img src="
                <?php 
               
                  echo get_template_directory_uri().'/icons/pi-logo.png';
            
                
                ?>" alt="logo">
                
                </div>
                <p> Cu qui probo malorum saperet. Ne admodum apeirian iracundia usu, eam cu agam ludus, eum munere accusam molestie ut. Alienum percipitur ne est, pri quando iriure ad. </p>
                <p>© 2017 YDirection Themes by IOThemes</p>
              </div>
            </div>
            <div class="col-sm-4 col-sm-offset-3">
              
                <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'ft-right','theme_location'=>'footer-menu') );?>
                  
            </div>
          </div>
        </div>
      </div>


      </div> <!-- Main -->
    </div><!-- Wrapper -->


    <!-- Jquery and Js Plugins -->

    <script src="<?php echo get_template_directory_uri().'/js/jquery-2.1.1.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri().'/js/bootstrap.min.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri().'/js/jquery.validate.min.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri().'/js/plugins.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri().'/js/validator.js'; ?>" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri().'/js/custom.js'; ?>" type="text/javascript"></script>
  </body>
</html>