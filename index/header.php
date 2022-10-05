<?php
error_reporting(0);
$header = json_decode('[
  {
    "name": "首页",
    "url": "//apee.top/",
    "active": true
  },
  {
    "name": "网站",
    "children": [
      {
          "name": "鹏创软件",
          "url": "http://i.apee.top/soft/",
          "target": "_blank"
      },
      {
          "name": "工具集",
          "url": "https://oyps.gitee.io/some-web-pages/",
          "target": "_blank"
      },
      {
          "name": "待办清单",
          "url": "http://i.apee.top/dbqd/",
          "target": "_blank"
      },
      {
          "name": "🔒 鹏创书刊",
          "url": "http://lock.apee.top/books/",
          "target": "_blank"
      },
      {
        "name": "My Pages",
        "url": "http://i.apee.top/mypages/",
        "target": "_blank"
      },
      {
        "name": "无忧音乐",
        "url": "http://i.apee.top/wbqyy/",
        "target": "_blank"
      },
      {
          "name": "模拟请求",
          "url": "http://i.apee.top/mnqq/",
          "target": "_blank"
      },
      {
          "name": "鹏创图床",
          "url": "http://i.apee.top/tuchuang/",
          "target": "_blank"
      },
      {
          "name": "鹏创HTML编辑器",
          "url": "http://i.apee.top/htmlbjq/",
          "target": "_blank"
      },
      {
          "name": "鹏创代码大师",
          "url": "http://i.apee.top/dmds/",
          "target": "_blank"
      },
      {
          "name": "组卷考试系统",
          "url": "http://i.apee.top/zujuankaoshi/",
          "target": "_blank"
      },
      {
          "name": "鹏创电子书",
          "url": "http://i.apee.top/dzs/",
          "target": "_blank"
      },
      {
          "name": "🔒 Baby 视频",
          "url": "http://lock.apee.top/baby-video/",
          "target": "_blank"
      },
      {
          "name": "🔒 学术研究网",
          "url": "http://lock.apee.top/xueshuyanjiu/",
          "target": "_blank"
      }
    ]
  },
  {
    "name": "软件",
    "children": [
      {
          "name": "鹏创翻译（Windows）",
          "url": "http://123pan.apee.top/%E8%BD%AF%E4%BB%B6/%E9%B9%8F%E5%88%9B%E7%BF%BB%E8%AF%91%20v1.8.11.exe",
          "target": "_blank"
      }
    ]
  },
  {
    "name": "Github",
    "url": "https://github.com/oyps",
    "icon": "//apee.top/source/image/github-brands.svg",
    "target": "_blank"
  },
  {
    "name": "关注我",
    "children": [
      {
        "name": "微博",
        "url": "https://weibo.com/ponconsoft",
        "icon": "//apee.top/source/image/weibo-brands.svg",
        "target": "_blank"
      },
      {
        "name": "知乎",
        "url": "https://www.zhihu.com/people/ponconsoft",
        "icon": "//apee.top/source/image/zhihu.png",
        "target": "_blank"
      },
      {
        "name": "交流群",
        "url": "https://jq.qq.com/?_wv=1027&k=PQuZNehB",
        "icon": "//apee.top/source/image/qq-brands.svg",
        "target": "_blank"
      },
      {
        "name": "V2EX",
        "url": "https://www.v2ex.com/member/oyp",
        "icon": "//apee.top/source/image/v2ex.png",
        "target": "_blank"
      },
      {
        "name": "关于",
        "url": "//apee.top/#about",
        "icon": "//apee.top/source/image/circle-info-solid.svg"
      }
    ]
  }
]', true);
echo '
<nav class="navbar navbar-light bg-light navbar-expand-sm shadow-sm sticky-top user-select-none">
    <a class="navbar-brand" href="//apee.top/">
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
      $children .= '<a class="dropdown-item" href="' . $v['url'] . '" ' . (isset($v['target']) ? 'target="' . $v['target'] . '"' : '') . '>' . (isset($v['icon']) ? '<img referrerPolicy="no-referrer" src="' . $v['icon'] . '" alt="' . $v['name'] . '" class="d-inline-block mr-2 align-middle" style="height: 1em;"><span class="align-middle">' : '<span>') . $v['name'] . '</span></a>';
    }
    echo '
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">
                    ' . $value['name'] . '
                </a>
                <div class="dropdown-menu shadow" style="max-height:200px;overflow: auto;">
                    ' . $children . '
                </div>
            </li>';
  } else {
    echo '
            <li class="nav-item ' . (isset($value['active']) ? 'active' : '') . '">
                <a class="nav-link" href="' . $value['url'] . '" ' . (isset($value['target']) ? 'target="' . $value['target'] . '"' : '') . '>' . (isset($value['icon']) ? '<img referrerPolicy="no-referrer" src="' . $value['icon'] . '" alt="' . $v['name'] . '" class="d-inline-block mr-1 mb-1" style="height: 1em;">' : '')  . $value['name'] . '</a>
            </li>';
  }
}
echo '
        </ul>
    </div>
</nav>
';
