<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RsProposal;

/**
 * RsProposalSearch represents the model behind the search form about `backend\models\RsProposal`.
 */
class RsProposalSearch extends RsProposal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'p_name', 'p_name_en', 'rs_leader', 'rs_team', 'p_fiscal', 'p_campus', 'p_start', 'p_end', 'p_type', 'p_grade', 'p_sequence', 'p_reason', 'p_weakness', 'rs_year', 'rs_atyear', 'pro_group'], 'safe'],
            [['p_budget'], 'number'],
            [['p_result', 'project_id'], 'integer'],
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
        $query = RsProposal::find();

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
            'p_budget' => $this->p_budget,
            'p_start' => $this->p_start,
            'p_end' => $this->p_end,
            'p_result' => $this->p_result,
            'project_id' => $this->project_id,
        ]);

        $query->andFilterWhere(['like', 'pid', $this->pid])
            ->andFilterWhere(['like', 'p_name', $this->p_name])
            ->andFilterWhere(['like', 'p_name_en', $this->p_name_en])
            ->andFilterWhere(['like', 'rs_leader', $this->rs_leader])
            ->andFilterWhere(['like', 'rs_team', $this->rs_team])
            ->andFilterWhere(['like', 'p_fiscal', $this->p_fiscal])
            ->andFilterWhere(['like', 'p_campus', $this->p_campus])
            ->andFilterWhere(['like', 'p_type', $this->p_type])
            ->andFilterWhere(['like', 'p_grade', $this->p_grade])
            ->andFilterWhere(['like', 'p_sequence', $this->p_sequence])
            ->andFilterWhere(['like', 'p_reason', $this->p_reason])
            ->andFilterWhere(['like', 'p_weakness', $this->p_weakness])
            ->andFilterWhere(['like', 'rs_year', $this->rs_year])
            ->andFilterWhere(['like', 'rs_atyear', $this->rs_atyear])
            ->andFilterWhere(['like', 'pro_group', $this->pro_group]);

        return $dataProvider;
    }
}
