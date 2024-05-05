<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
        <meta property="og:title" content="{{ config('app.name') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="{{ app()->getLocale() }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.7.0/css/jquery.orgchart.min.css" integrity="sha512-6LeDHdJNCsBQCCCA2fUbuEct1qeYQbq03XkSuD00BtlE6TPdQWNZtiV2zjcYRy/D1QeqvyvzOr7wigKHyGs0wA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <title>{{ config('app.name') }}</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" id="chart-container"></div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/purl/2.3.1/purl.min.js" integrity="sha512-xbWNJpa0EduIPOwctW2N6KjW1KAWai6wEfiC3bafkJZyd0X3Q3n5yDTXHd21MIostzgLTwhxjEH+l9a5j3RB4A==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/3.7.0/js/jquery.orgchart.min.js" defer></script>
        <script src="{{ asset('/js/member.js') }}" type="text/javascript" charset="utf-8" defer></script>
    </body>
</html>