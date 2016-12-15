<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_quality".
 *
 * @property integer $quid
 * @property string $quname
 * @property string $quscore
 */
class RsQuality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_quality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quid'], 'required'],
            [['quid'], 'integer'],
            [['quscore'], 'number'],
            [['quname'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'quid' => 'รหัสคุณภาพงานวิจัย',
            'quname' => 'รายละเอียด',
            'quscore' => 'ค่าน้ำหนัก',
        ];
    }
}
