<?php


require_once realpath($_SERVER["DOCUMENT_ROOT"])."/php/myutils/interfaces/i1.php";



abstract class Bug extends Exception implements Glitch{


  protected $msg='Unknown exception';
  
  private $string;

  protected $code=0;

  protected string $file;

  protected int $line;

  private $trace;

  public function __construct($message=null,$code=0){

    if(!$message){
      throw new $this('UKNOWN'.get_class($this));
      
    }

    parent::__construct($message,$code);


  }


  public function __toString(){

    

    return get_class($this)."'{$this->message}' in {$this->file}({$this->line}) "."{$this->getTraceAsString()}";



  }


  /*public function getTraceAsString(){*/
  /**/
  /*  parent::getTraceAsString();*/
  /*}*/
  /**/
  /**/
  /*public function getTraceAsString(){*/
  /**/
  /* /*return parent::getTraceAsString();*/
  /*}*/




}
  




?>
