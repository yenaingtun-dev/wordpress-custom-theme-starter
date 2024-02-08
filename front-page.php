<?php 
get_header();
$args = array(
    'numberposts' => -1,
    'post_type'   => MIA_SLIDER_POST_TYPE
);
$sliders = get_posts($args);

$args = array(
    'numberposts' => 1,
    'post_type'   => MIA_OVERVIEW_POST_TYPE
);
$overview = get_posts($args);

$home_fields = get_fields(MIA_HOME_PAGE);
?>
<!-- slider -->
<?php get_template_part('template-parts/section-slider', null, array('sliders'=>$sliders)); ?>

<!-- overview -->
<?php get_template_part('template-parts/section-overview', null, array('overview'=>$overview)); ?>

<!-- feature image -->
<section  class="relative h-auto">
    <div>
        <img class="h-32 w-full object-cover" src="<?= $home_fields['image']['url']; ?>" alt="">
    </div>
</section>

<?php get_footer(); ?>
