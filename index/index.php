<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>鹏优创 - 新一代优质程序员</title>
    <meta name="description" content="新一代优质程序员，接单各类中小型网站、小程序、公众号机器人开发。网站开发、小程序开发、公众号机器人开发、安卓APP开发、跨平台开发、各类数据资源采集">
    <meta property="og:title" content="鹏优创 - 新一代优质程序员" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="鹏优创 - 新一代优质程序员" />
    <meta property="og:url" content="https://ouyangpeng.top/" />
    <meta property="og:title" content="鹏优创 - 新一代优质程序员" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="鹏优创 - 新一代优质程序员" />
    <meta property="og:url" content="https://ouyangpeng.top/" />
    <meta name="image" content="https://p.ananas.chaoxing.com/star3/origin/3b600ff44eff62b4a3b0bf1e1c9c802f.jpg" />
    <meta name="og:image" content="https://p.ananas.chaoxing.com/star3/origin/3b600ff44eff62b4a3b0bf1e1c9c802f.jpg" />
    <link rel="stylesheet" href="https://cdn.staticfile.org/bootstrap/4.6.0/css/bootstrap.min.css" />
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="source/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="source/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="source/favicon/favicon-16x16.png">
    <link rel="manifest" href="source/favicon/site.webmanifest">
    <style>
        *::selection {
            background: rgba(255, 71, 71, 0.3);
            color: inherit;
        }

        *::-moz-selection {
            background: rgba(255, 71, 71, 0.3);
            color: inherit;
        }

        *::-webkit-selection {
            background: rgba(255, 71, 71, 0.3);
            color: inherit;
        }

        .nav-link {
            white-space: nowrap;
        }

        body {
            overflow-x: hidden;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('img, a').attr('draggable', 'false')
            $(document).scroll(function() {
                var top = $(document).scrollTop()
                if (top > $(window).height() - 200) {
                    $('.toTop').css('display', 'block')
                } else {
                    $('.toTop').css('display', 'none')
                }
            })
        })
        /**
         * 转到位置
         */
        function goNode(id) {
            scrollTo(0, $('#' + id).position().top - 40)
        }
    </script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?021379b43b1e674fe96330ead7d4ee77";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>

<body>
    <?php
    require 'header.php';
    $data = json_decode('{
        "top_image": "https://p.ananas.chaoxing.com/star3/origin/4c5ac69281fcf7b11c2c890ac1ecd474.png",
        "services": [
            {
                "title": "网站开发",
                "msg": "各类中小型网站开发和搭建",
                "icon": "https://p.ananas.chaoxing.com/star3/origin/609c782cf9743dc81937d6e9f19468cf.png"
            },
            {
                "title": "小程序开发",
                "msg": "各类小程序开发和搭建",
                "icon": "https://p.ananas.chaoxing.com/star3/origin/1b792a1e861932fcd83f65819b775185.png"
            },
            {
                "title": "公众号机器人开发",
                "msg": "数据资源搜索、智能问答",
                "icon": "https://p.ananas.chaoxing.com/star3/origin/aed50be25765051c8b3e7f41d35f5ff4.png"
            },
            {
                "title": "安卓APP开发",
                "msg": "各类安卓手机软件开发设计",
                "icon": "https://p.ananas.chaoxing.com/star3/origin/e07afa863403e403a0a41ead306149a5.png"
            },
            {
                "title": "跨平台软件开发",
                "msg": "Windows、Linux、MacOS",
                "icon": "https://p.ananas.chaoxing.com/star3/origin/70b0b8187a6877b475108b2a35dd34f9.png"
            },
            {
                "title": "各类数据资源采集",
                "msg": "音乐\/视频\/图片\/文档\/软件",
                "icon": "https://p.ananas.chaoxing.com/star3/origin/9d5b608b02800f3da7b408e6c1422c41.png"
            }
        ],
        "projects": [
            {
                "title": "我爱听书",
                "img": "https://p.ananas.chaoxing.com/star3/origin/76e61b46c755550ee9641e4c157c7700.jpg",
                "text": "一个免费提供海量有声读物在线搜索和试听的网站"
            },
            {
                "title": "公众号文章管理系统",
                "img": "https://p.ananas.chaoxing.com/star3/origin/e60a7193fd4da6232a04f2a5afc3744a.jpg",
                "text": "标签式管理公众号文章，支持全文模糊搜索和智能搜索，支持接入公众号"
            },
            {
                "title": "My Pages",
                "img": "https://p.ananas.chaoxing.com/star3/origin/4f3972c941a8c568071c27549c7f322c.jpg",
                "text": "一款标签化管理网页收藏的工具"
            },
            {
                "title": "鹏创音乐网",
                "img": "https://p.ananas.chaoxing.com/star3/origin/b97a9c35f08303b48c8a7ca7a24d4432.jpg",
                "text": "一个免费提供海量音乐在线搜索、试听和下载的网站"
            },
            {
                "title": "鹏创影视网",
                "img": "https://p.ananas.chaoxing.com/star3/origin/cd97a8350b135b387e86c43070360fe3.jpg",
                "text": "海量影视在线免费观看"
            },
            {
                "title": "组卷与考试系统",
                "img": "https://p.ananas.chaoxing.com/star3/origin/670a812363ce200dd647105e414d55da.jpg",
                "text": "信息技术知识模拟竞赛平台，可二次开发成为任何类型考试平台"
            },
            {
                "title": "鹏创代码大师",
                "img": "https://p.ananas.chaoxing.com/star3/origin/a96af02702385f7803f108fd98864183.jpg",
                "text": "新一代在线代码调试工具，支持30+种编程语言代码在线编辑调试"
            },
            {
                "title": "鹏创阅读网",
                "img": "https://p.ananas.chaoxing.com/star3/origin/bb9c5dc6a71c71ba91aaa34780557902.jpg",
                "text": "提供海量精品正版书刊在线阅读下载，界面清新简约，书刊资源丰富"
            }
        ],
        "rongyuqiang": [
            {
                "img": "https://p.ananas.chaoxing.com/star3/origin/0b893a902542b31547c69fc26bf56c02.png",
                "text": "蓝桥杯全国总决赛二等奖"
            },
            {
                "img": "https://p.ananas.chaoxing.com/star3/origin/ce7f0a3ca2b13b131968696a6656ce4c.png",
                "text": "蓝桥杯江西省一等奖"
            },
            {
                "img": "https://p.ananas.chaoxing.com/star3/origin/24d29f05195b68c654a8002aedbfe55e.jpeg",
                "text": "三创赛校二等奖"
            },
            {
                "img": "https://p.ananas.chaoxing.com/star3/origin/5d179ab4d5b9f54db36f293398bae29a.png",
                "text": "互联网+创新创业大赛优秀奖"
            }
        ]
    }', true);
    ?>
    <div class="shadow-sm" style="background-color: #e9ecef;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex h-100 align-items-center">
                        <div class="my-5 my-md-0 text-center text-sm-left w-100">
                            <h1 class="display-4 mb-3">
                                <span class="align-middle">鹏优创</span>
                                <svg class="align-bottom" t="1658109326552" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2506" style="height: 1em;">
                                    <path d="M671.3 545.5l-102.1-14.9-45.7-92.6c-2.8-5.7-9.3-7.7-14.4-7.7-5.2 0-11.7 2-14.5 7.7l-45.7 92.5-102.2 14.9c-6 0.9-11.1 5.2-13 11-1.9 5.8-0.3 12.3 4.1 16.5l73.9 72.1-17.4 101.8c-1 6 1.5 12.2 6.4 15.8 2.8 2 6 3.1 9.5 3.1 2.6 0 5.2-0.6 7.5-1.9l91.4-48 91.4 48c2.3 1.2 4.9 1.9 7.5 1.9 3.5 0 6.7-1.1 9.5-3.1 5-3.6 7.5-9.7 6.4-15.7L606.4 645l73.9-72.1c4.4-4.2 6-10.7 4.1-16.5-1.9-5.8-6.9-10-13.1-10.9z m-96.7 79.1c-4.9 4.7-7.1 11.6-5.9 18.3l11.8 68.9-61.9-32.5c-2.9-1.6-6.3-2.4-9.6-2.4s-6.6 0.8-9.6 2.4l-61.9 32.5 11.8-68.9c1.1-6.7-1.1-13.5-5.9-18.3l-50-48.7 69.1-10.1c6.7-1 12.6-5.2 15.6-11.3l30.9-62.7 31 62.7c3 6.1 8.8 10.3 15.5 11.3l69.1 10.1-50 48.7z" fill="#6B400D" p-id="2507"></path>
                                    <path d="M540 554.5l-31-62.7-30.9 62.7c-3 6.1-8.8 10.3-15.6 11.3l-69.1 10.1 50 48.7c4.9 4.7 7.1 11.6 5.9 18.3l-11.8 68.9 61.9-32.5a20.39 20.39 0 0 1 19.2 0l61.9 32.5-11.8-68.9c-1.2-6.7 1.1-13.5 5.9-18.3l50-48.7-69.1-10.1c-6.7-1-12.5-5.2-15.5-11.3z" fill="#FFD524" p-id="2508"></path>
                                    <path d="M818.9 412.6l137.4-245.5c-15-11.8-91.7-66.2-143.9-102.8H205.6c-49.9 36.1-123.1 89.6-137.3 101.2L199 412.7l-1.4 2.3c-16.4 27.8-29 58.2-37.5 90.2h0.5l-1.4 5.6c-7.4 29.6-11.2 58.7-11.1 86.6 0 199 161.9 360.9 360.9 360.9 199 0 360.9-161.9 360.9-360.9 0.1-64.1-17.1-127.2-49.6-182.4l-1.4-2.4z m69.2-242.5l2.3 4-2.5 3.7L786.6 367l-4-4.6c-18.8-21.9-40.3-41.6-63.8-58.4l-3.4-2.4 94.4-187.4 78.3 55.9z m-132.6-63.8l-83.7 169-3.7-1.8c-49.1-24.2-104.2-37-159.4-37-41.2 0-82.8 7.6-123.6 22.6l-3.8 1.1c-0.5 0.2-4.6 2.1-6.1 2.6 0 0-8.3 3.1-9.7 3.6v0.4l-7.9 3.3c-2.5 1-5.1 2-7.5 3.2l-3.7 1.8-83.8-169h492.9z m-626.7 70.1l-2.5-3.7 81.9-58.6 94.4 187.4-3.4 2.4c-23.5 16.8-44.9 36.4-63.8 58.4l-4 4.6-102.6-190.5z m380.2 731c-170.9 0-310-139.1-310-310 0-35.7 6.5-71.5 19.3-106.3l1.4-3.9c0.8-2.3 1.6-4.6 2.5-6.8 3.8-9.2 8.1-18.4 13.3-28.1 30.3-56.8 76.8-102.2 134.7-131.4 44.1-22.3 90.9-33.6 138.9-33.6 171 0 310.1 139.1 310.1 310S680 907.4 509 907.4z" fill="#6B400D" p-id="2509"></path>
                                    <path d="M380.5 792.1c-43.7-25.5-69.4-58.1-88.8-112.7l-1.3-3.3c-2.9-5.7-8.9-9.4-15.6-9.4-1.9 0.1-3.6 0.4-5.2 1-7.7 2.7-12.4 10.6-11.1 18.9l1.3 4.4c21.6 60.9 52.2 99.5 102 129 0.1 0 6.8 4.3 9.5 4.3l2.5 0.1h0.1c1.7 0 3.3-0.4 4.9-0.9 8.8-3.1 13.4-12.9 10.3-21.8-1.6-4.4-4.8-7.9-8.6-9.6zM265.8 649.4c4.7-1.5 8.5-4.8 10.7-9.1 2.2-4.4 2.6-9.4 1.1-14.1-2.5-7.6-9.5-12.7-17.5-12.7-2 0-3.9 0.3-5.7 0.9-9.6 3.2-14.9 13.6-11.8 23.2 2.5 7.6 9.5 12.7 17.5 12.7 1.9 0 3.8-0.4 5.7-0.9z" fill="#6B400D" p-id="2510"></path>
                                </svg>
                            </h1>
                            <div class="h5 mb-3">—— 新一代 <svg class="align-bottom" style="height: 1em;" t="1658109480510" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5252">
                                    <path d="M547.1 889.4L134.3 476.6c-15.8-15.8-3.9-42.9 18.5-41.8l118.6 5.6 311.9-207.9 5.5-92.8c1.2-21.1 26.8-30.8 41.8-15.9l269.3 269.3c14.9 14.9 5.2 40.5-15.9 41.8l-92.8 5.5-207.9 311.9 5.6 118.6c1.1 22.4-25.9 34.3-41.8 18.5z" fill="#EF5343" p-id="5253"></path>
                                    <path d="M354.6 470.9c-4 0-7.8-1.9-10.2-5.5-3.8-5.6-2.2-13.2 3.4-17l190-126.7c5.6-3.8 13.2-2.2 17 3.4 3.8 5.6 2.2 13.2-3.4 17l-190 126.7c-2.1 1.4-4.5 2.1-6.8 2.1z" fill="#FFFFFF" p-id="5254"></path>
                                    <path d="M899.9 393.2l-61.3-61.3c14.9 14.9 5.2 40.5-15.9 41.8l-92.8 5.5L522 691l5.6 118.6c1.1 22.4-26 34.3-41.8 18.5l61.3 61.3c15.8 15.8 42.9 3.9 41.8-18.5l-5.6-118.6 207.9-311.9L884 435c21.1-1.3 30.8-26.9 15.9-41.8z" fill="#D84141" p-id="5255"></path>
                                    <path d="M587.3 307.7m-12.3 0a12.3 12.3 0 1 0 24.6 0 12.3 12.3 0 1 0-24.6 0Z" fill="#FFFFFF" p-id="5256"></path>
                                    <path d="M912.9 380.2L643.5 110.9c-12.1-12.1-29.6-15.8-45.6-9.8s-26.6 20.5-27.6 37.6l-4.9 83.7-299.1 199.4-112.6-5.4c-17.8-0.7-34 9.2-41.3 25.5s-3.7 35 8.9 47.7L314.7 683 102.5 895.2c-7.2 7.2-7.2 18.8 0 26 3.6 3.6 8.3 5.4 13 5.4s9.4-1.8 13-5.4L340.7 709l193.4 193.4c8.3 8.3 19.1 12.6 30.2 12.6 5.9 0 11.8-1.2 17.4-3.7 16.3-7.2 26.3-23.4 25.5-41.3l-5.4-112.6 199.5-299.2 83.7-4.9c17.1-1 31.5-11.6 37.6-27.6s2.4-33.4-9.7-45.5z m-24.6 32.5c-0.5 1.4-1.9 3.7-5.4 3.9l-85.2 5-135.3-135.3c-7.2-7.2-18.8-7.2-26 0-7.2 7.2-7.2 18.8 0 26l130.9 130.9-187.5 281.2-223.7-223.7c-7.2-7.2-18.8-7.2-26 0-7.2 7.2-7.2 18.8 0 26l225.1 225.1c2.8 2.8 6.3 4.5 9.9 5.1l5.5 114.9c0.2 3.5-1.9 5.1-3.6 5.9-1.7 0.8-4.4 1.2-6.8-1.3L147.3 463.6c-2.5-2.5-2-5.1-1.3-6.8 0.8-1.7 2.5-4 5.9-3.6l118.6 5.6c3.9 0.2 7.8-0.9 11.1-3.1l311.9-207.9c4.8-3.2 7.8-8.5 8.2-14.2l5.5-92.8c0.2-3.5 2.6-4.8 3.9-5.4 1.4-0.5 4.1-1 6.5 1.4l269.3 269.3c2.4 2.5 1.9 5.2 1.4 6.6z" fill="#2D3742" p-id="5257"></path>
                                </svg> <span class="text-danger">优质程序员</span></div>
                            <div class="lead mb-3">接单各类 <span class="font-weight-bold">中小型网站、小程序、机器人</span> 开发</div>
                            <div class="btns">
                                <div class="btn btn-primary btn-lg" target="_blank" onclick="window.open('tencent://message/?uin=2329632875')">
                                    立即咨询
                                </div>
                                <div onclick="goNode('projects')" class="btn btn-outline-success btn-lg ml-3">
                                    项目展示
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="text-right">
                        <img referrerPolicy="no-referrer" src="<?php echo $data['top_image'];  ?>" style="height: 300px;" alt="鹏优创" class="mt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow-sm">
        <div class="container pt-5 pb-4">
            <h3 class="mb-4">服务项目</h3>
            <div class="row">
                <?php
                $services = $data['services'];
                foreach ($services as $value) {
                    echo '
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="media p-3 border shadow-sm rounded align-items-center h-100">
                        <img referrerPolicy="no-referrer" src="' . $value['icon'] . '" class="mr-3" alt="' . $value['title'] . '" style="width: 64px; height: 64px;">
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

    <div class="shadow-sm" id="projects" style="background-color: #e9ecef;">
        <div class="container pt-5 pb-4">
            <h3 class="mb-4">项目展示</h3>
            <div class="row">
                <?php
                $projects = $data['projects'];
                foreach ($projects as $value) {
                    echo '
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm h-100 px-5 px-sm-0">
                        <div class="embed-responsive embed-responsive-16by9 border-bottom shadow-sm">
                            <img referrerPolicy="no-referrer" src="' . $value['img'] . '" class="embed-responsive-item card-img-top shadow-sm" alt="' . $value['title'] . '">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">' . $value['title'] . '</h5>
                            <div class="card-text text-muted small">
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
    <div class="shadow-sm" style="background-color: #d9a40e;">
        <div class="container pt-5 pb-4">
            <h3 class="mb-4 text-white">荣誉墙</h3>
            <div class="row">
                <?php
                $rongyuqiang = $data['rongyuqiang'];
                foreach ($rongyuqiang as $value) {
                    echo '
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <img referrerPolicy="no-referrer" src="' . $value['img'] . '" class="rounded mb-4 px-5 px-sm-0 w-100 shadow-sm" alt="' . $value['text'] . '" title="' . $value['text'] . '">
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
                        <img referrerPolicy="no-referrer" src="https://p.ananas.chaoxing.com/star3/origin/cc3f88780b2402a9587eea340e662d35.png" alt="学习和工作计划" style="height: 200px;" class="rounded shadow-sm">
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
            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        <li class="mb-2">电话：<a href="tel:18870142713" class="text-white">18870142713</a>（微信QQ同号）</li>
                        <li class="mb-2">邮箱：<a href="mailto:ponconsoft@gmail.com" class="text-white">ponconsoft@gmail.com</a></li>
                        <li class="mb-2">微博：<a href="https://weibo.com/ponconsoft" class="text-white" target="_blank">weibo.com/ponconsoft</a></li>
                        <li class="mb-2">知乎：<a href="https://www.zhihu.com/people/ponconsoft" class="text-white" target="_blank">zhihu.com/people/ponconsoft</a></li>
                        <li class="mb-2">交流群：<a href="https://jq.qq.com/?_wv=1027&k=PQuZNehB" class="text-white" target="_blank">1085954565</a></li>
                        <li class="mb-2">V2EX：<a href="https://www.v2ex.com/member/oyp" class="text-white" target="_blank">v2ex.com/member/oyp</a></li>
                        <li>公众号：鹏优创（ponconsoft）</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="mt-4">
                        <img referrerPolicy="no-referrer" src="https://p.ananas.chaoxing.com/star3/origin/dca982ec69ef21295fdee9f4afccefc5.png" alt="Poncon Soft" class="w-100 img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow-sm text-center py-5">
        <div class="mb-2">Copyright © 2017-<?php echo date('Y'); ?> 鹏优创. All rights reserved.</div>
        <div class="mb-2">
            备案号：<a href="https://beian.miit.gov.cn/" class="text-dark" target="_blank">赣ICP备2022000371号-1</a>
        </div>
        <div class="mb-2">
            <a target="_blank" class="text-dark" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=36010802000584">
                <img referrerPolicy="no-referrer" src="https://p.ananas.chaoxing.com/star3/origin/6688ed27e29b4feef62cc2518e2e4de3.png" style="height: 1em;" class="align-middle" alt="公安备案">
                赣公网安备 36010802000584号
            </a>
        </div>
        <!-- <div class="mb-2">网站累计访问次数：<?php
                                        // echo $data['viewCount'];
                                        // $data['viewCount']++;
                                        // file_put_contents('api/data.json', json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
                                        ?></div> -->
    </div>
    <div onclick="$('html, body').animate({ scrollTop: 0 }, 500)" class="toTop text-center user-select-none p-2 rounded shadow border position-fixed bg-light" style="cursor: pointer; display: none; right: 30px; bottom: 30px;">
        <svg t="1658110161066" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2257" style="height: 30px;">
            <path d="M526.848 202.24c-4.096-4.096-9.216-6.144-14.848-6.144s-11.264 2.048-14.848 6.144L342.016 356.864c-8.192 8.192-8.192 21.504 0 30.208 8.192 8.192 21.504 8.192 30.208 0L512 247.296l139.776 139.776c4.096 4.096 9.728 6.144 14.848 6.144 5.632 0 10.752-2.048 14.848-6.144 8.192-8.192 8.192-21.504 0-30.208L526.848 202.24zM116.224 595.968h90.624v231.936h42.496V595.968h90.624v-42.496H115.712v42.496z m458.24-42.496h-112.64c-13.824 0-27.136 5.12-37.376 15.36s-15.36 24.064-15.36 37.376v168.448c0 13.824 5.12 27.136 15.36 37.376s24.064 15.36 37.376 15.36h112.64c13.824 0 27.136-5.12 37.376-15.36s15.36-24.064 15.36-37.376V606.208c0-13.824-5.12-27.136-15.36-37.376s-23.552-15.36-37.376-15.36z m10.752 221.696c0 2.048-0.512 5.12-3.072 7.68s-5.632 3.072-7.68 3.072h-112.64c-2.048 0-5.12-0.512-7.68-3.072s-3.072-5.632-3.072-7.68V606.72c0-2.048 0.512-5.12 3.072-7.68s5.632-3.072 7.68-3.072h112.64c2.048 0 5.12 0.512 7.68 3.072s3.072 5.632 3.072 7.68v168.448z m307.2-205.824c-10.24-10.24-24.064-15.36-37.376-15.36H709.632v274.432h42.496v-120.32H855.04c13.824 0 27.136-5.12 37.376-15.36s15.36-24.064 15.36-37.376v-48.128c0-14.336-5.12-27.648-15.36-37.888z m-27.136 84.992c0 2.048-0.512 5.12-3.072 7.68s-5.632 3.072-7.68 3.072H751.104v-69.12H855.04c2.048 0 5.12 0.512 7.68 3.072s3.072 5.632 3.072 7.68v47.616h-0.512z" p-id="2258"></path>
        </svg>
        <div class="small">回到顶部</div>
    </div>

</body>

</html>