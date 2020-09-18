<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="Description" content="上線會幫下線，下線又會幫下線，組織堆疊起來自然大家都有獲利" />
    <meta property="og:title" content="會員組織圖" />
    <meta property="og:description" content="上線會幫下線，下線又會幫下線，組織堆疊起來自然大家都有獲利" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="zh_TW" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.10/css/jquery.orgchart.min.css" integrity="sha512-+jNt6Tf/nNJl5B/FSkz+mjGCaDK9lJF47kf+fDJHA/Pz8+Px5iZWKCVpY8whICflfRSWIgTO6cw6iAnUHyViVA==" crossorigin="anonymous" />
    <style type="text/css">
    body {
        font-family: 'Noto Serif TC', serif;
    }
    .orgchart { background: #fff; }
    </style>
    <title>會員組織圖</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row" id="org-chart">
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/purl/2.3.1/purl.min.js" type="text/javascript" charset="utf-8" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.10/js/jquery.orgchart.min.js" integrity="sha512-8/4BsDdyor0Sen/Rtpg0aX6J0zFhlYLfPNcK4Rdh3eDUql8xk6w/J/zjbdtLEWiLoNXftBpovEzPQn/W1Zwhaw==" crossorigin="anonymous" defer></script>
    <script src="{{ asset('/js/member.js') }}" type="text/javascript" charset="utf-8" defer></script>
</body>
</html>