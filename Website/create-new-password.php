<?php
include_once 'header.php'
?>


<head>
  <link rel="stylesheet" href="css/createpwd.css">>
</head>

<body>

  <section class="create-new-password">
    <div class="createpwd" style="align-items: center">

      <?php
      $selector = $_GET["selector"];
      $validator = $_GET["validator"];

      if (empty($selector) || empty($validator)) {
        echo "Couldnt Validate Your Request!";
      } else {
        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
      ?>
          <form action="includes/reset-password.inc.php" method="post">
            <input type="hidden" name="selector" value="<?php echo $selector; ?>">
            <input type="hidden" name="validator" value="<?php echo $validator; ?>">
            <input type="password" name="pwd"class="pwd" placeholder="Enter Your New Password">
            <input type="password" name="pwd-repeat" class="pwd-repeat" placeholder="Repeat Your New Password">
            <button type="submit" name="reset-password-submit" class="submit">Reset Password</button>
          </form>
      <?php
        }
      }
      ?>
    </div>
  </section>
  <?php
  include_once 'footer.php'
  ?>
