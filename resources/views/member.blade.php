<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
        <meta property="og:title" content="{{ config('app.name') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="{{ app()->getLocale() }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/orgchart/5.0.0/css/jquery.orgchart.min.css" integrity="sha512-9A2BSSUL5eXVMWwrB8aDX8GeOOSMMVCk3fvqOplnswmo4IN4s6DW2ywpb3VCDcGCVwDc3g6S1k9T72NsCkgw5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('/css/member.css') }}" />
        <title>{{ config('app.name') }}</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" id="chart-container"></div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/purl/2.3.1/purl.min.js" integrity="sha512-xbWNJpa0EduIPOwctW2N6KjW1KAWai6wEfiC3bafkJZyd0X3Q3n5yDTXHd21MIostzgLTwhxjEH+l9a5j3RB4A==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/orgchart/5.0.0/js/jquery.orgchart.min.js" integrity="sha512-IUNqrYw8R7mj0iBzb0FOTGTgEFrxZCHVCHnePUEmcjJ/XQE/0sqRhBmGpp20N2lVzAkIBs0Sz+ibRN8/W9YFnQ==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
        <script src="{{ asset('/js/member.js') }}" type="text/javascript" charset="utf-8" defer></script>
    </body>
</html>