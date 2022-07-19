<?php
error_reporting(0);
$header = json_decode('[
    {
        "name": "首页",
        "url": "\/",
        "active": true
    },
    {
        "name": "应用中心",
        "url": "\/app"
    },
    {
        "name": "Github",
        "url": "https:\/\/github.com\/oyps",
        "icon": "img\/github-brands.svg",
        "target": "_blank"
    },
    {
        "name": "关注我",
        "children": [
            {
                "name": "微博",
                "url": "https:\/\/weibo.com\/ponconsoft",
                "icon": "img\/weibo-brands.svg",
                "target": "_blank"
            },
            {
                "name": "知乎",
                "url": "https:\/\/www.zhihu.com\/people\/ponconsoft",
                "icon": "img\/zhihu.png",
                "target": "_blank"
            },
            {
                "name": "交流群",
                "url": "https:\/\/jq.qq.com\/?_wv=1027&k=PQuZNehB",
                "icon": "img\/qq-brands.svg",
                "target": "_blank"
            },
            {
                "name": "V2EX",
                "url": "https:\/\/www.v2ex.com\/member\/oyp",
                "icon": "img\/v2ex.png",
                "target": "_blank"
            }
        ]
    },
    {
        "name": "关于",
        "url": "javascript:goNode(\'about\')"
    }
]', true);
echo '
<nav class="navbar navbar-expand navbar-light bg-light shadow-sm fixed-top">
    <a class="navbar-brand" href="/">
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
