<?php
namespace common\modules\account\models;

use Yii;
/**
 * Description of SendMessage
 *
 * @author asus
 */
class SendMessageForm extends \yii\base\Model{
    
    /**
     * کپشن برای ارسال به تلگرام
     * @var string
     */
    public $caption;
    
    /**
     *نوع ارسال پیام
     * @var integer
     */
    public $type;
    
    /**
     *
     * @var \yii\web\UploadedFile
     */
    public $file;
    
    /**
     *
     * @var integer
     */
    public $chat_id;


    public $typeItems = [
        '1' => 'متن',
        '2' => 'عکس',
        '3' => 'فیلم',
        '4'=>'ٌصدا'
    ];


    public function rules() {
        return [
            [['type'], 'required'],
            [['caption'], 'string', 'max' => 100]
        ];
    }
    
    public function send() {
        if($this->validate())
        {
            if ($this->type==1){
                Yii::$app->telegram->sendMessage([
                    'chat_id' => $this->chat_id,
                    'text' => $this->caption,
                ]);
            }
            elseif ($this->type==2) {
                $this->file->saveAs('uploads/'.$this->file->getBaseName());
                Yii::$app->telegram->sendPhoto([
                    'photo' =>Yii::getAlias('@webroot').'/uploads/'.$this->file->getBaseName(),
                    'caption' => $this->caption,
                    'chat_id' => $this->chat_id,
                ]);
            }
            elseif ($this->type==3) {
                $this->file->saveAs('uploads/'.$this->file->getBaseName().'.'.$this->file->getExtension());
                Yii::$app->telegram->sendVideo([
                    'video' =>Yii::getAlias('@webroot').'/uploads/'.$this->file->getBaseName(),
                    'caption' => $this->caption,
                    'chat_id' => $this->chat_id,
                ]);
            }
            elseif ($this->type==4) {
                $this->file->saveAs('uploads/'.$this->file->getBaseName().'.'.$this->file->getExtension());
                $res = Yii::$app->telegram->sendAudio([
                    'audio' =>Yii::getAlias('@webroot').'/uploads/'.$this->file->getBaseName(),
                    'caption' => $this->caption,
                    'chat_id' => $this->chat_id,
                ]);
                var_dump($res);
            }
        }
    }
}
