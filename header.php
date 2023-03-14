<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="bg-primary-gradient">
            <div class="container mx-auto">
                <nav class="relative">
                    <div class="xl:flex xl:justify-between xl:items-center custom-border-b py-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <?php if (has_custom_logo()) { ?>
                                    <?php the_custom_logo(); ?>
                                <?php } else { ?>
                                    <a href="<?php echo get_bloginfo('url'); ?>"
                                        class="font-extrabold text-lg text-slate-100">
                                        <?php echo get_bloginfo('name'); ?>
                                    </a>

                                    <p class="text-sm font-light text-slate-100">
                                        <?php echo get_bloginfo('description'); ?>
                                    </p>

                                <?php } ?>
                            </div>
                            <!-- close logo/name web -->


                            <div class="flex">
                                <!-- ivory-search -->
                                <div class="hidden md:block mr-8 xl:hidden">
                                    <?php echo do_shortcode('[ivory-search id="119" title="AJAX Search Form for WooCommerce"]'); ?>
                                </div>
                                <!-- icon menu -->
                                <div class="xl:hidden">
                                    <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                                        <svg viewBox="0 0 320 512" class="inline-block w-8 h-8" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path fill="#f1f1f1" id="svg_icon"
                                                d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"
                                                id="Combined-Shape"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div id="primary-menu"
                            class="primary-menu hidden z-10 w-72 absolute right-0 xl:relative bg-gray-100 mt-4 p-4 md:pt-0 xl:mt-0 xl:p-0 xl:bg-transparent xl:block xl:w-auto ">
                            <?php
                            wp_nav_menu(
                                array(
                                    'container_id' => '',
                                    'container_class' => '',
                                    'menu_class' => 'xl:flex xl:-mx-4 items-center',
                                    'theme_location' => 'primary',
                                    'fallback_cb' => false,
                                )
                            );
                            ?>
                            <?php do_action( 'storefront_primary_navigation' ); ?>
                        </div>
                    </div>
                </nav>
            </div>
            <?php if (is_front_page()) { ?>
                <!-- Start introduction -->
                <!-- HOME SLIDER -->
                <div class="lg:container mx-auto splide py-8 px-2 md:my-8 md:p-0 text-slate-100" role="group"
                    aria-label="Splide Basic HTML Example">
                    <div class="splide__track ">
                        <div class="splide__list">
                            <!-- Entradas de la categoría "home-cover" -->
                            <?php
                            $args = array(
                                'category_name' => 'home-cover',
                                'posts_per_page' => 5
                            );
                            $query = new WP_Query($args);
                            while ($query->have_posts()):
                                $query->the_post();
                                ?>
                                <div class="splide__slide text-left blocks-half-desk px-0 md:px-10 lg:px-20">
                                    <div class="block-half-desk px-2 md:pr-4 lg:pr-8">
                                        <h2 class="h2-format text-slate-100">
                                          <a class="font-bold" href="<?php the_permalink(); ?>">
                                              <?php the_title(); ?>
                                          </a>
                                        </h2>
                                        <p class="my-2">
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <div class="mt-4 xl:mt-8">
                                            <a class="btn-primary" href="<?php the_permalink(); ?>">Ver más</a>
                                        </div>
                                    </div>

                                    <div class="md:w-7/12 mt-6 md:mt-0 max-h-96 overflow-hidden rounded-xl shadow-lg">
                                        <?php if (has_post_thumbnail($post->ID)): ?>
                                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                            <a href="<?php the_permalink(); ?>">
                                              <img class="w-full" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                <div class="w-full h-20"></div>
                <!-- End introduction -->
            <?php } ?>
        </header>


		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
