<?php
namespace frontend\models;
use Yii;
use yii\db\ActiveRecord;

class Customer extends ActiveRecord{
    public static function tableName(){
        return 'tb_users';
    }
    
    public function rules(){
        
    }
    
    public function attributeLabels(){
        
    }
}
