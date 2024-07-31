<?php



class Article{
    
  public $article_id=0;

  public  function __construct(int $id){

    $this->article_id=$id;
  }
 


  function get_id(){


    return $this->article_id;
  }


  }

  





?>
