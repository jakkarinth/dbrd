<?php

namespace backend\models;
use dosamigos\datepicker\DatePicker;
use Yii;

/**
 * This is the model class for table "rs_research".
 *
 * @property integer $rsid
 * @property string $rs_name
 * @property string $rs_name_en
 * @property string $rs_leader
 * @property string $rs_team
 * @property string $rs_fiscal
 * @property integer $budget_id
 * @property string $rs_abstract_en
 * @property string $rs_abstract_th
 * @property string $rs_campus
 * @property string $rs_capital
 * @property string $rs_class
 * @property string $rs_pay1
 * @property string $rs_pay2
 * @property string $rs_pay3
 * @property string $rs_bank
 * @property integer $frid
 * @property string $rs_start
 * @property string $rs_end
 * @property string $rs_time
 * @property string $rs_type
 * @property string $rs_status
 * @property string $rs_note
 * @property string $rs_statxt
 * @property string $rs_final
 * @property integer $subject_id
 * @property integer $project_id
 * @property string $rs_year
 * @property string $rs_atyear
 * @property string $pro_group
 * @property string $rs_nguat1
 * @property string $rs_nguat2
 * @property string $rs_nguat3
 * @property string $rs_kaona
 * @property string $rs_knowleadge
 * @property string $rs_book
 * @property string $rs_isbn
 * @property string $rs_sum
 * @property string $rs_cd
 * @property string $rs_dbook
 *
 * @property RsCopyright[] $rsCopyrights
 * @property RsPatent[] $rsPatents
 * @property RsPatents[] $rsPatents0
 * @property RefBudget $budget
 * @property RsFacResearch $fr
 * @property RsSubject $subject
 * @property RsSecret[] $rsSecrets
 */
class RsResearch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_research';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rs_name', 'budget_id', 'frid', 'subject_id'], 'required'],
            [['budget_id', 'frid', 'subject_id', 'project_id'], 'integer'],
            [['rs_pay1', 'rs_pay2', 'rs_pay3'], 'number'],
            [['rs_start', 'rs_end', 'rs_time', 'rs_final', 'rs_nguat1', 'rs_nguat2', 'rs_nguat3', 'rs_dbook'], 'safe'],
            [['rs_name', 'rs_name_en'], 'string', 'max' => 300],
            [['rs_leader', 'rs_team', 'rs_fiscal', 'rs_book'], 'string', 'max' => 10],
            [['rs_abstract_en', 'rs_abstract_th', 'rs_campus', 'rs_bank', 'rs_kaona', 'rs_knowleadge'], 'string', 'max' => 100],
            [['rs_capital', 'rs_class', 'rs_type', 'rs_year', 'rs_atyear', 'pro_group'], 'string', 'max' => 1],
            [['rs_status'], 'string', 'max' => 3],
            [['rs_note'], 'string', 'max' => 200],
            [['rs_statxt', 'rs_isbn'], 'string', 'max' => 20],
            [['rs_sum', 'rs_cd'], 'string', 'max' => 5],
            [['budget_id'], 'exist', 'skipOnError' => true, 'targetClass' => RefBudget::className(), 'targetAttribute' => ['budget_id' => 'budget_id']],
            [['frid'], 'exist', 'skipOnError' => true, 'targetClass' => RsFacResearch::className(), 'targetAttribute' => ['frid' => 'frid']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => RsSubject::className(), 'targetAttribute' => ['subject_id' => 'subject_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rsid' => 'รหัสงานวิจัย',
            'rs_name' => 'ชื่อโครงการวิจัย(ไทย)',
            'rs_name_en' => 'ชื่อโครงการวิจัย (อังกฤษ)',
            'rs_leader' => 'หัวหน้าโครงการ',
            'rs_team' => 'ผู้ร่วมโครงการ',
            'rs_fiscal' => 'ปีงบประมาณ',
            'budget_id' => 'รหัสแหล่งเงิน',
            'rs_abstract_en' => 'บทคัดย่อ(อังกฤษ)',
            'rs_abstract_th' => 'บทคัดย่อ(ไทย)',
            'rs_campus' => 'วิทยาเขต',
            'rs_capital' => 'ประเภทงบประมาณ',
            'rs_class' => 'งานวิจัยในชั้นเรียน',
            'rs_pay1' => 'จ่ายงวดที่ 1 (60%)',
            'rs_pay2' => 'จ่ายงวดที่ 2 (30%)',
            'rs_pay3' => 'จ่ายงวดที่ 3 (10%)',
            'rs_bank' => 'สั่งจ่ายเช็คหรือบัญชีธนาคาร',
            'frid' => 'รหัสสาขางานวิจัย',
            'rs_start' => 'วันที่เริ่มต้น',
            'rs_end' => 'วันที่สิ้นสุด',
            'rs_time' => 'ขยายเวลาถึงวันที่',
            'rs_type' => 'ประเภทโครงการ',
            'rs_status' => 'สถานะโครงการ',
            'rs_note' => 'รายละเอียดโครงการ',
            'rs_statxt' => 'ความก้าวหน้า',
            'rs_final' => 'วันที่แล้วเสร็จ',
            'subject_id' => 'กลุ่มสาขาวิชา',
            'project_id' => 'ลักษณะโครงการ',
            'rs_year' => 'โครงการต่อเนื่อง',
            'rs_atyear' => 'ปีที่',
            'pro_group' => 'ชนิดโครงการ',
            'rs_nguat1' => 'วันที่เบิกเงินงวดที่1',
            'rs_nguat2' => 'วันที่เบิกเงินงวดที่2',
            'rs_nguat3' => 'วันที่เบิกเงินงวดที่3',
            'rs_kaona' => 'ไฟล์รายงานความก้าวหน้า',
            'rs_knowleadge' => 'ไฟล์สรุปองค์ความรู้จากการวิจัย',
            'rs_book' => 'เลขที่บันทึกข้อความนำส่งวิจัยฉบับสมบูรณ์',
            'rs_isbn' => 'เลขทะเบียนหนังสือ',
            'rs_sum' => 'จำนวนเล่ม',
            'rs_cd' => 'cd/แผ่น',
            'rs_dbook' => 'วันที่ส่งวิจัยฉบับสมบูรณ์',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsCopyrights()
    {
        return $this->hasMany(RsCopyright::className(), ['rsid' => 'rsid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsPatents()
    {
        return $this->hasMany(RsPatent::className(), ['rsid' => 'rsid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsPatents0()
    {
        return $this->hasMany(RsPatents::className(), ['rsid' => 'rsid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBudget()
    {
        return $this->hasOne(RefBudget::className(), ['budget_id' => 'budget_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFr()
    {
        return $this->hasOne(RsFacResearch::className(), ['frid' => 'frid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(RsSubject::className(), ['subject_id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsSecrets()
    {
        return $this->hasMany(RsSecret::className(), ['rsid' => 'rsid']);
    }
}
