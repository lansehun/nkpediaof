<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * This is the model class for table "pedia_entry_basicinfo".
 */
namespace common\models;

/**
 * This is the ActiveQuery class for [[PediaEntryBasicinfo]].
 *
 * @see PediaEntryBasicinfo
 */
class PediaEntryBasicinfoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PediaEntryBasicinfo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PediaEntryBasicinfo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
