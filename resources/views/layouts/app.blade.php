<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Cloud Cafe</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pink: #ffc8dd;
            --pink-soft: #ffe5ef;
            --pink-deep: #ff8fb8;
            --blue: #bde0fe;
            --blue-deep: #7fb8f0;
            --text: #6b4a5e;
            --white: #ffffff;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Quicksand', 'Segoe UI', Arial, sans-serif;
            color: var(--text);
            background: linear-gradient(180deg, var(--pink-soft) 0%, #e8f3ff 100%);
            min-height: 100vh;
        }

        nav {
            background: var(--white);
            margin: 18px auto 0;
            max-width: 1000px;
            padding: 12px 24px;
            border-radius: 999px;
            box-shadow: 0 6px 18px rgba(255, 143, 184, 0.25);
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }
        .brand { font-weight: 700; font-size: 1.2rem; color: var(--pink-deep); }
        .links a {
            text-decoration: none;
            color: var(--text);
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 999px;
            margin-left: 4px;
            transition: all .2s;
        }
        .links a:hover { background: var(--pink); color: #fff; }
        .links a.active { background: var(--pink-deep); color: #fff; }

        main { max-width: 1000px; margin: 28px auto; padding: 0 18px; }
        .card {
            background: var(--white);
            border-radius: 28px;
            padding: 32px;
            box-shadow: 0 8px 24px rgba(127, 184, 240, 0.25);
            border: 3px dashed var(--pink);
        }
        h1 { margin-top: 0; color: var(--pink-deep); font-size: 2rem; }
        p { line-height: 1.7; }
        .center { text-align: center; }
        .btn {
            display: inline-block;
            background: var(--blue);
            color: var(--text);
            text-decoration: none;
            font-weight: 700;
            padding: 10px 22px;
            border-radius: 999px;
            margin: 6px;
            transition: transform .2s;
        }
        .btn:hover { transform: translateY(-3px); background: var(--blue-deep); color: #fff; }
        .btn.pink { background: var(--pink); }
        .btn.pink:hover { background: var(--pink-deep); }

        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: separate; border-spacing: 0 8px; }
        th {
            background: var(--pink);
            color: #fff;
            padding: 12px 14px;
            text-align: left;
        }
        th:first-child { border-radius: 16px 0 0 16px; }
        th:last-child { border-radius: 0 16px 16px 0; }
        td { background: var(--pink-soft); padding: 12px 14px; }
        td:first-child { border-radius: 16px 0 0 16px; }
        td:last-child { border-radius: 0 16px 16px 0; }
        tr:nth-child(even) td { background: #eaf4ff; }

        .badge { padding: 4px 12px; border-radius: 999px; font-size: .85rem; font-weight: 700; }
        .Active { background: #c9f2d9; color: #2e7d5b; }
        .Inactive { background: #ffe8a8; color: #a07400; }
        .Suspended { background: #ffc4c4; color: #b03a3a; }

        footer { text-align: center; padding: 20px; color: var(--pink-deep); font-weight: 600; }
    </style>
</head>
<body>
    <nav>
        <span class="brand">Cloud Cafe</span>
        <div class="links">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
            <a href="{{ route('customers') }}" class="{{ request()->routeIs('customers') ? 'active' : '' }}">Customer Accounts</a>
            <a href="{{ route('users') }}" class="{{ request()->routeIs('users') ? 'active' : '' }}">User Accounts</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>Made with Laravel</footer>
</body>
</html>