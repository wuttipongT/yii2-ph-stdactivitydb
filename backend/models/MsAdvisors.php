<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ms_advisors".
 *
 * @property integer $Advisors_Id
 * @property string $Advisors_Name
 * @property string $Status
 */
class MsAdvisors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ms_advisors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Advisors_Name'], 'required'],
            [['Status'], 'string'],
            [['Advisors_Name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Advisors_Id' => 'Advisors  ID',
            'Advisors_Name' => 'อาจารย์ที่ปรึกษา',
            'StatusName' => 'สถานะ',
        ];
    }
     public function getStatusName(){
        return $this->Status == 0 ? 'ใช้งาน' : 'ไม่ใช้งาน';
    }
}
