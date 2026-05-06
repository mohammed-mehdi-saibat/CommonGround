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
                    "spacing": {
                        "container-max": "1280px",
                        "gutter": "1.5rem",
                        "stack-sm": "0.5rem",
                        "stack-md": "1rem",
                        "section-padding": "3rem",
                        "stack-lg": "2rem"
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
        body {
            background-color: #f9faf2;
        }
    </style>
</head>
<body class="font-body-md text-on-background bg-background">
<!-- Top Navigation Bar -->
<nav class="bg-white dark:bg-slate-900 shadow-sm border-b border-gray-200 dark:border-gray-800 sticky top-0 z-50">
<div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center w-full">
<div class="flex items-center gap-8">
<span class="text-xl font-bold text-green-800 dark:text-green-500 font-headline-md">CommonGround</span>
<div class="hidden md:flex gap-6 font-inter text-sm font-medium tracking-tight">
<a class="text-gray-500 dark:text-gray-400 hover:text-green-700 transition-colors" href="#">Home</a>
<a class="text-green-800 dark:text-green-400 border-b-2 border-green-800 pb-4 transition-colors" href="#">Tasks</a>
<a class="text-gray-500 dark:text-gray-400 hover:text-green-700 transition-colors" href="#">Profile</a>
</div>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-gray-500 hover:bg-gray-50 dark:hover:bg-slate-800 rounded-full transition-colors">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<div class="h-8 w-px bg-gray-200 mx-2"></div>
<span class="text-sm font-medium text-green-800">Logout</span>
</div>
</div>
</nav>
<main class="max-w-7xl mx-auto px-6 py-10">
<header class="mb-10">
<h1 class="font-headline-xl text-primary mb-2">Service Portal</h1>
<p class="text-on-surface-variant font-body-lg">Welcome back, Staff. Here is the operational overview for today.</p>
</header>
<!-- Bento Grid Layout -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
<!-- Left Side: Arrival Dashboard (The Core Task) -->
<div class="md:col-span-8 bg-white rounded-2xl shadow-sm border-t-2 border-primary overflow-hidden">
<div class="p-6 border-b border-outline-variant flex justify-between items-center">
<div>
<h2 class="font-headline-md text-primary">Arrivals Today</h2>
<p class="font-body-sm text-on-surface-variant">Manage incoming guests and bed assignments</p>
</div>
<div class="flex gap-2">
<span class="bg-surface-container-high px-3 py-1 rounded-full text-label-sm text-primary flex items-center gap-1">
<span class="material-symbols-outlined text-[16px]" data-icon="group">group</span>
                            12 Pending
                        </span>
</div>
</div>
<div class="divide-y divide-gray-100">
<!-- Row 1 -->
<div class="p-6 flex items-center justify-between hover:bg-surface-bright transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container font-bold text-headline-md overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A professional headshot of a friendly young woman with a warm smile, set against a soft, sunlit blurred outdoor background. The lighting is golden hour, casting a gentle glow that fits a modern, high-end hospitality UI. The composition is clean and focused, reflecting a premium service portal aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvvqkytFeddy3SzPdIRtI3AUVfJtSOaDI9DoSqo9XLSOkgVW4D18PXDbur5dZtM2muCTNxiwKi5-rOGuitbXLsCudS7WtCfODWoKhzq9JxkTVANKc6CHe4ApMCs8LQpwzF1x2mYk1bZzji5juBvbeoXS7uhhN7A6kM8aTQveJOkqIA1Oy7ilmjnnVOMve0NZJLP97aQnryatICgcByaJLR0c3F8JzBys6zU3XF0_tDZJXp0a86rHTw9ForT8DG_PuBdsNhjqI07TfH"/>
</div>
<div>
<p class="font-headline-sm text-on-surface">Sarah J.</p>
<p class="font-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" data-icon="bed">bed</span>
                                    Bed C-04
                                </p>
</div>
</div>
<div class="flex items-center gap-6">
<span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-label-sm font-semibold">Confirmed</span>
<button class="bg-primary hover:bg-primary-container text-white px-5 py-2 rounded-xl text-label-sm font-bold shadow-sm transition-transform active:scale-95">
                                Check-in
                            </button>
</div>
</div>
<!-- Row 2 -->
<div class="p-6 flex items-center justify-between hover:bg-surface-bright transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container font-bold text-headline-md overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A portrait of a male traveler in his late 20s with a relaxed and approachable expression. He is wearing a neutral-toned linen shirt, suggesting a communal living or travel lifestyle. The lighting is soft and natural, emphasizing a professional yet welcoming hostel environment. Colors are muted earth tones to match the corporate-minimalist style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKk_wStIgitlmpVh5VF1ZP5-ZUgyy08aKTdqhFvDQz6AlKDa8cazbWLDFaoEpYdlem2_tkI6uh9f3MYox-5U7pMCukrN4KoLa3VP4kO3zaFjc5FH4cdKe-Y69hi0XoHfz3vKjItcSg3CDyfTuQMKxwnPiHWXzv1ia_6LjZOohwA2_B138Wia8GPNfnNJAHFpVwNznkAvsDrrVcPFKbwxAbzpKL_XlO8KG71xzTryIylQHXhdZBRe5sAzxCVc6RN6irOQ-NK0-GnvoG"/>
</div>
<div>
<p class="font-headline-sm text-on-surface">Marcus T.</p>
<p class="font-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" data-icon="bed">bed</span>
                                    Bed A-12
                                </p>
</div>
</div>
<div class="flex items-center gap-6">
<span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-label-sm font-semibold">Checked-In</span>
<button class="bg-surface-container-highest text-on-surface-variant px-5 py-2 rounded-xl text-label-sm font-bold cursor-not-allowed opacity-50">
                                Completed
                            </button>
</div>
</div>
<!-- Row 3 -->
<div class="p-6 flex items-center justify-between hover:bg-surface-bright transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed font-bold text-headline-md overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A clean, minimalist portrait of a woman looking directly into the camera with a confident and helpful demeanor. The background is a solid, light-neutral color that ensures clarity in a dashboard list view. The lighting is bright and even, reinforcing the professional management feel of the CommonGround portal." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDh8d5_ubilxfW3AwHOSCw9hREf2X34bESPesG9QOnkF6aZ33fwzdd4mqySurfC8Vbe2iDSV9RPh8IzyYyDpYHmgSkU-pnK5XJkW4k1Q5Uq5ajZ7TZ1TQzyi4wKFORQyDaKiZ6LkTgA2nFM7e82WW0UG6vpYFo2JUp4OIWvEgOPuTr4vlSgC9d4Q2qHTRj0A1ijHxleBpyx4sLqZjgJMrKV86euirreatzGebKWlk1rZ29wu-ozLI8f0jht-SoSn4x9AqbkOy8J82AM"/>
</div>
<div>
<p class="font-headline-sm text-on-surface">Elena R.</p>
<p class="font-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" data-icon="bed">bed</span>
                                    Bed B-08
                                </p>
</div>
</div>
<div class="flex items-center gap-6">
<span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-label-sm font-semibold">Confirmed</span>
<button class="bg-primary hover:bg-primary-container text-white px-5 py-2 rounded-xl text-label-sm font-bold shadow-sm transition-transform active:scale-95">
                                Check-in
                            </button>
</div>
</div>
<!-- Row 4 -->
<div class="p-6 flex items-center justify-between hover:bg-surface-bright transition-colors">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-outline-variant flex items-center justify-center text-on-surface-variant font-bold text-headline-md overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A portrait of a male guest in a brightly lit, modern interior space. He appears friendly and ready for check-in, capturing the spirit of shared travel experiences. The visual style is crisp and high-contrast, utilizing soft shadows and the nature-inspired color palette of the host portal." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBtD4eWx1eu5IvauQnWDlyDMMICfjBvdd5V-t5MUJECp5L06Nq-U7uBEYTcMfvC9dJbnVvLlSoWDBaFMpM6ZXYdFrzhEdzS9iK9eiXoGSAP1fX-VG8WQTXPeguyZNakb3FqRoI9hHYBgdvfSzNIoUB7scb5GXdfI9aooEMGjYv0wRWyLynmePDNMFpoOwtlZl_p2H-XzJueP2HFZprW70IN1Wk1QZ6jmvoLtBqQi3U_-vOcChbInNU8DoO2BU6Q2Wl2wN5Z7mBmiVux"/>
</div>
<div>
<p class="font-headline-sm text-on-surface">David K.</p>
<p class="font-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]" data-icon="bed">bed</span>
                                    Bed D-01
                                </p>
</div>
</div>
<div class="flex items-center gap-6">
<span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-label-sm font-semibold">Confirmed</span>
<button class="bg-primary hover:bg-primary-container text-white px-5 py-2 rounded-xl text-label-sm font-bold shadow-sm transition-transform active:scale-95">
                                Check-in
                            </button>
</div>
</div>
</div>
<div class="p-4 bg-surface-container-lowest text-center">
<button class="text-primary font-label-sm hover:underline">View All Arrivals</button>
</div>
</div>
<!-- Right Side: Secondary Actions & Stats -->
<div class="md:col-span-4 space-y-8">
<!-- Quick Tasks Card -->
<div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
<h3 class="font-headline-md text-primary mb-4">Internal Tasks</h3>
<ul class="space-y-4">
<li class="flex items-start gap-3">
<input class="mt-1 rounded text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<div>
<p class="font-body-sm text-on-surface font-medium">Verify Laundry Drop-off</p>
<p class="text-[11px] text-on-surface-variant">Due in 20 mins</p>
</div>
</li>
<li class="flex items-start gap-3">
<input class="mt-1 rounded text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<div>
<p class="font-body-sm text-on-surface font-medium">Refill Coffee Station</p>
<p class="text-[11px] text-on-surface-variant">Common Area</p>
</div>
</li>
<li class="flex items-start gap-3">
<input checked="" class="mt-1 rounded text-primary focus:ring-primary h-4 w-4" type="checkbox"/>
<div>
<p class="font-body-sm text-on-surface font-medium line-through opacity-50">Sanitize Dorm B-02</p>
<p class="text-[11px] text-on-surface-variant">Completed by Admin</p>
</div>
</li>
</ul>
<button class="w-full mt-6 bg-secondary text-white py-2 rounded-xl font-label-sm font-bold shadow-sm hover:opacity-90 transition-opacity">
                        Add New Task
                    </button>
</div>
<!-- Occupancy Widget -->
<div class="bg-primary-container p-6 rounded-2xl shadow-sm text-on-primary-container">
<h3 class="font-label-caps text-on-primary-container opacity-80 mb-6">Current Occupancy</h3>
<div class="flex items-end justify-between gap-4">
<div class="h-24 w-full bg-white/10 rounded-lg relative overflow-hidden">
<div class="absolute bottom-0 left-0 right-0 bg-white/30 h-[85%] rounded-t-lg"></div>
</div>
<div class="h-24 w-full bg-white/10 rounded-lg relative overflow-hidden">
<div class="absolute bottom-0 left-0 right-0 bg-white/30 h-[92%] rounded-t-lg"></div>
</div>
<div class="h-24 w-full bg-white/10 rounded-lg relative overflow-hidden">
<div class="absolute bottom-0 left-0 right-0 bg-white/30 h-[64%] rounded-t-lg"></div>
</div>
</div>
<div class="mt-4 flex justify-between items-center">
<div>
<p class="text-3xl font-bold">88%</p>
<p class="text-[10px] uppercase tracking-widest font-bold">Total Capacity</p>
</div>
<span class="material-symbols-outlined text-4xl opacity-40" data-icon="analytics">analytics</span>
</div>
</div>
<!-- Featured Image Card -->
<div class="rounded-2xl overflow-hidden relative h-48 shadow-sm">
<img class="w-full h-full object-cover" data-alt="A beautifully designed modern hostel communal area featuring natural wood furniture, lush indoor plants, and soft ambient lighting. Large windows allow soft daylight to fill the space, creating a warm and inviting atmosphere. The visual composition emphasizes the CommonGround brand's commitment to community and professional service." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUWMaBAyopBAV-DoD9oof4HFWCA_YrSZhUfD2Lfu9hoZ8dyOPu3NMSeY75mmTKXjPvqdqWsQNt33DnwmZMuj7T5R8Vf85Rs8BC2J_bAViCn2qprxvagBR_gvmNeJnJiqRMvd4dknuRsfBUuBLO5kzDWZMwnQdhcFKKm0oU2tckoR0Ygnej3on8Gvnr0BeMefwXETUl29vuz1zp87dU8My8pg83auRrzKx5u6JdgYMM83k9faWsLig_UjkRylKK6vZ79wzofZZqr7RT"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-4">
<p class="text-white font-headline-sm">Tonight's Social Hour</p>
<p class="text-white/80 text-[11px]">8:00 PM in the Lounge</p>
</div>
</div>
</div>
</div>
</main>
<!-- Bottom Navigation for Mobile -->
<nav class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-6 pt-3 bg-white dark:bg-slate-900 shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.05)] border-t border-gray-100 dark:border-gray-800 z-50 rounded-t-2xl">
<a class="flex flex-col items-center justify-center text-gray-400 dark:text-gray-500 px-4 py-2" href="#">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="text-[10px] font-semibold uppercase tracking-wider mt-1">Home</span>
</a>
<a class="flex flex-col items-center justify-center text-gray-400 dark:text-gray-500 px-4 py-2" href="#">
<span class="material-symbols-outlined" data-icon="bed">bed</span>
<span class="text-[10px] font-semibold uppercase tracking-wider mt-1">My Stay</span>
</a>
<a class="flex flex-col items-center justify-center bg-green-50 dark:bg-green-900/40 text-green-800 dark:text-green-300 rounded-2xl px-4 py-2" href="#">
<span class="material-symbols-outlined" data-icon="assignment">assignment</span>
<span class="text-[10px] font-semibold uppercase tracking-wider mt-1">Tasks</span>
</a>
<a class="flex flex-col items-center justify-center text-gray-400 dark:text-gray-500 px-4 py-2" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="text-[10px] font-semibold uppercase tracking-wider mt-1">Profile</span>
</a>
</nav>
</body></html>