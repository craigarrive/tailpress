<?php 
    $fullWidthHeading = get_sub_field('heading');
    $fullWidthSubHeading = get_sub_field('subheading');
    $fullWidthText = get_sub_field('text');
?>
<?php if($fullWidthHeading || $fullWidthSubHeading || $fullWidthText) { ?>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="rounded-lg bg-gray-100 px-4 py-6 md:py-8 lg:py-12">
                <?php if($fullWidthSubHeading) { ?>
                    <p class="mb-2 text-center font-semibold text-indigo-500 md:mb-3 lg:text-lg"><?= $fullWidthSubHeading; ?></p>
                <?php } ?>
                <?php if($fullWidthHeading) { ?>
                    <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl"><?= $fullWidthHeading; ?></h2>
                <?php } ?>
                <?php if($fullWidthText) { ?>
                    <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg"><?= $fullWidthText;?></p>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>