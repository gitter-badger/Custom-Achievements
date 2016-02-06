<?php

namespace mcrafters;

use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as MT;
use pocketmine\event\TranslationContainer;
use pocketmine\plugin\Plugin;
use pocketmine\Server;
use pocketmine\event\Event;

class ca extends PluginBase implements Listener
{

public $cfg;

      public function onEnable()
    {
    	$cfg = $this->getConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info(MT::RED . "Custom" . MT::AQUA . "-" . MT::GOLD . "Achievements" . MT::GREEN . " is loaded");
        $this->saveResource("config.yml");
        $cfg = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        }
        
        public function onDisable()
{
$this->getLogger()->info(MT::RED . "Custom" . MT::AQUA . "-" . MT::GOLD . "Achievements" . MT::RED . " is Disabled");
   }
}		
