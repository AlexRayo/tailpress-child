
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer class="bg-gray-100" role="contentinfo">
    <div id="footer-widgets" class="container px-2 lg:px-0 py-8 md:py-12 md:grid grid-cols-3 gap-16">
        <?php dynamic_sidebar('Footer Widgets'); ?>
    </div>
    <div id="footer-bottom" class="bg-dark-gradient px-2 lg:px-0">
        <div class="container md:flex justify-between py-4 text-slate-100">
            <?php dynamic_sidebar('Footer Bottom'); ?>
            &copy;
            <?php echo date_i18n('Y'); ?> -
            <?php echo get_bloginfo('name'); ?>
        </div>
    </div>
</footer>
<style>
    /*ivorySearch*/
    .is-search-form {
        background: white;
        border-radius: 30px;
        border: none;
        margin-bottom: 0;
        overflow: hidden;
    }

    .is-form-style input.is-search-input {
        border: none !important;
        font-style: italic;
        box-shadow: none;
    }
    .is-form-style input.is-search-input:focus {
        background: white;
    }

    .is-form-style input.is-search-submit,
    .is-search-icon {
        border: none;
        background-color: initial;
    }

    /**/
    .splide__arrow svg {
        fill: blueviolet;
    }
</style>

<?php if (is_front_page()) { ?>
    <script>
        
    </script>
<?php } ?>

</div>

<?php wp_footer(); ?>

</body>
</html>
