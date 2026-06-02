<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Qualiden Group Limited | @yield('title')</title>
<link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/x-icon" sizes="62x62">

<!-- 1. Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- 2. Icons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!-- 3. AOS Animation CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!-- 4. Flowbite CSS (Required for Flowbite components) -->
<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

<!-- 5. Tailwind CSS via CDN + Custom Config -->
<script src="https://cdn.tailwindcss.com"></script>
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
        // Important: Tell Tailwind to scan your Blade files for classes
        content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./node_modules/flowbite/**/*.js"
        ],
        plugins: [
            // If you need Flowbite plugins for Tailwind, add them here if available via CDN,
            // otherwise standard Flowbite CSS/JS handles most UI components.
        ]
    }
</script>

<!-- 6. Libraries JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- Initialize AOS -->
<script>
    AOS.init();
</script>

@fluxAppearance
