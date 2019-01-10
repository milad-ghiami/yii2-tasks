<?php

namespace wdmg\tasks\models;

use Yii;

/**
 * This is the model class for table "tasks_subunits".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $owner_id
 * @property string $users_id
 * @property string $created_at
 * @property string $updated_at
 * @property int $status
 */
class TasksSubunits extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tasks_subunits';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'users_id'], 'string'],
            [['owner_id'], 'required'],
            [['owner_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app/modules/tasks', 'ID'),
            'title' => Yii::t('app/modules/tasks', 'Title'),
            'description' => Yii::t('app/modules/tasks', 'Description'),
            'owner_id' => Yii::t('app/modules/tasks', 'Owner ID'),
            'users_id' => Yii::t('app/modules/tasks', 'Users ID'),
            'created_at' => Yii::t('app/modules/tasks', 'Created At'),
            'updated_at' => Yii::t('app/modules/tasks', 'Updated At'),
            'status' => Yii::t('app/modules/tasks', 'Status'),
        ];
    }
}