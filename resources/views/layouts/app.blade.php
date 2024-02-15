<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{t('website_title')}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;900&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    {{--}}
    <link id="favicon" rel="icon" type="image/x-icon" href="favicon-default.ico">
    <link rel="icon" href="{{ asset('logo-32.png') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('logo-192.png') }}" sizes="192x192" />
    --}}

    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    {{-- Google Analytics --}}
    @if (getDomain() != '127.0.0.1' and 1==2)
        @if (getLanguageId()==1)
            <!-- Google tag - xecode.lt (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-SMHY0GVH8X"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-SMHY0GVH8X');
            </script>
        @else
            <!-- Google tag - xecode.io (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-4CPPRLCMN4"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-4CPPRLCMN4');
            </script>
        @endif
    @endif

</head>

<body class="bg-white mt-20">


    <!-- Left Sidebar (hidden on mobile, toggled with button) -->
    <div class="hidden md:w-64 bg-white h-screen md:block md:fixed top-0 left-0 overflow-y-auto sidebar">
        <!-- Logo -->
        <a href="{{url('/')}}">
            <div class="p-4">
                <span class="text-6xl font-black float-left">mvp</span><div class="text-2xl mt-[-2px] font-bold float-left">2</div>
            </div>
        </a>
        <!-- Other content for the left sidebar goes here -->
    </div>

    <!-- Mobile Button to Open Sidebar -->
    {{--
    <button class="sm:hidden block fixed top-4 right-4 z-50 bg-blue-500 text-white px-4 py-2 rounded-md open-sidebar">
        Open Sidebar
    </button>
    --}}

    <!-- Main Content Area (including Articles) -->
    <main class="">




        <!-- Articles -->
        <div class="md:ml-64 w-500px" >
            @yield('content')

            <!-- Repeat the above card structure for each article -->
        </div>
    </main>

    <script>
        // JavaScript replaced with Tailwind CSS classes
        const openSidebarButton = document.querySelector('.open-sidebar');
        const sidebar = document.querySelector('.sidebar');
        openSidebarButton.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>

</html>
