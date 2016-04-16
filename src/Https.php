<?php
/**
 * Author: Semen Dubina
 * Date: 19.01.16
 * Time: 15:24
 */

namespace sam002\https;

use yii\base\Component;
use yii\base\InvalidConfigException;

/**
 * Class Https
 *
 * Example application configuration:
 *
 * ~~~
 *  'components' => [
 *      'https' => [
 *          'class' => 'sam002\Https\Https',
 *     ]
 *     ...
 * ]
 * ~~~
 *
 * @author Semen Dubina <sam@sam002.net>
 * @package sam002\https
 */
class Https extends Component
{

    public function init()
    {
        parent::init();
    }
}