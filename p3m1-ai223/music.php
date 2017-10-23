<!DOCTYPE HTML>
<html>
  <head>
    <!-- Link stylesheets -->
    <?php
      include "includes/header.php";
    ?>

    <link rel="stylesheet"
          type="text/css"
          href="../styles/music.css"
          media="all">
  </head>

  <body>
    <div id='all'>

      <!-- Handle navigation bar -->
      <?php
        include "includes/navigation.php";
      ?>

      <div id="date_selection_div">
        <div>
          <h1>Please select a date:</h1>
        </div>
        <div class='dates'>
          <a id='saturday' href='#saturday_concerts'>
            <h2><img alt="apple_letter_2" src='../images/apple_letter_2.jpg'><br>
            Saturday<br>September 30</h2>
          </a>
        </div>
        <div class='dates'>
          <a id='sunday' href='#sunday_concerts'>
            <h2><img alt="apple_letter_2" src='../images/apple_letter_2.jpg'><br>
            Sunday<br>October 1</h2></a>
        </div>
      </div>

      <div class="concerts">
        <div id='saturday_concerts'>
          <h1>Saturday</h1>
          <h3>(Click on some performers' names to see their work!)</h3>
          <h3>@ Bernie Milton Pavilion</h3>
          <ul>
            <li>10:00 - 10:45 AM ............... <a href='https://www.youtube.com/watch?v=UHIf5QwBspg' target="_blank">
              IC Voicestream</a></li>
            <li>11:00 - 11:45 AM ............... <a href='https://www.youtube.com/watch?v=vUD1kMKlk_E' target="_blank">
              Danza Romani</a></li>
            <li>12:00 - 12:45 PM ............... <a href='https://www.youtube.com/watch?v=cH5IlOJWg9k' target="_blank">
              Vitamin L</a></li>
            <li>1:00 - 1:45 PM ............... <a href='https://www.youtube.com/channel/UCfMaLAy5n9iGsaSxqOFvzwQ' target="_blank">
              Vee Da Bee</a></li>
            <li>1:45 - 2:00 PM ............... GIVEAWAYS!!!</li>
            <li>2:00 - 2:45 PM ............... <a href='https://www.youtube.com/watch?v=c8EIyWZPams' target="_blank">
              Sunny Weather</a></li>
            <li>3:00 - 3:45 PM ............... <a href='https://www.youtube.com/watch?v=LVfdtmx3ADw' target="_blank">
              Eems</a></li>
            <li>4:00 - 4:45 PM ............... <a href='https://www.youtube.com/watch?v=3eFdj-zSckU' target="_blank">
              Dapper Dan</a></li>
            <li>5:00 - 6:00 PM ............... <a href='https://www.youtube.com/watch?v=yO_1Ede7mTE' target="_blank">
              Papa Muse</a></li>
          </ul>
          <h3>@ West State Street Performance Area</h3>
          <ul>
            <li>1:00 - 1:45 PM ............... <a href='https://www.youtube.com/watch?v=eHxpKvlymIo' target="_blank">
              ICircus</a></li>
            <li>3:00 - 3:45 PM ............... <a href='https://www.youtube.com/watch?v=u3owdAT4yC8' target="_blank">
              June with Chandani Belly Dance Troupe</a></li>
          </ul>
        </div>

        <div id='sunday_concerts'>
          <h1>Sunday</h1>
          <h3>(Click on some performers' names to see their work!)</h3>
          <h3>@ Bernie Milton Pavilion</h3>
          <ul>
            <li>10:00 - 10:45 AM ............... <a href='https://www.youtube.com/watch?v=Xaeiolwiw1o' target="_blank">
              Mighty Jet Band</a></li>
            <li>11:00 - 11:45 AM ............... <a href='https://www.youtube.com/watch?v=lRz-qGart30' target="_blank">
              Sixteen Feathers</a></li>
            <li>12:00 - 12:45 PM ............... <a href='https://www.facebook.com/pg/Miragebellydancetroupe/videos/?ref=page_internal' target="_blank">
              Mirage Belly Dancers</a></li>
            <li>1:00 - 1:45 PM ............... Strong Woman Show</li>
            <li>2:00 - 2:50 PM ............... <a href='https://www.youtube.com/watch?v=yHssHnpKIPc' target="_blank">
              Diana Leigh Quintet</a></li>
            <li>3:00 - 3:40 PM ............... <a href='http://www.sciencecabaret.org/' target="_blank">
              Science Cabaret Presents: A Bite of Science</a></li>
            <li>4:00 - 4:45 PM ............... <a href='https://www.youtube.com/watch?v=cY2PmAkYjXA' target="_blank">
              Ithaca College Jazz Vocal Ensemble</a></li>
            <li>5:15 - 6:15 PM ............... <a href='https://www.youtube.com/watch?v=kGTscbFbEbs' target="_blank">
              NEO Project</a></li>
          </ul>
          <h3>@ West State Street Performance Area</h3>
          <ul>
            <li>2:00 - 2:45 PM ............... Zajal the Sugarplum Fairy and Friends for StoryDance</li>
            <li>3:00 - 3:45 PM ............... Strong Woman Show</li>
          </ul>
        </div>
      </div>

      <div id="info2">
      </div>

      <div id="content">
      </div>

      <footer>
        <?php
          include "includes/footer.php";
        ?>

        <div id="sources_div">
          <p>Website designed by ai223. Sources (in order of appearance): Banner
            Image: www.ithacajournal.com; All Other Photographs: My Camera;
            ithaca-town-logo: www.downtownithaca.com; facebook-logo: www.chitownreview.com;
            twitter-logo: www.revivenations.org; youtube-logo: www.thebigdraw.org.
          <p>
        </div>

      </footer>
    </div> <!-- End all div -->
  </body>
</html>
