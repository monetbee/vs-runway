<?php
/**
 * The main template file for the VS Runway theme.
 *
 * @package VS_Runway
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
  <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="site-shell">
    <header class="site-header">
      <div class="site-branding">
        <p class="eyebrow">Shhh...Collection</p>
        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
      </div>
      <nav class="site-nav" aria-label="Primary navigation">
        <a href="#hero">HOME</a>
        <a href="#event">EVENT</a>
        <a href="#lookbook">COLLECTION</a>
        <a href="#products">PRODUCTS</a>
        <a href="#story">OUR STORY</a>
      </nav>
    </header>

    <main>
      <section id="hero" class="hero-section" style="background-image: url('<?php echo esc_url( get_theme_file_uri( '/assets/IMG_2448.jpeg' ) ); ?>');">
        <div class="hero-copy">
          <span class="hero-pretitle">THE 2026 Shhh...Collection SHOW</span>
          <h2 class="hero-title">SEXY CUTE LINGERIE<br>MEETS HAUTE COUTURE</h2>
          <p class="hero-description">毎年開催されるVS風のランウェイイベント。洗練と官能が交差する、限定ショーへようこそ。</p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="#rsvp">RSVP</a>
            <a class="btn btn-outline" href="#watch">WATCH LIVE</a>
          </div>
          <div class="hero-meta">
            <span>Annual Fashion Event</span>
            <span>Next Show: Fall 2026</span>
          </div>
        </div>
      </section>

      <section id="event" class="event-section">
        <div class="section-header">
          <p class="eyebrow">EVENT</p>
          <h2>ANNUAL SEXY COUTURE SHOW</h2>
          <p>世界中のファッションファンが待ち望む、毎年秋のランジェリーショー。美とテクスチャを重ねた舞台で、特別な物語が幕を開けます。</p>
        </div>
        <div class="event-grid">
          <?php $event_cards = array(
            array(
              'label' => 'Live Experience',
              'title' => 'Exclusive Runway',
              'description' => '限られたゲストのみが招待されるショーを、デジタルでも体験できるライブ配信。',
              'image' => get_template_directory_uri() . '/assets/exclusive runway.jpg',
              'pos' => '50% 30%', // 画像の位置を調整するためのカスタムプロパティ（下寄せ）
            ),
            array(
              'label' => 'Design Philosophy',
              'title' => 'Sexy + Cute',
              'description' => '大胆な透け感と繊細なレース、宝石の煌めきを掛け合わせたアイテムを紹介。',
              'image' => get_template_directory_uri() . '/assets/sexycute.jpeg',
              'pos' => '50% 50%', // 画像の位置を調整するためのカスタムプロパティ
            ),
            array(
              'label' => 'Signature Collection',
              'title' => 'Jewels & Lace',
              'description' => 'ランジェリーとジュエリーを同時に楽しむ、コレクションライン。',
              'image' => get_template_directory_uri() . '/assets/jl.jpg',
              'pos' => '50% 20%', // 画像の位置を調整するためのカスタムプロパティ
            ),
          ); ?>

          <?php foreach ( $event_cards as $card ) : ?>
            <article class="event-card">
              <div class="card-media" role="img" aria-label="<?php echo esc_attr( $card['title'] ); ?>" style="background-image: url('<?php echo esc_url( $card['image'] ); ?>'); background-position: <?php echo esc_attr( $card['pos'] ); ?>;"></div>
              <div class="card-copy">
                <span class="card-label"><?php echo esc_html( $card['label'] ); ?></span>
                <h3><?php echo esc_html( $card['title'] ); ?></h3>
                <p><?php echo esc_html( $card['description'] ); ?></p>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <section id="lookbook" class="section-lookbook">
        <div class="section-header">
          <p class="eyebrow">COLLECTION</p>
          <h2>ICONIC SHOW LOOKS</h2>
          <p>過去のステージで登場した、魅力あふれるルックブック。艶やかさと繊細さを兼ね備えたショーケース。</p>
        </div>
        <div class="lookbook-grid">
          <?php $lookbook_items = array(
              array(
                'title' => 'MIDNIGHT VELVET',
                'subtitle' => 'ランジェリー×ジュエル',
                'image' => get_theme_file_uri( '/assets/midnight velvet.jpg' ),
              ),
              array('title' => 'PINK ILLUSION', 'subtitle' => 'ネオンレースの誘惑', 
              'image' => get_theme_file_uri( '/assets/pink illusion.jpeg' )),
              array('title' => 'STARDUST BODICE', 'subtitle' => '星屑輝くシルエット', 
              'image' => get_theme_file_uri( '/assets/stardust bodice.jpeg' )),
          ); ?>

          <?php foreach ( $lookbook_items as $item ) : ?>
            <article class="lookbook-card">
              <div class="card-media" style="background-image: url('<?php echo esc_url( $item['image'] ); ?>'); background-position: 50% 50%; background-size: 150%; background-repeat: no-repeat;"></div>
              <div class="card-copy">
                <span class="card-label"><?php echo esc_html( $item['subtitle'] ); ?></span>
                <h3><?php echo esc_html( $item['title'] ); ?></h3>
                <a class="btn btn-card" href="#products">SHOP THIS LOOK</a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <section id="products" class="product-section">
        <div class="section-header">
          <p class="eyebrow">PRODUCTS</p>
          <h2>SEXY LINGERIE & JEWELRY</h2>
          <p>ショーでフィーチャーされた特別なプロダクトをチェック。ランジェリーとジュエリーのセットで洗練されたスタイルを。</p>
        </div>
        <div class="product-grid">
          <?php $products = array(
            array(
              'title' => 'SILK LACE SET',
              'description' => '透け感のあるレースと繊細なシルクで仕上げたランジェリーセット。',
              'price' => '¥24,800',
              'tag' => 'NEW',
              'image' => get_theme_file_uri( '/assets/silkandlace.webp' ),
              'pos' => '50% 80%', // 画像の位置を調整するためのカスタムプロパティ
            ),
            array(
              'title' => 'CRYSTAL HARNESS',
              'description' => 'ジュエルをあしらったボディハーネス。ショーの主役になる一品。',
              'price' => '¥18,900',
              'tag' => 'LIMITED',
              'image' => get_theme_file_uri( '/assets/crystal-harness.webp' ),
            ),

            array(
              'title' => 'GLOWING BRALETTE',
              'description' => 'ピンクのネオンを思わせる輝きが特徴のブラレット。',
              'price' => '¥16,500',
              'tag' => 'BEST SELLER',
              'image' => get_theme_file_uri( '/assets/bralet.webp' ),
            ),
          ); ?>

          <?php foreach ( $products as $product ) : ?>
            <article class="product-card">
              <div class="product-media" style="background-image: url('<?php echo esc_url( $product['image'] ); ?>');"></div>
              <div class="product-content">
                <span class="product-tag"><?php echo esc_html( $product['tag'] ); ?></span>
                <h3><?php echo esc_html( $product['title'] ); ?></h3>
                <p><?php echo esc_html( $product['description'] ); ?></p>
              </div>
              <div class="product-footer">
                <span class="product-price"><?php echo esc_html( $product['price'] ); ?></span>
                <a class="btn btn-secondary" href="#">DETAILS</a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <section id="story" class="story-section">
        <div class="story-panel">
          <p class="eyebrow">OUR STORY</p>
          <h2>私たちのショーへの想い</h2>
          <p>このショーは、女性の美しさと自信を讃えるステージです。毎年新しいテーマを掲げ、セクシーさと可愛らしさが交差するランジェリーアートを届けます。</p>
          <p>ひとつひとつのルックは、身に着ける人の内側の強さと自由を引き出すためにデザインされています。宝石の煌めきとレースの繊細さが、あなたの魅力を引き立てるはずです。</p>
          <a class="btn btn-primary" href="#hero">BACK TO SHOW</a>
        </div>
        <div class="story-visual">
          <div class="story-image" style="background-image: url('<?php echo esc_url( get_theme_file_uri( '/assets/behind-the-scene.jpg' ) ); ?>');"></div>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <div class="footer-copy">
        <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        <p>Annual lingerie fashion show / Sexy cute couture / Live RSVP & shopping</p>
      </div>
    </footer>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
