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
            'pid' => 'Pid',
            'p_name' => 'P Name',
            'p_name_en' => 'P Name En',
            'rs_leader' => 'Rs Leader',
            'rs_team' => 'Rs Team',
            'p_fiscal' => 'P Fiscal',
            'p_budget' => 'P Budget',
            'p_campus' => 'P Campus',
            'p_start' => 'P Start',
            'p_end' => 'P End',
            'p_type' => 'P Type',
            'p_grade' => 'P Grade',
            'p_sequence' => 'P Sequence',
            'p_result' => 'P Result',
            'p_reason' => 'P Reason',
            'p_weakness' => 'P Weakness',
            'project_id' => 'Project ID',
            'rs_year' => 'Rs Year',
            'rs_atyear' => 'Rs Atyear',
            'pro_group' => 'Pro Group',
        ];
    }
}
