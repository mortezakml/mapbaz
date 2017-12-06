<?php
namespace common\components;

use Yii;
use yii\base\Component;
/**
 * Description of Utility
 *
 * @author user
 */
class Utility extends Component{
   
    public function getPathUserLogo()
    {
        return Yii::getAlias('@webroot').'/userlogo';
    }


    public function getImageUrl($image_name) {
        $web_url = Yii::getAlias('@web').'/uploads/';
        $file_path = Yii::getAlias('@webroot').'/uploads/';
        $image_name = empty($image_name) ? 'default_post.jpg':$image_name;
        if(file_exists($file_path.$image_name))
        {
            return $web_url.$image_name;
        }
        return  Yii::getAlias('@web').'/uploads/'.$image_name;
    }
    
    public function readAdsImage($image)
    {
        $path = Yii::getAlias('@backend').'/web/uploads/'.$image;
        if(file_exists($path))
        {
            return readfile($path);
           
        }
    }
    
    public function getLogoUrl($logo) {
        $web_url = Yii::getAlias('@web').'/telegramlogo';
        $file_path = Yii::getAlias('@webroot').'/telegramlogo';
        $image_name = empty($logo) ? 'default.png':$logo;
        if(file_exists($file_path.'/'.$image_name))
        {
            return $web_url.'/'.$image_name;
        }
    }

    public function convertDate($array){
		$time = $array['time'];
		if($array['to'] == 'persian')
		{
			 date_default_timezone_set("Asia/tehran");
		        $weekdays = array("شنبه" , "یکشنبه" , "دوشنبه" , "سه شنبه" , "چهارشنبه" , "پنج شنبه" , "جمعه");
		        $months = array("فروردین" , "اردیبهست" , "خرداد" , "تیر" , "مرداد" , "شهریور" ,
		            "مهر" , "آبان" , "آذر" , "دی" , "بهمن" , "اسفند" );
		        $dayNumber = date("d" , $time);
		        $monthNumber = date("m" , $time);
		        $year = date("Y",$time);
		        $weekDayNumber = date("w" , $time);
		        $hour = date("G" , $time);
		        $minute = date("i" , $time);
		        $second = date("s" , $time);
		        switch ($monthNumber)
		        {
		            case 1:
		                ($dayNumber < 20) ? ($monthNumber=10) : ($monthNumber = 11);
		                ($dayNumber < 20) ? ($dayNumber+=10) : ($dayNumber -= 19);
		                break;
		            case 2:
		                ($dayNumber < 19) ? ($monthNumber =11) : ($monthNumber =12);
		                ($dayNumber < 19) ? ($dayNumber += 12) : ($dayNumber -= 18);
		                break;
		            case 3:
		                ($dayNumber < 21) ? ($monthNumber = 12) : ($monthNumber = 1);
		                ($dayNumber < 21) ? ($dayNumber += 10) : ($dayNumber -= 20);
		                break;
		            case 4:
		                ($dayNumber < 21) ? ($monthNumber = 1) : ($monthNumber = 2);
		                ($dayNumber < 21) ? ($dayNumber += 11) : ($dayNumber -= 20);
		                break;
		            case 5:
		            case 6:
		                ($dayNumber < 22) ? ($monthNumber -= 3) : ($monthNumber -= 2);
		                ($dayNumber < 22) ? ($dayNumber += 10) : ($dayNumber -= 21);
		                break;
		            case 7:
		            case 8:
		            case 9:
		                ($dayNumber < 23) ? ($monthNumber -= 3) : ($monthNumber -= 2);
		                ($dayNumber < 23) ? ($dayNumber += 9) : ($dayNumber -= 22);
		                break;
		            case 10:
		                ($dayNumber < 23) ? ($monthNumber = 7) : ($monthNumber = 8);
		                ($dayNumber < 23) ? ($dayNumber += 8) : ($dayNumber -= 22);
		                break;
		            case 11:
		            case 12:
		                ($dayNumber < 22) ? ($monthNumber -= 3) : ($monthNumber -= 2);
		                ($dayNumber < 22) ? ($dayNumber += 9) : ($dayNumber -= 21);
		                break;
		        }
		        $newDate['day'] = $dayNumber;
		        $newDate['month_num'] = $monthNumber;
		        $newDate['month_name'] = $months[$monthNumber - 1];
		        if(($monthNumber < 3) or (($monthNumber == 3) and ($dayNumber < 21)))
		            $newDate['year'] = $year - 621;
		        else
		            $newDate['year'] = $year - 621;
		        if($weekDayNumber == 6)
		            $newDate['weekday_num'] = 0;
		        else
		            $newDate['weekday_num'] = $weekDayNumber + 1;
		        $newDate['weekday_name'] = $weekdays[$newDate['weekday_num']];
		        $newDate['hour'] = $hour;
		        $newDate['minute'] = $minute;
		        $newDate['second'] = $second;
		        return $newDate;
		}
	}
    public function showMenu() {
        
        ?>
        <ul class="sidebar-menu">
            <li class="header">منوی اصلی</li>
            <li class="treeview">
                <a href="<?= yii\helpers\Url::to(['/dashboard']); ?>">
                <i class="fa fa-dashboard"></i> <span>داشبورد</span>
              </a>
            </li>
            <li class="treeview">
                <a href="<?= yii\helpers\Url::to(['/admin/user']); ?>">
                <i class="fa fa-user"></i> <span>کاربران</span>
              </a>
            </li>
            <li class="treeview">
                <a href="<?= yii\helpers\Url::to(['/ads/ads/index']); ?>">
                <i class="fa fa-user"></i> <span>تبلیغ ها</span>
              </a>
            </li>
            <li class="treeview">
                <a href="<?= yii\helpers\Url::to(['/ads/my-ads/index']); ?>">
                <i class="fa fa-dashboard"></i> <span>تبلیغ های من</span>
              </a>
            </li>
             <li class="treeview">
                <a href="<?= yii\helpers\Url::to(['/ads/category/index']); ?>">
                <i class="fa fa-dashboard"></i> <span>دسته بندی</span>
              </a>
            </li>          
            <li class="treeview">
                <a href="<?= yii\helpers\Url::to(['/ads/plan/index']); ?>">
                <i class="fa fa-dashboard"></i> <span>پلان ها</span>
              </a>
            </li> 
            <li class="treeview">
                <a href="<?= yii\helpers\Url::to(['/account/user/logout']); ?>">
                <i class="fa fa-sign-out"></i> <span>خروج</span>
              </a>
            </li>
        </ul>
        <?php   
    }
    
    /**
     * 
     * @param type $array
     */ 
    public function callbackPjax($array = []) 
    {
        $callback = $array['callback'];
        $data = json_encode($array['data']);
        return "<script>".$callback."(".$data.")</script>";
    }
    
    
    public function getImageDirectoryUser($image_name) {
        $userid = Yii::$app->user->id;
        $web_url = Yii::getAlias('@web').'/uploads/'.$userid;
        $file_path = Yii::getAlias('@webroot').'/uploads/'.$userid;
        $image_name = empty($image_name) ? 'default_post.jpg':$image_name;
        if(file_exists($file_path.$image_name))
        {
            return $web_url.$image_name;
        }
        return  Yii::getAlias('@web').'/themes/adminlte/main/image/'.$image_name;
    }
}
