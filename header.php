<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="<?= THEME_PATH; ?>/assets/css/reset.css" />
  <link rel="stylesheet" href="<?= THEME_PATH; ?>/assets/css/header.css" />
  <link rel="stylesheet" href="<?= THEME_PATH; ?>/assets/css/main.css" />
  <link rel="stylesheet" href="<?= THEME_PATH; ?>/assets/css/footer.css" />

  <!-- Primary SEO -->
  <title>Winn Coin — Deflationary Token of the Winn Chain Ecosystem</title>
  <meta name="description" content="Winn Coin powers the Winn Chain: secure, low-cost transactions, staking rewards, and a deflationary model that fuels a global, community-driven ecosystem." />
  <link rel="canonical" href="https://wincoin.com/" />
  <meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1" />
  <meta name="theme-color" content="#0B0B0B" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Winn Coin" />
  <meta property="og:title" content="Winn Coin — Deflationary Token of the Winn Chain Ecosystem" />
  <meta property="og:description" content="Secure, low-cost transactions and staking on Winn Chain. Explore the deflationary economics and community-powered growth of Winn Coin." />
  <meta property="og:url" content="https://wincoin.com/" />
  <meta property="og:image" content="https://wincoin.com/<?= THEME_PATH; ?>/assets/img/og/winn-coin-og.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:locale" content="en_US" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Winn Coin — Deflationary Token of the Winn Chain Ecosystem" />
  <meta name="twitter:description" content="Secure, low-cost transactions and staking on Winn Chain. Explore the deflationary economics and community-powered growth of Winn Coin." />
  <meta name="twitter:image" content="https://wincoin.com/<?= THEME_PATH; ?>/assets/img/og/winn-coin-og.jpg" />
  <!-- <meta name="twitter:site" content="@YourHandle" /> -->

  <!-- Hreflang (если только EN-версия сайта) -->
  <link rel="alternate" href="https://wincoin.com/" hreflang="en" />
  <link rel="alternate" href="https://wincoin.com/" hreflang="x-default" />

  <!-- Structured Data -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [{
          "@type": "Organization",
          "name": "Winn Coin",
          "url": "https://wincoin.com/",
          "logo": "https://wincoin/<?= THEME_PATH; ?>/assets/img/logo.svg",
          //"sameAs": ["https://twitter.com/yourprofile", "https://youtube.com/@yourchannel", "https://discord.gg/yourinvite", "https://t.me/yourchannel", "https://medium.com/@yourprofile"]
        },
        {
          "@type": "WebSite",
          "name": "Winn Coin",
          "url": "https://wincoin.com/",
          "inLanguage": "en",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://wincoin.com/search?q={query}",
            "query-input": "required name=query"
          }
        }
      ]
    }
  </script>

  <?php wp_head(); ?>
</head>

<body>
  <header class="container">
    <a href="<?= is_home() ? '#' : '/'; ?>" class="logo">
      <img src="<?= THEME_PATH; ?>/assets/img/logo.svg" alt="winn coin logo" width="100%" height="100%" />
    </a>

    <nav>
      <ul data-stagger="0.1">
        <li class="reveal" data-anim="slide-in-right"><a href="#solution">Solution</a></li>
        <li class="reveal" data-anim="slide-in-right"><a href="#ecosystem">Ecosystem</a></li>
        <li class="reveal" data-anim="slide-in-right"><a href="#features">Features</a></li>
        <li class="reveal" data-anim="slide-in-right"><a href="#community">Community</a></li>
        <li class="reveal" data-anim="slide-in-right"><a href="#resource">Resource Hub</a></li>
        <li class="reveal" data-anim="slide-in-right"><a href="#faq">FAQ</a></li>
        <li class="reveal" data-anim="slide-in-right"><a href="#security">Trust & Security</a></li>
      </ul>
    </nav>

    <button class="btn primary">Contact Us</button>

    <div class="burger" id="burger" tabindex="0" aria-label="mobile menu" aria-controls="mobile-menu" aria-expanded="false"><span></span><span></span><span></span></div>

    <div class="mobile-menu" id="mobile-menu" hidden>
      <div class="menu__content container">
        <nav>
          <ul>
            <li><a href="#solution">Solution</a></li>
            <li><a href="#ecosystem">Ecosystem</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#community">Community</a></li>
            <li><a href="#resource">Resource Hub</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#security">Trust & Security</a></li>
          </ul>
        </nav>
        <button class="btn primary">Contact Us</button>
      </div>
    </div>
  </header>
  <main>