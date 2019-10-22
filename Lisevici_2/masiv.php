<?php

 namespace classes;

 class masiv
{
    private $arrayDefault = [];
    public function __construct($arrayDefault)
    {
        $this->arrayDefault = $arrayDefault;
    }
    public function addElement($Element)
    {
        $this->arrayDefault[] = $Element;
    }
    public function showElementByKey($keyElement)
    {
        if(array_key_exists($keyElement, $this->arrayDefault))
        {
            echo"<pre>";
            print_r($this->arrayDefault[$keyElement]);
            echo"<pre>";
        }
    }
     public function showAllElements()
     {
         {
             echo"<pre>";
             print_r($this->arrayDefault);
             echo"<pre>";
         }
     }
    public function deleteElementByKey($keyElement)
     {
         if(array_key_exists($keyElement, $this->arrayDefault))
         {
             unset($this->arrayDefault[$keyElement]);
         }
     }
}