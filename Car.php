<?php


class Car
{
    private string $color;

    private int $nbSeats;

    private int $nbWheels = 4;

    private string $energy;

    private int $currentSpeed;

    private int $energyLevel;

    private bool $hasParkBrake = true;

    public function __construct(
        string $color,
        int $nbSeats,
        string $energy
    ) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color): self
    {
        $this->color = $color;
        return $this;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed): self
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
        return $this;
    }

    public function start(): string
    {
        if ($this->hasParkBrake != false) {
            throw new \Exception("le frein à main est enclenché");
        } else {
            $this->currentSpeed = 90;
        }
        return "Start !";
    }

    public function accelerate(): string
    {
        $this->currentSpeed < 90;

        return "speed up !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 45;
            $sentence .= "Braaaaaaaake !!! <br>";
        }
        $sentence .= "Car stopped !";
        return $sentence;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @param $hasParkBrake
     * @return self
     */
    public function setHasParkBrake($hasParkBrake): self
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}

