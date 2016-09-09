<?php

/**
 * This is the model class for table "boss_consumer".
 *
 * The followings are the available columns in table 'boss_consumer':
 * @property integer $consumer_id
 * @property string $consumer_bype
 * @property string $consumer_name
 * @property double $consumer_uintprice
 * @property integer $consumer_num
 * @property integer $consumer_totalprice
 * @property string $consumer_year
 * @property string $consumer_date
 * @property string $consumer_time
 * @property string $consumer_timestamp
 * @property integer $consumer_week
 * @property integer $consumer_mon
 * @property integer $consumer_quarter
 * @property string $consumer_datetime
 * @property integer $user_id
 * @property string $consumer_profile
 *
 * The followings are the available model relations:
 * @property BossUser $user
 */
class BossConsumer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return BossConsumer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'boss_consumer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('consumer_bype, consumer_name, consumer_uintprice, consumer_num, consumer_totalprice, consumer_year, consumer_date, consumer_time, consumer_week, consumer_mon, consumer_datetime, user_id', 'required'),
			array('consumer_num, consumer_totalprice, consumer_mon, consumer_quarter, user_id', 'numerical', 'integerOnly'=>false),
			array('consumer_uintprice', 'numerical'),
			array('consumer_bype, consumer_name', 'length', 'max'=>128),
			array('consumer_year', 'length', 'max'=>4),
			array('consumer_profile', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('consumer_id, consumer_bype, consumer_name, consumer_uintprice, consumer_num, consumer_totalprice, consumer_year, consumer_date, consumer_time, consumer_timestamp, consumer_week, consumer_mon, consumer_quarter, consumer_datetime, user_id, consumer_profile', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'user' => array(self::BELONGS_TO, 'BossUser', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */

	public function attributeLabels()
	{
		return array(
			'consumer_id' => '消费序号:',
			'consumer_bype' => '消费类型:',
			'consumer_name' => '消费名称:',
			'consumer_uintprice' => '商品单价:',
			'consumer_num' => '商品数量:',
			'consumer_totalprice' => '商品总价:',
			'consumer_year' => '消费年度:',
			'consumer_date' => '消费日期:',
			'consumer_time' => '消费时间:',
			'consumer_timestamp' => '消费时间戳:',
			'consumer_week' => '消费周数:',
			'consumer_mon' => '消费月度:',
			'consumer_quarter' => '消费季度:',
			'consumer_datetime' => '消费时间:',
			'user_id' => '用户账号:',
			'consumer_profile' => '消费备注:',
		);
	} 
	

	public function getTotals($time_key_arr,$time_value_arr)
	{
		//$ids = implode(",",$ids);
		$connection=Yii::app()->db;
		$command=$connection->createCommand("SELECT SUM(consumer_totalprice) FROM boss_consumer where $time_key_arr in ($time_value_arr)");
		$ret=$command->queryScalar();
		if($ret!=null)
		{		
			return $ret; 
		}else{
			return "0";	
		}
	}

	
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('consumer_id',$this->consumer_id);
		$criteria->compare('consumer_bype',$this->consumer_bype,true);
		$criteria->compare('consumer_name',$this->consumer_name,true);
		$criteria->compare('consumer_uintprice',$this->consumer_uintprice);
		$criteria->compare('consumer_num',$this->consumer_num);
		$criteria->compare('consumer_totalprice',$this->consumer_totalprice);
		$criteria->compare('consumer_year',$this->consumer_year,true);
		$criteria->compare('consumer_date',$this->consumer_date,true);
		$criteria->compare('consumer_time',$this->consumer_time,true);
		$criteria->compare('consumer_timestamp',$this->consumer_timestamp,true);
		$criteria->compare('consumer_week',$this->consumer_week);
		$criteria->compare('consumer_mon',$this->consumer_mon);
		$criteria->compare('consumer_quarter',$this->consumer_quarter);
		$criteria->compare('consumer_datetime',$this->consumer_datetime,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('consumer_profile',$this->consumer_profile,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}