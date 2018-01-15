<?php
/**
 * Goodmotion plugin for Craft CMS 3.x
 *
 * super plugin
 *
 * @link      goodmotion.net
 * @copyright Copyright (c) 2018 patrick
 */

namespace goodmotiongoodmotion\goodmotion\assetbundles\goodmotioncpsection;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    patrick
 * @package   Goodmotion
 * @since     1.0.0
 */
class GoodmotionCPSectionAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@goodmotiongoodmotion/goodmotion/assetbundles/goodmotioncpsection/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/Goodmotion.js',
        ];

        $this->css = [
            'css/Goodmotion.css',
        ];

        parent::init();
    }
}
