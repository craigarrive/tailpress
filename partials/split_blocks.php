<section>

<?php $i = 1; foreach(get_sub_field('split_block') as $block) { ?>
    <div class="flex flex-col justify-between gap-6 sm:gap-10 md:gap-16 lg:flex-row">
        <?php if($block['split_texts_or_split_text_&_image'] == "imgtext") { ?>
            <?php if($block['image_position'] == "left") { ?>
                <div class="h-48 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:h-auto xl:w-5/12">
                    <img src="<?php echo $block['image']['url']; ?>" loading="lazy" alt="Photo of <?php echo $block['text_block']['heading_text']; ?>" class="h-full w-full object-cover object-center" />
                </div>
            <?php } ?>
        <?php } ?>

        <div class="flex flex-col justify-center sm:text-center lg:py-12 lg:text-left xl:w-5/12 xl:py-24">
            <p class="mb-4 font-semibold text-indigo-500 md:mb-6 md:text-lg xl:text-xl">Very proud to introduce</p>

            <h1 class="mb-8 text-4xl font-bold text-black sm:text-5xl md:mb-12 md:text-6xl"><?php echo $block['text_block']['heading_text']; ?></h1>

            <div class="mb-8 leading-relaxed text-gray-500 md:mb-12 lg:w-4/5 xl:text-lg"><?php echo $block['text_block']['body_text']; ?></div>

            <div class="flex flex-col gap-2.5 sm:flex-row sm:justify-center lg:justify-start">
                <?php if($block['text_block']['link']) { ?>
                    <a href="<?= $block['text_block']['link']['url'];?>" target="<?= $block['text_block']['link']['target'];?>" class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base" title="Find out more - <?= $block['text_block']['link']['title'];?>"><?= $block['text_block']['link']['title'];?></a>
                <?php } ?>
            </div>
        </div>

        <?php if($block['split_texts_or_split_text_&_image'] == "imgtext") { ?>
            <?php if($block['image_position'] == "right") { ?>
                <div class="h-48 overflow-hidden rounded-lg bg-gray-100 shadow-lg lg:h-auto xl:w-5/12">
                    <img src="<?php echo $block['image']['url']; ?>" loading="lazy" alt="Photo of <?php echo $block['text_block']['heading_text']; ?>" class="h-full w-full object-cover object-center" />
                </div>
            <?php } ?>
        
        <?php } else if($block['split_texts_or_split_text_&_image'] == "twotext") { ?>

        <div class="flex flex-col justify-center sm:text-center lg:py-12 lg:text-left xl:w-5/12 xl:py-24">
            <p class="mb-4 font-semibold text-indigo-500 md:mb-6 md:text-lg xl:text-xl">Very proud to introduce</p>

            <h1 class="mb-8 text-4xl font-bold text-black sm:text-5xl md:mb-12 md:text-6xl"><?php echo $block['text_block_2']['heading_text']; ?></h1>

            <div class="mb-8 leading-relaxed text-gray-500 md:mb-12 lg:w-4/5 xl:text-lg"><?php echo $block['text_block_2']['body_text']; ?></div>

            <div class="flex flex-col gap-2.5 sm:flex-row sm:justify-center lg:justify-start">
                <?php if($block['text_block_2']['link']) { ?>
                    <a href="<?= $block['text_block_2']['link']['url'];?>" target="<?= $block['text_block_2']['link']['target'];?>" class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base" title="Find out more - <?= $block['text_block_2']['link']['title'];?>"><?= $block['text_block_2']['link']['title'];?></a>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
<?php } ?>

</section>







