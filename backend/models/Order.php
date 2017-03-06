<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property integer $customer_id
 * @property integer $amount
 * @property string $shipping_method
 * @property string $payment_method
 * @property integer $status
 * @property string $order_note
 * @property integer $created_at
 * @property integer $updated_at
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_id', 'amount', 'status', 'created_at', 'updated_at'], 'integer'],
            [['order_note'], 'string'],
            [['created_at', 'updated_at'], 'required'],
            [['shipping_method', 'payment_method'], 'string', 'max' => 225],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'amount' => 'Amount',
            'shipping_method' => 'Shipping Method',
            'payment_method' => 'Payment Method',
            'status' => 'Status',
            'order_note' => 'Order Note',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
