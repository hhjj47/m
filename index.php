<?php
$conn = mysqli_connect('localhost', 'root', 'dqdqasd59@1', 'mce', '3307');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="coe.css">
    <title>MY CLASSROOM ECONOMY</title>
  <style>
  .main {
    text-align: center;
    margin: 10px;
    margin-bottom: 20px;
    border: 3px solid rgb(72, 106, 245);
    padding: 15px;
    }
  .contents {
    padding: 10px;
    }
  </style>
  </head>
  <body>
    <div class="main">
      <a href="index.php" style="text-decoration:none;"><h1 style="font-size:60px;font-color:rgb(72, 106, 245);">M. C. E.</h1></a>
    </div>
      <div class="menu">
        <a href="index_myasset.php"><button type="button" class="btn btn-primary btn-lg" style="margin-left: 10px;">내 자산</button></a>
        <a href="index_myitem.php"><button type="button" class="btn btn-primary btn-lg">내 아이템</button></a>
        <a href="index_itemshop.php"><button type="button" class="btn btn-primary btn-lg">아이템 상점</button></a>
        <a href="index_bank.php">  <button type="button" class="btn btn-primary btn-lg">은행</button></a>
        <a href="index_ranking.php"><button type="button" class="btn btn-primary btn-lg">랭킹</button></a>
      </div>
      <div class="contents">
        환영합니다.
      </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
  </body>
</html>
