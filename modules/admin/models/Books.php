<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id_book
 * @property string $name
 * @property string|null $description
 * @property int $year_writing
 * @property int $id_a
 * @property int $id_g
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'year_writing', 'id_a', 'id_g'], 'required'],
            [['description'], 'string'],
            [['year_writing', 'id_a', 'id_g'], 'integer'],
            [['name'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_book' => 'Id Книги',
            'name' => 'Название',
            'description' => 'Описание',
            'year_writing' => 'Дата написания',
            'id_a' => 'Id Автора',
            'id_g' => 'Id Жанра',
        ];
    }
}
