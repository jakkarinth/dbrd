<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rs_subject".
 *
 * @property integer $subject_id
 * @property string $subject_name
 *
 * @property RsResearch[] $rsResearches
 * @property RsSubresearch[] $rsSubresearches
 */
class RsSubject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rs_subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_id'], 'required'],
            [['subject_id'], 'integer'],
            [['subject_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subject_id' => 'Subject ID',
            'subject_name' => 'Subject Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsResearches()
    {
        return $this->hasMany(RsResearch::className(), ['subject_id' => 'subject_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRsSubresearches()
    {
        return $this->hasMany(RsSubresearch::className(), ['rs_subject' => 'subject_id']);
    }
}
