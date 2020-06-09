<!DOCTYPE html>
<?php get_header(); ?>
<body>
<?php $menu=get_field('menu'); ?>
    <div class="wrapper">
      <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">root </a>
          </div>
          <div class="navbar-right">
               <a href="#buy" class="btn btn-nav page-scroll wow fadeInDown" data-wow-delay="0.3s"><span><?php echo $menu['buttontext']?></span></a>
                </div>
                <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'collapse navbar-collapse navbar-right', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav','theme_location'=>'header-menu') ); 
                ?>
               
                
           
        </div>
      </nav><!-- /.navbar-collapse -->
    <?php $main_section=get_field('main_section'); ?>
      <div id="main" class="main main-2">
        <div class="hero-2">
          <div class="container">
            <div class="row">
              <div class="col-md-5 col-sm-6">
                <div class="intro">
                  <h1 class="wow fadeInDown" data-wow-delay="0.1s"><?php echo $main_section['heading']?></h1>
                  <p class="wow fadeInDown" data-wow-delay="0.2s"><?php echo $main_section['subheading']?></p>
                  <a href="<?php echo $main_section['buttonlink']?>" class="btn btn-action btn-fb wow fadeInDown" data-wow-delay="0.3s"><span><?php echo $main_section['buttontext']?></span></a>
                </div>
              </div>
              <div class="col-md-7 col-sm-6">
                <img class="img-responsive" src="<?php echo $main_section['image_']?>" alt="Feature" >
              </div>
            </div>
          </div>
        </div><!-- Pi-Hero -->


        <?php $features=get_field('features'); ?>
        <div id="specs" class="features-boxed">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="boxed-intro text-center wow fadeInDown">
                  <h4><?php echo $features['small_title']?></h4>
                  <h1><?php echo $features['big_title']?></h1>
                  <p><?php echo $features['paragraph']?></p>
                  
                </div>
              </div>
              <div class="col-md-3 col-sm-4 wow fadeInDown">
                <div class="box-inner">
                  <div class="box-icon">
                   
                    <img src="<?php echo get_template_directory_uri().'/icons/1.png';?>" width="45" alt="Feature" >
                  </div>
                  <div class="box-info">
                    <h1>Some heading here</h1>
                    <p>Type some text that relates to the above unrelated heading you just typed now to make it look good.</p>
                  </div>
                  <div class="box-arrow">
                    <a href="#"><i class="ion-ios-arrow-thin-right"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-4 wow fadeInDown">
                <div class="box-inner">
                  <div class="box-icon">
                   
                    <img src="<?php echo get_template_directory_uri().'/icons/2.png';?>" width="45" alt="Feature" >
                  </div>
                  <div class="box-info">
                    <h1>Some heading here</h1>
                    <p>Some text that somehow relates to the above illogical heading I typed just now should be placed here.</p>
                  </div>
                  <div class="box-arrow">
                    <a href="#"><i class="ion-ios-arrow-thin-right"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-4 wow fadeInDown">
                <div class="box-inner">
                  <div class="box-icon">
                    
                    <img src="<?php echo get_template_directory_uri().'/icons/3.png';?>" width="45" alt="Feature" >
                  </div>
                  <div class="box-info">
                    <h1>Some heading here</h1>
                    <p>A different text should appear here because people get really bore seeing the same shi it everywhere.</p>
                  </div>
                  <div class="box-arrow">
                    <a href="#"><i class="ion-ios-arrow-thin-right"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-sm-4 wow fadeInDown">
                <div class="box-inner">
                  <div class="box-icon">
                    <img src="<?php echo get_template_directory_uri().'/icons/4.png';?>" width="45" alt="Feature" >
                  </div>
                  <div class="box-info">
                    <h1>Some heading here</h1>
                    <p>Well nothing happens what you type here because most people don't even give a damn about this block.</p>
                  </div>
                  <div class="box-arrow">
                    <a href="#"><i class="ion-ios-arrow-thin-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <?php $features2=get_field('features_2'); ?>
        <div id="features" class="features">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="features-text wow fadeInDown">
                  <h2><?php echo $features2['big_title']?></h2>
                    <p><?php echo $features2['paragraph']?></p>
                      <button class="btn btn-primary btn-action" type="button"><span><?php echo $features2['buttontext']?></span></button>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="features-image wow fadeInRight">
                  <img class="img-responsive" src="<?php echo $features2['imageright']?>"  alt="Image" >
                </div>
              </div>
            </div>
          </div>
        </div>


        <?php $virtual_reality=get_field('virtual_reality'); ?>
        <div class="flex-split">
          <div class="f-left">
            <div class="left-content wow fadeInLeft" data-wow-delay="0s">
              <h2 class="wow fadeInDown" data-wow-delay="0.1s"><?php echo $virtual_reality['title']?></h2>
              <p class="wow fadeInDown" data-wow-delay="0.2s"><?php echo $virtual_reality['paragraph']?></p>
              <a href="<?php echo $virtual_reality['buttonlink']?>" class="btn btn-action wow fadeInDown" data-wow-delay="0.3s"><span><?php echo $virtual_reality['buttontext']?></span></a>
            </div>
          </div>
          <div class="f-right">
            <div class="video-icon hidden-xs text-center">
              <a class="popup wow fadeInUp" data-wow-delay="0.2s" href="<?php echo $virtual_reality['videolink']?>"><i class="ion-ios-play"></i></a>
            </div>
          </div>
        </div>


        <div id="reviews" class="review-section">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <div class="reviews owl-carousel owl-theme">
                  <div class="review-single">
                      <img class="img-circle" src="<?php echo get_template_directory_uri().'/images/review-1.png';?>" alt="Client Testimonoal" >
                    <div class="review-text wow fadeInDown" data-wow-delay="0.2s">
                      <p>Going to use some lorem here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis quis tellus ac vestibulum.  Etiam fermentum nisl ac venenatis rhoncus.</p>
                      <h3>- Thomas Young</h3>
                      <h3>Vice President Primal Inc</h3>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-star"></i>
                    </div>
                  </div>
                  <div class="review-single"><img class="img-circle" src="<?php echo get_template_directory_uri().'/images/review-2.png';?>" alt="Client Testimonoal" >
                    <div class="review-text">
                      <p>Going to use some lorem here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis quis tellus ac vestibulum.  Etiam fermentum nisl ac venenatis rhoncus.</p>
                      <h3>- Neil Harris</h3>
                      <h3>President Proton LLC</h3>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-ios-star-half"></i>
                    </div>
                  </div>
                  <div class="review-single"><img class="img-circle" src="<?php echo get_template_directory_uri().'/images/review-3.png';?>" alt="Client Testimonoal" >
                    <div class="review-text">
                      <p>Going to use some lorem here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis quis tellus ac vestibulum.  Etiam fermentum nisl ac venenatis rhoncus.</p>
                      <h3>- Alison Burgers</h3>
                      <h3>CEO Marga Holdings</h3>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-star"></i>
                      <i class="ion ion-ios-star-half"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php $why_you_need=get_field('why_you_need'); ?>
      <div class="pitch-2">
        <div class="container">
          <div class="pitch-inner wow fadeInRight">
            <h4><?php echo $why_you_need['small_title']?></h4>
            <h1><?php echo $why_you_need['big_title']?></h1>
            <p><?php echo $why_you_need['paragraph']?></p>
            <button class="btn btn-primary btn-action" type="button"><span><?php echo $why_you_need['buttontext']?></span></button>
          </div>
        </div>
      </div>

      <div id="buy" class="cta">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-offset-7">
              <div class="cta-inner">
                <h1>Mi Virtual</h1>
                <p>Made with precision to give absolute comfort and great experience. Get your own Mi today.</p>
                <h3>Color</h3>
                <span><i class="ion-android-checkbox-blank"></i></span>
                <span><i class="ion-android-checkbox-blank"></i></span>
                <span><i class="ion-android-checkbox-blank"></i></span>
                <h2>$299.99</h2>
                <ul>
                  <li>Free Worldwide Shipping</li>
                  <li>30-day Return Policy</li>
                </ul>
                 <div class="download-buttons wow fadeInUp">
                   <a href="#">
                       <img class="img-circle" src="<?php echo get_template_directory_uri().'/icons/amazon.png';?>" width="150" alt="Download from Play Store" >
                    </a>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php $subscribe=get_field('subscribe'); ?>
      <div id="subscribe" class="cta-2">
        <div class="container">
          <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
              <div class="cta-2-inner">
                <h1 class="wow fadeInDown" data-wow-delay="0.1s"><?php echo $subscribe['title']?></h1>
                <p class="wow fadeInDown" data-wow-delay="0.2s"><?php echo $subscribe['paragraph']?></p>
                <div class="subform wow fadeInDown" data-wow-delay="0.3s">
                  <form id="signup" class="formee" action="assets/php/subscribe.php" method="post">
                    <input name="email" id="email" type="text" /><input class="right inputnew" type="submit" title="Send" value="<?php echo $subscribe['buttontext']?>" />
                  </form>
                  <div id="response"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php get_footer(); ?>