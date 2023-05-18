<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part('includes/nav') ?>
  
  <!-- Page Header-->
  <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="site-heading">
          <h1>カテゴリー別商品一覧</h1>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content-->
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-10 col-lg-8 col-xl-7">
          <!-- Post preview-->
          <div class="post-preview">
            <a href="<?php the_permalink(); ?>">
              <h2 class="post-title">
                <?php the_title(); ?>
              </h2>
            </a>
          </div>
        </div>
      <?php endwhile; ?>
      <!-- Pager-->
      <div class="d-flex justify-content-end mb-4">
        <!-- <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?> -->
        <?php echo paginate_links(); ?>
      </div>
    </div>
  </div>

  <?php get_template_part('includes/footer') ?>

  <?php get_footer(); ?>
</body>

</html>