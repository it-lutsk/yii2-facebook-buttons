Facebook Social Buttons collection
==================================
Widgets for Facebok social buttons

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist westside/yii2-facebook-buttons "*"
```

or add

```
"westside/yii2-facebook-buttons": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \westside\facebook\ShareButton::widget([
    'title' => 'Some Title',
    'image' => 'file.url',
    'description' => 'Some Description',
    //'size' => self::SIZE_SMALL,
    //'layout' => selft::LAYOUT_BUTTON_COUNT,
    //'mobileIframe' => true,
]); ?>
```