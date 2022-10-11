<!DOCTYPE html>

<html lang="pl">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lody Oreo | Video</title>
  <link rel="stylesheet" href="css/videos-main.css">
  <script type="module" src="js/scripts/videos-main.js"></script>

</head>

<body>

  <?php echo file_get_contents('components/header.html'); ?>

  <main class="the-main">

    <section class="videos">

      <div class="videos-content">

        <h1 class="videos__heading">
  
          <svg class="videos__heading-text-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 531 121" width="531">
            <path id="ctg-0.76297" fill="transparent" d="M -32,140 Q 268,-60 568,140 "></path><text style="font-size: 42px; fill: rgb(255, 255, 255);" x="60">
              <textPath xlink:href="#ctg-0.76297">Dołącz do świata zabawy!</textPath>
            </text>
          </svg>
  
          <svg class="videos__heading-text-svg videos__heading-text-svg-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 211 65" width="211">
            <path id="ctg-0.12345" fill="transparent" d="M -191,140 Q 109,-60 409,140 "></path><text style="font-size: 42px; fill: rgb(28, 59, 126);" x="220">
              <textPath xlink:href="#ctg-0.12345">Lody Oreo</textPath>
            </text>
          </svg>
  
        </h1>

        <div class="all-videos-container">

          <div class="video-container">
            <img class="video-thumbnail" src="resources/images/misc/thumbnail.png">
          </div>

          <div class="video-container">
            <img class="video-thumbnail" src="resources/images/misc/thumbnail.png">
          </div>

          <div class="video-container">
            <img class="video-thumbnail" src="resources/images/misc/thumbnail.png">
          </div>

        </div>

      </div>

    </section>

  </main>

  <?php echo file_get_contents('components/footer.html'); ?>

</body>

</html>