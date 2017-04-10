<?php

/**
 * This is the model class for table "sppb".
 *
 * The followings are the available columns in table 'sppb':
 * @property integer $id
 * @property string $kode_dept
 * @property string $permintaan_dept
 * @property string $gudang_tujuan
 * @property string $no_sppb
 * @property string $tlg_sppb
 * @property string $nm_barang
 * @property string $satuan
 * @property string $kd_barang
 * @property integer $qty_request
 * @property integer $qty_realisasi
 * @property string $keterangan
 */
class Sppb extends CActiveRecord
{
	public $firtsDate;
	public $lastDate;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sppb';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_dept,permintaan_dept, gudang_tujuan, no_sppb, tlg_sppb, nm_barang, satuan, kd_barang, qty_request, qty_realisasi', 'required'),
			array('qty_request, qty_realisasi', 'numerical', 'integerOnly'=>true),
			array('kode_dept, permintaan_dept, gudang_tujuan, no_sppb, nm_barang, satuan, kd_barang', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('date','firsDate','lastDate','safe'),
			array('keterangan','safe'),
			array('id, kode_dept, permintaan_dept, gudang_tujuan, no_sppb, tlg_sppb, nm_barang, satuan, kd_barang, qty_request, qty_realisasi, keterangan', 'safe', 'on'=>'search'),
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
			'barangs'=>array(
				self::BELONGS_TO,
				'Barang',
				'kd_barang'),
			'departemens'=>array(
				self::BELONGS_TO,
				'Departemen',
				'kode_dept'),
			'gudangs'=>array(
				self::BELONGS_TO,
				'Gudang',
				'gudang_tujuan')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kode_dept' => 'Kode Departemen',
			'permintaan_dept' => 'Permintaan Dept',
			'gudang_tujuan' => 'Gudang Tujuan',
			'no_sppb' => 'No Sppb',
			'tlg_sppb' => 'Tgl Sppb',
			'nm_barang' => 'Nama Barang',
			'satuan' => 'Satuan',
			'kd_barang' => 'Kode Barang',
			'qty_request' => 'Qty Request',
			'qty_realisasi' => 'Qty Realisasi',
			'keterangan' => 'Keterangan',
			'firsDate'=>'Tanggal Awal',
			'lastDate'=>'Tanggal Akhir',
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
		$criteria->compare('tlg_sppb',$this->tlg_sppb,true);
		$criteria->compare('nm_barang',$this->nm_barang,true);
		$criteria->compare('satuan',$this->satuan,true);
		$criteria->compare('kd_barang',$this->kd_barang,true);
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
	 * @return Sppb the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function generateCode(){
	       
	        $_a = date("ym");
	        $_d = "PRC/00";
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

	 public function GetSatuan(){
	 	return array(
	 		'DUS'=>'DUS',
	 		'RIM'=>'RIM',
	 		'PCS'=>'PCS');
	 }
}
