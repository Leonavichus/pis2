<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Authors;

/**
 * AuthorsSearch represents the model behind the search form of `app\modules\admin\models\Authors`.
 */
class AuthorsSearch extends Authors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_authors'], 'integer'],
            [['surname', 'name', 'middle_name', 'birthday', 'date_death'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params, $pageSize)
    {
        $query = Authors::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => $pageSize,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_authors' => $this->id_authors,
            'birthday' => $this->birthday,
            'date_death' => $this->date_death,
        ]);

        $query->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name]);

        return $dataProvider;
    }
}
