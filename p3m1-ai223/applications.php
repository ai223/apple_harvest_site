<!DOCTYPE HTML>
<html>
  <head>
    <?php
      include "includes/header.php";
    ?>

    <link rel="stylesheet"
          type="text/css"
          href="../styles/applications.css"
          media="all">
  </head>

  <body>
    <div id='all'>

      <!-- Handle navigation bar -->
      <?php
        include "includes/navigation.php";
      ?>

      <!--- Handle volunteer section here --->

      <div id="volunteer_div">
        <h1 id="volunteer">Want to volunteer?</h1>
        <div id="volunteer_text">
          <p>Ithaca Apple Harvest Festival needs you help and community spirit!
            Help us set up shop, close back down and all you can think of in between:
            we need everything from recycling warriors to helping out at the goat
            pen (so cute!). No experience necessary, just your enthusiasm. <p>
          <p>If you want to help out, thanks for being awesome! Simply click on the
            button to fill out a volunteering application. (And if you can't, no
            worries: there's always next year...)</p>
      </div>
        <div  id="volunteer_link_div">
          <a id="volunteer_link" href="https://docs.google.com/forms/d/e/1FAIpQLScTa2vBa1jCTmaD0YBb4g2zxxT50ezjV3i605xk-iIIcPBkMQ/viewform" target="_blank">
            Sign me up!</a>
        </div>
      </div>

      <!-- Handle vendor section here -->

      <div id="vendor_div">
        <h1 id="vendor">Taking part in the Festival?</h1>
        <h4 id="vendor_sub">Please select the category that applies to you:</h4>
      </div>

      <div id=vendor_wrapper>

        <div class='vendor_imgs'>
            <a href='https://docs.google.com/forms/d/e/1FAIpQLSdsKfLrZbBF6LW54Zngvyq56CBoMwOovsSI5opzurk49bwlFA/viewform?c=0&w=1' target="_blank">
              <!-- Source: https://www.gannett-cdn.com/-mm-/8642bc59ea7860ea34bb8c759d49e77e89050ab4/c=2-0-1997-1500&r=x393&c=520x390/local/-/media/2015/10/03/CNYGroup/Ithaca/635795055398569855-Apple-Fest-Satuday-27.JPG -->
              <!-- From: Ithaca Journal, SIMON WHEELER, STAFF PHOTO -->
              <img id='crafts_img' alt='craft' src='../images/crafts.jpg'/>
              <p>Craft<br>Application</p>
            </a>
        </div>

        <div class='vendor_imgs'>
            <a href='https://docs.google.com/forms/d/e/1FAIpQLScbOrnDsDT9PiaQrrGwWDg0FvnlK50kWVAkMHiWOzaMJHyXRQ/viewform' target="_blank">
              <!-- Source: http://www.gannett-cdn.com/-mm-/8642bc59ea7860ea34bb8c759d49e77e89050ab4/c=2-0-1997-1500&r=x393&c=520x390/local/-/media/2015/10/03/CNYGroup/Ithaca/635795054222002771-Apple-Fest-Satuday-14.JPG -->
              <!-- From: Ithaca Journal, SIMON WHEELER, STAFF PHOTO -->
              <img id='farmer_img' alt='farm' src='../images/farmers.jpg'/>
              <p>Farmer's<br>Application</p>
            </a>
        </div>

        <div class='vendor_imgs'>
            <a href='https://docs.google.com/forms/d/e/1FAIpQLSc_ux3pEqa6Sz8JZAHzDmSfQtvWjAnqv_v0UikaI1hsRtitPA/viewform' target="_blank">
              <!-- Source: https://www.ithaca.edu/depts/i/Junior_integrated_marketing_communications_major_Benn_Bartishevich_chows_down_on_a_caramel_apple_at_Applefest._Photo_by_Mike_Grippi_10_/21568_photo.jpg -->
              <!-- From: FuseIthaca.edu -->
              <img id='food_img' alt='food' src='../images/food.jpg'/>
              <p>Food<br>Application</p>
            </a>
        </div>

        <div class='vendor_imgs'>
            <a href='https://docs.google.com/forms/d/e/1FAIpQLSf__jGsKkB-Vkud9pmCMGYuoQhPgAfFkEe8ZLKsgSV2tCdH_Q/viewform' target="_blank">
              <!-- Source: http://www.ithacajournal.com/picture-gallery/news/2015/10/03/gallery-saturday-at-the-apple-harvest-festival-in-ithaca/73313666/ -->
              <!-- From: Ithaca Journal, SIMON WHEELER, STAFF PHOTO -->
              <img id='commercial_img' alt='commercial' src='../images/commercial.jpg'/>
              <p>Commercial<br>Application</p>
            </a>
        </div>

        <div class='vendor_imgs'>
            <a href='https://docs.google.com/forms/d/e/1FAIpQLSfOWHgc0ohkcGNAceisJtHwt9tHCrd8qYklw7aNloVDzpQc6w/viewform' target="_blank">
              <!-- Source: http://www.ithacajournal.com/picture-gallery/news/2015/10/03/gallery-saturday-at-the-apple-harvest-festival-in-ithaca/73313666/ -->
              <!-- From: Ithaca Journal, SIMON WHEELER, STAFF PHOTO -->
              <img id='performer_img' alt='performer' src='../images/performer.jpg'/>
              <p>Performer<br>Application</p>
            </a>
        </div>

        <div class='vendor_imgs' id='final_img'>
            <a href='https://docs.google.com/forms/d/e/1FAIpQLScapq4r9vXZqLm_IrIF69_NXxR_IIMFS9GgkKRoqKZMv13ifg/viewform' target="_blank">
              <!-- Source: http://www.stargazette.com/story/news/local/2016/09/30/apple-harvest-festival-returns-ithaca/91328534/ -->
              <!-- From: StargazerGazette.com, SIMON WHEELER, STAFF PHOTO -->
              <img id='nonprofit_img' alt='nonprofit' src='../images/nonprofit.jpg'/>
              <p>Non-Profit<br>Application</p>
            </a>
        </div>

      </div>

      <div id="clear_div"><p> </p></div>

      <!-- Handle logistics section here -->

      <div id="content_header_div">
        <h3 id='content_header'>Some Logistics:</h3>
      </div>

      <div id="content">
        <p>The application deadline for all entires is <strong>Friday, 1 September
        2017.</strong> Acceptance emails will be sent out on a rolling basis ending in the
        first week of September.</p>

        <p>We acknowledge that Yom Kippur 2017 is on this weekend this year. We
           want to assure you that while we cannot move our festival from the first
           weekend of October due to a number of production circumstances beyond
           our control, we have been working hard the past few months to make the
           Sunday of this year special! If you are a vendor that can only participate
           on Sunday as a 1 day vendor because you are observing the holiday on
           Friday and Saturday, please reach out directly to
           <a>eventsdowntownithaca@gmail.com!</a> </p>

        <p>If you should have any questions about any of these guidelines, please
          do not hesitate to contact me. We looking forward to working with all
          of you! Once accepted, a more detailed vendor guidelines document will
          be sent to you! </p>
      </div>  <!-- end content div -->

      <footer>
        <?php
          include "includes/footer.php";
        ?>

        <div id="sources_div">
          <p>Website designed by ai223. Sources (in order of appearance): Banner
            Image: My Camera; Application-selection Photographs: www.ithacajournal.com;
            ithaca-town-logo: www.downtownithaca.com; facebook-logo: www.chitownreview.com;
            twitter-logo: www.revivenations.org; youtube-logo: www.thebigdraw.org.
          <p>
        </div>  <!-- end sources div -->
      </footer>

    </div> <!-- End all div -->

  </body>
</html>
