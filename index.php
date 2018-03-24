<?php get_header(); ?>


<article class="page-article">
    <h1>My first responsive website</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos in laudantium pariatur atque ratione commodi inventore quisquam incidunt saepe deleniti, voluptatum quod optio ipsa veniam architecto ea id assumenda repudiandae!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos in laudantium pariatur atque ratione commodi inventore quisquam incidunt saepe deleniti, voluptatum quod optio ipsa veniam architecto ea id assumenda repudiandae!</p>
    <img src="image/rocket_design.png" alt="" width="100%">
    <hr>
</article>
<article class="normal">
    <h2>Responsive image slider</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur velit, quia dignissimos optio, quo libero in tempora sit esse neque atque enim nobis ex quam officia nemo soluta aliquam ab.</p>
    <center>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="image/slides/1.jpg" alt="Los Angeles">
                </div>

                <div class="item">
                    <img src="image/slides/2.jpg" alt="Chicago">
                </div>

                <div class="item">
                    <img src="image/slides/3.jpg" alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </center>
    <hr>
</article>
<section id="tutorial">
    <h2>Tutorial for beginners</h2>
    <a href="https://www.youtube.com/watch?v=1M0YXFW31hg&list=PLOYHgt8dIdox9Qq3X9iAdSVekS_5Vcp5r" target="_blank">
        <section class="element" id="html">
            <i class="fab fa-html5"></i><br>HTML
        </section>
    </a>
    <a href="https://www.youtube.com/watch?v=RJEKMbD_kEk&list=PLOYHgt8dIdow6b2Qm3aTJbKT2BPo5iybv" target="_blank">
        <section class="element" id="css">
            <i class="fab fa-css3"></i><br> CSS
        </section>
    </a>
    <a href="https://www.youtube.com/watch?v=OcwON22ctYc&list=PLOYHgt8dIdoxTUYuHS9ZYNlcJq5R3jBsC" target="_blank">
        <section class="element" id="js">
            <i class="fa fa-code"></i><br> JS
        </section>
    </a>
    <a href="https://www.youtube.com/watch?v=WSeKPbVZBoo&list=PLOYHgt8dIdox81dbm1JWXQbm2geG1V2uh" target="_blank">
        <section class="element" id="php">
            <i class="fab fa-php"></i><br> PHP
        </section>
    </a>
</section>

<article class="normal">
    <h2>Do you would like learn how to make responsive websites?</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate minima reprehenderit accusantium. Nam doloremque perspiciatis a, quas aliquam error neque, non, unde minima, harum eaque. Dolores reiciendis, laudantium fugiat laboriosam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate minima reprehenderit accusantium. Nam doloremque perspiciatis a, quas aliquam error neque, non, unde minima, harum eaque. Dolores reiciendis, laudantium fugiat laboriosam.</p>
    <hr>
</article>
<?php get_footer(); ?>
