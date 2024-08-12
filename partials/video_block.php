<?php 

    // Load value.
    $video = get_sub_field('video');

    // Use preg_match to find iframe src.
    preg_match('/src="(.+?)"/', $video, $matches);
    $src = $matches[0];

    // Add extra parameters to src and replace HTML.
    $params = array(
        'controls'  => 0,
        'hd'        => 1,
        'autohide'  => 1
    );

    $new_src = add_query_arg($params, $src);
    $video = str_replace($src, $new_src, $video);

    // Add extra attributes to iframe HTML.
    $attributes = 'frameborder="0"';
    $video = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $video);

    $videoMaxWith = get_sub_field('max_width');
    $videoImageOverlay = get_sub_field('image_overlay');
?>
<?php if($video) { ?>
    <section class="embed-container h-auto overflow-hidden ratio-[16/9] relative mb-10 <?= ($videoMaxWith) ? $videoMaxWith : "" ;?>">
        
        <?php if($videoImageOverlay) { ?>
            <!-- image - start -->
            <img src="<?= $videoImageOverlay['url'];?>" loading="lazy" alt="<?= $videoImageOverlay['alt'];?>" class="absolute inset-0 h-full w-full object-cover object-center" />
            <!-- image - end -->
        <?php } ?>

        <!-- overlay - start -->
        <div class="absolute inset-0 bg-indigo-500 mix-blend-multiply flex items-center justify-center">
            <i class="fa-solid fa-play text-white text-8xl cursor-pointer"></i>
        </div>
        <!-- overlay - end -->

        <?= $video; ?>
    </div>
    <style type="text/css">
        .embed-container { 
            position: relative; 
            padding-top: 36.25%;
            overflow: hidden;
            width: 100%;
            height: auto;
            margin-left: auto;
            margin-right: auto;
        } 

        .embed-container:not(.max-w-full) { 
            border-radius: 24px;
        }

        .embed-container iframe,
        .embed-container object,
        .embed-container embed { 
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
            z-index: -1;
        }

        .fa-play {
            color: #ffffff;
        }
    </style>
<?php } ?>
