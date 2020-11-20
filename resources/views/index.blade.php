<!Doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Links</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
						#cover {
								background-color: rgba(128,39,63,0.7);
						}
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
								border-bottom: solid 1px #fff;
								padding-top: 10px;
								padding-bottom: 10px;
								margin-left: 10px;
								margin-right: 10px;
            }
						a:hover {
								background-color: rgba(0,0,0,0.3);
						}
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="cover" class="flex-center position-ref full-height">
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>
                        <a href="{{ route('register') }}">登録</a>
                    @endauth
                </div>
            <div class="content">
                <div class="title m-b-md">
                    Links
                </div>
								<div class="m-b-md">
									Linksは18〜29の青年と40〜69の淑女を結びつけるマッチングサイトです。（仮）
								</div>

                <div class="links">
                    <a href="{{ route('young') }}">青年を探す（淑女向け）</a>
                    <a href="{{ route('young-add') }}">青年として投稿する（青年向け）</a>
                </div>
            </div>
        </div>
    </body>
</html>