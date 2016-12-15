<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ref_budget".
 *
 * @property integer $budget_id
 * @property string $budget
 *
 * @property RsResearch[] $rsResearches
 * @property RsSubresearch[] $rsSubresearches
 */
class RefBudget extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ref_budget';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['budget_id'], 'required'],
            [['budget_id'], 'integer'],
            [['budget'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'budget_id' => 'Budget ID',
            'budget' => 'Budget',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsResearches()
    {
        return $this->hasMany(RsResearch::className(), ['budget_id' => 'budget_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsSubresearches()
    {
        return $this->hasMany(RsSubresearch::className(), ['budget_id' => 'budget_id']);
    }
}
