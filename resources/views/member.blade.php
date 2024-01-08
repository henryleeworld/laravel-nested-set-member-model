<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
        <meta name="Description" content="上線會幫下線，下線又會幫下線，組織堆疊起來自然大家都有獲利" />
        <meta property="og:title" content="會員組織圖" />
        <meta property="og:description" content="上線會幫下線，下線又會幫下線，組織堆疊起來自然大家都有獲利" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="zh_TW" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.4.0/css/jquery.orgchart.min.css" integrity="sha512-glKRl7rAln38GEZ5bwXfY/0qpmyaz7rmrxo/jP/FoqryhYyYbMB6lEdTXtSBe4wbItlIWILK7ICEYBw9zFrMqA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <style type="text/css">
            body {
                font-family: "Noto Serif TC", serif;
            }
            .orgchart {
                background: #fff;
            }
            #chart-container {
                border: 1px solid #aaa;
                overflow: auto;
                text-align: center;
            }
        </style>
        <title>會員組織圖</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" id="chart-container"></div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/purl/2.3.1/purl.min.js" type="text/javascript" charset="utf-8" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.4.0/js/jquery.orgchart.min.js" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="{{ asset('/js/member.js') }}" type="text/javascript" charset="utf-8" defer></script>
    </body>
</html>