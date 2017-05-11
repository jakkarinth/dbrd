<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_proposal".
 *
 * @property string $pid
 * @property string $p_name
 * @property string $p_name_en
 * @property string $rs_leader
 * @property string $rs_team
 * @property string $p_fiscal
 * @property string $p_budget
 * @property string $p_campus
 * @property string $p_start
 * @property string $p_end
 * @property string $p_type
 * @property string $p_grade
 * @property string $p_sequence
 * @property integer $p_result
 * @property string $p_reason
 * @property string $p_weakness
 * @property integer $project_id
 * @property string $rs_year
 * @property string $rs_atyear
 * @property string $pro_group
 */
class RsProposal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_proposal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid'], 'required'],
            [['p_budget'], 'number'],
            [['p_start', 'p_end'], 'safe'],
            [['p_result', 'project_id'], 'integer'],
            [['p_reason'], 'string'],
            [['pid'], 'string', 'max' => 15],
            [['p_name', 'p_name_en'], 'string', 'max' => 300],
            [['rs_leader', 'p_fiscal'], 'string', 'max' => 10],
            [['rs_team'], 'string', 'max' => 100],
            [['p_campus'], 'string', 'max' => 4],
            [['p_type', 'p_grade', 'p_sequence', 'rs_year', 'rs_atyear', 'pro_group'], 'string', 'max' => 1],
            [['p_weakness'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pid' => 'รหัสข้อเสนอโครงการ',
            'p_name' => 'ชื่อโครงการวิจัย(ไทย)',
            'p_name_en' => 'ชื่อโครงการวิจัย(อังกฤษ)',
            'rs_leader' => 'หัวหน้าโครงการ',
            'rs_team' => 'ผู้ร่วมวิจัย',
            'p_fiscal' => 'ปีงบประมาณ',
            'p_budget' => 'งบประมาณ',
            'p_campus' => 'วิทยาเขต',
            'p_start' => 'วันที่เริ่มต้น',
            'p_end' => 'วันที่สิ้น',
            'p_type' => 'ประเภทโครงการ',
            'p_grade' => 'เกรด',
            'p_sequence' => 'ลำดับความสำคัญใน NSMS',
            'p_result' => 'ผลการประเมิน',
            'p_reason' => 'เหตุผล',
            'p_weakness' => 'จุดอ่อนการเขียนข้อเสนอ',
            'project_id' => 'ลักษณะโครงการ',
            'rs_year' => 'โครงการต่อเนื่อง',
            'rs_atyear' => 'ปีที่',
            'pro_group' => 'ชนิดโครงการ',
        ];
    }
}
