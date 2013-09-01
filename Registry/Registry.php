<?php

/*
 * @author: Carolina Bessega
 * Registry Class
 */

class Registry {

    /**
     * Array of objects
     */
    private $objects;

    /**
     * Array of settings
     */
    private $settings;

    public function __construct() {
        
    }

    /*
     * Create a new object and store it in the registry
     * @param String $object the object file prefix
     * @param String $key pair for the object
     * @return void
     */

    public function createAndStoreObject($object, $key) {
        require_once( $object . '.class.php');
        $this->objects[$key] = new $object($this);
    }

    /**
     * Store Settings
     * @param String $setting the setting data
     * @param String $key the key pair for the setting array
     * @return void
     */
    public function storeSettings($setting, $key) {
        $this->settings[$key] = $setting;
    }
    
    /**
     * Get a setting from the registries store
     * @param String $key the settings array key
     * @return String the setting data
     */
    public function getSetting( $key ){
        return $this->settings[ $key ];
    }
    
    /**
     * Get a object from the registries store
     * @param String $key the objects array key
     * @return object
     */
    public function getObject( $key ){
        return $this->objects[ $key ];
    }
    

}
?>

