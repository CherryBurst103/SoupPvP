<?php

namespace Terpz710\SoupPvP;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemConsumeEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPlayerItemConsume(PlayerItemConsumeEvent $event) {
        $player = $event->getPlayer();

        if ($event->getItem() instanceof \pocketmine\item\MushroomStew) {
            $event->setCancelled();
            $player->setHealth($player->getHealth() + 4);
        }
    }
}
