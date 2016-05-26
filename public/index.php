<?php

error_reporting(E_ALL);

define('APP_PATH', realpath('..'));

try {

    /**
     * Read the configuration
     */
    $config = include APP_PATH . "/app/config/config.php";

    /**
     * Read auto-loader
     */
    include APP_PATH . "/app/config/loader.php";

    /**
     * Read services
     */
    include APP_PATH . "/app/config/services.php";
     
     /*
      * Include Vendor
      */
    include $config->application->vendor."/autoload.php";

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);
    
    /*
     * Share Flash Variable
     */
    $application->getDI()->get('blade')->getEngine()->share('flash',$application->getDI()->get('flash'));
 

     /*
      * Use Facade
      */
    Facade::setFacadeApplication($application);
    

    echo $application->handle()->getContent();

} catch (\Exception $e) {
    echo $e->getMessage() . '<br>';
    echo '<pre>' . $e->getTraceAsString() . '</pre>';
}
