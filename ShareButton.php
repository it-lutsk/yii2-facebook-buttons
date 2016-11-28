<?php

namespace westside\facebook;

use Yii;
use yii\base\Widget;
use yii\helpers\HtmlPurifier;
use yii\helpers\StringHelper;

/**
 * Share button for Facebook
 */
class ShareButton extends Widget
{
    const SIZE_SMALL = 'small';
    const SIZE_LARGE = 'large';

    const LAYOUT_BUTTON = 'button';
    const LAYOUT_BOX_COUNT = 'box_count';
    const LAYOUT_BUTTON_COUNT = 'button_count';

    public $size = self::SIZE_LARGE;
    public $layout = self::LAYOUT_BUTTON_COUNT;
    public $mobileIframe = true;

    public $image = null;
    public $title = null;
    public $description = null;

    protected $url = null;
    protected $meta = [];
    protected $query = 'https://www.facebook.com/sharer/sharer?';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->url = Yii::$app->request->url;
        $this->query .= http_build_query([
            'u' => $this->url,
            'src' => 'sdkpreparse',
        ]);

        $this->meta = [
            'og:url'         => $this->url,
            'og:type'        => 'website',
            'og:title'       => StringHelper::truncate(HtmlPurifier::process($this->title), 255),
            'og:description' => StringHelper::truncate(HtmlPurifier::process($this->description), 255),
            'og:image'       => $this->image,
        ];
    }

    /**
     * @inheritdoc
     * @return string
     */
    public function run()
    {
        return $this->render('share-button', [
            'url'          => $this->url,
            'size'         => $this->size,
            'layout'       => $this->layout,
            'mobileIframe' => $this->mobileIframe,
            'meta'         => $this->meta,
        ]);
    }

}
