<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_patents".
 *
 * @property integer $id
 * @property string $a_pname
 * @property integer $rsid
 * @property integer $rid
 * @property string $a_num
 * @property string $a number
 * @property string $a_start
 * @property string $a_date
 * @property string $a_end
 * @property string $a_status
 * @property string $ref_p
 * @property string $ref_pi
 * @property string $withs
 *
 * @property RsInfo $r
 * @property RsResearch $rs
 */
class RsPatents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_patents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_pname', 'rsid', 'rid'], 'required'],
            [['rsid', 'rid'], 'integer'],
            [['a_start', 'a_date', 'a_end'], 'safe'],
            [['a_pname'], 'string', 'max' => 300],
            [['a_num'], 'string', 'max' => 10],
            [['a_number'], 'string', 'max' => 5],
            [['a_status'], 'string', 'max' => 1],
            [['ref_p', 'ref_pi', 'withs'], 'string', 'max' => 100],
            [['rid'], 'exist', 'skipOnError' => true, 'targetClass' => RsInfo::className(), 'targetAttribute' => ['rid' => 'rid']],
            [['rsid'], 'exist', 'skipOnError' => true, 'targetClass' => RsResearch::className(), 'targetAttribute' => ['rsid' => 'rsid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ลำดับที่',
            'a_pname' => 'ชื่อผลงานที่ขอจดอนุสิทธิบัตร',
            'rsid' => 'รหัสงานวิจัย',
            'rid' => 'รหัสนักวิจัย',
            'a_num' => 'เลขที่คำขออนุสิทธิบัตร
',
            'a_number' => 'เลขที่อนุสิทธิบัตร',
            'a_start' => 'วันที่ยื่นคำขอ',
            'a_date' => 'วันที่ได้รับอนุสิทธิบัตร',
            'a_end' => 'วันที่หมดอายุของอนุสิทธิบัตร',
            'a_status' => 'สถานะ',
            'ref_p' => 'หลักฐาน',
            'ref_pi' => 'รูปภาพและผลงาน',
            'withs' => 'ร่วมกับ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getR()
    {
        return $this->hasOne(RsInfo::className(), ['rid' => 'rid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRs()
    {
        return $this->hasOne(RsResearch::className(), ['rsid' => 'rsid']);
    }
}
