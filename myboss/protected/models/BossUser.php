<?php

/**
 * This is the model class for table "boss_user".
 *
 * The followings are the available columns in table 'boss_user':
 * @property integer $user_id
 * @property string $user_type
 * @property string $user_name
 * @property string $user_password
 * @property string $user_createtime
 * @property string $user_email
 * @property string $user_telephone
 * @property string $user_profile
 *
 * The followings are the available model relations:
 * @property BossConsumer[] $bossConsumers
 */
class BossUser extends CActiveRecord
{
	public $yanzhen;
	/**
	 * Returns the static model of the specified AR class.
	 * @return BossUser the static model class
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
		return 'boss_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_type, user_name, user_password, user_createtime, user_email,', 'required'),
			array('user_type, user_name, user_password, user_email', 'length', 'max'=>128),
			array('user_email', 'email', 'message'=>'必须为电子邮箱'),
			array('user_telephone', 'length', 'max'=>11),
	
			array('user_profile', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, user_type, user_name, user_password, user_createtime, user_email, user_telephone, user_profile', 'safe', 'on'=>'search'),
			array('yanzhen','captcha','message'=>'验证码错误'),
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
			'bossConsumers' => array(self::HAS_MANY, 'BossConsumer', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_id' => '用户编号：',
			'user_type' => '用户类型：',
			'user_name' => '用户名称：',
			'user_password' => '用户密码：',
			'user_createtime' => '创建时间：',
			'user_email' => '电子邮箱：',
			'user_telephone' => '联系电话：',
			'user_profile' => '添加备注： ',
			'yanzhen'=>'&nbsp;&nbsp;验证码：&nbsp;&nbsp;&nbsp;',

		);
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_type',$this->user_type,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_createtime',$this->user_createtime,true);
		$criteria->compare('user_email',$this->user_email,true);
		$criteria->compare('user_telephone',$this->user_telephone,true);
		$criteria->compare('user_profile',$this->user_profile,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}