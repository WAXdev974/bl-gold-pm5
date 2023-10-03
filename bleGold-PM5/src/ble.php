<?php

declare(strict_types=1);

namespace wax_dev\bleGold_PM5;

use pocketmine\entity\effect\EffectInstance;
use pocketmine\entity\effect\VanillaEffects;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\ItemTypeIds;

class ble implements Listener{

    public function bleee(PlayerInteractEvent $blep){
        $player = $blep->getPlayer ();
        $item = $blep->getItem ();
        if($item->getTypeId () === ItemTypeIds::COMPASS){
            $player->setHealth (20);
            $player->getHungerManager ()->setFood (20);
            $player->getHungerManager ()->setSaturation (20);
            $player->getInventory ()->setItemInHand ($item->setCount ($item->getCount ()-1));
            if($player->getEffects ()->has (VanillaEffects::NIGHT_VISION ())){
                $ng = New EffectInstance(VanillaEffects::NIGHT_VISION (), 80*90, 8, false);
                $player->getEffects ()->add ($ng);
            }

            if($player->getEffects ()->has (VanillaEffects::STRENGTH ())){
                $frc = New EffectInstance(VanillaEffects::STRENGTH (), 80*90, 9, false);
                $player->getEffects ()->add ($frc);
            }
        }
    }
}