<?php
  $radio = $_POST["status"];
  $name = htmlspecialchars($_POST["userName"]);
  $email = htmlspecialchars($_POST["userEmail"]);
  $permission = $_POST["permission"];
  $comments = trim(htmlspecialchars($_POST["comments"]));
  $msg1 = "You said you've already been to the festival. We hope you enjoyed it!";
  $msg2 = "You said that you haven't attended the festival. We hope to see you there!";
  $msg3 = "And kudos for signing up to our mailing list. We promise to only send good things...";
  $msg4 = "You opted to not sign up to our mailing list. Your loss...";
?>

<!DOCTYPE html>
<html>
  <head>
    <?php
      include "includes/header.php";
    ?>

    <link rel="stylesheet"
          type="text/css"
          href="../styles/action.css"
          media="all">
  </head>

  <body>
    <div id="all">

      <!-- Include navigation bar -->
      <?php
        include "includes/navigation.php";
      ?>

      <div id="smiley">
        <p>&#9786;</p>
      </div>

      <div id="message">
        <div>
        <h1>Thanks, <?php echo($name); ?>!</h1>
        <h1>Your comments were submitted successfully!</h1>
        <p>
          <!-- get radio button response -->
          <?php
            if ($radio == "yes") {
              echo $msg1;
            } elseif ($radio == "no") {
              echo $msg2;
            }
          ?></br></br>
          The e-mail you submitted is "<?php echo($email); ?>." If you asked a question, please allow us 2-3 days to reply.
        </br></br>

          <?php
            if ($permission == "permission") {
              echo $msg3;
            } else {
              echo $msg4;
            }
          ?>

        </p>
        <p>
          Thanks for submitting a comment! You wrote:</br></br>"<?php echo($comments) ?>"
        </p>
        </div>
      </div>

      <footer>
        <?php
          include "includes/footer.php";
        ?>

        <div id="sources_div">
          <p>Website designed by ai223. Sources (in order of appearance): Banner
            Image: My Camera.
          <p>
        </div>  <!-- end sources div -->
      </footer>

    </div> <!--end div all -->
  </body>

</html>
