<?php

  // Advanced Custom Fields
  $course_intro_title     = get_field('course_introduction_title');
  $course_intro_video     = get_field('course_introduction_video');

?>

<!-- Video Featurette -->
<section id="featurette">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2><?php echo $course_intro_title; ?></h2>
        <iframe width="100%" height="415" src="<?php echo $course_intro_video; ?>" frameborder="0" allowfullscreen></iframe>
      </div><!-- col -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- featurette -->
