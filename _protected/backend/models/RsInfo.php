<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_info".
 *
 * @property integer $rid
 * @property string $r_num
 * @property string $r_fname_en
 * @property string $r_lname_en
 * @property string $r_lname_th
 * @property string $f_lname_th
 * @property integer $r_date
 * @property integer $r_month
 * @property integer $r_yaer
 * @property integer $r_personal
 * @property string $r_picture
 * @property string $r_address
 * @property string $r_city
 * @property string $r_province
 * @property string $r_postal
 * @property string $r_tel
 * @property string $r_fax
 * @property string $r_mobile
 * @property string $r_email
 * @property string $r_nrct
 * @property string $r_position
 * @property string $r_administ
 * @property integer $r_dept_id
 * @property integer $r_fac_id
 * @property integer $r_cmp_id
 * @property string $r_Aeducation
 * @property string $r_Meducation
 * @property string $r_Beducation
 * @property string $r_experience
 * @property string $r_expert
 * @property integer $r_type
 * @property integer $r_status
 *
 * @property RsCopyright[] $rsCopyrights
 * @property RefDepartment $rDept
 * @property RefFac $rFac
 * @property RefUniv $rCmp
 * @property RsPatent[] $rsPatents
 * @property RsPatents[] $rsPatents0
 * @property RsSecret[] $rsSecrets
 */
class RsInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rid', 'r_dept_id', 'r_fac_id', 'r_cmp_id'], 'required'],
            [['rid', 'r_date', 'r_month', 'r_yaer', 'r_personal', 'r_dept_id', 'r_fac_id', 'r_cmp_id', 'r_type', 'r_status'], 'integer'],
            [['r_Aeducation', 'r_Meducation', 'r_Beducation', 'r_experience', 'r_expert'], 'string'],
            [['r_num', 'r_nrct', 'r_position', 'r_administ'], 'string', 'max' => 30],
            [['r_fname_en', 'r_lname_en', 'r_lname_th', 'f_lname_th', 'r_city', 'r_province'], 'string', 'max' => 50],
            [['r_picture'], 'string', 'max' => 25],
            [['r_address'], 'string', 'max' => 200],
            [['r_postal'], 'string', 'max' => 6],
            [['r_tel', 'r_fax', 'r_mobile', 'r_email'], 'string', 'max' => 40],
            [['r_num'], 'unique'],
            [['r_dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => RefDepartment::className(), 'targetAttribute' => ['r_dept_id' => 'r_dept_id']],
            [['r_fac_id'], 'exist', 'skipOnError' => true, 'targetClass' => RefFac::className(), 'targetAttribute' => ['r_fac_id' => 'r_fac_id']],
            [['r_cmp_id'], 'exist', 'skipOnError' => true, 'targetClass' => RefUniv::className(), 'targetAttribute' => ['r_cmp_id' => 'r_cmp_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rid' => 'รหัสนักวิจัย',
            'r_num' => 'เลขที่บัตรประชาชน',
            'r_fname_en' => 'ชื่อภาษาอังกฤษ',
            'r_lname_en' => 'นามสกุลภาษาอังกฤษ',
            'r_lname_th' => 'ชื่อ',
            'f_lname_th' => 'นามสกุล',
            'r_date' => 'วันเกิด',
            'r_month' => 'เดือนเกิด',
            'r_yaer' => 'ปีที่เกิด',
            'r_personal' => 'เลขที่บัตรประชาชน',
            'r_picture' => 'ชื่อไฟล์รูป',
            'r_address' => 'ที่อยู่',
            'r_city' => 'อำเภอ',
            'r_province' => 'จังหวัด',
            'r_postal' => 'รหัสไปรษณีย์',
            'r_tel' => 'เบอร์โทรศัพท์',
            'r_fax' => 'เบอร์แฟกซ์',
            'r_mobile' => 'มือถือ',
            'r_email' => 'อีเมล์',
            'r_nrct' => 'รหัสประจำตัวนักวิจัย',
            'r_position' => 'ตำแหน่งทางวิชาการ',
            'r_administ' => 'ตำแหน่งทางบริหาร',
            'r_dept_id' => 'สาขาวิชา',
            'r_fac_id' => 'คณะ',
            'r_cmp_id' => 'วิทยาเขต',
            'r_Aeducation' => 'การศึกษา (ป.เอก)',
            'r_Meducation' => 'การศึกษา (ป.โท)',
            'r_Beducation' => 'การศึกษา (ป.ตรี)',
            'r_experience' => 'ประสบการณ์',
            'r_expert' => 'ความเชี่ยวชาญ',
            'r_type' => '1=สายวิชาการ
0=สายสนับสนุน',
            'r_status' => '1=ภายใน
0=ภายนอก',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsCopyrights()
    {
        return $this->hasMany(RsCopyright::className(), ['rrid' => 'rid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRDept()
    {
        return $this->hasOne(RefDepartment::className(), ['r_dept_id' => 'r_dept_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRFac()
    {
        return $this->hasOne(RefFac::className(), ['r_fac_id' => 'r_fac_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRCmp()
    {
        return $this->hasOne(RefUniv::className(), ['r_cmp_id' => 'r_cmp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsPatents()
    {
        return $this->hasMany(RsPatent::className(), ['rid' => 'rid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsPatents0()
    {
        return $this->hasMany(RsPatents::className(), ['rid' => 'rid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsSecrets()
    {
        return $this->hasMany(RsSecret::className(), ['rid' => 'rid']);
    }
}
