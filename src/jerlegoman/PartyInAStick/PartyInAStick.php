<?php

namespace jerlegoman\PartyInAStick;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;


class PartyInAStick extends PluginBase implements Listenter{
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onDisable(){
        
    }
    
    public function onEquip(PlayerItemHeldEvent $e){
        /* IMPORTANT !!!!!!!!!!!!!!!!! VVVVVVVVVVVV */
        /* don't forget add use for Stick and Item, Level */
       if($e->getItem() instanceof Stick){
         $e->getLevel()->dropItem($e->getPlayer(), Item::get(264));
       }
    }
