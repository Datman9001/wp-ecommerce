<?php get_header();?>
    <section class="section">
        <div class="row">
            <div class="col l8 m8 s12">
                   
                <div class="row">
                <div class="single-product"> 
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="col m12 s12">
                            <div class="card center z-depth-3 hoverable">
                                <div class="row">
                                    <div class="col m6">
                                            <div class="card-image">
                                                    <!-- <img src="./img/shirt_blue_white.jpg"> -->
                                                    <?php if(has_post_thumbnail()):?>
                                    <?php the_post_thumbnail();?>
                                    <?php endif; ?>
                                                    
                                    </div>
                                </div>
                                    <div class="col m6">
                                            <h5  ><?php the_title()?></h5>
                                                <hr>
                                                <p>$9.99</p>
                                                <hr>
                                        <p><?php the_content();?></p>
                                    </div>
                               
                                
                                </div>
                                 <div class="card-action buttons">
                             <a class="red btn" href="<?php echo site_url();?>"><i class="material-icons left">arrow_back</i>Go Back</a>
                                    
                             <a href="#" class="btn green">Buy Now<i class="material-icons left">add_shopping_cart</i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; else : ?>
                                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>

                </div>

            </div>
            <!-- end of col 8 -->
            <div class="col l4 m4 s12">
                     <ul class="collection z-depth-3 red-text">  
                        <?php if(is_active_sidebar('sidebar')):?>
                        <?php dynamic_sidebar('sidebar');?>
                    <?php endif;?>
     
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