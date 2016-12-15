<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_subresearch".
 *
 * @property integer $isid
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
 * @property integer $rs_type_id
 * @property string $rs_status
 * @property string $rs_note
 * @property string $rs_statxt
 * @property string $rs_finish
 * @property integer $rs_subject
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
 * @property RefBudget $budget
 * @property RefRsType $rsType
 * @property RsFacResearch $fr
 * @property RsSubject $rsSubject
 */
class RsSubResearch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_subresearch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isid', 'budget_id', 'frid', 'rs_type_id', 'rs_subject'], 'required'],
            [['isid', 'budget_id', 'frid', 'rs_type_id', 'rs_subject', 'project_id'], 'integer'],
            [['rs_pay1', 'rs_pay2', 'rs_pay3'], 'number'],
            [['rs_start', 'rs_end', 'rs_time', 'rs_finish', 'rs_nguat1', 'rs_nguat2', 'rs_nguat3', 'rs_dbook'], 'safe'],
            [['rs_name', 'rs_name_en'], 'string', 'max' => 300],
            [['rs_leader', 'rs_fiscal', 'rs_book'], 'string', 'max' => 10],
            [['rs_team', 'rs_abstract_en', 'rs_abstract_th', 'rs_bank', 'rs_kaona', 'rs_knowleadge'], 'string', 'max' => 100],
            [['rs_campus'], 'string', 'max' => 4],
            [['rs_capital', 'rs_class', 'rs_year', 'rs_atyear', 'pro_group'], 'string', 'max' => 1],
            [['rs_status'], 'string', 'max' => 3],
            [['rs_note'], 'string', 'max' => 200],
            [['rs_statxt', 'rs_isbn'], 'string', 'max' => 20],
            [['rs_sum', 'rs_cd'], 'string', 'max' => 5],
            [['budget_id'], 'exist', 'skipOnError' => true, 'targetClass' => RefBudget::className(), 'targetAttribute' => ['budget_id' => 'budget_id']],
            [['rs_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => RefRsType::className(), 'targetAttribute' => ['rs_type_id' => 'rs_type_id']],
            [['frid'], 'exist', 'skipOnError' => true, 'targetClass' => RsFacResearch::className(), 'targetAttribute' => ['frid' => 'frid']],
            [['rs_subject'], 'exist', 'skipOnError' => true, 'targetClass' => RsSubject::className(), 'targetAttribute' => ['rs_subject' => 'subject_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'isid' => 'Isid',
            'rs_name' => 'Rs Name',
            'rs_name_en' => 'Rs Name En',
            'rs_leader' => 'Rs Leader',
            'rs_team' => 'Rs Team',
            'rs_fiscal' => 'Rs Fiscal',
            'budget_id' => 'Budget ID',
            'rs_abstract_en' => 'Rs Abstract En',
            'rs_abstract_th' => 'Rs Abstract Th',
            'rs_campus' => 'Rs Campus',
            'rs_capital' => 'Rs Capital',
            'rs_class' => 'Rs Class',
            'rs_pay1' => 'Rs Pay1',
            'rs_pay2' => 'Rs Pay2',
            'rs_pay3' => 'Rs Pay3',
            'rs_bank' => 'Rs Bank',
            'frid' => 'รหัสสาขางานวิจัย',
            'rs_start' => 'Rs Start',
            'rs_end' => 'Rs End',
            'rs_time' => 'Rs Time',
            'rs_type_id' => 'Rs Type ID',
            'rs_status' => 'Rs Status',
            'rs_note' => 'Rs Note',
            'rs_statxt' => 'Rs Statxt',
            'rs_finish' => 'Rs Finish',
            'rs_subject' => 'Rs Subject',
            'project_id' => 'Project ID',
            'rs_year' => 'Rs Year',
            'rs_atyear' => 'Rs Atyear',
            'pro_group' => 'Pro Group',
            'rs_nguat1' => 'Rs Nguat1',
            'rs_nguat2' => 'Rs Nguat2',
            'rs_nguat3' => 'Rs Nguat3',
            'rs_kaona' => 'Rs Kaona',
            'rs_knowleadge' => 'Rs Knowleadge',
            'rs_book' => 'Rs Book',
            'rs_isbn' => 'Rs Isbn',
            'rs_sum' => 'Rs Sum',
            'rs_cd' => 'Rs Cd',
            'rs_dbook' => 'Rs Dbook',
        ];
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
    public function getRsType()
    {
        return $this->hasOne(RefRsType::className(), ['rs_type_id' => 'rs_type_id']);
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
    public function getRsSubject()
    {
        return $this->hasOne(RsSubject::className(), ['subject_id' => 'rs_subject']);
    }
}
