<!DOCTYPE html>

<html lang="pl">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lody Oreo | Proukty</title>
  <link rel="stylesheet" href="css/products-main.css">
  <script type="module" src="js/scripts/products-main.js"></script>

</head>

<body>

  <?php echo file_get_contents('components/header.html'); ?>
  
  <main class="the-main">

    <section class="products">

      <div class="products-content">

        <div class="products-not-images">

          <h1 class="products__main-heading">

            <svg width="250" height="70" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 250 70">

              <path id="products__main-heading-curve" fill="transparent"
                d="
                  M 10,65
                  Q 125,5 240,65
                "
              ></path>

              <text class="products__main-heading-text" x="125" text-anchor="middle">
                <textPath xlink:href="#products__main-heading-curve">
                  Produkty
                </textPath>
              </text>

            </svg>

          </h1>

          <article class="products__group">

            <h2 class="products__group-heading">Lody na Patyku</h2>

            <div class="products__group-products-container">

              <div class="products__product">

                <a class="products__product-link">
                  <img class="products__product-image" src="resources/images/products/ice-cream.png">
                </a>
                
                <a>
                  <span class="products__product-name">Oreo Lody na Patyku</span>
                </a>

              </div>

              <div class="products__product">

                <a class="products__product-link">
                  <img class="products__product-image" src="resources/images/products/stick-sandwich.png">
                </a>
                
                <a>
                  <span class="products__product-name">Oreo Stick Sandwich</span>
                </a>

              </div>

              <div class="products__product">

                <a class="products__product-link">
                  <img class="products__product-image" src="resources/images/products/mini-sticks.png">
                </a>
                
                <a>
                  <span class="products__product-name">Oreo Mini Sticks</span>
                </a>

              </div>

            </div>

          </article>

          <article class="products__group">

            <h2 class="products__group-heading">Kanapki Lodowe</h2>

            <div class="products__group-products-container">

              <div class="products__product">

                <a class="products__product-link">
                  <img class="products__product-image" src="resources/images/products/sandwich.png">
                </a>
                
                <a>
                  <span class="products__product-name">Oreo Kanapka Lodowa</span>
                </a>

              </div>

            </div>

          </article>

          <article class="products__group">

            <h2 class="products__group-heading">Rożki</h2>

            <div class="products__group-products-container">

              <div class="products__product">

                <a class="products__product-link">
                  <img class="products__product-image" src="resources/images/products/ice-cone.png">
                </a>
                
                <a>
                  <span class="products__product-name">Oreo Rożek z kulką</span>
                </a>

              </div>

            </div>

          </article>

          <article class="products__group">

            <h2 class="products__group-heading">Premium Kubki 480ml</h2>

            <div class="products__group-products-container">

              <div class="products__product">

                <a class="products__product-link">
                  <img class="products__product-image" src="resources/images/products/premium-bucket.png">
                </a>
                
                <a>
                  <span class="products__product-name">Oreo Premium Kubek</span>
                </a>

              </div>

            </div>

          </article>

        </div>

        <img class="products__drawing products__drawing-1" src="resources/images/drawings/binoculars.png">
        <img class="products__drawing products__drawing-2" src="resources/images/drawings/runner.png">

      </div>

    </section>

  </main>

  <?php echo file_get_contents('components/footer.html'); ?>

</body>

</html>