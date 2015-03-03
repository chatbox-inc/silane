<?php
namespace Chatbox;

use Chatbox\Config\Config;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;


/**
 * Class Silane
 * silexラッパー。
 * デフォルトのConfigファイルをベースに、
 * デフォルトサービスの読み込みを逐次行っていく。
 *
 * コンテナに依存するメソドをガンガン生やせる無法地帯。
 *
 * @package Chatbox
 */
class Silane extends Application{

    public function __construct(array $values = array())
    {
        return parent::__construct($values); // TODO: Change the autogenerated stub
    }

    public function run(Request $request = null)
    {
        return parent::run($request); // TODO: Change the autogenerated stub
    }


}