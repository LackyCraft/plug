<?php

namespace krendell;


use pocketmine\plugin\PluginBase;

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;
use pocketmine\math\Vector3;


class Main extends PluginBase
{

if($site == 'on') {
foreach ($this->getServer()->getOnlinePlayers() as $p) {
$p->kick($message);
}

}
