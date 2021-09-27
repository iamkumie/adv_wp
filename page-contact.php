<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>

<main>
  <?php // 投稿のスラッグを取得
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
  ?>
  <div class="contact__firstview">
    <h1><?php echo $slug; ?></h1>
  </div>

  <div class="contact__content">
    <h2 class="contact__title">フォームからのお問い合わせ</h2>
    <p class="contact__text">記入内容の確認後、2~3営業日以内にご連絡させていただきます。</p>
  </div>

  <form class="form" name="contact">
    <?php echo do_shortcode('[contact-form-7 id="23" title="CONTACT"]'); ?>
  </form>
</main>

<?php get_footer(); ?>