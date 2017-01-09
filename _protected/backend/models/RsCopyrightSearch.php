<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RsCopyright;

/**
 * RsCopyrightSearch represents the model behind the search form about `backend\models\RsCopyright`.
 */
class RsCopyrightSearch extends RsCopyright
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rsid', 'rrid', 'pnum', 'pnumber'], 'integer'],
            [['pname', 'pstart', 'pdate', 'pend', 'pstatus', 'ref_ps', 'ref_pis'], 'safe'],
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
        $query = RsCopyright::find();

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
            'rrid' => $this->rrid,
            'pnum' => $this->pnum,
            'pnumber' => $this->pnumber,
            'pstart' => $this->pstart,
            'pdate' => $this->pdate,
            'pend' => $this->pend,
        ]);

        $query->andFilterWhere(['like', 'pname', $this->pname])
            ->andFilterWhere(['like', 'pstatus', $this->pstatus])
            ->andFilterWhere(['like', 'ref_ps', $this->ref_ps])
            ->andFilterWhere(['like', 'ref_pis', $this->ref_pis]);

        return $dataProvider;
    }
}
