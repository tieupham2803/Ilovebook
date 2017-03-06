<?php

namespace backend\models;

use Yii;

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
    public  $file;
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
            [['name', 'slug',  'page', 'publish_at', 'created_at', 'update_at'], 'required'],
            [['content'], 'string'],
            [['price', 'publish_at', 'created_at', 'update_at'], 'integer'],
            [['name', 'image', 'slug', 'desc', 'quantity', 'page', 'status'], 'string', 'max' => 255],
            [['cate', 'author'], 'string', 'max' => 100],
            [['slug'], 'unique'],
            [['filde'], 'file','extensions'=>'jpg,png,gif']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên Sách',
            'cate' => 'Danh mục',
            'image' => 'Hình ảnh',
            'slug' => 'Đường dẫn tĩnh',
            'desc' => 'Mô tả ngắn',
            'content' => 'Nội Dung',
            'price' => 'Giá',
            'quantity' => 'Số lượng',
            'page' => 'Số trang',
            'author' => 'Tác Giả',
            'status' => 'Trạng thái',
            'publish_at' => 'Ngày xuất bản',
            'created_at' => 'Ngày tạo',
            'update_at' => 'Ngày update',
        ];
    }
}
