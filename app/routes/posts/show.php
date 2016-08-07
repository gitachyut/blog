<?php
  $app->get('/posts/:postId',function($postID) use ($app){
      $post = $app->db->prepare("
      SELECT
      posts.* ,
      CONCAT(users.first_name,' ',users.last_name) AS author
      from posts
      left join users
      on posts.user_id = users.id
      where posts.id = :postID
      ");
      $post->execute(['postID'=>$postID]);
      $post = $post->fetch(PDO::FETCH_OBJ);
      // var_dump($post);
      if(!$post){
        $app->notFound();
      }
      $app->render('post/show.php',[
        'post'=>$post
      ]);
  });
 ?>
