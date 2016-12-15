<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_secret".
 *
 * @property integer $id
 * @property string $secret_name
 * @property integer $rsid
 * @property integer $rid
 * @property string $secret_num
 * @property string $secret_number
 * @property string $secret_start
 * @property string $secret_date
 * @property string $secret_status
 * @property string $ref_secret
 * @property string $withs
 *
 * @property RsInfo $r
 * @property RsResearch $rs
 */
class RsSecret extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_secret';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['secret_name', 'rsid', 'rid'], 'required'],
            [['rsid', 'rid'], 'integer'],
            [['secret_start', 'secret_date'], 'safe'],
            [['secret_name', 'ref_secret', 'withs'], 'string', 'max' => 100],
            [['secret_num', 'secret_number'], 'string', 'max' => 10],
            [['secret_status'], 'string', 'max' => 1],
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
            'secret_name' => 'ชื่อผลงานที่ขอจดความลับทางการค้า',
            'rsid' => 'รหัสงานวิจัย',
            'rid' => 'รหัสนักวิจัย',
            'secret_num' => 'เลขคำขอความลับทางการค้า',
            'secret_number' => 'เลขที่ความลับทางการค้า
',
            'secret_start' => 'วันที่ยื่นคำขอ',
            'secret_date' => 'วันที่ได้รับความลับทางการค้า
',
            'secret_status' => 'สถานะ',
            'ref_secret' => 'หนังสือรับรองความลับทางการค้า',
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
