<!-- Display sidebar depending on user login status. (Show if logged in, hide if not)-->
<?php
  session_start();
?>

<div id="sidebar">
  <div id="sidebar-topdiv">
    <?php include "../php/getUserImage.php" ?>
    <p id="sidebar-username">
      <?php
      if ((isset($_SESSION['login'])) && ($_SESSION['login'] == true)) {
          echo $_SESSION['username'];
      ?>
      </p>

    </div>
    <div id="sidebar-bottomdiv">
      <div id="sidebar-btn" onclick="location.href='pages/newPost.php'">New Post</div>
      <div id="sidebar-btn" onclick="location.href='php/getPosts.php'">View Posts</div>
      <div id="sidebar-btn" onclick="location.href='pages/viewComments.php'">View Comments</div>
      <div id="sidebar-btn" onclick="location.href='pages/accountSettings.php'">Account Settings</div>
    </div>
  </div>
<?php endif;  ?>
