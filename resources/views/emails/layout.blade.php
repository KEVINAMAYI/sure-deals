<!DOCTYPE html>
<html>
<head>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f7;
            color: #333333;
            margin: 0;
            padding: 0;
        }

        .email-wrapper {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .email-header {
            background-color: rgb(120, 58, 148);
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        .email-body {
            padding: 20px;
        }

        .email-footer {
            text-align: center;
            padding: 15px;
            font-size: 12px;
            color: #aaaaaa;
        }

        .email-button {
            display: inline-block;
            background-color: rgb(120, 58, 148);
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 20px 0;
            border-radius: 5px;
            font-weight: bold;
        }

        .email-button:hover {
            background-color: rgb(120, 58, 148);
        }

        .email-img {
            display: block;
            margin: 20px auto;
            max-width: 150px;
        }
    </style>
</head>
<body>
<div class="email-wrapper">
    <div class="email-header">
        {{ $title }}
    </div>
    <div class="email-body">
        <h1>Hello, {{ $userName }}</h1>

        My name is {{ $senderName }}

        @yield('content')

    </div>
    <div class="email-footer">
        If you did not request this change or have any question, please contact support immediately. <br>
        info@mombasaautoshow.com &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    </div>
</div>
</body>
</html>
