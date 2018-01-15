<?php
/**
 * Goodmotion plugin for Craft CMS 3.x
 *
 * super plugin
 *
 * @link      goodmotion.net
 * @copyright Copyright (c) 2018 patrick
 */

namespace goodmotiongoodmotion\goodmotion\controllers;

use goodmotiongoodmotion\goodmotion\Goodmotion;

use Craft;
use craft\web\Controller;

/**
 * @author    patrick
 * @package   Goodmotion
 * @since     1.0.0
 */
class GoodmotionController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the GoodmotionController actionIndex() method';

        return $result;
    }

    /**
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the GoodmotionController actionDoSomething() method';

        return $result;
    }
}
