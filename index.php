<?php
/**
 * Orange Management
 *
 * PHP Version 7.2
 *
 * @package    OrangeManagement
 * @copyright  Dennis Eichhorn
 * @license    OMS License 1.0
 * @version    1.0.0
 * @link       http://website.orange-management.de
 */
ob_start();

//<editor-fold desc="Require/Include">
require_once __DIR__ . '/phpOMS/Autoloader.php';
//</editor-fold>

$App = new \src\WebApp();

ob_end_flush();
