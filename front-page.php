<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?><section class="container-fluid aboutbg text-center">
    <div class="container">

        <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
        <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

        <div class="blocker"></div>

    </div><!--  container-->
</section>

<section class="container-fluid articlebg">

    <div class="container">
        <div class="row">
            <!--  a row that gives us access to the BS columns-->

            <div class="article-title text-center">
                <p>LATEST ARTICLES</p> <!--H4--> <!--php title for articles not working -->
            </div>
            <div class="col-md-4 article-cent">


            
                <div class="article-title text-center">

                    <img class="img-responsive" alt=“portait” src="<?php the_field('articleimage'); ?>">
    <h4><?php the_field('articletitle'); ?> </h4>
                    <h3><?php the_field('articleexcerpt1'); ?></h3>
                    <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
                </div>
            </div> <!-- col-->


            <div class="col-md-4 article-cent">
<div class="article-title text-center">

                    <img class="img-responsive" alt=“portait” src="<?php the_field('articleimage2'); ?>">
                    <h4><?php the_field('articletitle2'); ?></h4>
                    <h3><?php the_field('articleexcerpt2'); ?></h3>
                    <a href="<?php the_field('readmore2'); ?>" class="readmore">CONTINUE READING</a>
                </div>

            </div> <!-- col-->


            <div class="col-md-4 article-cent">
                
                <div class="article-title text-center">

                    <img class="img-responsive" alt=“portait” src="<?php the_field('articleimage3'); ?>">
                    <h4><?php the_field('articletitle3'); ?></h4>
                    <h3><?php the_field('articleexcerpt3'); ?></h3>
                    <a href="<?php the_field('readmore3'); ?>" class="readmore">CONTINUE READING</a>
                </div>

            </div> <!-- col-->


            <div class="col-md-4 article-cent">

            </div>

            <div class="col-md-4 article-cent">

            </div>




        </div> <!-- row-->

    </div> <!-- container-->

</section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
