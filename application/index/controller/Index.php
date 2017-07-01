<?php
namespace app\index\controller;
use JPush\Client as JPush;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }

    //推送ID
    public function ts_id()
    {
       $client = new JPush('3c42db4195f613f98f807346','badbe72a8836b0004b4ca6cc');
       $client->push()
        ->setPlatform('all')
        ->addAlias('uid_1')
        ->setNotificationAlert('Hello, JPush')
        ->send();
        //做一个处理
        return json([ 'code'=>1,'msg'=>'推送成功' ]);

    }
    //推送全部
    public function ts_all()
    {
      $client = new JPush('3c42db4195f613f98f807346','badbe72a8836b0004b4ca6cc');
      $client->push()
       ->setPlatform('all')
       ->addAllAudience()
       ->setNotificationAlert('Hello, JPush')
       ->send();
       //做一个处理
       return json([ 'code'=>1,'msg'=>'推送成功' ]);
    }
    //推送群组
    public function ts_qz()
    {
      $client = new JPush('3c42db4195f613f98f807346','badbe72a8836b0004b4ca6cc');
      $client->push()
       ->setPlatform('all')
       ->addTag(['hello'])
       ->setNotificationAlert('极光通知')
       ->send();
       //做一个处理
       return json([ 'code'=>1,'msg'=>'推送成功' ]);
    }
}
