<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ref_department".
 *
 * @property integer $r_dept_id
 * @property string $dept_name
 * @property integer $fac_id
 *
 * @property RsInfo[] $rsInfos
 */
class RefDepartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ref_department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['r_dept_id'], 'required'],
            [['r_dept_id', 'fac_id'], 'integer'],
            [['dept_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'r_dept_id' => 'R Dept ID',
            'dept_name' => 'Dept Name',
            'fac_id' => 'Fac ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsInfos()
    {
        return $this->hasMany(RsInfo::className(), ['r_dept_id' => 'r_dept_id']);
    }
}
