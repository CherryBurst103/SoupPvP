<?php

namespace Terpz710\SoupPvP;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPlayerInteract(PlayerInteractEvent $event) {
        $player = $event->getPlayer();
        $item = $event->getItem();

        if ($event->getAction() ===  PlayerInteractEvent::RIGHT_CLICK_BLOCK) {
            if ($event->getItem() instanceof \pocketmine\item\MushroomStew) {
                $event->cancel();
                $player->setHealth($player->getHealth() + 4);
                $player->sendMessage("Healed §b4§r total hearts!");
                $player->getInventory()->removeItem($item);
            }
        }
    }
}
