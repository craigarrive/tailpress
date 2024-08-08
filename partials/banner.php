<section class="flex flex-col justify-between gap-6 sm:gap-10 md:gap-16 lg:flex-row pb-6 sm:pb-8 lg:pb-12">
    <?php if(get_sub_field('banner_position') == "right") { ?>
    <!-- image - start -->
    <div class="h-48 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:h-auto xl:w-5/12">
    <img src="<?php echo get_sub_field('banner_image')['url']; ?>" loading="lazy" alt="<?php echo get_sub_field('banner_heading'); ?>" class="h-full w-full object-cover object-center" />
    </div>
    <!-- image - end -->
    <?php } ?>
    <!-- content - start -->
    <div class="flex flex-col justify-center sm:text-center lg:py-12 lg:text-left xl:w-5/12 xl:py-24">
        <p class="mb-4 font-semibold text-indigo-500 md:mb-6 md:text-lg xl:text-xl"><?php echo get_sub_field('banner_subheading'); ?></p>

        <h1 class="mb-8 text-4xl font-bold text-black sm:text-5xl md:mb-12 md:text-6xl"><?php echo get_sub_field('banner_heading'); ?></h1>

        <div class="mb-8 leading-relaxed text-gray-500 md:mb-12 lg:w-4/5 xl:text-lg"><?php echo get_sub_field('banner_content'); ?></div>

        <div class="flex flex-col gap-2.5 sm:flex-row sm:justify-center lg:justify-start">
            <?php if(get_sub_field('primary_link')) { ?>
                <a href="<?php echo get_sub_field('primary_link')['url']; ?>" class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base"><?php echo get_sub_field('primary_link')['title']; ?></a>
            <?php } ?>
            <?php if(get_sub_field('secondary_link')) { ?>
                <a href="<?php echo get_sub_field('secondary_link')['url']; ?>" class="inline-block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base"><?php echo get_sub_field('secondary_link')['title']; ?></a>
            <?php } ?>
        </div>
    </div>
    <!-- content - end -->
    <?php if(get_sub_field('banner_position') == "left") { ?>
    <!-- image - start -->
    <div class="h-48 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:h-auto xl:w-5/12">
        <img src="<?php echo get_sub_field('banner_image')['url']; ?>" loading="lazy" alt="<?php echo get_sub_field('banner_heading'); ?>" class="h-full w-full object-cover object-center" />
    </div>
    <!-- image - end -->
    <?php } ?>
</section>