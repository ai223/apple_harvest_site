<!DOCTYPE HTML>
<html>
  <head>
    <?php
      include "includes/header.php";
    ?>

    <link rel="stylesheet"
          type="text/css"
          href="../styles/contact.css"
          media="all">
  </head>

  <body>
    <div id='all'>

      <!-- Handle navigation bar -->
      <?php
        include "includes/navigation.php";
      ?>

      <div id="downtown_ithaca_div">
        <!-- Source: http://www.downtownithaca.com/dia/contact-us.html -->
        <!-- Source: downtownithaca.com -->
        <img id="downtown_ithaca_img" alt="downtown_ithaca" src="../images/downtown_ithaca.png">
      </div>

      <div id="info">
        <h1>Questions? Comments?</h1>
        <h3>We'd love to hear from you.</h3>
        <p>If you have a question or comment for the Downtown Ithaca Alliance,
          please provide your name, email address, and question/comment in an
          e-mail addressed to: <span>info@downtownithaca.com</span></p>
      </div>

      <div id="content">

        <div id='telephone_icon_div'>
          <!-- Image Source: https://www.iconexperience.com/_img/o_collection_png/green_dark_grey/512x512/plain/telephone2.png -->
          <img alt='telephone_icon' src='../images/telephone_icon.png'>
        </div>

        <p>Phone: 607-277-8679<br>Fax: 607-277-8691</p>

        <div id='mail_icon_div'>
          <!-- Image Source: -->
          <img alt='mail_icon' src='../images/mail_icon.png'>
        </div>

        <p>171 E. State St. PMB #136<br>Center Ithaca<br>Ithaca, NY 14850<br>USA<p>

        <div id='email_icon_div'>
          <!-- Image Source: https://visualpharm.com/assets/419/Email-595b40b65ba036ed117d1bae.svg-->
          <img alt='email_icon' src='../images/email_icon.png'>
        </div>

        <p>info@downtownithaca.com<br>eventsdowntownithaca@gmail.com</p>

        <div id="form_div">
          <div id=form_div_inner>
          <form action="/action.php">
            <p id="first">Please leave us your feedback!<p>
              <span class="not_last">
                <input type="radio" name="status" value="yes">I have attended the festival
              </span>
            <input type="radio" name="status"  value="no">I have not attended the festival<br /><br />
            Name:<br />
            <input type='text' name='name'><br /><br />
            Email:<br />
            <input type='text' name='email'><br/><br />
            <input type="checkbox" name="permission" value="permission">
              <label>Yes, I want to recieve occassional updates and information about the Ithaca Apple Harvest Festival!</label><br />
            <p>Enter your questions/comments here:</p>
            <textarea name='comment' form="usrform"></textarea><br /><br /s>
            <input id="submit_btn" type="submit" value="Submit">

          </form>
        </div>
      </div>

      </div>

      <footer>
        <?php
          include "includes/footer.php";
        ?>

        <div id="sources_div">
          <p>Website designed by ai223. Sources (in order of appearance): Banner
            Image: My Camera; first-downtown-ithaca-logo: www.downtownithaca.com;
            telephone-icon: www.imageexperience.com; envelope-icon: www.hemantvats.com;
            @-icon: www.thebigdraw.com; ithaca-town-logo: www.downtownithaca.com;
            facebook-logo: www.chitownreview.com; twitter-logo: www.revivenations.org;
            youtube-logo: www.thebigdraw.org.
          <p>
        </div>

      </footer>
    </div> <!-- End all div -->
  </body>
</html>
