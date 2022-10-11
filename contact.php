<!DOCTYPE html>

<html lang="pl">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lody Oreo | Contact Us</title>
  <link rel="stylesheet" href="css/contact-main.css">
  <script type="module" src="js/scripts/contact-main.js"></script>

</head>

<body>

  <?php echo file_get_contents('components/header.html'); ?>

  <main class="the-main">

    <section class="contact-us">

      <div class="contact-us-content">

        <h1 class="contact-us__heading">

          <svg class="contact-us__heading-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 647 163">
            <path id="ctg-0.38161" fill="transparent" d="M -27,192 Q 323,-112 673,192 "></path><text font-size="32" style="font-size: 42px; fill: white;" x="65">
              <textPath xlink:href="#ctg-0.38161">Chcesz się z nami skontaktować? </textPath>
            </text>
          </svg>

        </h1>

        <p class="contact-us__paragraph">

          <span>Twoja opinia jest dla nas ważna!</span>

          <span>
            W przypadku jakiekolwiek pytań, wątpliwości lub chęci podzielenia się własną opinią o naszych
            produktach napisz do nas - wspieranie naszych klientów to dla nas przyjemność.
          </span>

          <span>Przekaż nam swoje opinie drogą elektroniczną korzystając z formularza kontaktowego.</span>

          <span>Dziękujemy!</span>

        </p>

        <p class="contact-us__paragraph">

          <span>Aby złożyć reklamację pocztą elektroniczną lub tradycyjną podaj datę przydatności i kod danego produktu.</span>

          <span>Czekamy na wiadomości także przekazane pocztą tradycyjną pod adresem:</span>

          <span class="special-span bold-span">Froneri Polska Sp. z o.o.</span>
          <span class="special-span">ul. Wojska Polskiego 3</span>
          <span class="special-span">39-300 Mielec</span>
          <span class="special-span">woj. podkarpackie</span>
          <span class="special-span">Polska</span>

        </p>

        <a class="contact-us__button">Formularz kontaktowy</a>

      </div>

    </section>

  </main>

  <?php echo file_get_contents('components/footer.html'); ?>

</body>

</html>