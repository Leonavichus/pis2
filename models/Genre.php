<?php
namespace app\models;

use yii\db\ActiveRecord;

class Genre extends ActiveRecord
{

    public static function tableName()
    {
        return '{{genre}}';
    }

    public function rules()
    {
        return[
            [['name'], 'required'],
        ];
    }
    
    public function attributeLabels()
    {
        return[
            'id_genre' => 'ID',
            'name' => 'Name',
        ];
    }
}
