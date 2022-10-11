<!DOCTYPE html>

<html lang="pl">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lody Oreo | News</title>
  <link rel="stylesheet" href="css/news-main.css">
  <script type="module" src="js/scripts/news-main.js"></script>

</head>

<body>

  <?php echo file_get_contents('components/header.html'); ?>

  <main class="the-main">

    <section class="news-section">

      <div class="news-section-content">

        <h1 class="news-section__heading">

          <svg class="news-section__heading-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 364 99" width="364">
            <path id="ctg-0.36070" fill="transparent" d="M 13,90 Q 183,-10 353,90 "></path><text font-size="32" style="font-size: 42px; fill: white;" x="7">
              <textPath xlink:href="#ctg-0.36070">Ostatnie nowinki</textPath>
            </text>
          </svg>

          <svg class="news-section__heading-svg news-section__heading-svg-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 301 93" width="301">
            <path id="ctg-0.38161" fill="transparent" d="M 5,90 Q 150,-10 295,90 "></path><text font-size="32" style="font-size: 42px; fill: rgb(28, 59, 126);" x="18">
              <textPath xlink:href="#ctg-0.38161">o lodach Oreo</textPath>
            </text>
          </svg>

        </h1>

        <div class="news-section-articles-container">

          <article class="news-section__article">

            <a class="news-section__article-link">

              <div class="news-section__article-top">
                <img class="news-section__article-oreo-frame" src="resources/images/misc/oreo-frame.svg">
                <span class="news-section__article-top-text">Bardzo smaczne!</span>
                <img class="news-section__article-image" src="resources/images/photos/oreo-btc.jpg">
              </div>

              <h3 class="news-section__article-heading">Nowy wymiar rożków Oreo! Rożek z kulką</h3>

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

            </a>

            <span class="news-section__article-date">06 kwietnia 2020</span>

          </article>

        </div>

        <img class="news-section__drawing news-section__drawing-1" src="resources/images/drawings/bikers.png">
        <img class="news-section__drawing news-section__drawing-2" src="resources/images/drawings/selfie-stick.png">

      </div>

    </section>

  </main>

  <?php echo file_get_contents('components/footer.html'); ?>

</body>

</html>