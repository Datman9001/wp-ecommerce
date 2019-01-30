<?php get_header();?>
    <section class="section">
        <div class="row">
            <div class="col l8 m8 s12">
                <div class="row">
                <div class="about">
                        <div class= "col m12 s12">
                            <div class="container">
                                    <h3>About Us</h3>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, delectus minima, sit dicta nemo doloremque incidunt voluptatibus consequatur soluta hic veniam deserunt inventore ipsam eligendi aut cum commodi. Maxime quam, illum animi autem deleniti quo rem obcaecati eum voluptatibus minima illo facilis suscipit et.</p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis a iste ipsam incidunt dolorem dolor! Mollitia repellat facilis perspiciatis consectetur consequatur, eligendi consequuntur.</p>
                            </div>
                            
                            </div>
                            
                       
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