<?php
  $name = $_POST["userName"];
  $email = $_POST["userEmail"];
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
          The e-mail you submitted is "<?php echo($email); ?>."</br>
          If you asked a question, please allow us 2-3 days to reply.
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
