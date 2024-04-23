<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en-US">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.youtube.com/iframe_api"></script>
    <title><?php bloginfo('name'); ?></title>
</head>

<?php
wp_head();
$home_fields = get_fields(MIA_HOME_PAGE);
var_dump($home_fields);
?>

<body class="bg-white gap font-Poppins">
<!-- navbar -->
<?= get_template_part('template-parts/section-navbar', null, array('home_fields' => $home_fields)); ?>
<!-- banner -->
<?php if (!is_tax()) : ?>
    <?= get_template_part('template-parts/section-banner', null); ?>
<?php endif; ?>