<?php
require_once 'Personnage.php';

class Mage extends Personnage
{
  private $intelligence;

  public function __construct(
    int $intelligence,
    int $health = 200
  ) {
    $this->intelligence = $intelligence;
    $this->health = $health;
  }

  public function getIntelligence(): int
  {
    return $this->intelligence;
  }

  public function setIntelligence(int $intelligence): self
  {
    $this->intelligence = $intelligence;
    return $this;
  }

  public function calculeDegats(): int
  {
    return intval($this->intelligence / 10);
  }
}
