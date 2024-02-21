<?php

class warrior
{
    protected int $hp;
    protected int|float $durability;
    protected int $weapon;

    public function __construct(
        int $hp,
        float|int $durability,
        int $weapon
    )
    {
        $this->hp = $hp;
        $this->durability = $durability;
        $this->weapon = $weapon;
    }

    public function getDurability(): int|float
    {
        return $this->durability;
    }
    public function getHp(): int
    {
        return $this->hp;
    }


}

class sword extends warrior
{

}

class pistol extends warrior
{

}



class mage
{
    protected int $hp;
    protected int|float $durability;
    protected int $weapon;

    public function __construct(
        int $hp,
        float|int $durability,
        int $weapon
    )
    {
        $this->hp = $hp;
        $this->durability = $durability;
        $this->weapon = $weapon;
    }

    public function getDurability(): int|float
    {
        return $this->durability;
    }
    public function getHp(): int
    {
        return $this->hp;
    }

}

class magic_stuff extends mage
{

}



class archer
{
    protected int $hp;
    protected int|float $durability;
    protected int $weapon;

    public function __construct(
        int $hp,
        float|int $durability,
        int $weapon
    )
    {
        $this->hp = $hp;
        $this->durability = $durability;
        $this->weapon = $weapon;
    }

    public function getDurability(): int|float
    {
        return $this->durability;
    }
    public function getHp(): int
    {
        return $this->hp;
    }

}

class bow extends archer
{

}

class crossbow extends archer
{

}

