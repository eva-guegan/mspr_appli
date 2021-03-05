<?php


namespace App\Entity;


class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;


    /**
     * @var string
     */
//    private $mdp;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var bool
     */
    private $isAdmin;

    /**
     * @param int $id
     * @param string $name
     * @param string $lastName
     * @param string $email
     * @param string $adresse
     * @param bool $isAdmin
     */
    public function __construct(int $id, string $name, string $lastName, string $email, string $adresse, bool $isAdmin)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->adresse = $adresse;
        $this->isAdmin = $isAdmin;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->isAdmin;
    }

}