  /*<html lang="en">*/
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
      </head>
  <body>
<?php 
error_reporting(E_ALL);
ini_set("display_errors",true);

require_once './Store.php';

$article = new Article(125);

/**/
/*echo $article->get_id();*/

$serializd_article =serialize($article);


echo "serialzd article is :<br/> ".$serializd_article;

file_put_contents('warehouse',$serializd_article);



    ?>

  
  </body>
</html>
