<?php

/**
 * This is the model class for table "departemen".
 *
 * The followings are the available columns in table 'departemen':
 * @property integer $id
 * @property string $kode_dept
 * @property string $nama_dept
 */
class Departemen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'departemen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_dept, nama_dept', 'required'),
			array('kode_dept', 'length', 'max'=>30),
			array('nama_dept', 'length', 'max'=>50),
			array('kode_dept,nama_dept','unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kode_dept, nama_dept', 'safe', 'on'=>'search'),
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
			'Sppbs'=>array(
				self::HAS_MANY,
				'Sppb',
				'kode_dept'),
			'Sppbs2'=>array(
				self::HAS_MANY,
				'Sppb2',
				'kode_dept'),
			'perm' => array(self::HAS_ONE, 'Permintaan', 'id'),
	
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kode_dept' => 'Kode Dept',
			'nama_dept' => 'Nama Dept',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('kode_dept',$this->kode_dept,true);
		$criteria->compare('nama_dept',$this->nama_dept,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Departemen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
