<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl"><?php echo get_sub_field('cpt_carousel_heading_text'); ?></h2>
    </div>
    <!-- text - end -->

    <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">

    <?php foreach(get_sub_field('custom_posts') as $post) { 
      setup_postdata($post); ?>
      
      <!-- article - start -->
      <a href="<?php echo get_the_permalink(); ?>" class="group relative flex h-48 flex-col overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-64 xl:h-96">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 to-transparent md:via-transparent"></div>

        <div class="relative mt-auto p-4">
          <span class="block text-sm text-gray-200"><?php echo get_the_date(); ?></span>
          <h2 class="mb-2 text-xl font-semibold text-white transition duration-100"><?php echo get_the_title(); ?></h2>

          <span class="font-semibold text-indigo-300">Read more</span>
        </div>
      </a>
      <!-- article - end -->
     
    <?php } 
        wp_reset_postdata();
    ?>
      



    </div>
  </div>
</div>