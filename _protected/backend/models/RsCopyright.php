<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_copyright".
 *
 * @property integer $id
 * @property string $pname
 * @property integer $rsid
 * @property integer $rrid
 * @property integer $pnum
 * @property integer $pnumber
 * @property string $pstart
 * @property string $pdate
 * @property string $pend
 * @property string $pstatus
 * @property string $ref_ps
 * @property string $ref_pis
 *
 * @property RsInfo $rr
 * @property RsResearch $rs
 */
class RsCopyright extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_copyright';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pname', 'rsid', 'rrid'], 'required'],
            [['rsid', 'rrid', 'pnum', 'pnumber'], 'integer'],
            [['pstart', 'pdate', 'pend'], 'safe'],
            [['pname'], 'string', 'max' => 300],
            [['pstatus'], 'string', 'max' => 1],
            [['ref_ps', 'ref_pis'], 'string', 'max' => 100],
            [['rrid'], 'exist', 'skipOnError' => true, 'targetClass' => RsInfo::className(), 'targetAttribute' => ['rrid' => 'rid']],
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
            'pname' => 'ชื่อผลงานที่ขอจดลิขสิทธิ์',
            'rsid' => 'รหัสงานวิจัย',
            'rrid' => 'รหัสนักวิจัย',
            'pnum' => 'เลขที่คำขอลิขสิทธิ์',
            'pnumber' => 'เลขที่ลิขสิทธิ์',
            'pstart' => 'วันที่ยืนคำขอ',
            'pdate' => 'วันที่ไดัรับลิขสิทธิ์',
            'pend' => 'วันที่หมดอายุของลิขสิทธิ์',
            'pstatus' => 'สถานะ',
            'ref_ps' => 'หลักฐาน',
            'ref_pis' => 'รูปภาพและผลงาน',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRr()
    {
        return $this->hasOne(RsInfo::className(), ['rid' => 'rrid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRs()
    {
        return $this->hasOne(RsResearch::className(), ['rsid' => 'rsid']);
    }
}
