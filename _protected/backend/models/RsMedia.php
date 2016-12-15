<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_media".
 *
 * @property integer $mid
 * @property string $m_nation
 * @property string $m_rname
 * @property string $m_ename
 * @property string $m_channel
 * @property string $m_detail
 * @property string $m_date
 * @property string $m_end
 * @property integer $m_time
 * @property string $abstract_i
 * @property string $abstract_a
 * @property string $abstract_c
 * @property string $abstract_nc
 * @property string $abstract_s
 * @property string $abstract_f
 * @property string $abstract_d
 * @property string $abstract_p
 */
class RsMedia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_media';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mid'], 'required'],
            [['mid', 'm_time'], 'integer'],
            [['m_date', 'm_end'], 'safe'],
            [['m_nation'], 'string', 'max' => 2],
            [['m_rname', 'm_ename', 'm_channel', 'm_detail'], 'string', 'max' => 300],
            [['abstract_i', 'abstract_a', 'abstract_c', 'abstract_nc', 'abstract_s', 'abstract_f', 'abstract_d', 'abstract_p'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mid' => 'Mid',
            'm_nation' => 'ระดับ 0=ชาติ, 1=นานาชาติ',
            'm_rname' => 'ชื่อบทความภาษาไทย',
            'm_ename' => 'ชื่อบทความภาษาอังกฤษ',
            'm_channel' => 'สถานที่เผยแพร่ อำเภอ จังหวัด',
            'm_detail' => 'รายละเอียดการเผยแพร่',
            'm_date' => 'M Date',
            'm_end' => 'M End',
            'm_time' => 'จำนวนครั้งที่เผยแพร่',
            'abstract_i' => 'หนังสือเชิญร่วมการสัมมนา
',
            'abstract_a' => 'หนังสืออนุญาตให้เข้าร่วมสัมมนา
',
            'abstract_c' => 'หน้าปก',
            'abstract_nc' => 'สารบัญ',
            'abstract_s' => 'abstract_s',
            'abstract_f' => 'ผลงานการเผยแพร่',
            'abstract_d' => 'วุฒิบัตร (ถ้ามี)',
            'abstract_p' => 'ภาพประกอบ (ถ้ามี)',
        ];
    }
}
