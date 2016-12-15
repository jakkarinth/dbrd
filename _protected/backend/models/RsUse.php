<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_use".
 *
 * @property integer $reid
 * @property integer $re_inter
 * @property string $re_tname
 * @property string $re_ename
 * @property string $re_end
 * @property string $re_start
 * @property string $re_date
 * @property string $re_area
 * @property string $abstract_up
 * @property string $abstract_uc
 * @property string $abstract_ut
 * @property string $abstract_ua
 * @property string $abstract_us
 * @property string $abstract_uo
 * @property string $abstract_ute
 * @property string $re_test
 */
class RsUse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_use';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reid'], 'required'],
            [['reid', 're_inter'], 'integer'],
            [['re_end', 're_start', 're_date'], 'safe'],
            [['re_tname', 're_ename', 're_area'], 'string', 'max' => 300],
            [['abstract_up', 'abstract_uc', 'abstract_ut', 'abstract_ua', 'abstract_us', 'abstract_uo', 'abstract_ute', 're_test'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reid' => 'Reid',
            're_inter' => 'ระดับ 0=ชาติ, 1=นานาชาติ',
            're_tname' => 'ชื่อบทความภาษาไทย',
            're_ename' => 'Re Ename',
            're_end' => 'วันเดือนปีที่แล้วเสร็จ',
            're_start' => 'วันที่เริ่มนำไปใช้ประโยชน์',
            're_date' => 'สิ้นสุดวันที่',
            're_area' => 'สถานที่ จังหวัด ประเทศที่นำไปใช้ประโยชน์',
            'abstract_up' => 'ภาพถ่าย',
            'abstract_uc' => 'สำเนาปก ปกรอง คำนำ สารบัญ และส่วนที่อ้างถึงงานที่นำไปใช้ประโยชน์',
            'abstract_ut' => 'เอกสารประกอบการฝึกอบรม',
            'abstract_ua' => 'หนังสือขออนุญาตนำไปใช้ประโยชน์',
            'abstract_us' => 'หลักฐานการจำหน่ายผลิตภัณฑ์',
            'abstract_uo' => 'Abstract Uo',
            'abstract_ute' => 'Abstract Ute',
            're_test' => 'Re Test',
        ];
    }
}
