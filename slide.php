<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" title="" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
<main>
    <section class="box-banner-slider">
    <?= do_shortcode('[rev_slider alias="artistic-parallax-slider1" slidertitle="Artistic Parallax Slider1"][/rev_slider]') ?>
    </section>
    <section class="box-guide">
        <div class="wrapper-content">
            <div class="content-guide">
                <div class="head-title" data-aos="fade-up"><?php the_field('title_let') ?></div>
                <div class="subtitle" data-aos="fade-up">
                    <?php the_field('sub_title_let') ?>
                </div>
                <div class="desc" data-aos="fade-up">
                    <?php the_field('content_let') ?>
                </div>
            </div>
        </div>
    </section>
    <section class="box-step">
        <div class="wrapper-content">
            <div class="content-step" data-aos="fade-up">
                <?php the_field('content_step') ?>
            </div>
        </div>
    </section>
    <section class="box-roadmap">
        <div class="wrapper-content">
            <div class="content-roadmap">
                <div class="head-title" data-aos="fade-up">
                    <?php the_field('title_road') ?>
                </div>
                <div class="desc-road" data-aos="fade-up">
                    <?php the_field('content_road') ?>
                </div>
                <div class="list-road">
                    <div class="row-wraper">
                        <?php while ( has_sub_field('list_item_road') ) : ?>
                        <div class="col-wraper" data-aos="fade-up">
                            <div class="item-road">
                                <div class="avarta"><img src="<?php echo the_sub_field( 'avarta' )['url']; ?>" class="img-fluid" alt=""></div>
                                <div class="info">
                                    <h3><span><?php the_sub_field( 'title' ); ?></span></h3>
                                    <?php the_sub_field( 'sort_content' ); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="btnmain" data-aos="zoom-in"><a href="<?php the_field('link_button') ?>"><?php the_field('text_button_road') ?></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-carbon">
        <div class="wrapper-content">
            <div class="head-title" data-aos="fade-up"><?php the_field('title_carbon') ?></div>
            <p class="sub-title" data-aos="fade-up"><?php the_field('sub_title_road') ?></p>
            <div class="content-carbon">
                <div class="row-wrap">
                    <div class="col-wrap">
                        <div class="item-carbon">
                            <div class="icon" data-aos="zoom-out"><img src="<?php echo the_field('avarta_carbon')['url'] ?>" class="img-fluid" alt=""></div>
                            <div class="info cap-item" data-aos="fade-up">
                                <p><?php the_field('caption_avarta') ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-wrap">
                        <div class="item-carbon">
                            <div class="txt-carbon">
                                <div class="icon-logo" data-aos="fade-up">
                                    <img src="<?php echo the_field('logo_carbon')['url'] ?>" class="img-fluid" alt="">
                                </div>
                                <div class="txt" data-aos="fade-up">
                                    <?php the_field('content_carbon') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-wrap">
                        <div class="item-carbon" data-aos="zoom-in">
                            <div class="item-download">
                                <div class="avarta"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/cb3.png" alt=""></div>
                                <div class="btnmain"><a href="<?php the_field('link_show_certificate') ?>"><?php the_field('text_show') ?></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-wrap">
                        <ul>
                            <li>
                                <div class="item-carbon" data-aos="zoom-in">
                                    <div class="item-download">
                                        <div class="avarta"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/cb4.png" alt=""></div>
                                        <div class="btnmain"><a href="<?php the_field('link_download') ?>"><?php the_field('text_download') ?></a></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item-carbon" data-aos="zoom-in">
                                    <div class="item-download">
                                        <div class="avarta" style="opacity: 0;"></div>
                                        <div class="btnmain"><a href="<?php the_field('link_contact') ?>"><?php the_field('text_contact') ?></a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-higher">
        <div class="wrapper-content">
            <div class="head-title" data-aos="fade-up"><?php the_field('title_higher') ?></div>
            <div class="subtitle" data-aos="fade-up"><?php the_field('sub_title_higher') ?></div>
            <div class="content-higher">
                <div class="row-wrap">
                    <div class="col-wrap">
                        <div class="left-txt-logo">
                            <div class="icon" data-aos="fade-up"><img src="<?php echo the_field('content_higher_copy')['url'] ?>" class="img-fluid" alt=""></div>
                            <div class="desc" data-aos="fade-up">
                                <?php the_field('content_higher') ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-wrap">
                        <div class="video-high" data-aos="zoom-out">
                            <?php the_field('video_higher') ?>
                        </div>
                    </div>
                    <div class="col-wrap">
                        <div class="title-high" data-aos="fade-up"><?php the_field('slogan_higher') ?></div>
                    </div>
                    <div class="col-wrap">
                        <div class="btn-high">
                            <ul>
                                <li>
                                    <div class="btnmain" data-aos="zoom-in"><a href="<?php the_field('link_learn_more') ?>"><?php the_field('text_learn_more') ?></a></div>
                                </li>
                                <li>
                                    <div class="btnmain" data-aos="zoom-in">
                                        <a href="<?php the_field('link_download_leaflet') ?>"><?php the_field('text_download_leaflet') ?></a>
                                        <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/hight2.png" class="img-fluid" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-advant">
        <div class="wrapper-content">
            <div class="head-title" data-aos="fade-up"><?php the_field('title_adv') ?></div>
            <div class="sub-title" data-aos="fade-up">
                <?php the_field('sub_title_adv') ?>
            </div>
            <div class="list-adb">
                <ul>
                    <?php $count_adb = 1; ?>
                    <?php while ( has_sub_field('list_adv') ) : ?>
                    <li data-aos="fade-up" data-aos-duration="<?php echo $count_adb++ ?>000">
                        <div class="item-adb">
                            <div class="icon"><img src="<?php echo the_sub_field('icon')['url'] ?>" class="img-fluid" alt=""></div>
                            <div class="info">
                                <h4><?php the_sub_field('title') ?></h4>
                                <div class="desc">
                                    <?php the_sub_field('sort_content') ?>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="box-product">
        <div class="wrapper-content">
            <div class="icon-abs" data-aos="zoom-in"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/prd-1.png" alt=""></div>
            <div class="head-title" data-aos="fade-up"><?php the_field('title_prd') ?></div>
            <div class="subtitle" data-aos="fade-up"><?php the_field('sub_title') ?></div>
            <div class="list-prd">
                <ul>
                    <?php $count_prd = 1; ?>
                    <?php while ( has_sub_field('list_product') ) : ?>
                    <li data-aos="fade-up" data-aos-duration="<?php echo $count_prd++ ?>000">
                        <div class="item-prd">
                            <div class="avarta">
                                <div class="avr"><img src="<?php echo get_sub_field('avarta')['url'] ?>" class="img-fluid" alt=""></div>
                                <div class="info">
                                    <h4><a href="<?php the_sub_field('link') ?>"><?php the_sub_field('title') ?></a></h4>
                                    <div class="desc">
                                        <?php the_sub_field('content') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="btnmain"><a href="<?php the_sub_field('link') ?>"><?php the_sub_field('text_button') ?></a></div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>
</main>
<script type='text/javascript' src='https://unpkg.com/aos@2.3.0/dist/aos.js'></script>
<script>
    AOS.init({
      duration: 1200,
    })
</script>
<?php get_footer(); ?>