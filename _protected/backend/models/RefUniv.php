<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ref_univ".
 *
 * @property integer $r_cmp_id
 * @property string $cam_name
 *
 * @property RsInfo[] $rsInfos
 */
class RefUniv extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ref_univ';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['r_cmp_id'], 'required'],
            [['r_cmp_id'], 'integer'],
            [['cam_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'r_cmp_id' => 'R Cmp ID',
            'cam_name' => 'Cam Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsInfos()
    {
        return $this->hasMany(RsInfo::className(), ['r_cmp_id' => 'r_cmp_id']);
    }
}
