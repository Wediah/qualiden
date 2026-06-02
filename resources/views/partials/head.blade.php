<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Qualiden Group Limited | @yield('title')</title>
<link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon" sizes="62x62">
@vite('resources/css/app.css')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Montserrat', 'sans-serif'],
                },
                colors: {
                    primary: '#fbbf24',
                },
            },
        },
    };
</script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
@fluxAppearance
