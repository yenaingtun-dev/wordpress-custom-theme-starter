<?php extract($args); ?>
<nav id="navbar" class="z-20 w-full px-2 py-1 bg-white border-gray-200 rounded shadow-2xl sm:px-4" x-data="{ open: false }">
  <div class="container flex flex-wrap items-center justify-between mx-auto p-3">
    <a class="logo" href="<?= bloginfo('url'); ?>">
      <img src="<?= $home_fields['logo']['url']; ?>" class="w-20" alt="<?= get_bloginfo(); ?>">
    </a>
    <!-- Mobile menu button-->
    <div class="flex items-center md:hidden">
      <button class="relative w-10 h-10 text-gray-500 bg-white focus:outline-none" @click="open = !open" x-on:keydown.window.escape="open = false">
        <span class="sr-only">Open main menu</span>
        <div class="absolute block w-5 transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
          <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
          <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
          <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
        </div>
      </button>
    </div>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
    <?php
        wp_nav_menu(array(
            'theme_location' => 'main',
            'fallback_cb' => false,
            'container' => false,
            'items_wrap' => '<ul id="%1$s" class="%2$s flex items-center text-sm xl:text-base space-x-4 xl:space-x-5">%3$s</ul>',
        ));
    ?>
    </div>
    <div>
        language
    </div>
  </div>
  <div class="my-4 xl:hidden" id="mobile-menu" x-show="open" style="display: none;" x-on:click.away="open = false" x-transition.duration.500ms>
    <div class="w-full pt-1 space-y-1 sm:pt-6 lg:pt-0">
      <?php
        wp_nav_menu(array(
            'theme_location' => 'main',
        ));
      ?>
    </div>
  </div>
</nav>