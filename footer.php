
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<div class="bg-white">
  <footer class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="mb-16 grid grid-cols-2 gap-12 pt-10 md:grid-cols-4 lg:grid-cols-6 lg:gap-8 lg:pt-12">
      <div class="col-span-full lg:col-span-2">
        
        <!-- logo - start -->
        <div class="mb-4 lg:-mt-2">
          <a href="<?php echo get_bloginfo( 'url' ); ?>" class="inline-flex items-center gap-2 text-xl font-bold text-gray-600 md:text-2xl" aria-label="logo">
			      <img src="<?= get_stylesheet_directory_uri();?>/assets/logo.svg" alt="<?php echo get_bloginfo( 'name' ); ?>">
          </a>
        </div>
        <!-- logo - end -->

        <p class="mb-6 text-gray-600 sm:pr-8">Filler text is dummy text which has no meaning however looks very similar to real text.</p>


        <?php $socialMedia = get_field('social_media', 'option');?>
        <?php if($socialMedia) { ?>
          <!-- social - start -->
          <div class="flex gap-4">

            <?php foreach($socialMedia as $social) { ?>
              <a href="<?= $social['link'];?>" target="_blank" class="text-gray-600 transition duration-100 hover:text-gray-500 active:text-gray-800 text-xl">
                <?= $social['icon'];?>
              </a>
            <?php } ?>

          </div>
          <!-- social - end -->
        <?php } ?>
      </div>

      <?php $contactInfo = get_field('contact_information', 'option');?>
      <?php if($contactInfo['address']) { ?>
        <?php $parameteres = urlencode($contactInfo['address']);?>
        <!-- where to find us - start -->
        <div>
          <div class="mb-4 font-bold uppercase tracking-widest text-gray-600">Where to Find Us</div>
          <div class="flex flex-col gap-4">
            <a href="https://www.google.com/maps/search/?api=1&query=<?= $parameteres; ?>" class="flex items-center gap-x-2.5 text-gray-600 transition duration-100 hover:text-gray-800 active:text-gray-800" target="_blank"><i class="fa-solid fa-map text-xl"></i> <?= $contactInfo['address'];?></a>
          </div>
        </div>
        <!-- where to find us - end -->
      <?php } ?>

      <?php $email = get_field('telephone', 'option'); $tel = get_field('email', 'option');?>
      <?php if($email || $tel) { ?>
        <!-- contact - start -->
          <div>
            <div class="mb-4 font-bold uppercase tracking-widest text-gray-600">Contact</div>
            <div class="flex flex-col gap-4">
              <?php if($tel) { ?>
                <a href="tel:<?= $tel;?>" class="flex items-center gap-x-2.5 text-gray-600 transition duration-100 hover:text-gray-800 active:text-gray-800"><i class="fa-solid fa-phone text-xl"></i> <?= $tel;?></a>
              <?php } ?>

              <?php if($email) { ?>
                <a href="mailto:<?= $email;?>" class="flex items-center gap-x-2.5 text-gray-600 transition duration-100 hover:text-gray-800 active:text-gray-800"><i class="fa-solid fa-envelope text-xl"></i> <?= $email;?></a>
              <?php } ?>
            </div>
          </div>
          <!-- contact - end -->
      <?php } ?>

    </div>

    <div class="border-t border-gray-800 py-8 text-center text-sm text-gray-600">&copy; <?= date('Y');?> - <?= get_bloginfo('name');?>. All rights reserved.</div>
  </footer>
</div>

</div>

<?php wp_footer(); ?>

</body>
</html>
