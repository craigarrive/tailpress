<?php 

    $videoMaxWith = get_sub_field('max_width');

    // Load value.
    $video = get_sub_field('video');

    // Use preg_match to find iframe src.
    preg_match('/src="(.+?)"/', $video, $matches);
    $src = $matches[1];

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
?>
<?php if($video) { ?>
    <section class="embed-container h-auto overflow-hidden ratio-[16/9] relative <?= ($videoMaxWith) ? $videoMaxWith : "" ;?>">
        <!-- image - start -->
        <img src="https://images.unsplash.com/photo-1618004652321-13a63e576b80?auto=format&q=75&fit=crop&w=1500" loading="lazy" alt="Photo by Fakurian Design" class="absolute inset-0 h-full w-full object-cover object-center" />
        <!-- image - end -->

        <!-- overlay - start -->
        <div class="absolute inset-0 bg-indigo-500 mix-blend-multiply">
            
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
    </style>
<?php } ?>
