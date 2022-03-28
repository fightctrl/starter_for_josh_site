<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>
    <section class="container-fluid aboutbg text-center">
        <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2>
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
            <div class="blocker"></div>
        </div> <!-- container -->
    </section>
    <section class="container-fluid articlesbg">
        <div class="container">
            <h3 class="text-center"></h3>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="http://206.189.45.97/~mesh4/wp-content/themes/starter_for_josh_site/images/portrait1.jpg" alt="Illustration">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">Friday, November 10 2030</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts.
                    </p>
                    <a class="readmore" href="#">CONTINUE READING</a>
                </div> <!-- col-md-4 -->
                <div class="col-md-4">
                    <img class="img-fluid" src="http://206.189.45.97/~mesh4/wp-content/themes/starter_for_josh_site/images/portrait2.jpg" alt="Model">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">Friday, November 10 2030</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts.
                    </p>
                    <a class="readmore" href="#">CONTINUE READING</a>
                </div> <!-- col-md-4 -->
                <div class="col-md-4">
                    <img class="img-fluid" src="http://206.189.45.97/~mesh4/wp-content/themes/starter_for_josh_site/images/portrait3.jpg" alt="Track">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">Friday, November 10 2030</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts.
                    </p>
                    <a class="readmore" href="#">CONTINUE READING</a>
                </div> <!-- col-md-4 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
<?php get_footer();?>