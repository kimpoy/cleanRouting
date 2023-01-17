<?php
require 'partials/head.partials.php';
?>
<div class="container-fluid m-0 p-0 w-100 d-flex justify-content-between align-items-center">
  <!-- ! wallpaper -->
  <div class="w-50" style="height: 100vh">
    <img class="img-fluid h-100 w-100" src="../resources/images/login_wallpaper.jpg" alt="" />
  </div>
  <!-- ! sign in -->
  <div class="w-50 h-50 d-flex justify-content-center">
    <form class="w-50" action="/create" method="post">
      <h2 class="mb-4 text-center">Sign in</h2>
      <div class="row">
        <input class="form-control mb-2" type="text" name="username" id="username" placeholder="Username" />
        <input class="form-control mb-2" type="password" name="password" id="password" placeholder="Password" />
        <button class="btn btn-primary" type="submit" name="submit">Login</button>
      </div>
      <div class="row justify-content-start">
        <p>Not register yet?<a href="/sign_up"> sign up</a></p>
      </div>
    </form>
  </div>
</div>
<script src="../resources/bootstrap5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>