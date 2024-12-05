<?php

namespace Nozell\Crates\Rewards;

use pocketmine\item\Item;

class Reward
{
    private Item $item;
    private float $chance;
    private int $slot;
    private array $originlore;

    public function __construct(Item $item, float $chance, int $slot, array $originlore)
    {
        $this->item = $item;
        $this->chance = $chance;
        $this->slot = $slot;
        $this->originlore = $originlore;
    }

    public function getItem(): Item
    {
        return $this->item;
    }

    public function getChance(): float
    {
        return $this->chance;
    }

    public function getSlot(): int
    {
        return $this->slot;
    }

    public function setSlot(int $slot): void
    {
        $this->slot = $slot;
    }

    public function setChance(float $chance): void
    {
        $this->chance = $chance;
    }

    public function getLore(): array
    {
        return $this->originlore;
    }
}
