<?php
$app->get('/',function() use ($app) {
  $posts = $app->db->query("
    SELECT
    posts.* ,
    CONCAT(users.first_name,' ',users.last_name) AS author
    from posts
    left join users
    on posts.user_id = users.id
  ")->fetchAll(PDO::FETCH_OBJ);
  // var_dump($posts);
  $app->render('home.php',[
    'posts'=>$posts
  ]);
})->name('home');

 ?>
