<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RsUse;

/**
 * RsUseSearch represents the model behind the search form about `backend\models\RsUse`.
 */
class RsUseSearch extends RsUse
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reid', 're_inter'], 'integer'],
            [['re_tname', 're_ename', 're_end', 're_start', 're_date', 're_area', 'abstract_up', 'abstract_uc', 'abstract_ut', 'abstract_ua', 'abstract_us', 'abstract_uo', 'abstract_ute', 're_test'], 'safe'],
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
        $query = RsUse::find();

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
            'reid' => $this->reid,
            're_inter' => $this->re_inter,
            're_end' => $this->re_end,
            're_start' => $this->re_start,
            're_date' => $this->re_date,
        ]);

        $query->andFilterWhere(['like', 're_tname', $this->re_tname])
            ->andFilterWhere(['like', 're_ename', $this->re_ename])
            ->andFilterWhere(['like', 're_area', $this->re_area])
            ->andFilterWhere(['like', 'abstract_up', $this->abstract_up])
            ->andFilterWhere(['like', 'abstract_uc', $this->abstract_uc])
            ->andFilterWhere(['like', 'abstract_ut', $this->abstract_ut])
            ->andFilterWhere(['like', 'abstract_ua', $this->abstract_ua])
            ->andFilterWhere(['like', 'abstract_us', $this->abstract_us])
            ->andFilterWhere(['like', 'abstract_uo', $this->abstract_uo])
            ->andFilterWhere(['like', 'abstract_ute', $this->abstract_ute])
            ->andFilterWhere(['like', 're_test', $this->re_test]);

        return $dataProvider;
    }
}
