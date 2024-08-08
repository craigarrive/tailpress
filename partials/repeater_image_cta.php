<?php $total = count(get_sub_field('cta')); ?>
<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="mb-6 flex items-end justify-between gap-4">
      <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl"><?php echo get_sub_field('heading_text'); ?></h2>
    </div>

    <div class="grid gap-x-4 gap-y-6 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-<?php echo $total; ?> xl:grid-cols-<?php echo $total; ?>">

    <?php foreach(get_sub_field('cta') as $cta) { ?>
      <div>
        <a href="<?php echo $cta['link']['url']; ?>" class="group mb-2 block h-96 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:mb-3">
          <img src="<?php echo $cta['image']['url']; ?>" loading="lazy" alt="Photo by Austin Wade" class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
        </a>

        <div class="flex flex-col">
          <a href="<?php echo $cta['link']['url']; ?>" class="text-lg font-bold text-gray-800 transition duration-100 hover:text-gray-500 lg:text-xl"><?php echo $cta['title']; ?></a>
          <p class="mb-8 leading-relaxed text-gray-500 md:mb-12 lg:w-4/5 xl:text-lg"><?php echo $cta['content']; ?></p>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>
</div>