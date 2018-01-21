<?php
/**
 * Created by PhpStorm.
 * Date: 11/26/17
 * Time: 7:23 PM
 */

namespace Brookin\ShunFeiSDK;

use GuzzleHttp\RequestOptions;

class Client
{

    public $urlPrefix = SHUN_FEI_SDK_URL;

    const POST = 'POST';

    const GET = 'GET';

    public $client;

    public $defaultOptions;

    protected $path;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
        $this->defaultOptions = [];
    }

    public function getModuleName()
    {
        return strtolower((new \ReflectionClass(static::class))->getShortName());
    }

    public function getActionName($methodName)
    {
        return  explode('::', $methodName)[1];
    }

    public function getPath($method) {
        $this->path = sprintf('/%s/%s', $this->getModuleName(), $this->getActionName($method));
        return $this->path;
    }

    public function send($method, $path, Request $request, Response $response, $upload = false) {

        $url = $this->urlPrefix.$path;

        $options = [];
        if ($method == 'GET') {
            $options = array_merge_recursive($this->defaultOptions, [
                RequestOptions::QUERY => $request->toArray(),
            ]);
        } else if ($method == 'POST') {
            if (!$upload) {
                $options = array_merge_recursive($this->defaultOptions, [
                    RequestOptions::JSON =>$request,
                ]);
            } else {
                $tmp = $request->toArray();
                $options = array_merge_recursive($this->defaultOptions, [
                    RequestOptions::MULTIPART => array_values($tmp),
                ]);
            }
        }

        $res = $this->client->request($method, $url, $options);
        $content = $res->getBody()->getContents();;
        $response->rawData = $content;
        $response->arrayData = \GuzzleHttp\json_decode($content, true);
    }
}