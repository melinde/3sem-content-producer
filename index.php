<?php get_header(); ?>
            <nav>
             <ul>
              <li><a href="#home">Hjem</a></li>
              <li><a href="#news">Nyheder</a></li>
              <li><a href="#contact">Kontakt</a></li>
              <li><a href="#about">Om os</a></li>
             </ul>
            </nav>
           </div>
            <div class="col-lg-8">



              <?php
        			if ( have_posts() ) :

        				// Start the Loop.
        				while ( have_posts() ) :
        					the_post();
                  ?>
                  <article>
                    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                    <hr>

                     <p><span class="glypticon gkypticon-time"></span> Publiceret: August 24, 2020 at 9:00 PM</p>

                     <img class="img-responsive" src="http://placehold.it/900x300" alt="" >
                     <hr>
                      <?php the_content(); ?>
                    <hr>
                  </article>
                  <?php
        				endwhile;

        			else :
                ?>
        				<p>Vi fandt desværre ingen poster</p>
                <?php
        			endif;
        			?>


            </div>

            <div class="col-md-4">
                 <h3>Kategori widget</h3>
                            <ul>
                                <li><a href="#">Kategori Navn</a>
                                </li>
                                <li><a href="#">Kategori Navn</a>
                                </li>
                                <li><a href="#">Kategori Navn</a>
                                </li>
                                <li><a href="#">Kategori Navn</a>
                                </li>
                            </ul>

                    <h3>Tekst Widget</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>

            </div>

        </div>

        <hr>
<?php get_footer(); ?>
