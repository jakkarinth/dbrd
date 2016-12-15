<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_journal".
 *
 * @property integer $jid
 * @property string $j_nation
 * @property integer $j_type
 * @property string $j_rname
 * @property string $j_ename
 * @property string $j_name
 * @property string $j_start
 * @property string $j_end
 * @property string $j_year
 * @property string $j_issue
 * @property string $j_page
 * @property string $dataj
 * @property string $impact
 * @property string $citation
 * @property string $abstract_in
 * @property string $abstract_ap
 * @property string $abstract_co
 * @property string $abstract_con
 * @property string $abstract_sc
 * @property string $abstract_fp
 * @property string $abstract_di
 * @property string $abstract_pi
 */
class RsJournal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_journal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['j_type'], 'integer'],
            [['j_start'], 'safe'],
            [['impact'], 'number'],
            [['j_nation'], 'string', 'max' => 2],
            [['j_rname', 'j_ename', 'j_name'], 'string', 'max' => 300],
            [['j_end'], 'string', 'max' => 45],
            [['j_year'], 'string', 'max' => 4],
            [['j_issue'], 'string', 'max' => 50],
            [['j_page'], 'string', 'max' => 10],
            [['dataj', 'citation', 'abstract_in', 'abstract_ap', 'abstract_co', 'abstract_con', 'abstract_sc', 'abstract_fp', 'abstract_di', 'abstract_pi'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jid' => 'รหัสการตีพิมพ์',
            'j_nation' => 'ระดับ 0=ชาติ, 1=นานาชาติ',
            'j_type' => 'ประเภทการตีพิมพ์ 2=การนำเสนอผลงานที่ประชุมวิชาการ',
            'j_rname' => 'ชื่อบทความภาษาไทย',
            'j_ename' => 'ชื่อบทความภาษาอังกฤษ',
            'j_name' => 'ประเภทวารสารวิชาการ',
            'j_start' => 'วันที่',
            'j_end' => 'ถึงวันที่',
            'j_year' => 'ปีที่',
            'j_issue' => 'ฉบับที่',
            'j_page' => 'หน้าที่',
            'dataj' => 'จัดเก็บที่ฐานข้อมูล TCI, ISI, Scopus',
            'impact' => 'ค่าอิมแพ็คแฟ็คเตอร์',
            'citation' => 'บรรณานุกรม',
            'abstract_in' => 'หนังสือเชิญร่วมการสัมมนา',
            'abstract_ap' => 'หนังสืออนุญาตให้เข้าร่วมสัมมนา',
            'abstract_co' => 'หน้าปก',
            'abstract_con' => 'สารบัญ',
            'abstract_sc' => 'กำหนดการสัมมนา',
            'abstract_fp' => 'ผลงานการวิจัย',
            'abstract_di' => 'วุฒิบัตร ถ้ามี',
            'abstract_pi' => 'ภาพประกอบ  ถ้ามี',
        ];
    }
}
