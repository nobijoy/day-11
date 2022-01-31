<?php
namespace App\classes;
class Example
{
    public $student = [];


    public function index()
    {
        $this->student = [
            0=>[
                'name'      => 'jahid',
                'email'     => 'jahid@gmail.com',
                'mobile'    => [
                    'mobile1' => '0192562568',
                    'mobile2' => '0192562568',
                ]
            ],
            1=>[
                'name'      => 'Fahim',
                'email'     => 'Fahim@gmail.com',
                'mobile'    => [
                    'mobile1' => '0192562568',
                    'mobile2' => '0192562568',
                ]
            ],
            2 => 'BITM',
            3=>[
                'name'      => 'CR PAGLA',
                'email'     => 'Fahim@gmail.com',
                'mobile'    => [
                    'mobile1' => '0192562568',
                    'mobile2' => '0192562568',
                ]
            ]
        ];

        echo '<pre>';
//        print_r($this->student);
        var_dump($this->student);
        $_

//        foreach ($this->student as$key => $item){
//            if($key == 0){
//                echo $item['name'].' '.$item['email'].' '.$item['mobile'].'<br/>';
//                break;
//            }
//        }

//        foreach ($this->student as $item){
//            if (is_array($item)){
//                foreach ($item as $value){
//                    if(is_array($value)){
//                        foreach ($value as $v_value){
//                            echo $v_value;
//                        }
//                    }
//                    else
//                    {
//                        echo $value.' ';
//                    }
//
//                }
//            }
//           else{
//               echo $item;
//           }
//            echo '<br/>';
//        }


//        echo $this->student[0]['name'].'<br/>';
//        echo $this->student[0]['email'].'<br/>';
//        echo $this->student[0]['mobile'].'<br/>';



//        $this->student = [10, 20, 'BITM', 10.20, true, false];
//        foreach ($this->student as $key => $student){
//            echo 'index no- '. $key.' value -'.$student. '<br/ > ';
//        }


    }
}