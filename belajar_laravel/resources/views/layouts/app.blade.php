<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Daftar Buku') | Ruang Baca</title>
    <style>
        :root {
            color-scheme: light;
            font-family: "Segoe UI", sans-serif;
            color: #172b3a;
            background: #f3f6f4;
            font-synthesis: none;
        }
        * { box-sizing: border-box; }
        body { margin: 0; min-width: 320px; }
        a { color: inherit; }
        .topbar { display: flex; align-items: center; justify-content: space-between; gap: 20px; padding: 18px max(24px, calc((100% - 1080px) / 2)); background: #173f46; color: #fff; }
        .brand { font-size: 20px; font-weight: 700; text-decoration: none; letter-spacing: .3px; }
        .nav-link { color: #e6f1ee; text-decoration: none; font-size: 14px; }
        .nav-link:hover { color: #fff; text-decoration: underline; }
        .container { width: min(100% - 40px, 1080px); margin: 42px auto; }
        .page-heading { display: flex; align-items: center; justify-content: space-between; gap: 20px; margin-bottom: 24px; }
        h1 { margin: 0; color: #173f46; font-size: 28px; }
        .subtitle { margin: 7px 0 0; color: #617174; }
        .panel { padding: 24px; border: 1px solid #dce5e1; border-radius: 6px; background: #fff; }
        .button { display: inline-flex; align-items: center; justify-content: center; min-height: 40px; padding: 9px 15px; border: 1px solid transparent; border-radius: 4px; font: inherit; font-size: 14px; font-weight: 600; text-decoration: none; cursor: pointer; }
        .button-primary { background: #176b59; color: #fff; }
        .button-primary:hover { background: #105746; }
        .button-secondary { border-color: #cad6d1; background: #fff; color: #344b4e; }
        .button-danger { border-color: #e3c5c1; background: #fff; color: #a33e35; }
        .book-table { width: 100%; border-collapse: collapse; text-align: left; }
        .book-table th, .book-table td { padding: 13px 12px; border-bottom: 1px solid #e8eeeb; vertical-align: middle; }
        .book-table th { color: #526568; font-size: 12px; font-weight: 700; text-transform: uppercase; }
        .book-table td { font-size: 14px; }
        .actions { display: flex; flex-wrap: wrap; gap: 8px; }
        .empty-state { padding: 38px 16px; text-align: center; color: #617174; }
        .empty-state strong { display: block; margin-bottom: 8px; color: #173f46; font-size: 18px; }
        .book-form { display: grid; gap: 18px; max-width: 620px; }
        .field { display: grid; gap: 7px; }
        .field label { color: #344b4e; font-size: 14px; font-weight: 600; }
        .field input { width: 100%; min-height: 42px; padding: 9px 11px; border: 1px solid #bdcbc5; border-radius: 4px; background: #fff; color: #172b3a; font: inherit; }
        .field input:focus { border-color: #176b59; outline: 3px solid #d4ebe2; }
        .field-error, .alert { color: #a33e35; font-size: 13px; }
        .form-actions { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 4px; }
        @media (max-width: 680px) {
            .topbar { padding: 16px 20px; }
            .container { width: min(100% - 28px, 1080px); margin: 28px auto; }
            .page-heading { align-items: flex-start; flex-direction: column; }
            .panel { padding: 16px; }
            .table-wrap { overflow-x: auto; }
            .book-table { min-width: 650px; }
        }
    </style>
</head>
<body>
    <header class="topbar">
        <a class="brand" href="/books">Ruang Baca</a>
        <nav 
          <a href="/" class="mr-4 hover:underline font-semibold">Beranda</a>
          <a href="/about" class="mr-4 hover:underline font-semibold">Tentang</a>
          <a href="/contact" class="mr-4 hover:underline font-semibold">Kontak</a>
          <a href="/books" class="hover:underline font-semibold">Daftar Buku</a>
        </nav>
    </header>
    <main class="container">
        @if (session('status'))
            <p class="alert">{{ session('status') }}</p>
        @endif
        @yield('content')
    </main>
</body>
</html>