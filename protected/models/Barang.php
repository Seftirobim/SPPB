<?php

/**
 * This is the model class for table "barang".
 *
 * The followings are the available columns in table 'barang':
 * @property integer $id
 * @property string $kode_barang
 * @property string $nama_barang
 */
class Barang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	

	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_barang, nama_barang,satuan', 'required'),
			array('kode_barang,nama_barang','unique'),
			array('kode_barang', 'length', 'max'=>8),
			array('nama_barang', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kode_barang,nama_barang,satuan', 'safe', 'on'=>'search'),
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
			'Barangs2'=>array(
				self::BELONGS_TO,
				'Barang2',
				'kode_barang'),
			'Sppbs' => array(self::BELONGS_TO, 'Sppb2', 'kode_brg')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'kode_barang' => 'Kode Barang',
			'nama_barang' => 'Nama Barang',
			'satuan'=>'satuan',
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
		$criteria->compare('kode_barang',$this->kode_barang,true);
		$criteria->compare('nama_barang',$this->nama_barang,true);
		$criteria->compare('satuan',$this->satuan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function generateCode()
	{
        $_i = "";
        $_left = $_i;
        $_first = "0001";
        $_len = strlen($_left);
        $no = $_left . $_first; 
       
        $kode = $this->find( 
                array(
                    "select"=>"kode_barang",
                    "condition" => "left(kode_barang, " . $_len . ") = :_left",
                    "params" => array(":_left" => $_left),
                    "order" => "kode_barang DESC"
                ));
       
        if($kode != null){
            $_no = substr($kode->kode_barang, $_len);
            $_no++;
            $_no = substr("0000", strlen($_no)) . $_no;
            $no = $_left . $_no;
        }
       
        return $no;
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Barang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
