<!DOCTYPE html>

<html lang="pl">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lody Oreo | Home</title>
  <link rel="stylesheet" href="css/index-main.css">
  <script type="module" src="js/scripts/index-main.js"></script>

</head>

<body>
  
  <h1 style="position: absolute; top: -100px;">Oreo - dobre lody</h1>

  <?php echo file_get_contents('components/header.html'); ?>

  <main class="the-main">

    <section class="carousel">

      <picture class="carousel__picture">

        <source srcset="resources/images/photos/carousel-mobile-1.jpg" media="(max-width:679px)">
        <img class="carousel__picture-image" src="resources/images/photos/carousel-1.jpg">

      </picture>

      <picture class="carousel__picture carousel__picture--invisible">

        <source srcset="resources/images/photos/carousel-mobile-2.jpg" media="(max-width:679px)">
        <img class="carousel__picture-image" src="resources/images/photos/carousel-2.jpg">

      </picture>

    </section>

    <article class="chill-out">

      <div class="chill-out-content">

        <div class="chill-out-not-images">

          <h2 class="chill-out__heading">
  
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="250" height="60" viewBox="0 0 250 60">
      
              <path id="cool-curve" fill="transparent"
                d="
                    M 10,50
                    Q 125,20 240,50
                  "
                ></path>
      
              <text class="chill-out__heading-top-text" x="125" text-anchor="middle" font-size="36" font-weight="bold" fill="white">
                <textPath xlink:href="#cool-curve">wyCHILLuj</textPath>
              </text>
      
            </svg>
  
            <svg class="chill-out__heading-svg-2" version="1.1" xmlns="http://www.w3.org/2000/svg" width="400" height="100" viewBox="0 0 400 100">
      
              <path id="cool-curve-2" fill="transparent"
                d="
                    M 10,90
                    Q 200,10 390,90
                  "
                ></path>
      
              <text class="chill-out__heading-bottom-text" x="200" text-anchor="middle" font-size="56" font-weight="bold" fill="rgb(28, 59, 126)">
                <textPath xlink:href="#cool-curve-2">z lodami Oreo</textPath>
              </text>
      
            </svg>
      
          </h2>
  
          <div class="chill-out__product-container">
  
            <a class="chill-out__product-link">
  
              <img class="chill-out__product-image" src="resources/images/products/stick-sandwich.png">
      
              <span class="chill-out__product-name">Oreo Stick Sandwich</span>
  
            </a>
  
          </div>

        </div>

        <img class="chill-out__drawing chill-out__drawing-1" src="resources/images/drawings/balloon.png">
        <img class="chill-out__drawing chill-out__drawing-2" src="resources/images/drawings/seagull-cloud.png">
        <img class="chill-out__drawing chill-out__drawing-3" src="resources/images/drawings/yoga-queen.png">

      </div>

    </article>

    <article class="join-world">

      <div class="join-world-content">

        <div class="join-world-not-images">

          <h2 class="join-world__heading">
  
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="450" height="80" viewBox="0 0 450 80">
      
              <path id="cool-curve-3" fill="transparent"
                d="
                    M 10,70
                    Q 225,5 440,70
                  "
                ></path>
      
              <text class="join-world__heading-top-text" x="225" text-anchor="middle" font-weight="bold" fill="white">
                <textPath xlink:href="#cool-curve-3">Dołącz do świata zabawy!</textPath>
              </text>
      
            </svg>
  
            <svg class="join-world__heading-svg-2" version="1.1" xmlns="http://www.w3.org/2000/svg" width="400" height="100" viewBox="0 0 400 100">
      
              <path id="cool-curve-4" fill="transparent"
                d="
                    M 10,90
                    Q 200,10 390,90
                  "
                ></path>
      
              <text class="join-world__heading-bottom-text" x="200" text-anchor="middle" font-weight="bold" fill="rgb(28, 59, 126)">
                <textPath xlink:href="#cool-curve-4">Lody Oreo</textPath>
              </text>
      
            </svg>
      
          </h2>

          <div class="join-world__texts-container">

            <p class="join-world__text join-world__text-1">Połączenie znanych na całym świecie ciasteczek Oreo i lodów.</p>
            <p class="join-world__text join-world__text-2">Rozkoszuj się nimi!</p>
            <p class="join-world__text">Dołącz do świata zabawy lodów Oreo i zaopatrz swoją zamrażarkę!</p>

          </div>

          <a class="join-world__button-link">Wszystkie produkty</a>

        </div>

        <img class="join-world__drawing join-world__drawing-1" src="resources/images/drawings/hangglider.png">
        <img class="join-world__drawing join-world__drawing-2" src="resources/images/drawings/small-cloud.png">
        <img class="join-world__drawing join-world__drawing-3" src="resources/images/drawings/telescope-boy-and-girl.png">
        <img class="join-world__drawing join-world__drawing-4" src="resources/images/drawings/bag-cloud.png">

      </div>      

    </article>

    <section class="news-section">

      <div class="news-section-content">

        <div class="news-section-articles-container">

          <article class="news-section__article">

            <a class="news-section__article-link">

              <div class="news-section__article-top">
                <img class="news-section__article-oreo-frame" src="resources/images/misc/oreo-frame.svg">
                <span class="news-section__article-top-text">Bardzo smaczne!</span>
                <img class="news-section__article-image" src="resources/images/photos/oreo-btc.jpg">
              </div>
  
              <h3 class="news-section__article-heading">Nowy wymiar rożków Oreo! Rożek z kulką</h3>

              <img class="news-section__special-drawing news-section__special-drawing-1" src="resources/images/drawings/yoink.png">
              <img class="news-section__special-drawing news-section__special-drawing-1 news-section__special-drawing-arm" src="resources/images/drawings/yoink-arm.png">

            </a>

            <span class="news-section__article-date">12 kwietnia 2021</span>

          </article>

          <article class="news-section__article">

            <a class="news-section__article-link">

              <div class="news-section__article-top">
                <img class="news-section__article-oreo-frame" src="resources/images/misc/oreo-frame.svg">
                <span class="news-section__article-top-text">Przepyszne!</span>
                <img class="news-section__article-image" src="resources/images/photos/small-bites.jpg">
              </div>
  
              <h3 class="news-section__article-heading">Lodowe kuleczki OREO - do dzielenia!</h3>

            </a>

            <span class="news-section__article-date">06 kwietnia 2020</span>

          </article>

          <article class="news-section__article">

            <a class="news-section__article-link">

              <div class="news-section__article-top">
                <img class="news-section__article-oreo-frame" src="resources/images/misc/oreo-frame.svg">
                <span class="news-section__article-top-text">Smakowite!</span>
                <img class="news-section__article-image" src="resources/images/photos/sticks-and-sandwiches.jpg">
              </div>
  
              <h3 class="news-section__article-heading">Lody Oreo - nowe opakowania</h3>

              <img class="news-section__special-drawing" src="resources/images/drawings/yoink.png">
              <img class="news-section__special-drawing news-section__special-drawing-arm" src="resources/images/drawings/yoink-arm.png">

            </a>

            <span class="news-section__article-date">06 kwietnia 2020</span>

          </article>

        </div>

        <img class="news-section__drawing" src="resources/images/drawings/oreo-divebomb.png">

      </div>

    </section>

  </main>

  <?php echo file_get_contents('components/footer.html'); ?>

</body>

</html>