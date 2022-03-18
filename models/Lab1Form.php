<?php

namespace app\models;

use yii\base\Model;
 
class Lab1Form extends Model
{
    public $name;
    public $email;
    public $date;
    public $age;
    public $favCuisine;
    public $recFriend;
    public $review;
    
    public function rules()
    {
        $messagName = 'Длина имени от 5 до 30 символов';
        $messageAge = 'Возраст от 18 до 100 лет (это число)';
    
        return [
            [['name', 'email', 'date', 'age', 'favCuisine', 'recFriend', 'review'], 'required', 'message'=>'Ведите значение {attribute}.'],
            ['name', 'string', 'length' => [5, 30], 'tooLong'=>$messagName, 'tooShort'=>$messagName],
            ['email', 'email','message'=>"{attribute} записан не правильно"],
            ['date', 'date', 'format'=>'dd-mm-yy'],
            ['age', 'number', 'min'=>18,'max'=>100, 'tooSmall'=>$messageAge, 'tooBig'=>$messageAge],
            ['review', 'filter', 'filter' => 'trim']
            ];
    }
}
