<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:53 PM
 */

namespace Brookin\ShunFeiSDK\NativeTemplate;


class NativeTemplateInfo
{
    /**
     * @var string
     */
    public $TplId;

    /**
     * @var NativeAssetInfo[]
     */
    public $NAssets = [];

    /**
     * @return string
     */
    public function getTplId()
    {
        return $this->TplId;
    }

    /**
     * @param string $TplId
     */
    public function setTplId($TplId)
    {
        $this->TplId = $TplId;
    }

    /**
     * @return NativeAssetInfo[]
     */
    public function getNAssets()
    {
        return $this->NAssets;
    }

    /**
     * @param NativeAssetInfo[] $NAssets
     */
    public function setNAssets($NAssets)
    {
        $this->NAssets = $NAssets;
    }


}
