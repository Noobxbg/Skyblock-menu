<?php
namespace noobxbg\skyui;

use pocketmine\Server;

use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
  public function onEnable(){
        $this->getLogger()->info("Test UI By Noobxg Enabled");
  }

  public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args): bool {
    switch($cmd->getName()){
      case "ui":
      if($sender instanceof Player){
        $this->test($sender);
           } else {
                 $sender->sendMessage("Type in-game");
      }
    }
    return true;
  }
            public function test($player){
              $form = $this->getServer()->getPluginManager()->getPlugin("FormAPI")->createSimpleForm(function (Player $player, int $data = null){
                if($data === null){
                  return true;
                } 
                 switch($data){
                  case 0:
                     $this->getServer()->dispatchCommand($player, "cmd1");
                     break;
                                                                           
                     case 1:
                     $this->getServer()->dispatchCommand($player, "cmd2");
                     break;
                                                                                                             
                     $this->getServer()->dispatchCommand($player, "cmd3");
                     break;

                     case 3:
                     $this->getServer()->dispatchCommand($player, "cmd4");
                     break;
                                                                                                                                                                         
                     case 4:
                     $this->getServer()->dispatchCommand($player, "cmd5");
                     break;
                                                                                                                                                                                                           
                     case 5:
                     $this->getServer()->dispatchCommand($player, "cmd6");
                     break;
                       }
                    });
                        $form->setTitle("§l§dTest UI");
                        $form->addButton("§cOption Number 1\n§7Is create", 0, "textures/ui/op");
                        $form->addButton("§cOption Number 2\n§7Tap to open", 0, "textures/ui/op");
                        $form->addButton("§cOption Number 3\n§7Tap to open", 0, "textures/ui/op");
                        $form->addButton("§cOption Number 4\n§7Tap to open", 0, "textures/ui/op");
                        $form->addButton("§cOption Number 5\n§7Tap to open", 0, "textures/ui/op");
                        $form->addButton("§cOption Number 6\n§7Tap to open", 0, "textures/ui/op");   
                        $form->sendToPlayer($player);
                        return $form;
            }
}
