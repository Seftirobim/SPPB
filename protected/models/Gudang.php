<?php

/**
 * This is the model class for table "gudang".
 *
 * The followings are the available columns in table 'gudang':
 * @property integer $id
 * @property string $kode_gudang
 * @property string $nama_gudang
 */
class Gudang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gudang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_gudang, nama_gudang', 'required'),
			array('kode_gudang', 'length', 'max'=>30),
			array('nama_gudang', 'length', 'max'=>50),
			array('kode_gudang,nama_gudang','unique'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kode_gudang','match','pattern'=>'[^GD]','message'=>'Kode Harus Mengandung GD'),
			array('id, kode_gudang, nama_gudang', 'safe', 'on'=>'search'),
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
				'kode_gudang'),
			'Sppbs2'=>array(
				self::HAS_MANY,
				'Sppb2',
				'kode_gudang')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kode_gudang' => 'Kode Gudang',
			'nama_gudang' => 'Nama Gudang',
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
		$criteria->compare('kode_gudang',$this->kode_gudang,true);
		$criteria->compare('nama_gudang',$this->nama_gudang,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function generateCode(){
	        $_d = ".B.000";
	        $_i = "GD";
	        $_left = $_i . $_d;
	        $_first = "1";
	        $_len = strlen($_left);
	        $no = $_left . $_first; 
	       
	        $kode = $this->find( 
	                array(
	                    "select"=>"kode_gudang",
	                    "condition" => "left(kode_gudang, " . $_len . ") = :_left",
	                    "params" => array(":_left" => $_left),
	                    "order" => "kode_gudang DESC"
	                ));
	       
	        if($kode != null){
	            $no = $this->kode_gudang;	
	            $_no = substr($kode->kode_gudang, $_len);
	            $_no++;
	            $_no = substr("2", strlen($_no)) . $_no;

	            $no = $_left . $_no;
	            }
	             return $no;
	            }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gudang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
