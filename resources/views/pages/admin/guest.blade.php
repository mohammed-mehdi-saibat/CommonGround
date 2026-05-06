<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            background-color: #f9faf2;
        }
    </style>
</head>
<body class="font-body-md text-on-surface">
<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-full w-64 border-r border-gray-200 bg-white shadow-sm flex flex-col py-6 z-50">
<div class="px-6 mb-10">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center text-white">
<span class="material-symbols-outlined text-lg" data-icon="home_work">home_work</span>
</div>
<div>
<h1 class="text-xl font-bold text-green-800 tracking-tight">CommonGround</h1>
<p class="text-[10px] uppercase tracking-widest text-gray-400 font-bold">Hostel Management</p>
</div>
</div>
</div>
<nav class="flex-1 space-y-1 px-3">
<a class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-inter text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
<span class="font-inter text-sm font-medium">Bookings</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="bed">bed</span>
<span class="font-inter text-sm font-medium">Rooms</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-green-800 bg-gray-50 border-r-4 border-green-800 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="group" style="font-variation-settings: 'FILL' 1;">group</span>
<span class="font-inter text-sm font-medium">Guests</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="badge">badge</span>
<span class="font-inter text-sm font-medium">Staff</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 transition-all duration-200 rounded-lg" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-inter text-sm font-medium">Settings</span>
</a>
</nav>
<div class="px-4 mt-auto">
<button class="w-full flex items-center justify-center gap-2 py-3 bg-primary text-white rounded-xl shadow-sm active:scale-[0.98] transition-transform font-medium text-sm">
<span class="material-symbols-outlined text-sm" data-icon="help">help</span>
                Support Center
            </button>
</div>
</aside>
<!-- TopAppBar -->
<header class="fixed top-0 right-0 w-[calc(100%-16rem)] border-b border-gray-200 bg-white/80 backdrop-blur-md z-40 flex items-center justify-between px-8 h-16 shadow-sm">
<div class="flex items-center flex-1 max-w-xl">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-xl" data-icon="search">search</span>
<input class="w-full bg-gray-50 border-none rounded-xl py-2 pl-10 pr-4 text-sm focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Search guests, rooms, or bookings..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-2">
<button class="p-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-all" title="Notifications">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="p-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-all" title="Help">
<span class="material-symbols-outlined" data-icon="help">help</span>
</button>
</div>
<div class="h-8 w-[1px] bg-gray-200 mx-2"></div>
<button class="flex items-center gap-2 px-4 py-2 bg-primary text-white rounded-lg active:scale-[0.98] transition-all font-medium text-sm">
<span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                New Booking
            </button>
<button class="flex items-center gap-2 p-1 pl-3 hover:bg-gray-50 rounded-full border border-gray-100 transition-all">
<span class="text-xs font-semibold text-gray-700">Admin</span>
<img alt="Admin Avatar" class="w-8 h-8 rounded-full border border-gray-200" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBw6xVRoWA2jx5vsA7Ij1DCWGmMDBXnfMCWi4rOxNTtb0Y1Ga19RxEPSlmBUS_RcAY5e0lg3uxm6kD3268MY0IQZ-Iq0ZMl2CJZlMbKboGg6s1rcVKTrnFtdXie6cpw4ZbhVJfVsRl3mVW7bna-zN_vaxq9bnT_hxgQWYkMv84T9GXXTFfuVkWrFv_INew18wYdRMU860gRFIlHqKCPdISUb0Rt6zc7J8K0iBP-TvQLYhmiMxED60jf4A3vcywdfKWCJJlJbogQDR4g"/>
</button>
</div>
</header>
<!-- Main Content -->
<main class="ml-64 pt-24 px-8 pb-12 min-h-screen">
<div class="max-w-container-max mx-auto">
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
<div>
<h2 class="font-headline-xl text-primary mb-1">Guest Master List</h2>
<p class="font-body-md text-gray-500">Comprehensive overview of 1,284 current and past residents.</p>
</div>
<div class="flex items-center gap-3">
<button class="flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-xl hover:bg-gray-50 transition-all shadow-sm text-sm font-medium">
<span class="material-symbols-outlined text-sm" data-icon="filter_list">filter_list</span>
                        Filter
                    </button>
<button class="flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-xl hover:bg-gray-50 transition-all shadow-sm text-sm font-medium">
<span class="material-symbols-outlined text-sm" data-icon="download">download</span>
                        Export CSV
                    </button>
</div>
</div>
<!-- Bento Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
<div class="bg-white p-6 rounded-2xl shadow-sm border-t-2 border-primary">
<p class="text-label-caps text-gray-400 mb-2">Total Guests</p>
<div class="flex items-center justify-between">
<h3 class="text-headline-md text-primary">1,284</h3>
<span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full">+12%</span>
</div>
</div>
<div class="bg-white p-6 rounded-2xl shadow-sm border-t-2 border-primary-container">
<p class="text-label-caps text-gray-400 mb-2">Active Stays</p>
<h3 class="text-headline-md text-primary-container">42</h3>
</div>
<div class="bg-white p-6 rounded-2xl shadow-sm border-t-2 border-secondary">
<p class="text-label-caps text-gray-400 mb-2">Check-ins Today</p>
<h3 class="text-headline-md text-secondary">8</h3>
</div>
<div class="bg-white p-6 rounded-2xl shadow-sm border-t-2 border-outline">
<p class="text-label-caps text-gray-400 mb-2">Check-outs Today</p>
<h3 class="text-headline-md text-on-surface-variant">5</h3>
</div>
</div>
<!-- Data Table Container -->
<div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-gray-50/50 border-b border-gray-100">
<th class="px-6 py-4 text-label-caps text-gray-500 font-bold">Guest Name</th>
<th class="px-6 py-4 text-label-caps text-gray-500 font-bold">Check-in Date</th>
<th class="px-6 py-4 text-label-caps text-gray-500 font-bold">Check-out Date</th>
<th class="px-6 py-4 text-label-caps text-gray-500 font-bold">Status</th>
<th class="px-6 py-4 text-label-caps text-gray-500 font-bold">Bed Assignment</th>
<th class="px-6 py-4 text-label-caps text-gray-500 font-bold text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-50">
<!-- Row 1 -->
<tr class="hover:bg-gray-50 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<img alt="Guest Avatar" class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD71GfFCyKeu7UdIGGPMl9sLE4r2CnmbyR5F0B7nfeQQ6li-PIRS4ohR2q2BcZ-vJm1w_sgeKO_DSrzJyM-RcaoTTjxfagvEDUXB18Zpw4Y2mvKaE3MnCHHyGAorkjwUCfxFWH2dww27QwglkZ5oclk8ahqLh_c72q7PIM1mgocIxEfJFY-rd38MTMVAyjtogHmLOhwT7fFJXdqOxgq116AJUA2XCld4Cr1mRcmfWhLWwbMPTQbXKE_Y8pc6BnQvWof823g87EuvcsX"/>
<div>
<p class="font-semibold text-primary">Julianne Moore</p>
<p class="text-xs text-gray-400">julianne.m@example.com</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-gray-600 font-medium">Oct 12, 2023</td>
<td class="px-6 py-4 text-body-sm text-gray-600 font-medium">Oct 18, 2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed text-primary text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                        Active
                                    </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-gray-400 text-lg" data-icon="bed">bed</span>
<span class="text-body-sm text-gray-600">Dorm A - Bed 04</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="p-2 text-gray-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-gray-50 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<img alt="Guest Avatar" class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKa6f2n1HKVmX4oowZYlkcn7vwzTEv1JbKWq1IZHi-vheXklOi8eBAmi12gMkc5GK8_5RafoquwdJLEVvCUVXfLQ7Kiy4T2u_lmJ_vvjxVcmq8Gar0j7SSqfyxcRyKm3vgXaCCCGRa_2QIS8JNsEyzw1Sa9PrxWkBBBT-zrmeaDuHssgYlMhZ1pqjkKN2spqpU6BFtRGP9JHAOk9Meu0A1HWCukhG3MXYY1yXTaN4ALcmxoBj67WhekBeNVdJhne6wU7z7uINI8q7-"/>
<div>
<p class="font-semibold text-primary">Marcus Aurelius</p>
<p class="text-xs text-gray-400">marcus.philosophy@rome.it</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-gray-600 font-medium">Oct 10, 2023</td>
<td class="px-6 py-4 text-body-sm text-gray-600 font-medium">Oct 14, 2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gray-100 text-gray-500 text-xs font-bold">
                                        Past
                                    </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-gray-400 text-lg" data-icon="meeting_room">meeting_room</span>
<span class="text-body-sm text-gray-600">Private Suite 102</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="p-2 text-gray-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-gray-50 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<img alt="Guest Avatar" class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDliUCpWQG8huj81ZUMfMsufvivZ2jdVoJTM1aUrzetypiulap5er2psIo_0ekI6LUbUtmveeBOL9_Gp5KG6TvorZOKBjXGcUh88V6tkf8VpkvuVKwCmUSQli4twD5Q9cMjJUWvytQ2a-WFYIlbVWH34HYRbg5hES9szIJ-iuPkaiyt47gokTmS_d7kTroLy9LhL8NmzrXp8YZ4zW1peBGegpo8EnJp7MdvajkIxfNC94Fzrn9SGYZAjvpK9f0oFSATaL20_gV1VEv0"/>
<div>
<p class="font-semibold text-primary">Elena Rodriguez</p>
<p class="text-xs text-gray-400">e.rodriguez@travel.co</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-gray-600 font-medium">Oct 11, 2023</td>
<td class="px-6 py-4 text-body-sm text-gray-600 font-medium">Oct 20, 2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed text-primary text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                        Active
                                    </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-gray-400 text-lg" data-icon="bed">bed</span>
<span class="text-body-sm text-gray-600">Dorm B - Bed 12</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="p-2 text-gray-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-gray-50 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<img alt="Guest Avatar" class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpJ-2-z9ZdwVFwC5y3r4YqdlZ8L0CUuMeTE5Lr6G_cLHIyqFrsTKY-3xqWovVU8tsxzDWY2m1_jkq9zrWTLoM7WeO0tkwuwF1WGP7zo9CcTTVWYPo_OeOz2_2B5XDvdIt-D7MZprFLr-WxrbOU-cmuDqmRBCK2emHUUjzE5wkgfAfXrVRqPA2EVa8Njq_O3-GOaOaZVaKdxM8vKXxbXng1KiPxwcwp2JioXcuz16IKCicO_CH-CkyO4tNLgLNEvwAZx7WyTpRw8Wkf"/>
<div>
<p class="font-semibold text-primary">David Chen</p>
<p class="text-xs text-gray-400">d.chen.tech@domain.com</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-gray-600 font-medium">Oct 05, 2023</td>
<td class="px-6 py-4 text-body-sm text-gray-600 font-medium">Oct 11, 2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-gray-100 text-gray-500 text-xs font-bold">
                                        Past
                                    </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-gray-400 text-lg" data-icon="bed">bed</span>
<span class="text-body-sm text-gray-600">Dorm A - Bed 02</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="p-2 text-gray-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
</button>
</td>
</tr>
<!-- Row 5 -->
<tr class="hover:bg-gray-50 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<img alt="Guest Avatar" class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnEAZnrmA3ai5WFnW67BDf7T-hbP3fuNMH0TfRuZO_5CEhz0MAM42Hs605jbIFlhinM_rF0CSH6PJm2hL-2EC5NSWiRrvVKc42g9qefAT3LBV8E3TvwnUtnmQyxbWKrI9Adiqx0Y1bRsO8itiQeeH8OyU-uvEcvtwBW8T7uA8eA96bnvFN3q4XBkZp8JxZmH_aLAbj-BGHG2u0XaCqEpYDQzyoW8ec_JkOy-ywqH5l1RwrUddtlMgGvn015iUbsyxnje5JbQMo0jjE"/>
<div>
<p class="font-semibold text-primary">Sarah Jenkins</p>
<p class="text-xs text-gray-400">sarah.j@nomad.net</p>
</div>
</div>
</td>
<td class="px-6 py-4 text-body-sm text-gray-600 font-medium">Oct 14, 2023</td>
<td class="px-6 py-4 text-body-sm text-gray-600 font-medium">Oct 17, 2023</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed text-primary text-xs font-bold">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                                        Active
                                    </span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-gray-400 text-lg" data-icon="meeting_room">meeting_room</span>
<span class="text-body-sm text-gray-600">Private Suite 104</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<button class="p-2 text-gray-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined" data-icon="more_vert">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="px-6 py-4 flex items-center justify-between bg-gray-50/30 border-t border-gray-100">
<p class="text-sm text-gray-500">Showing 1 to 5 of 1,284 guests</p>
<div class="flex items-center gap-2">
<button class="p-2 border border-gray-200 rounded-lg bg-white text-gray-400 hover:bg-gray-50 disabled:opacity-50 transition-all" disabled="">
<span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
</button>
<button class="px-3 py-1 rounded-lg bg-primary text-white text-sm font-bold">1</button>
<button class="px-3 py-1 rounded-lg bg-white border border-gray-200 text-gray-600 text-sm hover:bg-gray-50 transition-all">2</button>
<button class="px-3 py-1 rounded-lg bg-white border border-gray-200 text-gray-600 text-sm hover:bg-gray-50 transition-all">3</button>
<span class="text-gray-400 px-1">...</span>
<button class="px-3 py-1 rounded-lg bg-white border border-gray-200 text-gray-600 text-sm hover:bg-gray-50 transition-all">257</button>
<button class="p-2 border border-gray-200 rounded-lg bg-white text-gray-400 hover:bg-gray-50 transition-all">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Promotion / Feature Card -->
<div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="relative overflow-hidden rounded-2xl bg-primary-container p-8 text-white group cursor-pointer shadow-lg active:scale-[0.99] transition-all">
<div class="relative z-10 flex flex-col h-full justify-between">
<div>
<h4 class="text-headline-md mb-2">Upgrade Loyalty Program</h4>
<p class="text-white/80 font-body-sm max-w-sm">Automate discounts for returning guests and increase your direct bookings by up to 25% this season.</p>
</div>
<div class="mt-6">
<span class="inline-flex items-center gap-2 bg-white text-primary px-4 py-2 rounded-xl font-bold text-sm shadow-sm">
                                View Strategy
                                <span class="material-symbols-outlined text-sm" data-icon="arrow_forward">arrow_forward</span>
</span>
</div>
</div>
<div class="absolute -right-8 -bottom-8 opacity-20 group-hover:scale-110 transition-transform duration-700">
<span class="material-symbols-outlined text-[200px]" data-icon="loyalty">loyalty</span>
</div>
</div>
<div class="relative overflow-hidden rounded-2xl bg-secondary-container p-8 text-on-secondary-container group cursor-pointer shadow-lg active:scale-[0.99] transition-all">
<div class="relative z-10 flex flex-col h-full justify-between">
<div>
<h4 class="text-headline-md mb-2">Hostel Insight Report</h4>
<p class="text-on-secondary-container/80 font-body-sm max-w-sm">October saw a 14% increase in group bookings. Check out the latest demographic breakdown.</p>
</div>
<div class="mt-6">
<span class="inline-flex items-center gap-2 bg-on-secondary-container text-white px-4 py-2 rounded-xl font-bold text-sm shadow-sm">
                                Download PDF
                                <span class="material-symbols-outlined text-sm" data-icon="file_download">file_download</span>
</span>
</div>
</div>
<div class="absolute -right-8 -bottom-8 opacity-20 group-hover:scale-110 transition-transform duration-700">
<span class="material-symbols-outlined text-[200px]" data-icon="insights">insights</span>
</div>
</div>
</div>
</div>
</main>
</body></html>