<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Room Categories | CommonGround</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet"/>
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
                }
            }
        }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
    </style>
</head>
<body class="bg-[#f9faf2] text-on-surface">
<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-full w-64 border-r border-gray-200 bg-white shadow-sm flex flex-col py-6 z-50">
<div class="px-6 mb-8">
<h1 class="text-xl font-bold text-green-800 tracking-tight">CommonGround</h1>
<p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Hostel Management</p>
</div>
<nav class="flex-1 space-y-1">
<a class="flex items-center px-6 py-3 text-gray-500 hover:bg-gray-50 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined mr-3" data-icon="dashboard">dashboard</span>
<span class="font-inter text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center px-6 py-3 text-gray-500 hover:bg-gray-50 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined mr-3" data-icon="calendar_month">calendar_month</span>
<span class="font-inter text-sm font-medium">Bookings</span>
</a>
<!-- Active Tab: Rooms -->
<a class="flex items-center px-6 py-3 text-green-800 bg-gray-50 border-r-4 border-green-800 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined mr-3" data-icon="bed" style="font-variation-settings: 'FILL' 1;">bed</span>
<span class="font-inter text-sm font-medium">Rooms</span>
</a>
<a class="flex items-center px-6 py-3 text-gray-500 hover:bg-gray-50 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined mr-3" data-icon="group">group</span>
<span class="font-inter text-sm font-medium">Guests</span>
</a>
<a class="flex items-center px-6 py-3 text-gray-500 hover:bg-gray-50 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined mr-3" data-icon="badge">badge</span>
<span class="font-inter text-sm font-medium">Staff</span>
</a>
<a class="flex items-center px-6 py-3 text-gray-500 hover:bg-gray-50 transition-all duration-200 group" href="#">
<span class="material-symbols-outlined mr-3" data-icon="settings">settings</span>
<span class="font-inter text-sm font-medium">Settings</span>
</a>
</nav>
<div class="px-6 mt-auto">
<button class="w-full py-3 px-4 bg-gray-50 text-gray-700 rounded-xl font-medium text-sm hover:bg-gray-100 transition-all active:scale-[0.98] flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-lg" data-icon="help">help</span>
                Support Center
            </button>
</div>
</aside>
<!-- TopAppBar -->
<header class="fixed top-0 right-0 w-[calc(100%-16rem)] border-b border-gray-200 bg-white/80 backdrop-blur-md z-40 h-16 flex items-center justify-between px-8">
<div class="flex items-center flex-1">
<div class="relative w-full max-w-md">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-lg" data-icon="search">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-gray-50 border-none rounded-lg text-sm focus:ring-2 focus:ring-green-800 transition-all" placeholder="Search room categories..." type="text"/>
</div>
</div>
<div class="flex items-center gap-4">
<button class="bg-primary text-white px-6 py-2 rounded-lg font-bold text-sm shadow-sm hover:shadow-md transition-all active:scale-[0.98] flex items-center gap-2">
<span class="material-symbols-outlined text-sm" data-icon="add">add</span>
                New Category
            </button>
<div class="h-8 w-px bg-gray-200 mx-2"></div>
<button class="text-gray-600 hover:bg-gray-50 p-2 rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<button class="text-gray-600 hover:bg-gray-50 p-2 rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
</button>
</div>
</header>
<!-- Main Content Canvas -->
<main class="ml-64 pt-24 px-8 pb-12 min-h-screen">
<div class="max-w-container-max mx-auto">
<div class="flex items-end justify-between mb-8">
<div>
<h2 class="font-headline-xl text-primary mb-1">Room Categories</h2>
<p class="font-body-md text-on-surface-variant">Manage your hostel's inventory and pricing structures.</p>
</div>
<div class="flex gap-3">
<button class="flex items-center gap-2 px-4 py-2 border border-outline rounded-lg text-sm font-medium hover:bg-surface-container-low transition-all">
<span class="material-symbols-outlined text-sm" data-icon="filter_list">filter_list</span>
                        Filters
                    </button>
<button class="flex items-center gap-2 px-4 py-2 border border-outline rounded-lg text-sm font-medium hover:bg-surface-container-low transition-all">
<span class="material-symbols-outlined text-sm" data-icon="download">download</span>
                        Export
                    </button>
</div>
</div>
<!-- Management Table Card -->
<div class="bg-white rounded-2xl shadow-sm border-t-2 border-primary overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="bg-surface-container-low border-b border-gray-100">
<th class="px-8 py-4 font-label-caps text-on-surface-variant">Category Name</th>
<th class="px-6 py-4 font-label-caps text-on-surface-variant">Status</th>
<th class="px-6 py-4 font-label-caps text-on-surface-variant">Base Price</th>
<th class="px-6 py-4 font-label-caps text-on-surface-variant">Capacity</th>
<th class="px-6 py-4 font-label-caps text-on-surface-variant">Available Rooms</th>
<th class="px-8 py-4 font-label-caps text-on-surface-variant text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-50">
<!-- Category: Mixed Dorm -->
<tr class="hover:bg-gray-50 transition-colors group">
<td class="px-8 py-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-xl overflow-hidden bg-gray-100 flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="A bright, sunlit mixed dormitory room in a modern hostel featuring several clean, wooden bunk beds with white linens. The floor is light hardwood and there are individual lockers with metal accents. The overall atmosphere is warm, social, and inviting with large windows letting in natural daylight." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4sa6jXtY9HkQsTnSM8GZPZbUBhj3hmj8MiORPeahJ0ZOyF57MM5Iq7p1wKu6Fh7jw4K5peI6xLUW0IIalQuLCy6teSuoBoPbNUT8VH8pnS8WqhgvMOxkIVa13sahWMeNXqG1BxU-Hoij4DwXjsiB43qQ7oDHT-pvDikD7uXYGvQQYpIMGFUgcIro8-6gOAn0xRJT1cuUHlSWmiREIefmd2fk-HL6rpC_rsqDujFXNb-dgg7bhrokS-5jT1ZSBZ4O6rejhbQ3kK0oP"/>
</div>
<div>
<div class="font-headline-md text-base text-on-surface">Mixed Dorm</div>
<div class="text-xs text-on-surface-variant">Shared bathroom, city view</div>
</div>
</div>
</td>
<td class="px-6 py-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-fixed text-on-primary-fixed-variant">
                                        Active
                                    </span>
</td>
<td class="px-6 py-6">
<div class="font-body-md font-semibold text-primary">$28.00<span class="text-xs font-normal text-on-surface-variant ml-1">/night</span></div>
</td>
<td class="px-6 py-6">
<div class="flex items-center gap-1.5 text-on-surface">
<span class="material-symbols-outlined text-lg" data-icon="person">person</span>
<span class="font-body-md">8 Beds</span>
</div>
</td>
<td class="px-6 py-6">
<div class="font-body-sm text-on-surface-variant">14 Rooms Total</div>
</td>
<td class="px-8 py-6 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-gray-400 hover:text-primary hover:bg-primary-fixed rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-error hover:bg-error-container rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<!-- Category: Female Only Dorm -->
<tr class="hover:bg-gray-50 transition-colors group">
<td class="px-8 py-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-xl overflow-hidden bg-gray-100 flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="A cozy and secure female-only dormitory with soft pastel accents and light-colored bunk beds. Each bed features a private curtain for extra privacy and a small reading light. The room is decorated with minimal botanical prints on the walls, creating a safe and serene environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuANqIQYpn0XwdAil0g19EVKBkcJWeTBjHdCxSVEWpwOkl357f7_zWZrwTihlFAaHBqbm5NR6mNgsY3mclmZkVebLNFh4yD533qxBgbk2XdOO2mAVhFvx8dwXQaptHagR8ua9dftP_yslY1bbXD8pNIekY1_GGEeP-iW8UP932QSkyXV4N9w2SMyzPO_YcdOJfns-re3ETZb-bbW4XGHRElEH4hImT4eBq4SKiQHTpkTshxkkeG3tsQr_lj4e4-xdK5tvoDHLoRCWvbS"/>
</div>
<div>
<div class="font-headline-md text-base text-on-surface">Female Only Dorm</div>
<div class="text-xs text-on-surface-variant">Ensuite bathroom, garden view</div>
</div>
</div>
</td>
<td class="px-6 py-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-fixed text-on-primary-fixed-variant">
                                        Active
                                    </span>
</td>
<td class="px-6 py-6">
<div class="font-body-md font-semibold text-primary">$32.00<span class="text-xs font-normal text-on-surface-variant ml-1">/night</span></div>
</td>
<td class="px-6 py-6">
<div class="flex items-center gap-1.5 text-on-surface">
<span class="material-symbols-outlined text-lg" data-icon="person">person</span>
<span class="font-body-md">6 Beds</span>
</div>
</td>
<td class="px-6 py-6">
<div class="font-body-sm text-on-surface-variant">8 Rooms Total</div>
</td>
<td class="px-8 py-6 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-gray-400 hover:text-primary hover:bg-primary-fixed rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-error hover:bg-error-container rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<!-- Category: Private Suite -->
<tr class="hover:bg-gray-50 transition-colors group">
<td class="px-8 py-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-xl overflow-hidden bg-gray-100 flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="A luxurious private suite in a high-end hostel with a king-sized bed, high-thread-count white linens, and a large plush headboard. The room features minimalist mid-century modern furniture, a private desk area, and wide glass doors leading to a balcony. The lighting is soft and atmospheric with forest green accents throughout." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAn2o_iKvLWiVfcmIM1F2tuO8vu_7Huqt1Oy1v5_bgmSANv_LDO3fbQ9lWRuvc_TwrEyvvM0wse-7l87QGSwAekPt5Klm8QZHzY6mrm5yJZuFabTyD2q1vtYo9GMx1NejFJhPO5QZvkUAA7ZxGqy27MLlUeznLWmObJK3l55M87MUOfz4W1iifxtX-zMqXcQzaxa9C5D_Vj5JYrOhchVCQKpka3kjx4XISm11ugaBg4euAr9Gb5fF9wkBdN9CoMQn87ZiS76c_BF0Uz"/>
</div>
<div>
<div class="font-headline-md text-base text-on-surface">Private Suite</div>
<div class="text-xs text-on-surface-variant">King bed, private balcony</div>
</div>
</div>
</td>
<td class="px-6 py-6">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-secondary-container text-on-secondary-container">
                                        High Demand
                                    </span>
</td>
<td class="px-6 py-6">
<div class="font-body-md font-semibold text-primary">$120.00<span class="text-xs font-normal text-on-surface-variant ml-1">/night</span></div>
</td>
<td class="px-6 py-6">
<div class="flex items-center gap-1.5 text-on-surface">
<span class="material-symbols-outlined text-lg" data-icon="person">person</span>
<span class="font-body-md">2 People</span>
</div>
</td>
<td class="px-6 py-6">
<div class="font-body-sm text-on-surface-variant">5 Rooms Total</div>
</td>
<td class="px-8 py-6 text-right">
<div class="flex justify-end gap-2">
<button class="p-2 text-gray-400 hover:text-primary hover:bg-primary-fixed rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="edit">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-error hover:bg-error-container rounded-lg transition-all">
<span class="material-symbols-outlined" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="px-8 py-4 bg-surface-container-low border-t border-gray-100 flex items-center justify-between">
<span class="text-sm text-on-surface-variant">Showing 3 of 3 categories</span>
<div class="flex items-center gap-4">
<button class="p-2 text-gray-400 cursor-not-allowed">
<span class="material-symbols-outlined" data-icon="chevron_left">chevron_left</span>
</button>
<div class="flex items-center gap-1">
<button class="w-8 h-8 rounded-lg bg-primary text-white font-medium text-xs">1</button>
</div>
<button class="p-2 text-gray-400 cursor-not-allowed">
<span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Bento Stats Grid -->
<div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
<div class="flex items-start justify-between mb-4">
<div class="p-3 bg-primary-fixed rounded-xl">
<span class="material-symbols-outlined text-primary" data-icon="hotel">hotel</span>
</div>
<span class="text-xs font-bold text-green-700 bg-green-50 px-2 py-1 rounded-md">+4%</span>
</div>
<div class="text-2xl font-bold text-on-surface">27 Total Rooms</div>
<div class="text-sm text-on-surface-variant">Across all 3 active categories</div>
</div>
<div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
<div class="flex items-start justify-between mb-4">
<div class="p-3 bg-secondary-fixed rounded-xl">
<span class="material-symbols-outlined text-secondary" data-icon="trending_up">trending_up</span>
</div>
<span class="text-xs font-bold text-red-700 bg-red-50 px-2 py-1 rounded-md">Peak Season</span>
</div>
<div class="text-2xl font-bold text-on-surface">$5,420 Avg. Rev</div>
<div class="text-sm text-on-surface-variant">Projected monthly category revenue</div>
</div>
<div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
<div class="flex items-start justify-between mb-4">
<div class="p-3 bg-tertiary-fixed rounded-xl">
<span class="material-symbols-outlined text-tertiary" data-icon="groups">groups</span>
</div>
</div>
<div class="text-2xl font-bold text-on-surface">124 Total Capacity</div>
<div class="text-sm text-on-surface-variant">Total bed count for all dorm types</div>
</div>
</div>
</div>
</main>
<!-- Contextual FAB -->
<button class="fixed bottom-8 right-8 w-14 h-14 bg-primary text-white rounded-full shadow-lg flex items-center justify-center hover:scale-105 active:scale-95 transition-all md:hidden z-50">
<span class="material-symbols-outlined text-3xl" data-icon="add">add</span>
</button>
</body></html>