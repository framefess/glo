<?php
include "src/header/header.php";
?>

<body>
  <h1>Hello, world!</h1>
  <p></p>
  <p></p>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <?php
  include "src/module/module.php";
  ?>


  <script>
    $("p:eq(1)").text("test")
  </script>
</body>

</html>