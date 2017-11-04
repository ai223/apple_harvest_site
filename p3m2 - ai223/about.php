<!DOCTYPE HTML>
<html>
  <head>
    <?php
      include "includes/header.php";
    ?>

    <link rel="stylesheet"
          type="text/css"
          href="styles/about.css"
          media="all">
  </head>

  <body>
    <div id='all'>

      <!-- Handle navigation bar -->
      <?php
        include "includes/navigation.php";
      ?>


      <div id="info">
        <h1>A long and illustrious history...</h1>
      </div>

      <div id="info2">
      </div>

      <div id="content">
        <p id='first'>The Apple Harvest Festival started as a small harvest festival in 1982
          to showcase the area’s diverse agricultural products. With heavy involvement
          from Cornell and a partnership with downtown merchants, including David
          Abdulky and Lyle McCartney, the event was strictly a farmers’ market.
          Over time, the addition of food and craft vendors, games and other activities
          for children grew the event into what it is today. The event usually
          attracts more than 30,000(!) visitors over the three days.
        </p>

        <div>
          <div id="img_1_div">
            <!-- Source: https://www.artslant.com/global/artists/show/149292-walt-curlee -->
            <!-- artslant.com -->
            <img alt='old_harvest' src='../images/old_harvest.jpg'>
          </div>
        </div>

        <p>Although it’s the festival’s 35th anniversary, in reality, agricultural
          celebrations in the Finger Lakes have been going on for hundreds of years
          likely beginning with the Iroquois, who looked to nature for the best
          reason to throw a party.</p>

        <p>The History of Tioga, Chemung, Tompkins and Schulyer Counties, published
          in 1879 explains “it was the custom of the Iroquois, or Six Nations, to
           hold festivals to commemorate the different seasons of the year, which
           were named variously ‘Thanks to the Maple,’ ‘Planting Festival,’ ‘Berry
           Festival,’ ‘Green Corn Festival,’ ‘Harvest Festival,’ and ‘New Year’s
           Jubilee.’ These festivals lasted several days and were conducted with
           great ceremony.”</p>
      </div>

      <footer>
        <?php
          include "includes/footer.php";
        ?>

        <div id="sources_div">
          <p>Website designed by ai223. Sources (in order of appearance): Banner
            Image: My Camera; Painting: www.artslant.com;
            ithaca-town-logo: www.downtownithaca.com; facebook-logo: www.chitownreview.com;
            twitter-logo: www.revivenations.org; youtube-logo: www.thebigdraw.org. Textual
            information comes from the articles from the Ithaca Journal.
          <p>
        </div>

      </footer>
    </div> <!-- End all div -->
  </body>
</html>
