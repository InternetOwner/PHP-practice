<?php

namespace App;

abstract class Worker implements WorkerInterface
{
    use HasRest;


    public int $age;
    public string $name;
    public array $hours;

    protected string $position;
    private string $experience;

    /**
     * @param int $age
     * @param string $name
     * @param array $hours
     */
    public function __construct(string $name, int $age, array $hours)
    {
        $this->age = $age;
        $this->name = $name;
        $this->hours = $hours;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getHours(): array
    {
        return $this->hours;
    }

    /**
     * @param array $hours
     */
    public function setHours(array $hours): void
    {
        $this->hours = $hours;
    }
}