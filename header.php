<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>株式会社estra</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="style.css">
  <?php if (is_page()) : ?>
    <link rel="stylesheet" href="css/contact.css" />
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <h1 class="header__title">
      <a href="<?php echo esc_url(home_url('/')); ?>" style="border-bottom: none;"><?php bloginfo('name'); ?></a>
    </h1>
    <nav class="header__nav pc">
      <ul class="header__nav-list">
        <li class="header__nav-item">
          <a href="about/index.html">ABOUT</a>
        </li>
        <li class="header__nav-item">
          <a href="news.html">NEWS</a>
        </li>
        <li class="header__nav-item">
          <a href="service.html">SERVICE</a>
        </li>
        <li class="header__nav-item">
          <a href="recruit/index.html">RECRUIT</a>
        </li>
        <li class="header__nav-item">
          <a href="<?php echo home_url("contact"); ?>">CONTACT</a>
        </li>
      </ul>
    </nav>
  </header>