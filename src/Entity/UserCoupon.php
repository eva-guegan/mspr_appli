<?php


namespace App\Entity;


class UserCoupon
{
    /**
     * @var int
     */
    private $idCoupon;

    /**
     * @var int
     */
    private $idUser;

    /**
     * @var bool
     */
    private $isUsed;

    /**
     * @param int $idCoupon
     * @param int $idUser
     * @param bool $isUsed
     */
    public function __construct(int $idCoupon, int $idUser, bool $isUsed)
    {
        $this->idCoupon = $idCoupon;
        $this->idUser = $idUser;
        $this->isUsed = $isUsed;
    }

    /**
     * @return int
     */
    public function getIdCoupon(): int
    {
        return $this->idCoupon;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->idUser;
    }

    /**
     * @return bool
     */
    public function isUsed(): bool
    {
        return $this->isUsed;
    }
}