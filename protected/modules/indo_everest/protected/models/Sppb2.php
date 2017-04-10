<?php

/**
 * This is the model class for table "sppb2".
 *
 * The followings are the available columns in table 'sppb2':
 * @property integer $id
 * @property string $kode_dept
 * @property string $permintaan_dept
 * @property string $gudang_tujuan
 * @property string $no_sppb
 * @property string $tgl_sppb
 */
class Sppb2 extends CActiveRecord
{
	public $firstDate;
	public $lastDate;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sppb2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_dept, permintaan_dept, gudang_tujuan, no_sppb, tgl_sppb', 'required'),
			array('kode_dept, permintaan_dept, gudang_tujuan, no_sppb', 'length', 'max'=>30),
			array('year','safe'),
			array('date, firstDate, lastDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kode_dept,year, permintaan_dept, gudang_tujuan, no_sppb, tgl_sppb', 'safe', 'on'=>'search'),
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
			'departemens'=>array(
				self::BELONGS_TO,
				'Departemen',
				'kode_dept'),
			'gudangs'=>array(
				self::BELONGS_TO,
				'Gudang',
				'gudang_tujuan'),
			'barangs' => array(self::HAS_MANY, 'Barang2', 'kode_brg')
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
			'permintaan_dept' => 'Permintaan Dept',
			'gudang_tujuan' => 'Gudang Tujuan',
			'no_sppb' => 'No Sppb',
			'tgl_sppb' => 'Tgl Sppb',
			'year'=>'Tahun',
			'firstDate'=> 'Tangga Awal',
			'lastDate'=> 'Tanggal Akhir',
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
		$criteria->compare('permintaan_dept',$this->permintaan_dept,true);
		$criteria->compare('gudang_tujuan',$this->gudang_tujuan,true);
		$criteria->compare('no_sppb',$this->no_sppb,true);
		$criteria->compare('tgl_sppb',$this->tgl_sppb,true);
		$criteria->compare('year',$this->year);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sppb2 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function generateCode(){
	       
	        $_a = date("ym");
	        $_d = CHtml::encode(Yii::app()->user->name)."/00";
	        $_i = "SPBB".$_a."/";
	        $_left = $_i . $_d;
	        $_first = "1";
	        $_len = strlen($_left);
	        $no = $_left .$_first; 
	       
	        $kode = $this->find( 
	                array(
	                    "select"=>"no_sppb",
	                    "condition" => "left(no_sppb, " . $_len . ") = :_left",
	                    "params" => array(":_left" => $_left),
	                    "order" => "no_sppb DESC"
	                ));
	       
	        if($kode != null){
	            $no = $this->no_sppb;	
	            $_no = substr($kode->no_sppb, $_len);
	            $_no++;
	            $_no = substr("2", strlen($_no)) . $_no;

	            $no = $_left . $_no;
	            }
	             return $no;
	            }

	            public function getYear(){
	            	$tahun = date('Y');
	            	return $tahun;
	            }

}
