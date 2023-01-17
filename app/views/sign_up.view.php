<?php
require 'partials/head.partials.php';
?>
<div class="container-fluid m-0 p-0 w-100 d-flex justify-content-between align-items-center">
  <!-- ! sign up -->
  <div class="w-50 h-50 d-flex justify-content-center">
    <form class="w-50" action="/sign_up/create" method="post">
      <h2 class="mb-4 text-center">Sign up</h2>
      <div class="row">
        <input class="form-control mb-2" type="text" name="firstname" id="firstname" placeholder="Firstname" />
        <input class="form-control mb-2" type="text" name="lastname" id="lastname" placeholder="Lastname" />
        <input class="form-control mb-2" type="email" name="email" id="email" placeholder="email@email.com" />
        <input class="form-control mb-2" type="text" name="username" id="username" placeholder="Username" />
        <input class="form-control mb-2" type="password" name="password" id="password" placeholder="Password" />
        <input class="form-control mb-2" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" />

        <button class="btn btn-primary" type="submit" name="submit">Register</button>
      </div>

      <div class="row justify-content-start">
        <p>Have an account?<a href="/"> sign in</a></p>
      </div>
    </form>
  </div>

  <!-- ! wallpaper -->
  <div class="w-50" style="height: 100vh">
    <img class="img-fluid h-100 w-100" src="../resources/images/login_wallpaper.jpg" alt="" />
  </div>
</div>

<?php
require 'partials/footer.partials.php';
?>