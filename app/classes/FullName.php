<?php

namespace App\classes;

class FullName
{
    public $firstName;
    public $lastName;
    protected $fullName;


   public function __construct($data)
   {

        // echo '<pre>';
        // print_r($data);
        // echo $data['first_name'];
        // exit();

       $this->firstName = $data['first_name'];
       $this->lastName = $data['last_name'];
   }

  

   public function index()
    {
        
        header( 'Location: action.php?pages=full-name');
    }

    public function getFullName()
    {
      $this->fullName = $this->firstName.' '.$this->lastName;

     return $this->fullName;
    }
 
} 