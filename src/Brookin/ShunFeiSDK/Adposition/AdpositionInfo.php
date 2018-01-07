<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\Adposition;


class AdpositionInfo
{
    const Type_BANNER = 1;  // banner(默认)
    const Type_VIDEO = 2;   // video
    const Type_NATIVE = 3;  // native
    const Type_TEXT = 4;    // 文字链

    /**
     * @var int
     */
    public $Id;

    /**
     * @var string
     */
    public $Name;

    /**
     * @var float
     */
    public $BidFloor;

    /**
     * @var int
     */
    public $Height;

    /**
     * @var int
     */
    public $Width;

    /**
     * @var int
     */
    public $Type;

    /**
     * @var array
     */
    public $AllowMaterial = [];

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return float
     */
    public function getBidFloor()
    {
        return $this->BidFloor;
    }

    /**
     * @param float $BidFloor
     */
    public function setBidFloor($BidFloor)
    {
        $this->BidFloor = $BidFloor;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * @param int $Height
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * @param int $Width
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;
    }

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
     * @return array
     */
    public function getAllowMaterial()
    {
        return $this->AllowMaterial;
    }

    /**
     * @param array $AllowMaterial
     */
    public function setAllowMaterial($AllowMaterial)
    {
        $this->AllowMaterial = $AllowMaterial;
    }
}
