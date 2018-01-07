<?php
/**
 * Created by PhpStorm.
 * Date: 12/16/17
 * Time: 3:48 PM
 */

namespace Brookin\ShunFeiSDK\Creative;


class TitleInfo
{

    /**
     * @var string
     */
    public $Text;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     */
    public function setText($Text)
    {
        $this->Text = $Text;
    }

}