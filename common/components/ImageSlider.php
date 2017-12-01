<?php
namespace app\components;

use app\components\assets\ImageSilderAsset;
/**
* @author <akbar.joody@gmail.com>
*/
class ImageSlider extends \yii\base\Widget
{
    public $baseUrl;
    /**
	* @see show field Next and Perv
	* default show field
	*/
	public $nextPerv = true;

	/**
	*@see show field Indicators 
	* default show field
	*/
	public $indicators = true;

	/**
	*	@see array images
	*	xample ['src' => 'image.jpg',  'width' => '200px']
	*/
	public $images;

	public $width;

	public $height;
        
        public $classes;
	/**
	* Description : initialize method
	*/
	public function init()
	{
            ImageSilderAsset::register($this->getView());
	}

	/**
	* Description : custom code
	*/
	public function run()
	{
		return $this->render('imageslider', ['widget' => $this]);
	}
}