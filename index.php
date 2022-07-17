<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="never">
    <title>鹏优创 - 新一代优质程序员</title>
    <meta name="description" content="新一代优质程序员，接单各类中小型网站、小程序、公众号机器人开发">
    <link rel="stylesheet" href="https://cdn.staticfile.org/bootstrap/4.6.0/css/bootstrap.min.css" />
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/6.1.1/css/fontawesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <style>
        *::selection {
            background: tan;
            color: #fff;
        }

        *::-moz-selection {
            background: tan;
            color: #fff;
        }

        *::-webkit-selection {
            background: tan;
            color: #fff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
        <a class="navbar-brand" href="/">
            鹏优创
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                $data = file_get_contents('api/data.json');
                $data = json_decode($data, true);
                $header = $data['header'];
                foreach ($header as $value) {
                    if (isset($value['children'])) {
                        $children = '';
                        foreach ($value['children'] as $v) {
                            $children .= '<a class="dropdown-item" href="' . $v['url'] . '" ' . (isset($v['target']) ? 'target="' . $v['target'] . '"' : '') . '>' . (isset($v['icon']) ? '<img src="' . $v['icon'] . '" alt="Github" class="d-inline-block mr-2" style="height: 1em;">' : '')  . $v['name'] . '</a>';
                        }
                        echo '
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javasctipt:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown">
                        ' . $value['name'] . '
                    </a>
                    <div class="dropdown-menu shadow">
                        ' . $children . '
                    </div>
                </li>';
                    } else {
                        echo '
                <li class="nav-item ' . (isset($value['active']) ? 'active' : '') . '">
                    <a class="nav-link" href="' . $value['url'] . '" ' . (isset($value['target']) ? 'target="' . $value['target'] . '"' : '') . '>' . (isset($value['icon']) ? '<img src="' . $value['icon'] . '" alt="Github" class="d-inline-block mr-1" style="height: 1em;">' : '')  . $value['name'] . '</a>
                </li>';
                    }
                }
                ?>

            </ul>
        </div>
    </nav>
    <div class="shadow-sm bg-light" style="margin-top: 56px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex h-100 align-items-center">
                        <div class="my-5 my-md-0 text-center text-sm-left w-100">
                            <h1 class="display-4 mb-3">鹏优创🥇</h1>
                            <div class="h5 mb-3">—— 新一代 📌 <span class="text-danger">优质程序员</span></div>
                            <div class="lead mb-3">接单各类 <span class="font-weight-bold">中小型网站、小程序、机器人</span> 开发</div>
                            <div class="btns">
                                <a class="btn btn-primary btn-lg" href="https://qm.qq.com/cgi-bin/qm/qr?k=M-b-gog7zKyGIPLFWvrv17fcmKFaU-vI&noverify=0">
                                    立即咨询
                                </a>
                                <a href="#" class="btn btn-outline-success btn-lg ml-3">
                                    项目展示
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="text-right">
                        <img src="<?php echo $data['top_image'];  ?>" style="height: 300px;" alt="鹏优创" class="mt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow">
        <div class="container pt-5 pb-4">
            <h3 class="mb-4">服务项目</h3>
            <div class="row">
                <?php
                $services = $data['services'];
                foreach ($services as $value) {
                    echo '
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="media p-3 border shadow-sm rounded align-items-center h-100">
                        <img src="' . $value['icon'] . '" class="mr-3" alt="' . $value['title'] . '" style="width: 64px; height: 64px;">
                        <div class="media-body">
                            <h5 class="mt-0 font-weight-bold">' . $value['title'] . '</h5>
                            <div class="text-muted">' . $value['msg'] . '</div>
                        </div>
                    </div>
                </div>';
                }

                ?>
            </div>
        </div>
    </div>

    <div class="shadow-sm">
        <div class="container pt-5 pb-4">
            <h3 class="mb-4">项目展示</h3>
            <div class="row">
                <?php
                $projects = $data['projects'];
                foreach ($projects as $value) {
                    echo '
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm h-100 px-5 px-sm-0">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img src="' . $value['img'] . '" class="embed-responsive-item card-img-top shadow-sm" alt="' . $value['title'] . '">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">' . $value['title'] . '</h5>
                            <div class="card-text text-muted">
                            ' . $value['text'] . '
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="shadow-sm" style="background-color: #5bae23;">
        <div class="container pt-5 pb-4">
            <h3 class="mb-4 text-white">荣誉墙</h3>
            <div class="row">
                <?php
                $rongyuqiang = $data['rongyuqiang'];
                foreach ($rongyuqiang as $value) {
                    echo '
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <img src="' . $value['img'] . '" class="rounded mb-4 px-5 mx-sm-0 w-100 shadow-sm" alt="' . $value['text'] . '" title="' . $value['text'] . '">
                </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="shadow-sm">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h3 class="mb-4">学习和工作计划</h3>
                        <ul>
                            <li class="mb-2">完成一篇论文</li>
                            <li class="mb-2">深入学习React、Java、Vue</li>
                            <li class="mb-2">尝试富文本编辑器相关开发</li>
                            <li class="mb-2">多接项目做，充实大学生活</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-right">
                        <img src="img/house-4414916_640.png" alt="学习和工作计划" style="height: 200px;" class="rounded shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow-sm text-white" style="background-color: #1781b5;" id="about">
        <div class="container py-5">
            <h3 class="mb-4">关于我</h3>
            <div class="mb-2">
                在校程序员一枚，拥有多年前后端开发经验，多次获得省级和国家级计算机类奖项，品学兼优，喜欢编程开发，热爱生活。
            </div>
            <div class="mb-3">
                如果您有软件定制、网站开发、机器人开发等需求，或有任何意见和建议，欢迎联系我，我将竭诚为您服务。
            </div>
            <ul>
                <li class="mb-2">电话：<a href="tel:18870142713" class="text-white">18870142713</a>（微信QQ同号）</li>
                <li class="mb-2">邮箱：<a href="mailto:ponconsoft@gmail.com" class="text-white">ponconsoft@gmail.com</a></li>
                <li class="mb-2">微博：<a href="https://weibo.com/ponconsoft" class="text-white" target="_blank">weibo.com/ponconsoft</a></li>
                <li class="mb-2">知乎：<a href="https://www.zhihu.com/people/ponconsoft" class="text-white" target="_blank">zhihu.com/people/ponconsoft</a></li>
                <li class="mb-2">交流群：<a href="https://jq.qq.com/?_wv=1027&k=PQuZNehB" class="text-white" target="_blank">1085954565</a></li>
                <li class="mb-2">V2EX：<a href="https://www.v2ex.com/member/oyp" class="text-white" target="_blank">https://v2ex.com/member/oyp</a></li>
            </ul>
        </div>
    </div>
    <div class="shadow-sm text-center py-5">
        <div class="mb-2">Copyright © 2017-<?php echo date('Y'); ?> 鹏优创. All rights reserved.</div>
        <div class="mb-2">
            备案号：<a href="https://beian.miit.gov.cn/" class="text-dark" target="_blank">赣ICP备2022000371号-1</a>
        </div>
        <div>
            <a target="_blank" class="text-dark" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=36010802000584">
                <img src="https://p.ananas.chaoxing.com/star3/origin/6688ed27e29b4feef62cc2518e2e4de3.png" style="height: 1em;" class="align-middle" alt="公安备案">
                赣公网安备 36010802000584号
            </a>
        </div>
    </div>
</body>

</html>