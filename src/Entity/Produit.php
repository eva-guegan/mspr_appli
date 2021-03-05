<?php


namespace App\Entity;


class Produit
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $idCoupon;

    /**
     * @param int $id
     * @param string $nom
     * @param string $description
     * @param int $idCoupon
     */
    public function __construct(int $id, string $nom, string $description, int $idCoupon)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->idCoupon = $idCoupon;
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
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getIdCoupon(): int
    {
        return $this->idCoupon;
    }

}