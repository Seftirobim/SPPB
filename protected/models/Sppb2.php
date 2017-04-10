<?php

/**
 * This is the model class for table "sppb2".
 *
 * The followings are the available columns in table 'sppb2':
 * @property integer $id
 * @property string $kode_dept
 * @property string $permintaan_dept
 * @property string $kode_gudang
 * @property string $no_sppb
 * @property string $tgl_sppb
 */
class Sppb2 extends CActiveRecord
{
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
			array('kode_dept, permintaan_dept, kode_gudang, tgl_sppb,year', 'required'),
			array('no_sppb','unique'),
			array('kode_dept, permintaan_dept, kode_gudang, no_sppb', 'length', 'max'=>30),
			array('year','safe'),
			array('no_sppb','safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, kode_dept,year, permintaan_dept, kode_gudang, no_sppb, tgl_sppb', 'safe', 'on'=>'search'),
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
				'kode_gudang'),
			'barangs' => array(self::HAS_MANY, 'Barang2', 'id2')
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
			'kode_gudang' => 'Gudang Tujuan',
			'no_sppb' => 'No Sppb',
			'tgl_sppb' => 'Tgl Sppb',
			'year'=>'Tahun Dan Bulan',
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
		$criteria->compare('kode_gudang',$this->kode_gudang,true);
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

	public function generateCode()
	{
        $_i = "SPPB".date('ym')."/";
        $_left = $_i;
        $_first = "001";
        $_len = strlen($_left);
        $no = $_left . $_first; 
       
        $kode = $this->find( 
                array(
                    "select"=>"no_sppb",
                    "condition" => "left(no_sppb, " . $_len . ") = :_left",
                    "params" => array(":_left" => $_left),
                    "order" => "no_sppb DESC"
                ));
       
        if($kode != null){
            $_no = substr($kode->no_sppb, $_len);
            $_no++;
            $_no = substr("000", strlen($_no)) . $_no;
            $no = $_left . $_no;
        }
       
        return $no;
    }		
	            
	public function getYear(){
		$tahun = date('y-m');
	    return $tahun;
	    
	}

	protected function beforeSave() {

        if ($this->isNewRecord) {
            $this->no_sppb = $this->generateCode(); 
            // any code that you want to
        } else {
            // any code that you want to
            parent::beforeSave();
        }
        return true;
    }

	
	/*
	protected function beforeValidate(){
		parent::beforeValidate();

		if($this->isNewRecord)
		{
			$criteria = new CDbCriteria;
			$criteria->select = 'no_sppb';
			$criteria->limit=1;
			$criteria->order='no_sppb DESC';
			$last = $this->find($criteria);

			if($last){
				$newID = (int)substr($last->no_sppb,6)+1;
				$newID ='sabit-'.$newID;
			}
			else{
				$newID = 'sabit-1';
			}
			$this->no_sppb = $newID;
		}
		return true;
		//return $newID;
	}
	*/

	public function getTanggal(){
		$tanggal = date('Y-m-d');
		return $tanggal;
	}

    


	
}
