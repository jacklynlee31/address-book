<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    <title>Address Book</title>
</head>
<body>

<div class="nav">
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('contacts.index') }}">Address Book</a>
</div>

<div>
    <div class="content">
        @yield('content')
    </div>
</div>

</body>
</html>
