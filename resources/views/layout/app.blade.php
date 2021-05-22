<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('judul')</title>
</head>
<body>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <table>
            <thead>
                <tr>
                    <td><a href={{url('/')}}><span>Home</span></a></td>
                    <td><a href={{url('/artikel')}}><span>Artikel</span></a></td>
                    <td><a href={{url('/contact')}}><span>Contact Us</span></a></td>
                </tr>
            </thead>
        </table>
    </div>

    <div>
      @yield('isi')
    </div>
</body>
</html>
