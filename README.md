# yii2-https


[![Latest Version](https://img.shields.io/github/tag/sam002/yii2-https.svg?style=flat-square&label=releas)](https://github.com/sam002/yii2-https/tags)
[![Software License](https://img.shields.io/badge/license-LGPL3-brightgreen.svg?style=flat-square)](LICENSE.md)

YII2 extension for applications work on HTTPS protocol (certificate management, control  a external content and links)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require sam002/yii2-https:~0.1
```
or add

```json
"sam002/yii2-https" : "~0.1"
```

to the require section of your application's `composer.json` file.


Usage
-----

After extension is installed you need to setup auth client collection application component:

**Configure**

```php
<?php
use sam002\https\Https;

...

'components' => [
    'https' => [
        ...
    ],
...
]
```



Further Information
-------------------
- [Let's Encrypt PHP client](https://github.com/letsencrypt/letsencrypt/wiki/Links#php)
- [SSL Labs API's](https://www.ssllabs.com/projects/ssllabs-apis/index.html)
- [https](https://en.wikipedia.org/wiki/HTTPS)


Credits
-------

- [sam002](https://github.com/sam002)
- [All Contributors](../../contributors)


License
-------

The LGPLv3 License. Please see [License File](LICENSE.md) for more information.

