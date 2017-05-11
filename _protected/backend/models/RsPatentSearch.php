<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RsPatent;

/**
 * RsPatentSearch represents the model behind the search form about `backend\models\RsPatent`.
 */
class RsPatentSearch extends RsPatent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rsid', 'rid'], 'integer'],
            [['a_aname', 'a_num', 'a_number', 'a_start', 'a_date', 'a_end', 'a_status', 'ref_p', 'ref_ai', 'withs'], 'safe'],
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
        $query = RsPatent::find();

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
            'a_start' => $this->a_start,
            'a_date' => $this->a_date,
            'a_end' => $this->a_end,
        ]);

        $query->andFilterWhere(['like', 'a_aname', $this->a_aname])
            ->andFilterWhere(['like', 'a_num', $this->a_num])
            ->andFilterWhere(['like', 'a_number', $this->a_number])
            ->andFilterWhere(['like', 'a_status', $this->a_status])
            ->andFilterWhere(['like', 'ref_p', $this->ref_p])
            ->andFilterWhere(['like', 'ref_ai', $this->ref_ai])
            ->andFilterWhere(['like', 'withs', $this->withs]);

        return $dataProvider;
    }
}
