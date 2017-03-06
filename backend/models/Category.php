<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property integer $status
 * @property integer $parent
 * @property integer $created_at
 * @property integer $updated_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    private $_cats = [];
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at','parent', 'updated_at'], 'integer'],
            [['name', 'slug'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['slug'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ten Danh Muc',
            'slug' => 'Duong Dan Tinh',
            'status' => 'Trang thai',
            'parent' => 'Danh muc cha',
            'created_at' => 'Ngay tao',
            'updated_at' => 'Ngay cap nhat',
        ];
    }

    public function getParent($parent=0,$leval=''){
       $data = Category::find()->where(['parent'=>$parent])->all();
       $leval = '-- ';
       if($data) :
                foreach ($data as $item) : 
                    # code...
                    if($item->parent == 0){
                        $leval = '';
                    } 

                    $this->_cats[$item->id] = $leval.$item->name;
                    $this->getParent($item->id,$leval);
                endforeach;
        endif; 
        return $this->_cats;
    }



    public function getCategoryBy($parent=0){
       $data = Category::find()->asArray()->where('parent=:parent AND status = 1 ',['parent'=>$parent])->all();
      return $data;
}}