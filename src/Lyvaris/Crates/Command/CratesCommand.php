<?php

namespace Lyvaris\Crates\Command;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\lang\Translatable;
use pocketmine\player\Player;
use Lyvaris\Crates\Menu\MainMenu;
use Lyvaris\Crates\Manager\LangManager;
use Lyvaris\Crates\tags\Perms;

class CratesCommand extends Command
{
    public function __construct(
        string $name,
        Translatable|string $description = "",
        Translatable|string|null $usageMessage = null,
        array $aliases = []
    ) {
        parent::__construct($name, $description, $usageMessage, $aliases);
        $this->setPermission(Perms::Default);
    }

    public function execute(
        CommandSender $sender,
        string $commandLabel,
        array $args
    ) {
        if (!$this->testPermission($sender)) {
            return;
        }

        if (!$sender instanceof Player) {
            $msg = LangManager::getInstance()->generateMsg(
                "command-use-in-game",
                [],
                []
            );
            return;
        }

        new MainMenu($sender);
    }
}