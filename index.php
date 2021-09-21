<?php get_header(); ?>
<main>
  <div class="bg-video-wrap">
    <video src="<?php echo get_template_directory_uri(); ?>img/pexels-mikhail-nilov-7989671.mp4" loop muted autoplay>
    </video>
    <div class="overlay">
    </div>
    <h1 class="top__title">Commit to the growth for everyone</h1>
  </div>

  <div class="container">

    <!-- about -->
    <div class="about">
      <h2 class="menu__title">ABOUT<span>私たちについて</span></h2>
      <div class="top__content">
        <p class="top__content-title">Technology × Coaching</p>
        <p>株式会社estraはデジタル化が遅れている教育業界に最新のテクノロジーを導入することによって教育のDXを実現します。独自のオペレーションとコーチングを融合した新しい教育の仕組みにより、一人ひとりに合わせた最適な教育を提供します。</p>
      </div>
      <div class="menu__button">
        <a href="about/index.html" class="btn btn-svg">
          <svg>
            <rect x="2" y="2" rx="0" fill="none" width="200" height="50"></rect>
          </svg>
          <span>MORE</span>
        </a>
      </div>
    </div>

    <!-- news -->
    <div class="news">
      <h2 class="menu__title">NEWS<span>ニュース</span></h2>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="news__wrapper">
            <div class="news__card">
              <div class="news__content-img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-image">
                <?php endif; ?>
              </div>
              <div class="text-box">
                <h3 class="title">
                  <?php
                  if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                    $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                    echo $title . '…';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                </h3>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <p>投稿が見つかりません。</p>
      <?php endif; ?>
      <div class="menu__button">
        <a href="news.html" class="btn btn-svg">
          <svg>
            <rect x="2" y="2" rx="0" fill="none" width="200" height="50"></rect>
          </svg>
          <span>MORE</span>
        </a>
      </div>
    </div>

    <!-- service -->
    <div class="service">
      <h2 class="menu__title">SERVICE<span>サービス</span></h2>
      <div class="service__wrapper">
        <div class="service__card">
          <div class="service__content-img">
            <img />
          </div>
          <div class="text-box">
            <h3 class="service__title">フリーランス特化型プログラミングスクール「COACHTECH」</h3>
            <p>COACHTECH(コーチテック)はフリーランス特化型のオンラインコーチングプログラミングスクールです。
              プログラミング未経験の方でも、「独自の学習ノウハウ」でフリーランスエンジニアを目指すことができます。</p>
          </div>
        </div>
        <div class="service__card">
          <div class="service__content-img">
            <img />
          </div>
          <div class="text-box">
            <h3 class="service__title">教育機関向け業務効率化支援ツール「Stageee」</h3>
            <p>Stageee(ステージー)はコーチングに特化した業務効率化支援ツールです。
              Web会議、面談予約、チャット、学習計画作成、学習状況の把握、教材管理、指導報告書作成といったコーチングにおいて必要な機能が1つにまとまった業務効率化を支えるSaaS</p>
          </div>
        </div>
      </div>
      <div class="menu__button">
        <a href="service.html" class="btn btn-svg">
          <svg>
            <rect x="2" y="2" rx="0" fill="none" width="200" height="50"></rect>
          </svg>
          <span>MORE</span>
        </a>
      </div>
    </div>

    <!-- recruit -->
    <div class="recruit">
      <h1 class="menu__title">RECRUIT<span>採用情報</span></h1>
      <div class="top__content">
        <p class="top__content-title">日本の教育を変革する最前線で活躍する人材に</p>
        <p class="top__content-text">全員がリスクを恐れずにチャレンジし、社員一人一人が活躍できる環境をみんなで作り上げる</p>
      </div>
      <div class="menu__button">
        <a href="./recruit/index.html" class="btn btn-svg">
          <svg>
            <rect x="2" y="2" rx="0" fill="none" width="200" height="50"></rect>
          </svg>
          <span>MORE</span>
        </a>
      </div>
    </div>

    <!-- contact -->
    <div class="contact">
      <h2 class="menu__title">CONTACT<span>お問い合わせ</span></h2>
      <div class="menu__button menu__button-contact">
        <a href="contact.html" class="btn btn-svg">
          <svg>
            <rect x="2" y="2" rx="0" fill="none" width="200" height="50"></rect>
          </svg>
          <span>CONTACT</span>
        </a>
      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>