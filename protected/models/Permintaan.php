<?php

/**
 * This is the model class for table "permintaan".
 *
 * The followings are the available columns in table 'permintaan':
 * @property integer $id
 * @property string $nama_dept
 * @property string $tgl
 * @property string $message
 */
class Permintaan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'permintaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	// public function valid($status,$id){
	// 	$model = Permintaan::model()->findBypk($id);
	// 	if($this->$status == 'Belum dibuat'){
	// 		$this->addError('status','Harus ada Konfirmasi Dahulu');
	// 	}
	// 	return false;
	// }

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_dept, tgl, message, no_per', 'required'),
			array('status','safe'),
			array('lama_waktu','safe'),
			array('nama_dept', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id,lama_waktu,no_per,status,nama_dept, tgl, message', 'safe', 'on'=>'search'),
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
			'dep' => array(self::BELONGS_TO, 'Departemen', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_dept' => 'Departemen Peminta',
			'tgl' => 'Tanggal Dan Waktu Permintaan',
			'message' => 'Pesan',
			'status'=>'status',
			'no_per'=>'Nomor Permintaan',
			'lama_waktu'=>'Lama Waktu Penyampaian',
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
		$criteria->compare('nama_dept',$this->nama_dept,true);
		$criteria->compare('tgl',$this->tgl,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('status',$this->message,true);
		$criteria->compare('no_per',$this->message,true);
		$criteria->compare('lama_waktu',$this->message,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Permintaan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getTanggal(){
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date("Y-m-d h:i:a");
		return $tanggal;
	}

	public function generateCode()
	{
        $_i = "P";
        $_left = $_i;
        $_first = "001";
        $_len = strlen($_left);
        $no = $_left . $_first; 
       
        $kode = $this->find( 
                array(
                    "select"=>"no_per",
                    "condition" => "left(no_per, " . $_len . ") = :_left",
                    "params" => array(":_left" => $_left),
                    "order" => "no_per DESC"
                ));
       
        if($kode != null){
            $_no = substr($kode->no_per, $_len);
            $_no++;
            $_no = substr("000", strlen($_no)) . $_no;
            $no = $_left . $_no;
        }
       
        return $no;
    }

    public function getStatus(){
    	return array(
    	'Belum Dikonfirmasi'=>'Belum Dikonfirmasi',
    	'sudah dibuat'=>'Sudah Dibuat',
    	'Barang Kosong'=>'Barang Kosong',
    		);
    }
}
