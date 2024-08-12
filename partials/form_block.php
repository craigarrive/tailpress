<?php $gravityFrom = get_sub_field('form_id');?>
<?php if($gravityFrom) { ?>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <!-- form - start -->
        <form class="mx-auto grid max-w-screen-md gap-4 sm:grid-cols-1">
            <?= gravity_form( $gravityFrom, false, false, false, '', false );?>
        </form>
        <!-- form - end -->
      </div>
    </div>
<?php } ?>