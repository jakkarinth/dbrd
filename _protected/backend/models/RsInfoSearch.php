<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RsInfo;

/**
 * RsInfoSearch represents the model behind the search form about `backend\models\RsInfo`.
 */
class RsInfoSearch extends RsInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rid', 'r_date', 'r_month', 'r_yaer', 'r_personal', 'r_dept_id', 'r_fac_id', 'r_cmp_id', 'r_type', 'r_status'], 'integer'],
            [['r_num', 'r_fname_en', 'r_lname_en', 'r_lname_th', 'f_lname_th', 'r_picture', 'r_address', 'r_city', 'r_province', 'r_postal', 'r_tel', 'r_fax', 'r_mobile', 'r_email', 'r_nrct', 'r_position', 'r_administ', 'r_Aeducation', 'r_Meducation', 'r_Beducation', 'r_experience', 'r_expert'], 'safe'],
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
        $query = RsInfo::find();

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
            'rid' => $this->rid,
            'r_date' => $this->r_date,
            'r_month' => $this->r_month,
            'r_yaer' => $this->r_yaer,
            'r_personal' => $this->r_personal,
            'r_dept_id' => $this->r_dept_id,
            'r_fac_id' => $this->r_fac_id,
            'r_cmp_id' => $this->r_cmp_id,
            'r_type' => $this->r_type,
            'r_status' => $this->r_status,
        ]);

        $query->andFilterWhere(['like', 'r_num', $this->r_num])
            ->andFilterWhere(['like', 'r_fname_en', $this->r_fname_en])
            ->andFilterWhere(['like', 'r_lname_en', $this->r_lname_en])
            ->andFilterWhere(['like', 'r_lname_th', $this->r_lname_th])
            ->andFilterWhere(['like', 'f_lname_th', $this->f_lname_th])
            ->andFilterWhere(['like', 'r_picture', $this->r_picture])
            ->andFilterWhere(['like', 'r_address', $this->r_address])
            ->andFilterWhere(['like', 'r_city', $this->r_city])
            ->andFilterWhere(['like', 'r_province', $this->r_province])
            ->andFilterWhere(['like', 'r_postal', $this->r_postal])
            ->andFilterWhere(['like', 'r_tel', $this->r_tel])
            ->andFilterWhere(['like', 'r_fax', $this->r_fax])
            ->andFilterWhere(['like', 'r_mobile', $this->r_mobile])
            ->andFilterWhere(['like', 'r_email', $this->r_email])
            ->andFilterWhere(['like', 'r_nrct', $this->r_nrct])
            ->andFilterWhere(['like', 'r_position', $this->r_position])
            ->andFilterWhere(['like', 'r_administ', $this->r_administ])
            ->andFilterWhere(['like', 'r_Aeducation', $this->r_Aeducation])
            ->andFilterWhere(['like', 'r_Meducation', $this->r_Meducation])
            ->andFilterWhere(['like', 'r_Beducation', $this->r_Beducation])
            ->andFilterWhere(['like', 'r_experience', $this->r_experience])
            ->andFilterWhere(['like', 'r_expert', $this->r_expert]);

        return $dataProvider;
    }
}
