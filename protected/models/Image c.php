<?php

/**
 * This is the model class for table "tb_images".
 *
 * The followings are the available columns in table 'tb_images':
 * @property integer $id
 * @property string $image_content
 * @property string $image_description
 * @property integer $gallery_id
 * @property integer $post_id
 */
class Image extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_images';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('image_content, image_description, gallery_id', 'required'),
			
			array('image_content', 'file', 'types'=>'jpg, gif, png'),
			
			array('gallery_id, post_id', 'numerical', 'integerOnly'=>true),
			array('image_content', 'length', 'max'=>500),
			array('image_description', 'length', 'max'=>5000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, image_content, image_description, gallery_id, post_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'image_content' => 'Image Content',
			'image_description' => 'Image Description',
			'gallery_id' => 'Gallery',
			'post_id' => 'Post',
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
		$criteria->compare('image_content',$this->image_content,true);
		$criteria->compare('image_description',$this->image_description,true);
		$criteria->compare('gallery_id',$this->gallery_id);
		$criteria->compare('post_id',$this->post_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Image the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
