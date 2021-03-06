<?php

namespace backend\modules\ads\models;

use Yii;
use common\modules\account\models\User;

/**
 * This is the model class for table "ads".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $url
 * @property string $image
 * @property string $star
 * @property string $rate
 * @property integer $status
 * @property string $tags
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user_id
 * @property integer $type_id
 *
 * @property User $user
 * @property AdsPlan[] $adsPlans
 */
class Ads extends \yii\db\ActiveRecord
{
    public $file;
    
    private $_category;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'url', 'type', 'user_id'], 'required'],
            [['description'], 'string'],
            [['status', 'user_id'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['image', 'tags'], 'string', 'max' => 100],
            [['star'], 'string', 'max' => 5],
            [['rate'], 'string', 'max' => 20],
            [['created_at', 'updated_at'], 'string', 'max' => 30],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            ['category', 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'شناسه',
            'title' => 'عنوان',
            'description' => 'توضیح',
            'url' => 'آدرس وب سایت و یا کانال تلگرامی',
            'image' => 'عکس',
            'star' => 'ستاره',
            'rate' => 'رتبه',
            'status' => 'وضعیت',
            'tags' => 'تگ ها',
            'created_at' => 'زمان ایجاد',
            'updated_at' => 'زمان ویرایش',
            'user_id' => 'شناسه کاربر',
            'category' => 'دسته بندی'
        ];
    }
    
    /**
     * @inheritdoc
     * @return AdsaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdsQuery(get_called_class());
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsPlans()
    {
        return $this->hasMany(AdsPlan::className(), ['ads_id' => 'id']);
    }
    
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsCategories()
    {
        return $this->hasMany(AdsCategory::className(), ['ads_id' => 'id']);
    }
    
    
    public function getInout()
    {
        return $this->hasOne(Inout::className(), ['ads_id' => 'id']);
    }
    
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }
    
    public function saveAds()
    {
        $this->file = \yii\web\UploadedFile::getInstance($this, "file");
        if($this->file instanceof \yii\web\UploadedFile)
        {
            $this->image = $this->file->getBaseName().'.'.$this->file->getExtension();
            
            @$this->file->saveAs('uploads/'.$this->file->getBaseName().'.'.$this->file->getExtension());
        }
        
        $urlValidator = new \yii\validators\UrlValidator();
        if($urlValidator->validate($this->url))
        {
            $this->type_id = Type::findByName('وب سایت')->id;
        }
        else
        {
           $this->type_id = Type::findByName('تلگرام')->id;
           $res = strpos($this->url, '@');
           if($res === false)
           {
               $this->addError("url", "َشناسه باید معتبر باشد");
               return false;
           }
        }
        return $this->save();
    }
    
    
    public function addCategory()
    {
        if(is_array($this->_category))
        {
            $this->refresh();
            $transaction = Yii::$app->db->beginTransaction();
            foreach ($this->_category as $key => $cat) {
                $exists = AdsCategory::find()->where(['category_id' => $cat, 'ads_id' => $this->id])->exists();
                if(!$exists)
                {
                    $adscategoryModel = new AdsCategory();
                    $adscategoryModel->category_id = $cat;
                    $adscategoryModel->ads_id = $this->id;
                    if(!$adscategoryModel->save())
                    {
                        $transaction->rollBack();
                        return false;
                    }
                }
            }
            
            $adsCategoryArray = AdsCategory::find()->where(['ads_id' => $this->id])->asArray()->all(); 
            for($i = 0; $i<count($adsCategoryArray); $i++)
            {
                if(!in_array($adsCategoryArray[$i]['category_id'], $this->_category))
                {   
                    $cid = $adsCategoryArray[$i]['category_id'];
                    AdsCategory::deleteAll("ads_id=$this->id and category_id=$cid");
                }
            }
            
                    
                    
            $transaction->commit();
            return true;
        }
        else{
            AdsCategory::deleteAll("ads_id =$this->id");
        }
    }
    
    public function getCategory()
    {
        if(!Yii::$app->request->post())
        {
            $categoryModel =  null;
            $adsCategoryArray = AdsCategory::find()->where(['ads_id' => $this->id])->asArray()->all();
            $categoryModel = \yii\helpers\ArrayHelper::map($adsCategoryArray, 'category_id', 'category_id');
            return $categoryModel;
        }
        return $this->_category;
    }
    
    
    public function setCategory($val)
    {
        $this->_category = $val;
    }
}
