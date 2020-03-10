<?php

class Guerrier
{
  private $health;
  private $strength;

  public function __construct(
    int $strength,
    int $health = 100
  ) {
    $this->setHealth($health);
    $this->strength = $strength;
  }

  public function getHealth(): int
  {
    return $this->health;
  }

  public function setHealth(int $health): self
  {
    $this->health = $health;
    return $this;
  }

  public function getStrength(): int
  {
    return $this->strength;
  }

  public function setStrength(int $strength): self
  {
    $this->strength = $strength;
    return $this;
  }
}
