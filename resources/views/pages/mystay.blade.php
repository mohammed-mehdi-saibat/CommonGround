<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-error-container": "#93000a",
                    "surface-container-low": "#f3f4ed",
                    "on-surface": "#191c18",
                    "on-primary-container": "#9dd090",
                    "tertiary-fixed": "#ffd9e4",
                    "surface-container": "#edefe7",
                    "primary": "#154212",
                    "tertiary-fixed-dim": "#ffb0cc",
                    "on-tertiary": "#ffffff",
                    "on-tertiary-fixed-variant": "#71314c",
                    "on-primary-fixed-variant": "#23501e",
                    "on-background": "#191c18",
                    "primary-fixed-dim": "#a1d494",
                    "inverse-primary": "#a1d494",
                    "on-secondary-fixed": "#3e0500",
                    "surface-bright": "#f9faf2",
                    "on-secondary": "#ffffff",
                    "secondary-fixed": "#ffdad3",
                    "on-primary-fixed": "#002201",
                    "tertiary": "#60233e",
                    "primary-fixed": "#bcf0ae",
                    "on-tertiary-container": "#ffaac8",
                    "on-secondary-container": "#732010",
                    "tertiary-container": "#7c3a55",
                    "surface-tint": "#3b6934",
                    "surface-dim": "#d9dbd3",
                    "error-container": "#ffdad6",
                    "surface-container-high": "#e7e9e1",
                    "inverse-on-surface": "#f0f1ea",
                    "on-primary": "#ffffff",
                    "surface-container-highest": "#e2e3dc",
                    "on-surface-variant": "#42493e",
                    "on-tertiary-fixed": "#3b0520",
                    "secondary": "#9f402d",
                    "surface-container-lowest": "#ffffff",
                    "outline-variant": "#c2c9bb",
                    "surface": "#f9faf2",
                    "error": "#ba1a1a",
                    "inverse-surface": "#2e312c",
                    "background": "#f9faf2",
                    "outline": "#72796e",
                    "secondary-container": "#fd876f",
                    "surface-variant": "#e2e3dc",
                    "primary-container": "#2d5a27",
                    "secondary-fixed-dim": "#ffb4a5",
                    "on-error": "#ffffff",
                    "on-secondary-fixed-variant": "#802918"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "fontFamily": {
                    "label-caps": ["Inter"],
                    "headline-lg": ["Inter"],
                    "headline-xl": ["Inter"],
                    "body-sm": ["Inter"],
                    "label-sm": ["Inter"],
                    "headline-md": ["Inter"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"]
            },
            "fontSize": {
                    "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "headline-lg": ["30px", {"lineHeight": "38px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "headline-xl": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .active-scale:active { transform: scale(0.98); transition: transform 0.2s ease-in-out; }
    </style>
</head>
<body class="bg-surface-container-lowest text-on-surface font-body-md">
<!-- TopNavBar -->
<header class="bg-white dark:bg-slate-900 shadow-sm border-b border-gray-200 dark:border-gray-800 sticky top-0 z-[100]">
<div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center w-full">
<div class="flex items-center gap-8">
<span class="text-xl font-bold text-green-800 dark:text-green-500 font-headline-md">CommonGround</span>
<nav class="hidden md:flex gap-6 items-center">
<a class="text-gray-500 dark:text-gray-400 hover:text-green-700 font-inter text-sm font-medium tracking-tight" href="#">Home</a>
<a class="text-green-800 dark:text-green-400 border-b-2 border-green-800 pb-4 pt-4 font-inter text-sm font-medium tracking-tight" href="#">Profile</a>
</nav>
</div>
<div class="flex items-center gap-4">
<button class="p-2 hover:bg-gray-50 dark:hover:bg-slate-800 rounded-full transition-colors">
<span class="material-symbols-outlined text-gray-600" data-icon="notifications">notifications</span>
</button>
<button class="font-inter text-sm font-medium tracking-tight text-gray-500 hover:text-green-700 active-scale">Logout</button>
</div>
</div>
</header>
<main class="max-w-7xl mx-auto px-6 py-8 pb-32">
<!-- Dashboard Content Grid -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-8">
<!-- Welcome Card (Bento Style) -->
<section class="md:col-span-8">
<div class="relative overflow-hidden rounded-2xl bg-primary-container text-on-primary-container p-8 shadow-sm min-h-[320px] flex flex-col justify-end">
<div class="absolute top-0 right-0 p-8 opacity-20">
<span class="material-symbols-outlined text-[120px]" data-icon="bed">bed</span>
</div>
<div class="relative z-10">
<h1 class="font-headline-xl text-on-primary-container mb-2">Welcome back, Traveler.</h1>
<p class="font-body-lg opacity-90 mb-8 max-w-md">Your comfort is our priority at CommonGround. Everything you need for your stay is managed right here.</p>
<div class="flex flex-wrap gap-4">
<div class="bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20 flex-1 min-w-[140px]">
<p class="font-label-sm uppercase tracking-wider opacity-70 mb-1">Your Bed</p>
<p class="font-headline-md">B-12</p>
</div>
<div class="bg-white/10 backdrop-blur-md rounded-xl p-4 border border-white/20 flex-1 min-w-[140px]">
<p class="font-label-sm uppercase tracking-wider opacity-70 mb-1">Dorm</p>
<p class="font-headline-md">Atlas Wing</p>
</div>
</div>
</div>
<img class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30" data-alt="A modern and clean shared dormitory room with minimalist wooden bunk beds, crisp white linens, and soft natural sunlight filtering through large windows. The atmosphere is calm and professional, utilizing a palette of forest greens and soft neutrals to evoke a sense of high-end communal living." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwp8oBA_wWMoO4S1JWBTfWRe2tnoEfK7qp9BGTxaw6mab1FyVne3vwdCt4tBMpSIttVPMOZW_NmAg2nO5_j-H4TbsH15xONkRpB8DsgVLxeNIAtidGcP3XBB25qOiyXNBpUL0_oEDb81nirjuz2CmFTc4sCZyncXxqEMGGv61FdXkUbv6oM5h8AZ_NckROUFEkrnqnhtupG-CdORGwbhmyGHoUewnM_tT0Zxlg3iwI4g3ocEv91g6_jK1-_flqBUlftzppPSygOHWE"/>
</div>
</section>
<!-- Checkout Alert Card -->
<aside class="md:col-span-4 flex flex-col gap-6">
<div class="bg-white rounded-2xl p-6 shadow-sm border-t-2 border-secondary flex flex-col justify-between h-full">
<div>
<div class="flex items-center gap-3 mb-4 text-secondary">
<span class="material-symbols-outlined" data-icon="event_upcoming">event_upcoming</span>
<span class="font-label-caps">STAY STATUS</span>
</div>
<h2 class="font-headline-md text-on-surface mb-2">Check-out Today</h2>
<p class="font-body-md text-on-surface-variant">Please ensure your belongings are packed and the locker is cleared before the deadline.</p>
</div>
<div class="mt-8 bg-secondary-container/20 rounded-xl p-4 flex items-center justify-between">
<div>
<p class="font-label-sm text-secondary">Deadline</p>
<p class="font-headline-lg text-secondary">11:00 AM</p>
</div>
<button class="bg-secondary text-on-secondary px-6 py-2 rounded-full font-label-sm active-scale shadow-sm">
                            REQUEST LATE
                        </button>
</div>
</div>
</aside>
<!-- Hostel Rules & Amenities -->
<section class="md:col-span-12 grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-start gap-4">
<div class="bg-surface-container rounded-xl p-3">
<span class="material-symbols-outlined text-primary" data-icon="volume_off">volume_off</span>
</div>
<div>
<h3 class="font-headline-sm font-semibold mb-1">Quiet Hours</h3>
<p class="font-body-sm text-on-surface-variant">10 PM — 7 AM. Please keep voices low in common areas.</p>
</div>
</div>
<div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-start gap-4">
<div class="bg-surface-container rounded-xl p-3">
<span class="material-symbols-outlined text-primary" data-icon="wifi">wifi</span>
</div>
<div>
<h3 class="font-headline-sm font-semibold mb-1">Free Wi-Fi</h3>
<p class="font-body-sm text-on-surface-variant">SSID: CommonGround_Guest<br/>Pass: stayconnected</p>
</div>
</div>
<div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 flex items-start gap-4">
<div class="bg-surface-container rounded-xl p-3">
<span class="material-symbols-outlined text-primary" data-icon="kitchen">kitchen</span>
</div>
<div>
<h3 class="font-headline-sm font-semibold mb-1">Kitchen Access</h3>
<p class="font-body-sm text-on-surface-variant">Label your food. Kitchen closes at 11 PM for cleaning.</p>
</div>
</div>
</section>
<!-- Detailed Rules & Interactive Section -->
<section class="md:col-span-7 bg-white p-8 rounded-2xl shadow-sm">
<h3 class="font-headline-md mb-6">House Guidelines</h3>
<div class="space-y-6">
<div class="flex items-center justify-between pb-4 border-b border-gray-100">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="smoking_rooms">smoking_rooms</span>
<span class="font-body-md">Smoking Policy</span>
</div>
<span class="text-label-sm font-semibold text-error px-3 py-1 bg-error-container/30 rounded-full">OUTDOORS ONLY</span>
</div>
<div class="flex items-center justify-between pb-4 border-b border-gray-100">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="group">group</span>
<span class="font-body-md">Guest Visitors</span>
</div>
<span class="text-label-sm font-semibold text-on-surface-variant px-3 py-1 bg-surface-container rounded-full">UNTIL 8 PM</span>
</div>
<div class="flex items-center justify-between pb-4 border-b border-gray-100">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="local_laundry_service">local_laundry_service</span>
<span class="font-body-md">Laundry Service</span>
</div>
<span class="text-label-sm font-semibold text-primary px-3 py-1 bg-primary-container/20 rounded-full">24/7 ACCESS</span>
</div>
</div>
</section>
<!-- Map/Local Area Card -->
<section class="md:col-span-5 bg-white rounded-2xl overflow-hidden shadow-sm flex flex-col">
<div class="h-48 w-full bg-surface-container-high relative">
<img class="w-full h-full object-cover" data-alt="A stylized aerial map view of a vibrant city neighborhood, featuring green parks, structured urban blocks, and soft morning light. The image has a clean, architectural quality with professional color grading that highlights the communal and connected nature of the location." data-location="Berlin" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDGSQ9LWailuokGe0e5akYLFe715fjJVFnMNFdpEAo17zJ9zNnEVdfzXjJ4Xm1X7G35wRkNaFHwuYif-HZgX1332gyAQrmFWMxqi8K002qKVYBe7jA_w9W9I51pYwBsTBtGdICpxdck4WiElNUOO66lRMYAiooxVfWibjo8e_1qY5bOGQ8-7x7E7gEKl5rlPkImQZl98L-_50nsN5fH7ScfOHWx7BCN9X7YW9CbcFwDdm0E68EYv6ZzwKy_iQzHznwqavTgO321sX5Q"/>
<div class="absolute inset-0 bg-gradient-to-t from-white to-transparent"></div>
</div>
<div class="p-6">
<h3 class="font-headline-md mb-2">Neighborhood Guide</h3>
<p class="font-body-sm text-on-surface-variant mb-6">Discover the best coffee shops and co-working spaces within a 5-minute walk.</p>
<button class="w-full py-3 rounded-xl border-2 border-primary text-primary font-label-sm hover:bg-primary hover:text-white transition-all active-scale">
                        EXPLORE LOCAL SPOTS
                    </button>
</div>
</section>
</div>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-6 pt-3 bg-white dark:bg-slate-900 shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.05)] border-t border-gray-100 dark:border-gray-800 z-50 rounded-t-2xl md:hidden">
<a class="flex flex-col items-center justify-center text-gray-400 dark:text-gray-500 px-4 py-2 hover:text-green-700 active-scale" href="#">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="text-[10px] font-semibold uppercase tracking-wider">Home</span>
</a>
<a class="flex flex-col items-center justify-center bg-green-50 dark:bg-green-900/40 text-green-800 dark:text-green-300 rounded-2xl px-4 py-2 active-scale" href="#">
<span class="material-symbols-outlined" data-icon="bed" style="font-variation-settings: 'FILL' 1;">bed</span>
<span class="text-[10px] font-semibold uppercase tracking-wider">My Stay</span>
</a>
<a class="flex flex-col items-center justify-center text-gray-400 dark:text-gray-500 px-4 py-2 hover:text-green-700 active-scale" href="#">
<span class="material-symbols-outlined" data-icon="assignment">assignment</span>
<span class="text-[10px] font-semibold uppercase tracking-wider">Tasks</span>
</a>
<a class="flex flex-col items-center justify-center text-gray-400 dark:text-gray-500 px-4 py-2 hover:text-green-700 active-scale" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="text-[10px] font-semibold uppercase tracking-wider">Profile</span>
</a>
</nav>
</body></html>