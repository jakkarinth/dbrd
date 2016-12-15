<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RsResearch;

/**
 * RsResearchSearch represents the model behind the search form about `backend\models\RsResearch`.
 */
class RsResearchSearch extends RsResearch
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rsid', 'budget_id', 'frid', 'subject_id', 'project_id'], 'integer'],
            [['rs_name', 'rs_name_en', 'rs_leader', 'rs_team', 'rs_fiscal', 'rs_abstract_en', 'rs_abstract_th', 'rs_campus', 'rs_capital', 'rs_class', 'rs_bank', 'rs_start', 'rs_end', 'rs_time', 'rs_type', 'rs_status', 'rs_note', 'rs_statxt', 'rs_final', 'rs_year', 'rs_atyear', 'pro_group', 'rs_nguat1', 'rs_nguat2', 'rs_nguat3', 'rs_kaona', 'rs_knowleadge', 'rs_book', 'rs_isbn', 'rs_sum', 'rs_cd', 'rs_dbook'], 'safe'],
            [['rs_pay1', 'rs_pay2', 'rs_pay3'], 'number'],
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
        $query = RsResearch::find();

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
            'rsid' => $this->rsid,
            'budget_id' => $this->budget_id,
            'rs_pay1' => $this->rs_pay1,
            'rs_pay2' => $this->rs_pay2,
            'rs_pay3' => $this->rs_pay3,
            'frid' => $this->frid,
            'rs_start' => $this->rs_start,
            'rs_end' => $this->rs_end,
            'rs_time' => $this->rs_time,
            'rs_final' => $this->rs_final,
            'subject_id' => $this->subject_id,
            'project_id' => $this->project_id,
            'rs_nguat1' => $this->rs_nguat1,
            'rs_nguat2' => $this->rs_nguat2,
            'rs_nguat3' => $this->rs_nguat3,
            'rs_dbook' => $this->rs_dbook,
        ]);

        $query->andFilterWhere(['like', 'rs_name', $this->rs_name])
            ->andFilterWhere(['like', 'rs_name_en', $this->rs_name_en])
            ->andFilterWhere(['like', 'rs_leader', $this->rs_leader])
            ->andFilterWhere(['like', 'rs_team', $this->rs_team])
            ->andFilterWhere(['like', 'rs_fiscal', $this->rs_fiscal])
            ->andFilterWhere(['like', 'rs_abstract_en', $this->rs_abstract_en])
            ->andFilterWhere(['like', 'rs_abstract_th', $this->rs_abstract_th])
            ->andFilterWhere(['like', 'rs_campus', $this->rs_campus])
            ->andFilterWhere(['like', 'rs_capital', $this->rs_capital])
            ->andFilterWhere(['like', 'rs_class', $this->rs_class])
            ->andFilterWhere(['like', 'rs_bank', $this->rs_bank])
            ->andFilterWhere(['like', 'rs_type', $this->rs_type])
            ->andFilterWhere(['like', 'rs_status', $this->rs_status])
            ->andFilterWhere(['like', 'rs_note', $this->rs_note])
            ->andFilterWhere(['like', 'rs_statxt', $this->rs_statxt])
            ->andFilterWhere(['like', 'rs_year', $this->rs_year])
            ->andFilterWhere(['like', 'rs_atyear', $this->rs_atyear])
            ->andFilterWhere(['like', 'pro_group', $this->pro_group])
            ->andFilterWhere(['like', 'rs_kaona', $this->rs_kaona])
            ->andFilterWhere(['like', 'rs_knowleadge', $this->rs_knowleadge])
            ->andFilterWhere(['like', 'rs_book', $this->rs_book])
            ->andFilterWhere(['like', 'rs_isbn', $this->rs_isbn])
            ->andFilterWhere(['like', 'rs_sum', $this->rs_sum])
            ->andFilterWhere(['like', 'rs_cd', $this->rs_cd]);

        return $dataProvider;
    }
}
