<?php

namespace frontend\models;

use Yii;
use yii\data\Pagination;


/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property string $name
 * @property string $cate
 * @property string $image
 * @property string $slug
 * @property string $desc
 * @property string $content
 * @property integer $price
 * @property string $quantity
 * @property string $page
 * @property string $author
 * @property string $status
 * @property integer $publish_at
 * @property integer $created_at
 * @property integer $update_at
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $qtt;
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'content', 'page', 'publish_at', 'created_at', 'update_at'], 'required'],
            [['content'], 'string'],
            [['price', 'publish_at', 'created_at', 'update_at'], 'integer'],
            [['name', 'image', 'slug', 'desc', 'quantity', 'page', 'status'], 'string', 'max' => 255],
            [['cate', 'author'], 'string', 'max' => 100],
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
            'name' => 'Name',
            'cate' => 'Cate',
            'image' => 'Image',
            'slug' => 'Slug',
            'desc' => 'Desc',
            'content' => 'Content',
            'price' => 'Price',
            'quantity' => 'Quantity',
            'page' => 'Page',
            'author' => 'Author',
            'status' => 'Status',
            'publish_at' => 'Publish At',
            'created_at' => 'Created At',
            'update_at' => 'Update At',
        ];
    }


function getDataProduct($limit = 9){
    $data = Book::find()->asArray()->limit($limit)->orderBy('rand()')->all();
    return $data;

}
function getDataTabProduct($cate,$limit = 4 ){
    $data = Book::find()->asArray()->where('cate=:cate',['cate'=>$cate])->limit($limit)->orderBy('rand()')->all();
    return $data;

}
function getBookByCat($cate){
    $pages = $this->getPagerBook($cate);
    $data = Book::find()->asArray()->where('cate=:cate',['cate'=>$cate])->offset($pages->offset)->limit($pages->limit)->all();
    return $data;
}
public function getBookById($id){
    $data = Book::find()->asArray()->where('id=:id',['id'=>$id])->one();
     return $data;
}
public function getPagerBook($cate){
    $data = Book::find()->asArray()->where('cate=:cate',['cate'=>$cate])->all();
    $pages = new Pagination(['totalCount' => count($data),'pageSize' => '6']);
    return $pages;
}
}

