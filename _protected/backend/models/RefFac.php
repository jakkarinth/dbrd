<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ref_fac".
 *
 * @property integer $r_fac_id
 * @property string $fac_name
 * @property integer $cam_id
 *
 * @property RsInfo[] $rsInfos
 */
class RefFac extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ref_fac';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['r_fac_id'], 'required'],
            [['r_fac_id', 'cam_id'], 'integer'],
            [['fac_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'r_fac_id' => 'R Fac ID',
            'fac_name' => 'Fac Name',
            'cam_id' => 'Cam ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsInfos()
    {
        return $this->hasMany(RsInfo::className(), ['r_fac_id' => 'r_fac_id']);
    }
}
