<?php

/**
 * This is the model class for table "barang2".
 *
 * The followings are the available columns in table 'barang2':
 * @property integer $id
 * @property string $kd_brg
 * @property string $kode_brg
 * @property string $nm_barang
 * @property string $satuan
 * @property integer $qty_request
 * @property integer $qty_realisasi
 * @property string $keterangan
 */
class Barang2 extends CActiveRecord
{
	public $updateType;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barang2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kd_brg, nm_barang, qty_request, qty_realisasi, keterangan', 'required'),
			array('qty_request, qty_realisasi', 'numerical', 'integerOnly'=>true),
			array('kd_brg, kode_brg, nm_barang, satuan', 'length', 'max'=>30),
			array('keterangan','length','max'=>255),
			array('id, updateType', 'safe'),
			array('kode_brg','safe'),
			array('satuan','safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kd_brg, kode_brg, nm_barang, satuan, qty_request, qty_realisasi, keterangan', 'safe', 'on'=>'search'),
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
			'Sppbs2' => array(self::BELONGS_TO, 'Sppb2', 'kode_brg'),
			'Biring2'=>array(
				self::HAS_MANY,
				'Barang',
				'kode_barang')
		);

	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kd_brg' => 'Kd Brg',
			'kode_brg' => 'Kode Brg',
			'nm_barang' => 'Nm Barang',
			'satuan' => 'Satuan',
			'qty_request' => 'Qty Request',
			'qty_realisasi' => 'Qty Realisasi',
			'keterangan' => 'Keterangan',
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
		$criteria->compare('kd_brg',$this->kd_brg,true);
		$criteria->compare('kode_brg',$this->kode_brg);
		$criteria->compare('nm_barang',$this->nm_barang,true);
		$criteria->compare('satuan',$this->satuan,true);
		$criteria->compare('qty_request',$this->qty_request);
		$criteria->compare('qty_realisasi',$this->qty_realisasi);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Barang2 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	 public function GetSatuan(){
	 	return array(
	 		'DUS'=>'DUS',
	 		'RIM'=>'RIM',
	 		'PCS'=>'PCS');
	 }
}
