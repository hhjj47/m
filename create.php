<?php
$conn = mysqli_connect('localhost', 'root', 'dqdqasd59@1', 'mce', '3307');



$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
  $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }


$article = array(
  'title'=>'welcome',
  'description'=>'hello web'
);

if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_sting($conn, $_GET['id']);
  $sql = "SELECT * FROM user WHERE id={$filtered_id}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article = array(
    'title'=>$row['title'], 'description'=>$row['description']

);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
      <ol>
         <?=$list?>
      </ol>
    <form action="process_create.php" method="POST">
      <p><input type="text" name="title" placeholder="title"></p>
      <p><textarea name="description" placeholder="description"></textarea></p>
      <p><input type="submit"></p>
    </form>
  </body>
</html>
