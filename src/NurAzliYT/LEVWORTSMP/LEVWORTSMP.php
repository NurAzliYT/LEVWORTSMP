<?php

namespace NurAzliYT\LEVWORTSMP;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class LEVWORTSMP extends PluginBase {

   public function onEnable():void{
   }
  public function onCommand(CommandSender $sender,Command $command, string $label, Array $args):bool{

    if($command->getName() == "lsmp"){

      $sender->sendMessage("Rules, You must obey these server rules, 1. No toxic 2. No X-rays 3. No Hacks 4
       No Cheat 5. Thieves are prohibited");
      return true;
    }
} 
