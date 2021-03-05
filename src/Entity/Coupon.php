<?php


namespace App\Entity;


class Coupon
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var int
     */
    private $reduc;

    private $dateExpire;

    /**
     * @param int $id
     * @param string $titre
     * @param int $reduc
     * @param $dateExpire
     */
    public function __construct(int $id, string $titre, int $reduc, $dateExpire)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->reduc = $reduc;
        $this->dateExpire = $dateExpire;
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
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @return int
     */
    public function getReduc(): int
    {
        return $this->reduc;
    }

    /**
     * @return mixed
     */
    public function getDateExpire()
    {
        return $this->dateExpire;
    }

}