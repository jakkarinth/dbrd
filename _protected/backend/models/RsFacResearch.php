<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_fac_research".
 *
 * @property integer $frid
 * @property string $fname
 *
 * @property RsResearch[] $rsResearches
 * @property RsSubresearch[] $rsSubresearches
 */
class RsFacResearch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_fac_research';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fname'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'frid' => 'รหัสสาขางานวิจัย',
            'fname' => 'Fname',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsResearches()
    {
        return $this->hasMany(RsResearch::className(), ['frid' => 'frid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsSubresearches()
    {
        return $this->hasMany(RsSubresearch::className(), ['frid' => 'frid']);
    }
}
