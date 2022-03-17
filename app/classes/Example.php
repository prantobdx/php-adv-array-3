<?php

namespace App\classes;
class Example
{
    public $name;

    public $data = [];

    public function index()
    {
        // $this->data =[10,20,30,'DHAKA','Mirpur',100.200,true];

        // // echo $this->data[5];

        // foreach ($this->data as $key => $iteam)
        // {
        //     echo $key. ' '.$iteam.'<br />';
        // }
        $this->data = [
            0 => [
            'name'   =>'Sagor',    
            'email'  =>'pranto@gmail.com','mobile' =>[
                'personal'=>'112255',
                'parent' =>'445566'
            ],
            ],
            1 => [
            'name'   =>'Faysal',    
            'email'  =>'faysal@gmail.com','mobile' =>[
                'personal'=>'112255',
                'parent' =>'445566'
            ],
            ],
            2 => [
            'name'   =>'Robin',    
            'email'  =>'robin@gmail.com','mobile' =>[
                'personal'=>'112255',
                'parent' =>'445566'
            ],
        ],
            3 => 'Bangladesh',
            4 => [
                'name'  => 'sojib',
                'email' => 'sojib@gmail.com',
                'mobile' => '01456373' 
                ]

        ];

        foreach($this->data as $item)
        {
            // echo $item['name'].' '.$item['email'].' '.$item['mobile'].'<br />';
            if (is_array($item))
            {
                foreach ($item as $value)
             {
                if (is_array($value ))
                {
                    foreach ($value as $v_value)
                    {
                        echo $v_value.' ';
                    }
                }
                else
                {
                    echo $value. ' ';
                }
                
              }
            }
            else 
            {
                echo $item;
            }
            echo '<br/>';
            
        }
          
        // echo '<pre>';
        // print_r($this->data);
        // var_dump($this->data);

   }
}
 