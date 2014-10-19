<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header();
?>

<div id="teaser">
    <section id="teaserImage">
        <!-- <img class="panel" src="/fileadmin/user_upload/blueCanvas.jpg" width="100%" height="auto" /> -->
    </section>
</div>
<div id="stage">
    <div id="navi">
        <form action="">
            <p>
                <select onchange="(this.selectedIndex >= 999 && this.selectedIndex <= -1) ? window.open(this.options[this.selectedIndex].value,'_blank') : window.location=this.options[this.selectedIndex].value;">
                    <option selected="selected" value="http://loopshape.org/stack/">Select an action:</option><option value="http://loopshape.org/stack/">-----------------------------------------------------</option><option value="http://loopshape.org/stack/">Features are under construction!</option><option value="http://loopshape.org/stack/">-----------------------------------------------------</option><option value="http://loopshape.org/home/">Home</option>
                </select>
            </p>
        </form>
    </div>
    <div class="cWrap">
        <main id="main" class="site-main" role="main">

            <div id="content">
                <div id="primary" class="content-area">

                    <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part('content','page'); ?>

                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if(comments_open()||get_comments_number()) :
                        comments_template();
                        endif;
                    ?>

                    <?php endwhile; // end of the loop. ?>

                </div>
            </div>
            <div id="sidebar">
                <header class="csc-header csc-header-n1">
                    <h3 class="csc-firstHeader">REST-API:</h3>
                </header>
                <p>
                    <b>This page is an overview for all functions, which you can use to interact with the integrated Loopshape-API.
                    <br />
                    <sub>...still under construction!</sub></b>
                </p>
                <!--
                <header class="csc-header csc-header-n2">
                <h2>Note</h2>
                </header>
                <p>
                <i>An algorithm is a description of a formula in the mind,
                <br />
                projected from the inner thoughts going over
                <br />
                to the outer world as a calculation.
                <br />
                Materialized as a result or a state.
                <br />
                It's a value to have.
                <br />
                So the mind could handle it's logic.</i>
                </p>
                -->
            </div>
        </main>
    </div>
    <div class="clearer"></div>
</div>

<?php get_footer(); ?>