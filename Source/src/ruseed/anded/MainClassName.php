<?php

namespace ruseed\anded;

use ruseed\utils\PluginBaseChild;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class MainClassName extends PluginBaseChild implements Listener {
  const PLUGIN_REPOSITORIES = "PMMP_PluginBase";
  
  public function onEnable() {
    parent::onEnable();
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  
  public function onDisable() {
    parent::onDisable();
  }
}
