<?php
    require("server/scripts/domain/user.php");
    session_start();
    include("server/scripts/loginChecker.php");
    $user = $_SESSION["user"];
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">recipe</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar">
    <div class="navbar-nav">
      <?php

      if ($user->getIsLoggedIn() == true) {
        if ($activeTab == "profile") {
          echo '<a class="nav-item nav-link active" href="profile.php">profile</a>';
        } else {
          echo '<a class="nav-item nav-link" href="profile.php">profile</a>';
        }
      }

      if ($user->getRole() == Roles::Admin || $user->getRole() == Roles::Write || $user->getRole() == Roles::Recipe) {
        if ($activeTab == "recipewrite") {
          echo '<a class="nav-item nav-link active" href="recipewrite.php">create a recipe</a>';
        } else {
          echo '<a class="nav-item nav-link" href="recipewrite.php">create a recipe</a>';
        }
      }

      if ($user->getRole() == Roles::Admin || $user->getRole() == Roles::Write || $user->getRole() == Roles::Ingredient) {
        if ($activeTab == "ingredientwrite") {
          echo '<a class="nav-item nav-link active" href="ingredientwrite.php">ingredient editor</a>';
        } else {
          echo '<a class="nav-item nav-link" href="ingredientwrite.php">ingredient editor</a>';
        }
      }

      if ($user->getRole() == Roles::Admin) {
        if ($activeTab == "admin") {
          echo '<a class="nav-item nav-link active" href="admin.php">admin</a>';
        } else {
          echo '<a class="nav-item nav-link" href="admin.php">admin</a>';
        }
      }

      if ($user->getIsLoggedIn() == true) {
        echo '<a class="nav-item nav-link" href="server/scripts/logout.php">logout</a>';
      } else {
        echo '<a class="nav-item nav-link" href="login.php">login</a>';
      }

      ?>
    </div>
  </div>
</nav>