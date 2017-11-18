<?php
  // Get form information
  $submit = $_REQUEST["submit"];
  // get form variables
  $name = $_REQUEST["userName"];
  $email = $_REQUEST["userEmail"];
  $comments = $_REQUEST["comments"];
  // get error message class
  $HIDDEN_ERROR_CLASS = "hidden_error";

  if (isset($submit)) {

    // if name isn't enterd
    if( !empty($name) ) {
      $nameIsValid = true;
    } else {
      $nameIsValid = false;
    }  // end if

    if( filter_var($email, FILTER_VALIDATE_EMAIL) ) {
      $emailIsValid = true;
    } else {
      $emailIsValid = false;
    }  // end if

    if( !empty($comments) ) {
      $commentsIsValid = true;
    } else {
      $commentsIsValid = false;
    }  // end if

    // check if form is valid
    $formIsValid = $nameIsValid && $emailIsValid && $commentsIsValid;
    // if form is valid, advance
    if ($formIsValid) {
      header("Location: action.php");
      return;
    } // end if
  } else {
    $nameIsValid = true;
    $emailIsValid = true;
    $commentsIsValid = true;
    // return;
  }  // end if
?>

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

    <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="scripts/validate.js" type="text/javascript"></script>

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

          <form method="post" action="contact.php" id="commentForm" novalidate>

            <p id="first">Please leave us your feedback!<p>
              <span class="error hidden_error" id="radioError">Please select one...</span><br/>
              <span class="radio_btn not_last">
                <input class="radio_btn" type="radio" name="status" value="yes">
                <label>I have attended the festival</label>
              </span>
                <input class="radio_btn" type="radio" name="status"  value="no">
                <label>I have not attended the festival</label><br/><br/>


            <div class="form_container" id="name_div">
              <div class="label_container">
                <label for="nameLabel">Name:</label><br/>
              </div>
              <div class="input_container">
                <input type='text' id="userName" name='userName' value="<?php echo($name) ?>" required/><br/><br/>
              </div>
              <span class="error <?php if ($nameIsValid) {echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">
                Oops! You need to enter a name...</span>
            </div> <!-- end name_div -->


            <div class="form_container" id="email_div">
              <div class="label_container">
                <label for="emailLabel">Email:</label><br/>
              </div>
              <div class="input_container">
                <input type='email' id="userEmail" name='userEmail' value="<?php echo($email) ?>" required/><br/><br/>
              </div>
              <span class="error <?php if ($emailIsValid) {echo($HIDDEN_ERROR_CLASS);} ?>" id="emailError">Oops! Something's wrong with your e-mail...</span>
            </div> <!-- end email div -->


            <div id="checkbox_div">
              <input type="checkbox" name="permission" value="permission">
                <label>
                  Yes, I want to recieve occassional updates and information about the Ithaca Apple Harvest Festival!
                </label><br />
            </div>

            <p>Enter your questions/comments here:</p>
            <div class="form-container" id="textarea_div">
              <span class="error <?php if ($commentsIsValid) {echo($HIDDEN_ERROR_CLASS);} ?>" id="commentsError">Please fill out the comments section.</span>

              <textarea id="comments" name='comments' form="commentForm" maxlength="1000" required><?php echo($comments) ?>
              </textarea><br/><br/>
            </div>

            <button type="submit" name="submit" id="submit_btn">Submit</button>

          </form> <!-- End form-->
        </div> <!-- End form div inner -->
      </div> <!-- End form div -->

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
