<?php extract($args); ?>
<section  class="relative h-auto">
            <?php
            foreach ($sliders as $key => $slide) :
                $featured_img = wp_get_attachment_url(get_post_thumbnail_id($slide->ID));
            ?>
                <div class="overflow-hidden bg-center bg-no-repeat bg-cover h-[55%] cursor-grab md:h-[63%] lg:h-[70%] xl:h-full " style="background-image:url(<?php echo $featured_img; ?>);">
                    <div class="h-full">
                        <section class="container mx-auto">
                            <div class="my-auto flex h-[30rem] xl:h-[35rem] items-center justify-between">
                                <div class="flex-row items-center justify-center lg:w-[83%] 2xl:w-[69%] mx-auto sm:flex sm:justify-between">
                                    <div class="text-center w-full">
                                        <h1 class="text-xl font-semibold text-white tracking-wide uppercase sm:text-2xl md:text-4xl lg:text-5xl">
                                            <?= $slide->post_title; ?></h1>
                                        <h3 class="my-3 text-sm font-light md:text-lg"><?= $slide->post_content; ?></h3>
                                        <a href="<?= $slide->service_link; ?>" class="inline-block px-8 py-3 text-sm text-white font-medium transition rounded bg-red-400 hover:scale-110 hover:shadow-xl">Learn More</a>
                                    </div>
                                    <div class="flex justify-center mt-5 sm:mt-0">
                                        <button class="w-12 transition sm:w-20 ripple hover:scale-110 modalButton">
                                            <svg id="playButton" width="45px" height="30px" style="enable-background:new 0 0 512 512;" version="1.1" fill="white" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M405.2,232.9L126.8,67.2c-3.4-2-6.9-3.2-10.9-3.2c-10.9,0-19.8,9-19.8,20H96v344h0.1c0,11,8.9,20,19.8,20  c4.1,0,7.5-1.4,11.2-3.4l278.1-165.5c6.6-5.5,10.8-13.8,10.8-23.1C416,246.7,411.8,238.5,405.2,232.9z" />
                                            </svg>
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
</section>