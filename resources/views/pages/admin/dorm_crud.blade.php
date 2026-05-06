<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>CommonGround - Dorm Index</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary": "#ffffff",
                        "tertiary-fixed": "#ffd9e4",
                        "primary-fixed": "#bcf0ae",
                        "on-tertiary-fixed-variant": "#71314c",
                        "outline-variant": "#c2c9bb",
                        "on-background": "#191c18",
                        "on-primary-container": "#9dd090",
                        "surface-container-highest": "#e2e3dc",
                        "on-secondary-container": "#732010",
                        "surface-dim": "#d9dbd3",
                        "surface-container-lowest": "#ffffff",
                        "on-error": "#ffffff",
                        "surface-container-high": "#e7e9e1",
                        "background": "#f9faf2",
                        "surface": "#f9faf2",
                        "on-error-container": "#93000a",
                        "on-primary-fixed-variant": "#23501e",
                        "primary-fixed-dim": "#a1d494",
                        "error-container": "#ffdad6",
                        "inverse-on-surface": "#f0f1ea",
                        "tertiary": "#60233e",
                        "on-primary-fixed": "#002201",
                        "inverse-primary": "#a1d494",
                        "surface-container-low": "#f3f4ed",
                        "outline": "#72796e",
                        "surface-variant": "#e2e3dc",
                        "on-secondary-fixed": "#3e0500",
                        "on-surface": "#191c18",
                        "secondary-fixed-dim": "#ffb4a5",
                        "surface-container": "#edefe7",
                        "surface-bright": "#f9faf2",
                        "inverse-surface": "#2e312c",
                        "on-tertiary": "#ffffff",
                        "error": "#ba1a1a",
                        "primary": "#154212",
                        "secondary": "#9f402d",
                        "secondary-fixed": "#ffdad3",
                        "primary-container": "#2d5a27",
                        "surface-tint": "#3b6934",
                        "on-tertiary-container": "#ffaac8",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#fd876f",
                        "on-surface-variant": "#42493e",
                        "on-secondary-fixed-variant": "#802918",
                        "on-tertiary-fixed": "#3b0520",
                        "tertiary-container": "#7c3a55",
                        "tertiary-fixed-dim": "#ffb0cc"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "stack-lg": "2rem",
                        "container-max": "1280px",
                        "gutter": "1.5rem",
                        "stack-md": "1rem",
                        "section-padding": "3rem",
                        "stack-sm": "0.5rem"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-xl": ["Inter"],
                        "label-caps": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                        "headline-xl": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "headline-lg": ["30px", {"lineHeight": "38px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
</head>
<body class="bg-background font-body-md text-on-surface">
<!-- SideNavBar Shell -->
<nav class="fixed left-0 top-0 h-full w-64 border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 shadow-sm flex flex-col py-6 z-50">
<div class="px-6 mb-8">
<h1 class="text-xl font-bold text-green-800 dark:text-green-400 tracking-tight">CommonGround</h1>
<p class="text-xs text-gray-500 font-medium uppercase tracking-widest mt-1">Hostel Management</p>
</div>
<div class="flex-1 px-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-medium text-sm">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
<span class="font-medium text-sm">Bookings</span>
</a>
<!-- Active Navigation: Rooms -->
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-green-800 dark:text-green-400 bg-gray-50 dark:bg-gray-800/50 border-r-4 border-green-800 dark:border-green-400 font-medium text-sm transition-all duration-200 active:scale-[0.98]" href="#">
<span class="material-symbols-outlined" data-icon="bed" style="font-variation-settings: 'FILL' 1;">bed</span>
<span class="font-medium text-sm">Rooms</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span class="font-medium text-sm">Guests</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined" data-icon="badge">badge</span>
<span class="font-medium text-sm">Staff</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-medium text-sm">Settings</span>
</a>
</div>
<div class="px-4 mt-auto">
<button class="w-full py-3 px-4 bg-primary text-on-primary rounded-xl font-semibold text-sm flex items-center justify-center gap-2 hover:opacity-90 active:scale-[0.98] transition-all">
<span class="material-symbols-outlined text-base" data-icon="help">help</span>
                Support Center
            </button>
</div>
</nav>
<!-- TopAppBar Shell -->
<header class="fixed top-0 right-0 w-[calc(100%-16rem)] h-16 border-b border-gray-200 dark:border-gray-800 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md flex items-center justify-between px-8 z-40 shadow-sm">
<div class="flex items-center flex-1 max-w-md">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xl" data-icon="search">search</span>
<input class="w-full bg-surface-container-low border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary/20" placeholder="Search dorms, wings or guests..." type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<div class="flex items-center gap-3">
<button class="p-2 text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="p-2 text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="help">help</span>
</button>
<button class="p-2 text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
</button>
</div>
<div class="h-6 w-px bg-gray-200 dark:bg-gray-800"></div>
<button class="bg-primary hover:bg-primary-container text-on-primary px-5 py-2 rounded-lg font-bold text-sm active:scale-[0.98] transition-all">
                New Booking
            </button>
</div>
</header>
<!-- Main Content Canvas -->
<main class="ml-64 pt-24 px-8 pb-12 min-h-screen">
<div class="max-w-container-max mx-auto">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between mb-10">
<div>
<h2 class="font-headline-xl text-headline-xl text-on-surface mb-2">Dorm Index</h2>
<p class="text-body-md text-on-surface-variant max-w-2xl">Manage and monitor room allocations across all wings. Real-time occupancy tracking for your hostel operations.</p>
</div>
<div class="flex gap-4 mt-6 md:mt-0">
<div class="bg-white p-4 rounded-2xl shadow-sm border-t-2 border-primary flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined" data-icon="meeting_room">meeting_room</span>
</div>
<div>
<p class="text-label-sm text-on-surface-variant uppercase tracking-wider">Total Wings</p>
<p class="font-headline-md text-headline-md leading-none">08</p>
</div>
</div>
<div class="bg-white p-4 rounded-2xl shadow-sm border-t-2 border-secondary flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-secondary">
<span class="material-symbols-outlined" data-icon="percent">percent</span>
</div>
<div>
<p class="text-label-sm text-on-surface-variant uppercase tracking-wider">Avg. Occupancy</p>
<p class="font-headline-md text-headline-md leading-none">74%</p>
</div>
</div>
</div>
</div>
<!-- Dorm Bento Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Atlas Wing Card -->
<div class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden border border-outline-variant/30">
<div class="h-48 w-full relative">
<img class="w-full h-full object-cover" data-alt="A serene and modern hostel dorm room with minimalist wooden bunk beds, crisp white linens, and large windows letting in soft morning light. The interior design features Forest Green accents and warm wooden textures, creating a welcoming and upscale atmosphere. The overall mood is clean, professional, and tranquil." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8Cl544K4DR82JWHPAYecSlY0dp2XH34GFgYyBjZyeOZDB6V00B7s5BONXr3fhaIP3fbjsJ6Ibn9qSgmYFawEgI1MkEuhS7tvLT8UzkfAE7lTN2Xxfw7qvTU1nTDP3FV_Tyafbf8LSVh_M8UImMsuxyah9fsBXKeMZFhW9lVYJMKwTmynpO_9LUYK-YAGGpu-8GjcvS02BhKddhfNXxH4wvAUVSXO3EOIw1RzuQQz9uSyBHfOHmLtE2EnYlgrMPU1Y7x13EbVCE2W0"/>
<div class="absolute top-4 right-4">
<span class="px-3 py-1 bg-secondary text-on-secondary rounded-full text-label-caps text-[10px] font-bold shadow-lg">92% OCCUPIED</span>
</div>
</div>
<div class="p-6 border-t-4 border-primary">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface">Atlas Wing</h3>
<p class="text-body-sm text-on-surface-variant">North Block • Mixed Dorms</p>
</div>
</div>
<div class="space-y-4 mb-6">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg" data-icon="bed">bed</span>
<span class="text-body-sm">Total Capacity</span>
</div>
<span class="font-bold text-on-surface">24 Beds</span>
</div>
<div class="w-full bg-surface-container rounded-full h-2">
<div class="bg-secondary h-2 rounded-full" style="width: 92%"></div>
</div>
</div>
<div class="flex items-center justify-between pt-4 border-t border-outline-variant">
<button class="text-primary font-bold text-sm flex items-center gap-1 hover:gap-2 transition-all">
                                Manage Beds <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
<span class="text-label-sm font-medium text-error flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="warning">warning</span> 2 Open
                            </span>
</div>
</div>
</div>
<!-- Forest Wing Card -->
<div class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden border border-outline-variant/30">
<div class="h-48 w-full relative">
<img class="w-full h-full object-cover" data-alt="An inviting eco-friendly hostel dorm with sustainable bamboo furniture and lush indoor plants scattered around. Soft afternoon sunlight filters through sheer curtains, casting gentle shadows. The room maintains a sophisticated forest green color palette with neutral earth tones, reflecting a premium yet communal travel experience." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlmfcAXb3tgAkc_xXFfU8_i0KS9X23rcX1Av-9CNxWHkOSniuklaDTaGmyCBjdLg06NeV-LK6cBqN60UwiMTzZAOgrdOPFLtayppGBU0zrpGos7ZYgGBX-kUAcD1y2TGcwa0twAstNMCzNTYsU5_6NvJP9zd4DLMD4wdCDTDHnry88d35jUlD5N5sG3nB32CanBMMI1szBvlNyBcTfA5r56yDsYStRysYRb038dabJBB_eG1mZbgKTEKhQAA0_gNIk5RtN5jhMbrzX"/>
<div class="absolute top-4 right-4">
<span class="px-3 py-1 bg-primary text-on-primary rounded-full text-label-caps text-[10px] font-bold shadow-lg">45% OCCUPIED</span>
</div>
</div>
<div class="p-6 border-t-4 border-primary">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface">Forest Wing</h3>
<p class="text-body-sm text-on-surface-variant">East Block • Garden View</p>
</div>
</div>
<div class="space-y-4 mb-6">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg" data-icon="bed">bed</span>
<span class="text-body-sm">Total Capacity</span>
</div>
<span class="font-bold text-on-surface">16 Beds</span>
</div>
<div class="w-full bg-surface-container rounded-full h-2">
<div class="bg-primary h-2 rounded-full" style="width: 45%"></div>
</div>
</div>
<div class="flex items-center justify-between pt-4 border-t border-outline-variant">
<button class="text-primary font-bold text-sm flex items-center gap-1 hover:gap-2 transition-all">
                                Manage Beds <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
<span class="text-label-sm font-medium text-primary flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="check_circle">check_circle</span> 9 Open
                            </span>
</div>
</div>
</div>
<!-- Summit Wing Card -->
<div class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden border border-outline-variant/30">
<div class="h-48 w-full relative">
<img class="w-full h-full object-cover" data-alt="A high-altitude themed hostel dorm with sleek metallic bunk beds and blue-toned ambient lighting. The room feels spacious and modern, featuring industrial chic elements like exposed brick walls and polished concrete floors. Forest Green textiles provide warmth against the cool color palette, creating a professional and reliable property management environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzgbbn_K1MjvwWj7C1uxReyRWtyOiQLutBiOkbAHfxXYnDb0IvgX9QxJXu3G7BQu5Ag_Oxftw-rgozBJUOXjebXPpzqUQ94LM8JS9t_MBdhFaqiRag3QVJfSxCsOvE6gIi7sn2p8MUV7jA8Cuy8av0FlsEuGTqF6x54oZ8fW2a4tHr_HtpVRuD05NIGIxEaxHgraAg5gIYWFHvA47JCE-qmzfTiOPSQhYnwfL3-ffMjyNbzP5wxe3VnZk8JGhw2RzkMgVT-mEDJ2ik"/>
<div class="absolute top-4 right-4">
<span class="px-3 py-1 bg-surface-container-highest text-on-surface-variant rounded-full text-label-caps text-[10px] font-bold shadow-lg">68% OCCUPIED</span>
</div>
</div>
<div class="p-6 border-t-4 border-primary">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface">Summit Wing</h3>
<p class="text-body-sm text-on-surface-variant">South Block • Private Bunks</p>
</div>
</div>
<div class="space-y-4 mb-6">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg" data-icon="bed">bed</span>
<span class="text-body-sm">Total Capacity</span>
</div>
<span class="font-bold text-on-surface">12 Beds</span>
</div>
<div class="w-full bg-surface-container rounded-full h-2">
<div class="bg-primary-container h-2 rounded-full" style="width: 68%"></div>
</div>
</div>
<div class="flex items-center justify-between pt-4 border-t border-outline-variant">
<button class="text-primary font-bold text-sm flex items-center gap-1 hover:gap-2 transition-all">
                                Manage Beds <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
<span class="text-label-sm font-medium text-primary flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="check_circle">check_circle</span> 4 Open
                            </span>
</div>
</div>
</div>
<!-- River Wing Card -->
<div class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden border border-outline-variant/30">
<div class="h-48 w-full relative">
<img class="w-full h-full object-cover" data-alt="A modern dorm room with a view of a serene river through expansive floor-to-ceiling windows. The interior utilizes natural light and a soft color palette of whites and deep greens. The beds are arranged for maximum privacy, featuring individual reading lights and sleek privacy curtains. The overall mood is sophisticated, peaceful, and premium." src="https://lh3.googleusercontent.com/aida-public/AB6AXuABiwpGH5BI2pLz6FSeGvkL9OCwpVA1FjNGKOgPq7srjP81s6AhXWlDU4BDN-8MqODXdeEBo1oZ16XsoqPMWbPX46uCllwxeNVcyX6uWH301G549BOo6qHYQo0_xxilsmuPToUDxng8aBy27HyXCrYDuGQVaLm9nFYd3cL12rUQ10buK1_gohc5YoFHUj5ThXxDEOPwjPkpB-OFti95gmrOyBr6ZhHzCEyv7P7UynVNOQvOh6vYPA8HxOc7E0KmT_U4jaOYCHpGiYNg"/>
<div class="absolute top-4 right-4">
<span class="px-3 py-1 bg-secondary text-on-secondary rounded-full text-label-caps text-[10px] font-bold shadow-lg">88% OCCUPIED</span>
</div>
</div>
<div class="p-6 border-t-4 border-primary">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface">River Wing</h3>
<p class="text-body-sm text-on-surface-variant">West Block • Female Only</p>
</div>
</div>
<div class="space-y-4 mb-6">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg" data-icon="bed">bed</span>
<span class="text-body-sm">Total Capacity</span>
</div>
<span class="font-bold text-on-surface">20 Beds</span>
</div>
<div class="w-full bg-surface-container rounded-full h-2">
<div class="bg-secondary h-2 rounded-full" style="width: 88%"></div>
</div>
</div>
<div class="flex items-center justify-between pt-4 border-t border-outline-variant">
<button class="text-primary font-bold text-sm flex items-center gap-1 hover:gap-2 transition-all">
                                Manage Beds <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
<span class="text-label-sm font-medium text-error flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="warning">warning</span> 2 Open
                            </span>
</div>
</div>
</div>
<!-- Meadow Wing Card -->
<div class="group bg-white rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden border border-outline-variant/30">
<div class="h-48 w-full relative">
<img class="w-full h-full object-cover" data-alt="A cheerful hostel dorm room overlooking a sun-drenched meadow. Bright, airy design with white-washed walls and colorful botanical wall art. The room features high-quality wooden bunk beds with built-in storage. Accents of Forest Green and Terracotta are used throughout for a cohesive brand identity. The lighting is bright and high-key, creating an energetic and clean atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDacZqwb50i33MPoDQoJY0ebFxqmgkoveVLSTZ5mEI0hYQvi1ybkRfK1uZbX3UuRvSmGm3HWbKFuXA65rOZdm_qCuUj4gYvqaRcE-SJhYIqiLEQhloRM53cSVZ6347w8a9POtv91mmOm-U6of2uHaaNr0UN6FFFj08amRsreDZrHaPdgNQge1330pDlD4HFtDZUNjhUVZgV62ljrOfK_vZXNp2-AvLO14amLvjRdec4m6tY9MERrM6gYZCYyrVfNvgJuq0rbdG4LJ2"/>
<div class="absolute top-4 right-4">
<span class="px-3 py-1 bg-primary text-on-primary rounded-full text-label-caps text-[10px] font-bold shadow-lg">10% OCCUPIED</span>
</div>
</div>
<div class="p-6 border-t-4 border-primary">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface">Meadow Wing</h3>
<p class="text-body-sm text-on-surface-variant">North Block • Pet Friendly</p>
</div>
</div>
<div class="space-y-4 mb-6">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined text-lg" data-icon="bed">bed</span>
<span class="text-body-sm">Total Capacity</span>
</div>
<span class="font-bold text-on-surface">10 Beds</span>
</div>
<div class="w-full bg-surface-container rounded-full h-2">
<div class="bg-primary h-2 rounded-full" style="width: 10%"></div>
</div>
</div>
<div class="flex items-center justify-between pt-4 border-t border-outline-variant">
<button class="text-primary font-bold text-sm flex items-center gap-1 hover:gap-2 transition-all">
                                Manage Beds <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</button>
<span class="text-label-sm font-medium text-primary flex items-center gap-1">
<span class="material-symbols-outlined text-xs" data-icon="check_circle">check_circle</span> 9 Open
                            </span>
</div>
</div>
</div>
<!-- Archive Wing / Overflow -->
<div class="bg-gray-50 dark:bg-gray-800/30 rounded-2xl border-2 border-dashed border-gray-300 dark:border-gray-700 p-8 flex flex-col items-center justify-center text-center group cursor-pointer hover:bg-gray-100 transition-all">
<div class="w-16 h-16 rounded-full bg-white shadow-sm flex items-center justify-center text-gray-400 group-hover:text-primary transition-colors mb-4">
<span class="material-symbols-outlined text-3xl" data-icon="add_circle">add_circle</span>
</div>
<h3 class="text-headline-md text-on-surface font-semibold">Add New Dorm</h3>
<p class="text-body-sm text-on-surface-variant mt-2 max-w-[200px]">Configure a new wing or expansion block for your hostel.</p>
</div>
</div>
<!-- Table View for Detailed Management -->
<div class="mt-16 bg-white rounded-2xl shadow-sm border border-outline-variant/30 overflow-hidden">
<div class="px-8 py-6 border-b border-outline-variant flex justify-between items-center">
<h3 class="text-headline-md font-semibold text-on-surface">Quick Inventory Status</h3>
<div class="flex gap-2">
<button class="px-4 py-2 text-sm font-medium border border-outline rounded-lg hover:bg-gray-50">Export Data</button>
<button class="px-4 py-2 text-sm font-medium bg-primary text-on-primary rounded-lg shadow-sm active:scale-95 transition-all">Print Summary</button>
</div>
</div>
<table class="w-full text-left">
<thead class="bg-surface-container-low text-label-caps text-on-surface-variant uppercase">
<tr>
<th class="px-8 py-4 font-semibold">Dorm Name</th>
<th class="px-8 py-4 font-semibold">Block/Wing</th>
<th class="px-8 py-4 font-semibold text-center">Beds</th>
<th class="px-8 py-4 font-semibold text-center">Occupancy</th>
<th class="px-8 py-4 font-semibold text-right">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/30">
<tr class="hover:bg-gray-50 transition-colors group">
<td class="px-8 py-5 font-semibold text-on-surface">Atlas Wing</td>
<td class="px-8 py-5 text-on-surface-variant">North Wing • Floor 1</td>
<td class="px-8 py-5 text-center font-medium">24</td>
<td class="px-8 py-5">
<div class="flex items-center justify-center gap-3">
<div class="w-24 bg-gray-200 rounded-full h-1.5">
<div class="bg-secondary h-1.5 rounded-full" style="width: 92%"></div>
</div>
<span class="text-xs font-bold text-secondary">92%</span>
</div>
</td>
<td class="px-8 py-5 text-right">
<button class="text-primary hover:underline font-semibold text-sm">Update Status</button>
</td>
</tr>
<tr class="hover:bg-gray-50 transition-colors group">
<td class="px-8 py-5 font-semibold text-on-surface">Forest Wing</td>
<td class="px-8 py-5 text-on-surface-variant">East Wing • Floor 2</td>
<td class="px-8 py-5 text-center font-medium">16</td>
<td class="px-8 py-5">
<div class="flex items-center justify-center gap-3">
<div class="w-24 bg-gray-200 rounded-full h-1.5">
<div class="bg-primary h-1.5 rounded-full" style="width: 45%"></div>
</div>
<span class="text-xs font-bold text-primary">45%</span>
</div>
</td>
<td class="px-8 py-5 text-right">
<button class="text-primary hover:underline font-semibold text-sm">Update Status</button>
</td>
</tr>
<tr class="hover:bg-gray-50 transition-colors group">
<td class="px-8 py-5 font-semibold text-on-surface">River Wing</td>
<td class="px-8 py-5 text-on-surface-variant">West Wing • Floor 1</td>
<td class="px-8 py-5 text-center font-medium">20</td>
<td class="px-8 py-5">
<div class="flex items-center justify-center gap-3">
<div class="w-24 bg-gray-200 rounded-full h-1.5">
<div class="bg-secondary h-1.5 rounded-full" style="width: 88%"></div>
</div>
<span class="text-xs font-bold text-secondary">88%</span>
</div>
</td>
<td class="px-8 py-5 text-right">
<button class="text-primary hover:underline font-semibold text-sm">Update Status</button>
</td>
</tr>
</tbody>
</table>
<div class="px-8 py-4 bg-surface-container-lowest text-center">
<button class="text-label-caps text-on-surface-variant font-bold hover:text-primary transition-colors tracking-widest">Load More Data</button>
</div>
</div>
</div>
</main>
</body></html>