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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.9/css/jquery.orgchart.min.css" />
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript" charset="utf-8" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/purl/2.3.1/purl.min.js" type="text/javascript" charset="utf-8" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/2.1.9/js/jquery.orgchart.min.js" type="text/javascript" charset="utf-8" defer></script>
    <script src="{{ asset('/js/member.js') }}" type="text/javascript" charset="utf-8" defer></script>
</body>
</html>