<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ isset($page_title) ? $page_title : '' }} | {{ dujiaoka_config_get('title') }}</title>
    <meta name="Keywords" content="{{ dujiaoka_config_get('keywords') }}">
    <meta name="Description" content="{{ dujiaoka_config_get('description')  }}">
    <link rel="stylesheet" href="/assets/luna/layui/css/layui.css">
    <link rel="stylesheet" href="/assets/luna/main.css">
    <link rel="shortcut icon" href="/assets/style/favicon.ico" />
    @if(\request()->getScheme() == "https")
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @endif
    <script>
        var _hmt = _hmt || [];
        (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?a56a10e8a4cc9c98f6de3d29c907e768";
        var s = document.getElementsByTagName("script")[0]; 
        s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
@if(dujiaoka_config_get('is_open_google_translate') == \App\Models\BaseModel::STATUS_OPEN)
@include('luna.layouts.google_translate')
@endif
