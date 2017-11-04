<!DOCTYPE HTML>
<html>
  <head>
    <!-- link stylesheets -->
    <?php
      include "includes/header.php";
    ?>

    <link rel="stylesheet"
          type="text/css"
          href="styles/food.css"
          media="all">
  </head>

  <body>
    <div id='all'>

      <!-- Handle navigation bar -->
      <?php
        include "includes/navigation.php";
      ?>

      <div id='apple_food_img_div'>
        <!-- Image Source: https://www.abcteach.com/documents/clip-art-apple-cider-color-i-abcteachcom-50392 -->
        <!-- Image Source: abcteach.com -->
        <img id="apple_food_img" alt="apple_food" src="../images/applecidercolor_p.png">
      </div>

      <div id="info">
        <h2>From delicious local restaurants to scrumptious stalls, you'll discover
        a variety of food options sure to please any pallete. Whether you're hankering
        after kettle corn, Tibetan dumplings or just a slice of pizza, Ithaca Apple
        Harvest Festival's got you covered!</h2>
      </div>

      <div id="info2">
        <h1>Here are some of our<br>favorite food vendors:</h1>
        <h3>(Pssst... click on the vendor names to check out their websites!)</h3>
        <!-- First food-list column --------------------->
        <div id="food_list_1_div">
          <h2>American</h2>
            <div class='food_sublist'>
              <ul>
                <li class="multi"><a href='https://coltivareithaca.com/'>
                  Coltivare</a></li>
                <li class="multi"><a href='http://pdrscatering.com/'>
                  PDR Catering</a></li>
                <li class='multi'><a href='http://gatewaykitchenithaca.com/8895'>
                  Gateway Kitcken</a></li>
                <li class='multi'><a href='https://www.monksonthecommons.com/'>
                  Monks On The Commons</a></li>
                <li class='multi'><a href='http://www.omnomnomelettes.com/'>OmNomNomlettes</a></li>
                <li><a href='https://www.macarollin.com/'>
                  Macarollin'</a></li>
              </ul>
            </div>

          <div class='outer_div'>
            <div class='inner_div'>
              <img class='food_col_images' alt='silo_truck' src='../images/silo.JPG'>
            </div>
          </div>

          <h2>African</h2>
            <ul>
              <li class="multi"><a href='https://www.facebook.com/Ithaca-Congo-Square-Market-294195364277775/?hc_ref=ARR1sha0e-qK7oN0yL0O5OPubiIO7vVijLMBsXmx-Kc2sUvYJQhq6OKj4YinMAYdo1o&fref=nf'>
                Ithaca Congo Square Markets</a></li>
              <li><a href='http://www.hawiithaca.com/'>
                Hawi Ethiopian Cuisine</a></li>
            </ul>

          <h2>Asian</h2>
            <ul>
              <li class="multi">Lao Village</li>
              <li class="multi"><a href='http://letsrolleggrolls.com/'>
                Let's Roll Gourmet Egg Rolls</a></li>
              <li class="multi"><a href='http://www.thaibasilithaca.net/'>
                Thai Basil</a></li>
              <li><a href='http://www.downtownithaca.com/ithaca-restaurants/Tibetan%20Momo%20Bar'>
                Tibetan Momo Bar</a></li>
            </ul>

          <div>
            <div class='inner_div'>
              <img class='food_col_images' alt='asian_food' src='../images/asian_food.JPG'>
            </div>
          </div>

          <h2>Caribbean</h2>
            <ul>
              <li>Trini Style</li>
            </ul>

          <h2>Coffee</h2>
            <ul>
              <li class='multi'><a href='https://www.facebook.com/The-Center-Cafe-100718996748427/'>
                The Center Cafe</a></li>
              <li><a href='https://www.facebook.com/Silent-City-Uprising-Coffee-182653028453988/'>Silent City Uprising Coffee</a></li>
            </ul>
          </div>

          <!-- Second food-list column --------------------->
          <div id="food_list_2_div">
            <h2>Festival Food</h2>
              <ul>
                <li class="multi"><a href='https://www.facebook.com/KettleCornShoppe/'>
                  Kettle Corn Shoppe</a></li>
                <li class="multi">
                  Gourmet Caramel Apples</li>
                <li class="multi"><a href='https://www.facebook.com/BB-Kettle-Korn-137868672219/'>
                  B&B Kettle Corn</a></li>
                <li class="multi"><a href='https://www.facebook.com/silofoodtruck'>
                  Silo Food Truck</a></li>
                <li class="multi">
                  Lou's Covert Country Store</li>
                <li><a href="http://www.playlandamusements.com/gameandfood.htm">
                  Playland Amusements</a></li>
              </ul>

            <h2>Indian</h2>
              <ul>
                <li class="multi"><a href='https://www.newdelhidiamonds.com/'>
                  New Delhi Diamonds Indian Restaurant</a></li>
                <li><a href="http://sangamindia.com/">
                  Sangnam Indian Cuisine</a></li>
              </ul>

            <div>
              <div id='long_img'>
                <img class='food_col_images' alt='diamonds' src='../images/diamonds.JPG'>
              </div>
            </div>

            <h2>Mediterranean</h2>
              <ul>
                <li><a href='http://www.onthestreetpitas.com/'>
                  On the Street Pitas</a></li>
              </ul>

            <h2>Mexican</h2>
              <ul>
                <li><a href='http://www.dosamigostacos.com/'>
                  Dos Amigos</a></li>
              </ul>

            <div>
              <div class='inner_div'>
                <img class='food_col_images' alt='pizza_truck' src='../images/pizza_truck.JPG'>
              </div>
            </div>

            <h2>Pizza</h2>
              <ul>
                <li class='multi'><a href='https://bellapizzava.com/'>
                  Bella Pizza</a></li>
                <li><a href="http://pizzaaromaithacany.com/3032">
                  Pizza Aroma</a></li>
              </ul>
          </div>
      </div>

      <div id="content">
        <div id=img_1_div>
          <img alt='img_1' src='../images/food_street.JPG'/>
        </div>
      </div>

      <footer>
          <?php
            include "includes/footer.php";
          ?>

        <div id="sources_div">
          <p>Website designed by ai223. Sources (in order of appearance): Banner
            Apple-cider-image: www.abcteach.com, Image: www.ithacajournal.com;
            All Other Photographs: My Camera;
            ithaca-town-logo: www.downtownithaca.com; facebook-logo: www.chitownreview.com;
            twitter-logo: www.revivenations.org; youtube-logo: www.thebigdraw.org.
          <p>
        </div>

      </footer>
    </div> <!-- End all div -->
  </body>
</html>
