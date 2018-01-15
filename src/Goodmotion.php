<?php
/**
 * Goodmotion plugin for Craft CMS 3.x
 *
 * super plugin
 *
 * @link      goodmotion.net
 * @copyright Copyright (c) 2018 patrick
 */

namespace goodmotiongoodmotion\goodmotion;

use goodmotiongoodmotion\goodmotion\services\Goodmotion as GoodmotionService;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\UrlManager;
use craft\events\RegisterUrlRulesEvent;

use yii\base\Event;

/**
 * Class Goodmotion
 *
 * @author    patrick
 * @package   Goodmotion
 * @since     1.0.0
 *
 * @property  GoodmotionService $goodmotion
 */
class Goodmotion extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Goodmotion
     */
    public static $plugin;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            UrlManager::class,
            UrlManager::EVENT_REGISTER_SITE_URL_RULES,
            function (RegisterUrlRulesEvent $event) {
                $event->rules['siteActionTrigger1'] = 'goodmotion/goodmotion';
            }
        );

        Event::on(
            UrlManager::class,
            UrlManager::EVENT_REGISTER_CP_URL_RULES,
            function (RegisterUrlRulesEvent $event) {
                $event->rules['cpActionTrigger1'] = 'goodmotion/goodmotion/do-something';
            }
        );

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'goodmotion',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
