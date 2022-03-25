<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property int $id_authors
 * @property string $surname
 * @property string $name
 * @property string|null $middle_name
 * @property string $birthday
 * @property string|null $date_death
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surname', 'name', 'birthday'], 'required'],
            [['birthday', 'date_death'], 'safe'],
            [['surname', 'name', 'middle_name'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_authors' => 'Id Автора',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'middle_name' => 'Отчество',
            'birthday' => 'День Рождения',
            'date_death' => 'День Смерти',
        ];
    }
}
