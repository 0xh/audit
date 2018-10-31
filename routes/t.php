<?php

use App\Models\Audit;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

Route::get('/t', function (Request $request) {

    //return \App\Models\Post::find(1)->audits[0]->event.PHP_EOL; // 获取事件类型
    // 获取修改后的属性
    return \App\Models\Post::find(1)->audits()->latest()->first()->getModified();

    // 获取审核元数据
    return \App\Models\Post::find(1)->audits[0]->getMetadata();

    /**
        Audit Implementation
        Audit Transformation
        Attribute Modifiers
        Audit Presentation
     */

    //在这节课开始之前，我们需要下下你了解一下 User-Agent（UA），
    //它是 Http 协议中的一部分，客户端会通过这个请求头向访问网站提供浏览器类型、操作系统及版本、浏览器渲染引擎、浏览器语言等等信息的标识。
    //UA 是一个字符串，在每次浏览器 HTTP 请求时发送到服务器

    //我们可以利用 User-Agent 做很多事情，比如：
    //统计用户都使用什么浏览器，使用什么设备访问我们的网站。
    //根据浏览器或设备的不同，显示不同的排版及内容，为用户提供更好的体验。
    //如手机和 PC 中应该有不同的排版；ios 打开的页面，可以增加个按钮跳转到 itunes 应用商店下载我们的 APP 等。

    //要模拟不同的浏览器 User-Agent 可以安装一个浏览器插件
    //https://chrome.google.com/webstore/detail/http-user-agent-switcher/dalfpgoflklogpfibbjelegbgfamlhof

    //$agent = new Agent();
    //
    //dd($agent->is('Firefox')); // Chrome Safari Firefox
});
