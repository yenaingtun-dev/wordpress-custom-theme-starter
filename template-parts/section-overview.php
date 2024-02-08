<?php 
    extract($args); 
    // var_dump($overview[0]->ID);
    $fields = get_fields($overview[0]->ID);
    $image = $fields['image']['url'];
?>
<section class="relative h-auto">
    <?php if ($overview) : ?>
        <div class="grid grid-cols-1 gap-4 p-10 lg:grid-cols-2 lg:gap-8">
            <div class="h-32 rounded-lg">
                <img src="<?= $image; ?>" alt="" class="">
            </div>
            <div class="h-32 rounded-lg">
                <?php echo $overview[0]->post_title; ?>
                <?php echo $overview[0]->post_content; ?>
            </div>
        </div>
    <?php endif; ?>
</section>