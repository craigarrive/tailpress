<?php 
    $testimonialsHeading = get_sub_field('heading');
    $testimonials = get_sub_field('testimonials');
?>
<?php if($testimonials) { ?>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="mx-auto max-w-screen-xl px-4 md:px-8">

        <?php if($testimonialsHeading) { ?>
            <h2 class="mb-8 text-center text-2xl font-bold text-gray-800 md:mb-12 lg:text-3xl"><?= $testimonialsHeading;?></h2>
        <?php } ?>
        
        <div class="grid gap-4 md:grid-cols-2 md:gap-8">
            <?php foreach($testimonials as $t) { ?>
                <!-- quote - start -->
                <div class="flex flex-col items-center gap-4 rounded-lg bg-indigo-500 px-8 py-6 md:gap-6">
                    
                    <?php if($t['text']) { ?>
                        <div class="max-w-md text-center text-white lg:text-lg"><?= $t['text'];?></div>
                    <?php } ?>

                    <?php if($t['image'] || $t['name'] || $t['job_title']) { ?>
                        <div class="flex flex-col items-center gap-2 sm:flex-row md:gap-3">
                            <?php if($t['image']) { ?>
                                <div class="h-12 w-12 overflow-hidden rounded-full border-2 border-indigo-100 bg-gray-100 md:h-14 md:w-14">
                                    <img src="<?= $t['image']['url'];?>" loading="lazy" alt="<?= $t['image']['alt'];?>" class="h-full w-full object-cover object-center" />
                                </div>
                            <?php } ?>

                            <?php if($t['name'] || $t['job_title']) { ?>
                                <div>
                                    <?php if($t['name']) { ?>
                                        <div class="text-center text-sm font-bold text-indigo-50 sm:text-left md:text-base"><?= $t['name'];?></div>
                                    <?php } ?>
                                    
                                    <?php if($t['job_title']) { ?>
                                        <p class="text-center text-sm text-indigo-200 sm:text-left md:text-sm"><?= $t['job_title'];?> </p>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <!-- quote - end -->
            <?php } ?>
        </div>
      </div>
    </div>
<?php } ?>