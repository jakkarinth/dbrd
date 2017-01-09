<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RsJournal;

/**
 * RsJournalSearch represents the model behind the search form about `backend\models\RsJournal`.
 */
class RsJournalSearch extends RsJournal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jid', 'j_type'], 'integer'],
            [['j_nation', 'j_rname', 'j_ename', 'j_name', 'j_start', 'j_end', 'j_year', 'j_issue', 'j_page', 'dataj', 'citation', 'abstract_in', 'abstract_ap', 'abstract_co', 'abstract_con', 'abstract_sc', 'abstract_fp', 'abstract_di', 'abstract_pi'], 'safe'],
            [['impact'], 'number'],
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
        $query = RsJournal::find();

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
            'jid' => $this->jid,
            'j_type' => $this->j_type,
            'j_start' => $this->j_start,
            'impact' => $this->impact,
        ]);

        $query->andFilterWhere(['like', 'j_nation', $this->j_nation])
            ->andFilterWhere(['like', 'j_rname', $this->j_rname])
            ->andFilterWhere(['like', 'j_ename', $this->j_ename])
            ->andFilterWhere(['like', 'j_name', $this->j_name])
            ->andFilterWhere(['like', 'j_end', $this->j_end])
            ->andFilterWhere(['like', 'j_year', $this->j_year])
            ->andFilterWhere(['like', 'j_issue', $this->j_issue])
            ->andFilterWhere(['like', 'j_page', $this->j_page])
            ->andFilterWhere(['like', 'dataj', $this->dataj])
            ->andFilterWhere(['like', 'citation', $this->citation])
            ->andFilterWhere(['like', 'abstract_in', $this->abstract_in])
            ->andFilterWhere(['like', 'abstract_ap', $this->abstract_ap])
            ->andFilterWhere(['like', 'abstract_co', $this->abstract_co])
            ->andFilterWhere(['like', 'abstract_con', $this->abstract_con])
            ->andFilterWhere(['like', 'abstract_sc', $this->abstract_sc])
            ->andFilterWhere(['like', 'abstract_fp', $this->abstract_fp])
            ->andFilterWhere(['like', 'abstract_di', $this->abstract_di])
            ->andFilterWhere(['like', 'abstract_pi', $this->abstract_pi]);

        return $dataProvider;
    }
}
