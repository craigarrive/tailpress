<?php 
    $galleryHeading = get_sub_field('heading');
    $galleryDescription = get_sub_field('description');
    $gallery = get_sub_field('gallery');
?>
<?php if($gallery) { ?>
   
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            
            <?php if($galleryHeading || $galleryDescription) { ?>
                <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
    
                    <div class="flex items-center gap-12">
                        <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl"><?= $galleryHeading;?></h2>
                        <p class="hidden max-w-screen-sm text-gray-500 md:block"><?= $galleryDescription;?></p>
                    </div>
    
                    <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">More</a>
                </div>
            <?php } ?>
   
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">

                <?php $i = 0; foreach($gallery as $img) { ?>
                    <!-- image - start -->
                    <a href="#" class="<?= ($i % 3 != 0 ) ? "md:col-span-2" : "";?> group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80" id="gallery-img-<?= $i;?>">
                        
                        <img src="<?= $img['url'];?>" loading="lazy" alt="<?= $img['alt'];?>" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                        <?php if($img['alt']) { ?>
                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg"><?= $img['alt'];?></span>
                        <?php } ?>
                    </a>
                    <!-- image - end -->
                <?php $i++; } ?>
            </div>
        </div>
    </div>
<?php } ?>