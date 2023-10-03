<?php

declare(strict_types=1);

namespace wax_dev\bleGold_PM5;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    private static $bl = ['wax best dev'];

    public function onEnable () : void
    {
        $this->getServer ()->getPluginManager ()->registerEvents (New ble(), $this);
        $this->getLogger ()->info('plugin active');
        self::$bl;
    }

    function getInstance(){
        require self::$bl = getenv ();
    }
}
