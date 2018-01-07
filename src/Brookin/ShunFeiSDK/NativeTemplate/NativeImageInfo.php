<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\NativeTemplate;


class NativeImageInfo
{
    /**
     * @var int
     */
    public $Type;

    /**
     * @var int
     */
    public $W;

    /**
     * @var int
     */
    public $H;

    /** @var  int */
    public $Size;

    /** @var array  */
    public $Mimes = [];

    /** @var string */
    public $Desec;

    /**
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param int $Type
     */
    public function setType($Type)
    {
        $this->Type = $Type;
    }

    /**
     * @return int
     */
    public function getW()
    {
        return $this->W;
    }

    /**
     * @param int $W
     */
    public function setW($W)
    {
        $this->W = $W;
    }

    /**
     * @return int
     */
    public function getH()
    {
        return $this->H;
    }

    /**
     * @param int $H
     */
    public function setH($H)
    {
        $this->H = $H;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * @param int $Size
     */
    public function setSize($Size)
    {
        $this->Size = $Size;
    }

    /**
     * @return array
     */
    public function getMimes()
    {
        return $this->Mimes;
    }

    /**
     * @param array $Mimes
     */
    public function setMimes($Mimes)
    {
        $this->Mimes = $Mimes;
    }

    /**
     * @return string
     */
    public function getDesec()
    {
        return $this->Desec;
    }

    /**
     * @param string $Desec
     */
    public function setDesec($Desec)
    {
        $this->Desec = $Desec;
    }
}
