<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DbInf;

/**
 * DbInfSearch represents the model behind the search form of `app\models\DbInf`.
 */
class DbInfSearch extends DbInf
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['img', 'name', 'birthday', 'city', 'education', 'language', 'login', 'password'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
    public function search($params)
    {
        $query = DbInf::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'birthday', $this->birthday])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'login', $this->login])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
