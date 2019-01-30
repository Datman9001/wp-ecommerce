<?php get_header();?>
    <section class="section">
        <div class="row">
            <div class="col l8 m8 s12">
                   
                <div class="row">

                    <div class="product">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          <div class="col m4 s12">
                               
                               
                         <div class="card center z-depth-3 hoverable">
                           
                           
                                <div class="card-image">
                                    <?php if(has_post_thumbnail()):?>
                                    <?php the_post_thumbnail();?>
                                    <?php endif; ?>
                                    <!-- <img src="./img/shirt_blue_white.jpg"> -->
                                    <h5><?php the_title();?></h5>
                                    <p>$9.99</p>
                                </div>
                                 <div class="card-action">
                                    <a href="<?php echo the_permalink();?>" class="btn red">Details</a>
                                   
                                </div>
                                
                            </div>
                           
                        </div>
                        <?php endwhile; else : ?>
                                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>
                       
                    </div>
                 
                    


                </div>

            </div>
            <!-- end of col 8 -->
            <div class="col l4 m4 s12">
                     <ul class="collection z-depth-3 red-text">  
                        <?php if(is_active_sidebar('sidebar')):?>
                        <?php dynamic_sidebar('sidebar');?>
                    <?php endif;?>
     <!-- <li class="collection-header"><h4>Categories</h4></li>
                            <a href="#!" class="collection-item red-text">Shirts</a>
                            <a href="#!" class="collection-item  red-text">Pants</a>
                            <a href="#!" class="collection-item red-text">Hats</a>
                            <a href="#!" class="collection-item red-text">Shoes</a>-->
                          </ul> 
                          <br>
                          <div class="card-panel  ">
                              <h6>Sidebar Heading</h6>
                              <hr>
                                <span>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                                </span>
                                <hr>
                                <a class="red btn">button</a>
                              </div>

            </div>
        </div>
    </section>
   
<?php get_footer();?>