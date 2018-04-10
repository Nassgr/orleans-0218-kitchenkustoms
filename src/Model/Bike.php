<?php
/**
 * Created by PhpStorm.
 * User: wilder16
 * Date: 10/04/18
 * Time: 17:10
 */

namespace Model;

class Bike
{
    private $id;
    private $name;
    private $description;
    private $photo_before;
    private $photo_after;
    private $rate_look;
    private $rate_practice;
    private $rate_fun;
    private $price;
    private $sold;
    private $is_kustom;
    private $is_sold;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Bike
     */
    public function setId(int $id): Bike
    {
        $this->id = $id;
        return $this;
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
     * @return Bike
     */
    public function setName(string $name): Bike
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Bike
     */
    public function setDescription(string $description): Bike
    {
        $this->description = $description;
        return $this;
    }



    /**
     * @return null|string
     */
    public function getPhoto_before(): ?string
    {
        return $this->photo_before;
    }

    /**
     * @param string $photo_before
     * @return Bike
     */
    public function setPhoto_before(string $photo_before): Bike
    {
        $this->photo_before = $photo_before;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPhoto_after(): ?string
    {
        return $this->photo_after;
    }


    /**
     * @param string $photo_after
     * @return Bike
     */
    public function setPhoto_after(string $photo_after): Bike
    {
        $this->photo_after = $photo_after;
        return $this;
    }


    /**
     * @return null|int
     */
    public function getRate_look(): ?int
    {
        return $this->rate_look;
    }


    /**
     * @param int $rate_look
     * @return Bike
     */
    public function setRate_look(int $rate_look): Bike
    {
        $this->rate_look = $rate_look;
        return $this;
    }


    /**
     * @return null|int
     */
    public function getRate_practice(): ?int
    {
        return $this->rate_practice;
    }


    /**
     * @param int $rate_practice
     * @return Bike
     */
    public function setRate_practice(int $rate_practice): Bike
    {
        $this->rate_practice = $rate_practice;
        return $this;
    }


    /**
     * @return null|int
     */
    public function getRate_fun(): ?int
    {
        return $this->rate_fun;
    }


    /**
     * @param $rate_Fun
     * @return Bike
     */
    public function setRate_fun($rate_fun): Bike
    {
        $this->rate_fun = $rate_fun;
        return $this;
    }


    /**
     * @return null|int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }


    /**
     * @param int $price
     * @return Bike
     */
    public function setPrice(int $price): Bike
    {
        $this->price = $price;
        return $this;
    }


    /**
     * @return bool
     */
    public function getSold(): bool
    {
        return $this->sold;
    }


    /**
     * @param bool $sold
     * @return Bike
     */
    public function setSold(bool $sold): Bike
    {
        $this->sold = $sold;
        return $this;
    }


    /**
     * @return bool
     */
    public function getIs_kustom(): bool
    {
        return $this->is_kustom;
    }

    /**
     * @param bool $is_kustom
     * @return Bike
     */
    public function setIs_kustom(bool $is_kustom): Bike
    {
        $this->is_kustom = $is_kustom;
        return $this;
    }


    /**
     * @return bool
     */
    public function getIs_sold(): bool
    {
        return $this->is_sold;
    }


    /**
     * @param bool $is_sold
     * @return Bike
     */
    public function setIs_sold(bool $is_sold): Bike
    {
        $this->is_sold = $is_sold;
        return $this;
    }

}