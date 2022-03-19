<?php

namespace app\models;

use yii\db\ActiveRecord;

class Authors extends ActiveRecord
{

    public static function tableName()
    {
        return 'authors';
    }

    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['id_a' => 'id_authors']);
    }

    public function rules()
    {
        return [
            [['surname', 'name', 'birthday'], 'required'],
            [['birthday', 'date_death'], 'date', 'format' => 'php:Y-m-d']
        ];
    }
}
