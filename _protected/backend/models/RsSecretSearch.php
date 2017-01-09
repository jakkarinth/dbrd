<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RsSecret;

/**
 * RsSecretSearch represents the model behind the search form about `backend\models\RsSecret`.
 */
class RsSecretSearch extends RsSecret
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rsid', 'rid'], 'integer'],
            [['secret_name', 'secret_num', 'secret_number', 'secret_start', 'secret_date', 'secret_status', 'ref_secret', 'withs'], 'safe'],
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
        $query = RsSecret::find();

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
            'rsid' => $this->rsid,
            'rid' => $this->rid,
            'secret_start' => $this->secret_start,
            'secret_date' => $this->secret_date,
        ]);

        $query->andFilterWhere(['like', 'secret_name', $this->secret_name])
            ->andFilterWhere(['like', 'secret_num', $this->secret_num])
            ->andFilterWhere(['like', 'secret_number', $this->secret_number])
            ->andFilterWhere(['like', 'secret_status', $this->secret_status])
            ->andFilterWhere(['like', 'ref_secret', $this->ref_secret])
            ->andFilterWhere(['like', 'withs', $this->withs]);

        return $dataProvider;
    }
}
