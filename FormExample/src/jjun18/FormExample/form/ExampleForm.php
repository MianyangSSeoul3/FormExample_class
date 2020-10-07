<?php


namespace jjun18\FormExample\form;


use pocketmine\form\Form;
use pocketmine\Player;

class ExampleForm implements Form
{
    public function jsonSerialize() : array
    {
        return [
            'type' => 'custom_form',
            'title' => 'test',
            'content' => [
                [
                    'type' => 'label',
                    'text' => '코로나 조심 Watch out for corona'
                ]
            ]
        ];
    }

    public function handleResponse(Player $player, $data): void
    {
        $player->sendMessage("코로나 조심 / Watch out for corona");
    }

}