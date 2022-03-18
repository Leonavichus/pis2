<?php
namespace app\models;

use yii\db\ActiveRecord;

class Books extends ActiveRecord
{

    public $findtitle;

    public static function tableName()
    {
        return '{{books}}';
    }

    public function rules()
    {
        return[
            [['name'], 'required'],
            [['year_writing'], 'date', 'format' => 'php:Y-m-d'],
            ['findtitle', 'required']
        ];
    }

    public function getAuthors()
    {
        return $this -> hasOne(Authors::className(), ['id_authors' => 'id_a']);
    }

    public function getGenre()
    {
        return $this -> hasOne(Genre::className(), ['id_genre' => 'id_a']);
    }
    
    public function attributeLabels()
    {
        return[
            'id_book' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'year_writing' => 'Year Writing',
            'id_a' => 'ID A',
            'id_g' => 'ID G',
        ];
    }
}
