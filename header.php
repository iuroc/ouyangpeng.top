<?php
error_reporting(0);
$header = json_decode('[
  {
    "name": "首页",
<<<<<<< HEAD
    "url": "http://ouyangpeng.top/",
=======
    "url": "/",
>>>>>>> a1273cb539976adcccfc1a590d3a93057314c303
    "active": true
  },
  {
    "name": "应用",
    "children": [
      {
        "name": "My Pages",
<<<<<<< HEAD
        "url": "http://ouyangpeng.top/app/mypages/",
=======
        "url": "https://ouyangpeng.top/app/mypages/",
>>>>>>> a1273cb539976adcccfc1a590d3a93057314c303
        "target": "_blank"
      },
      {
        "name": "无忧音乐网",
<<<<<<< HEAD
        "url": "http://ouyangpeng.top/app/wbqyy/",
        "target": "_blank"
      },
      {
          "name": "鹏创书刊网",
          "url": "http://ouyangpeng.top/app/books/",
          "target": "_blank"
=======
        "url": "https://ouyangpeng.top/app/wbqyy/",
        "target": "_blank"
>>>>>>> a1273cb539976adcccfc1a590d3a93057314c303
      }
    ]
  },
  {
    "name": "Github",
    "url": "https://github.com/oyps",
<<<<<<< HEAD
    "icon": "http://ouyangpeng.top/source/image/github-brands.svg",
=======
    "icon": "https://ouyangpeng.top/source/image/github-brands.svg",
>>>>>>> a1273cb539976adcccfc1a590d3a93057314c303
    "target": "_blank"
  },
  {
    "name": "关注我",
    "children": [
      {
        "name": "微博",
        "url": "https://weibo.com/ponconsoft",
<<<<<<< HEAD
        "icon": "http://ouyangpeng.top/source/image/weibo-brands.svg",
=======
        "icon": "https://ouyangpeng.top/source/image/weibo-brands.svg",
>>>>>>> a1273cb539976adcccfc1a590d3a93057314c303
        "target": "_blank"
      },
      {
        "name": "知乎",
        "url": "https://www.zhihu.com/people/ponconsoft",
<<<<<<< HEAD
        "icon": "http://ouyangpeng.top/source/image/zhihu.png",
=======
        "icon": "https://ouyangpeng.top/source/image/zhihu.png",
>>>>>>> a1273cb539976adcccfc1a590d3a93057314c303
        "target": "_blank"
      },
      {
        "name": "交流群",
        "url": "https://jq.qq.com/?_wv=1027&k=PQuZNehB",
<<<<<<< HEAD
        "icon": "http://ouyangpeng.top/source/image/qq-brands.svg",
=======
        "icon": "https://ouyangpeng.top/source/image/qq-brands.svg",
>>>>>>> a1273cb539976adcccfc1a590d3a93057314c303
        "target": "_blank"
      },
      {
        "name": "V2EX",
        "url": "https://www.v2ex.com/member/oyp",
<<<<<<< HEAD
        "icon": "http://ouyangpeng.top/source/image/v2ex.png",
=======
        "icon": "https://ouyangpeng.top/source/image/v2ex.png",
>>>>>>> a1273cb539976adcccfc1a590d3a93057314c303
        "target": "_blank"
      }
    ]
  },
  {
    "name": "关于",
<<<<<<< HEAD
    "url": "http://ouyangpeng.top/#about"
=======
    "url": "https://ouyangpeng.top/#about"
>>>>>>> a1273cb539976adcccfc1a590d3a93057314c303
  }
]', true);
echo '
<nav class="navbar navbar-light bg-light navbar-expand-sm shadow-sm fixed-top user-select-none">
<<<<<<< HEAD
    <a class="navbar-brand" href="http://ouyangpeng.top/">
=======
    <a class="navbar-brand" href="/">
>>>>>>> a1273cb539976adcccfc1a590d3a93057314c303
        鹏优创
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">';
foreach ($header as $value) {
    if (isset($value['children'])) {
        $children = '';
        foreach ($value['children'] as $v) {
            $children .= '<a class="dropdown-item" href="' . $v['url'] . '" ' . (isset($v['target']) ? 'target="' . $v['target'] . '"' : '') . '>' . (isset($v['icon']) ? '<img referrerPolicy="no-referrer" src="' . $v['icon'] . '" alt="Github" class="d-inline-block mr-2 align-middle" style="height: 1em;"><span class="align-middle">' : '<span>') . $v['name'] . '</span></a>';
        }
        echo '
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">
                    ' . $value['name'] . '
                </a>
                <div class="dropdown-menu shadow">
                    ' . $children . '
                </div>
            </li>';
    } else {
        echo '
            <li class="nav-item ' . (isset($value['active']) ? 'active' : '') . '">
                <a class="nav-link" href="' . $value['url'] . '" ' . (isset($value['target']) ? 'target="' . $value['target'] . '"' : '') . '>' . (isset($value['icon']) ? '<img referrerPolicy="no-referrer" src="' . $value['icon'] . '" alt="Github" class="d-inline-block mr-1 mb-1" style="height: 1em;">' : '')  . $value['name'] . '</a>
            </li>';
    }
}
echo '
        </ul>
    </div>
</nav>
<script>
    document.querySelector(\'body\').style.paddingTop = document.querySelector(\'.navbar\').offsetHeight + \'px\'
</script>
';
