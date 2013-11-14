<?php

/**
 * This is the model class for table "tb_posts".
 *
 * The followings are the available columns in table 'tb_posts':
 * @property integer $id
 * @property string $post_title
 * @property string $post_content
 * @property string $post_image
 * @property integer $author
 * @property string $post_date
 */
class Post extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tb_posts';
	}
	
	/*public function afterFind(){
		parent::afterFind();
		$this->post_title = str_replace(' ','-', $this->post_title);
	}*/

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(                      
			array('category_id,post_title, post_content, author, post_date', 'required'),
			
			array('post_image', 'file', 'types'=>'jpg, gif, png','allowEmpty'=>true),
			
			//array('author', 'numerical', 'integerOnly'=>true),
			array('post_title, post_image', 'length', 'max'=>500),
			
			//array('post_image','file','types'=>'jpg, png, gif', 'allowEmpty'=>TRUE,),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, post_title, post_content, post_image, author, post_date', 'safe', 'on'=>'search'),
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
			'category_id' =>'Category',
			'id' => 'ID',
			'post_title' => 'Post Title',
			'post_content' => 'Post Content',
			'post_image' => 'Post Image',
			'author' => 'Author',
			'post_date' => 'Post Date',
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
		$criteria->compare('post_title',$this->post_title,true);
		$criteria->compare('post_content',$this->post_content,true);
		$criteria->compare('post_image',$this->post_image,true);
		$criteria->compare('author',$this->author);
		$criteria->compare('post_date',$this->post_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
