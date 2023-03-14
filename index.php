<?php get_header(); ?>


<?php if (is_front_page()) { ?>
    <!--  PRODUCTS CATEGORIES  -->
    <div class="container mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 lg:gap-4 xl:gap-8 -mt-16 mb-8">
        <?php
        $product_categories = get_terms(
            'product_cat',
            array(
                // 'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => false,
            )
        );
        foreach ($product_categories as $product_category) {
            if ($product_category->name != 'Uncategorized') {
                # code...
    

                $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);
                $image = wp_get_attachment_url($thumbnail_id);
                $category_link = get_term_link($product_category);

                ?>
                <!-- Single product-category loop -->
                <div class="px-2 py-4 lg:p-4 rounded-lg bg-white shadow-lg border-slate-100">
                    <h2 class="mb-2 lg:mb-4 text-lg font-bold">
                        <?php echo $product_category->name; ?>
                    </h2>
                    <a class="block w-full h-36 md:h-56 lg:h-60 xl:h-64 overflow-hidden" href="<?php echo $category_link; ?>">
                        <img class="h-full w-auto object-cover hover:scale-110 transition-all duration-1000"
                            src="<?php echo $image; ?>" alt="<?php echo $product_category->name; ?>" />
                    </a>
                    <a href="<?php echo $category_link; ?>" class="block uppercase text-primary text-xs font-bold mt-4">Ver
                        más</a>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <!-- close display products by CATEGORIES -->
    <div class="home-widgets bg-primary-gradient">
        <div class="container py-8 md:flex justify-between items-center text-slate-100">
            <?php dynamic_sidebar('Home Widgets'); ?>
        </div>
    </div>
<?php } ?>


<?php
if (!is_front_page()) { ?>
    <div class="container mx-auto my-8">
    <?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

	<?php endif;
} ?>
</div>

<?php
get_footer();