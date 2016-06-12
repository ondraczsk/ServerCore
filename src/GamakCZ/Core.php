<?php

/* <><><><><><><><><><><><><>
  - Core Created by GamakCZ
  - website: bit.do/gamcz
   <><><><><><><><><><><><><>
*/

namespace GamakCZ;

use pocketmine\plugin\PluginBase as P;
use pocketmine\event\Listener as L;

use pocketmine\utils\TextFormat as C;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Core extends P implements L {
  public $prefix = C::DARK_BLUE . "[" . C::YELLOW . "Server" . C::GOLD . "Core" . C::DARK_BLUE . "]";
  
  public function onEnable {
    $this->getServer->getPluginManager->registerEvents($this, $this);
    $this->getLogger->info->(" enabled");
  }
  
  public function onChat() {
    
  }
  public function onCommand() {
      
      
    }
  }
}
