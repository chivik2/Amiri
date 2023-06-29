<?php
    include '../lib/session.php';
    Session::checkSession();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Admin | IVY moda</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="./assets/css/main.css">
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <script>
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bxs-cog bx-flip-horizontal' ></i>
        <span class="logo_name">Admin</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="index.php" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="category.php">
            <i class='bx bx-category'></i>
            <span class="links_name">Danh Mục</span>
          </a>
        </li>
        <li>
          <a href="product.php">
            <i class="bx bx-box"></i>
            <span class="links_name">Sản phẩm</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-coin-stack"></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-book-alt"></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li class="log_out">
          <?php 
            if (isset($_GET['action']) && $_GET['action'] == 'logout') {
                Session::destroy();
            }
          ?> 
          <a href="?action=logout">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <script>
      // const navLinkContainer = document.querySelector('.nav-links');
      // const navLinks = document.querySelectorAll('.nav-links li a');
      // navLinks.forEach(navLink => {
      //   navLink.onclick = function() {
      //       if (navLinkContainer.querySelector('.active')) {
      //         navLinkContainer.querySelector('.active').classList.remove('active');
      //       }
      //       this.classList.add('active');
      //       document.querySelector('.page-name').innerText = this.querySelector('.links_name').innerText;
      //   }
      // });

    </script>