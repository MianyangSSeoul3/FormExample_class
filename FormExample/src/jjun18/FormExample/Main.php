<?php


namespace jjun18\FormExample;


use jjun18\FormExample\command\openTestForm;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable()
    {
        $this->getServer()->getCommandMap()->register("18", new openTestForm());
    }

}