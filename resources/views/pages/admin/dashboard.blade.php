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
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 1.5rem;
        }
    </style>
</head>
<body class="font-body-md text-on-surface">
<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-full w-64 border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 shadow-sm flex flex-col py-6 z-50">
<div class="px-6 mb-10">
<h1 class="text-xl font-bold text-green-800 dark:text-green-400 tracking-tight">CommonGround</h1>
<p class="text-label-sm text-on-surface-variant opacity-70">Hostel Management</p>
</div>
<nav class="flex-1 space-y-1">
<!-- Active Tab: Dashboard -->
<a class="flex items-center px-6 py-3 text-green-800 dark:text-green-400 bg-gray-50 dark:bg-gray-800/50 border-r-4 border-green-800 dark:border-green-400 font-medium transition-all duration-200" href="#">
<span class="material-symbols-outlined mr-3" data-icon="dashboard">dashboard</span>
                Dashboard
            </a>
<a class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium transition-all duration-200" href="#">
<span class="material-symbols-outlined mr-3" data-icon="calendar_month">calendar_month</span>
                Bookings
            </a>
<a class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium transition-all duration-200" href="#">
<span class="material-symbols-outlined mr-3" data-icon="bed">bed</span>
                Rooms
            </a>
<a class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium transition-all duration-200" href="#">
<span class="material-symbols-outlined mr-3" data-icon="group">group</span>
                Guests
            </a>
<a class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium transition-all duration-200" href="#">
<span class="material-symbols-outlined mr-3" data-icon="badge">badge</span>
                Staff
            </a>
<a class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium transition-all duration-200" href="#">
<span class="material-symbols-outlined mr-3" data-icon="settings">settings</span>
                Settings
            </a>
</nav>
<div class="px-6 mt-auto">
<button class="w-full py-2.5 bg-primary text-on-primary rounded-lg font-medium text-sm hover:opacity-90 transition-all active:scale-[0.98]">
                Support Center
            </button>
</div>
</aside>
<!-- TopAppBar -->
<header class="fixed top-0 right-0 w-[calc(100%-16rem)] border-b border-gray-200 dark:border-gray-800 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md shadow-sm z-40">
<div class="flex items-center justify-between px-8 h-16">
<div class="flex items-center flex-1 max-w-md">
<div class="relative w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant opacity-60">search</span>
<input class="w-full bg-surface-container-low border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary/20" placeholder="Search operations..." type="text"/>
</div>
</div>
<div class="flex items-center space-x-6">
<div class="flex items-center space-x-3">
<button class="p-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all">
<span class="material-symbols-outlined text-gray-600" data-icon="notifications">notifications</span>
</button>
<button class="p-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all">
<span class="material-symbols-outlined text-gray-600" data-icon="help">help</span>
</button>
<button class="p-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all">
<span class="material-symbols-outlined text-gray-600" data-icon="account_circle">account_circle</span>
</button>
</div>
<button class="px-5 py-2 bg-primary text-on-primary rounded-lg text-sm font-bold active:scale-[0.98] transition-all">
                    New Booking
                </button>
</div>
</div>
</header>
<!-- Main Content -->
<main class="pt-24 pl-64 min-h-screen">
<div class="max-w-[1280px] mx-auto px-8 pb-12">
<!-- Welcome Header -->
<header class="mb-10">
<h2 class="font-headline-xl text-primary mb-2">Operations Overview</h2>
<p class="font-body-md text-on-surface-variant opacity-80">Welcome back, Admin. Here is what's happening at CommonGround today.</p>
</header>
<!-- Stats Bento Grid -->
<div class="bento-grid mb-8">
<!-- Beds Occupied -->
<div class="col-span-12 md:col-span-4 bg-white rounded-2xl shadow-sm p-6 border-t-2 border-primary">
<div class="flex items-center justify-between mb-4">
<div class="p-3 bg-primary/10 rounded-xl">
<span class="material-symbols-outlined text-primary" data-icon="bed" style="font-variation-settings: 'FILL' 1;">bed</span>
</div>
<span class="text-label-caps text-primary bg-primary-fixed/30 px-2 py-1 rounded-full">+4% from last week</span>
</div>
<h3 class="text-label-sm text-on-surface-variant font-medium mb-1">Beds Occupied</h3>
<div class="flex items-baseline space-x-2">
<span class="text-headline-lg font-bold">88%</span>
<span class="text-body-sm text-on-surface-variant">176/200</span>
</div>
<div class="w-full bg-gray-100 h-2 rounded-full mt-4">
<div class="bg-primary h-2 rounded-full" style="width: 88%"></div>
</div>
</div>
<!-- Upcoming Check-ins -->
<div class="col-span-12 md:col-span-4 bg-white rounded-2xl shadow-sm p-6 border-t-2 border-secondary">
<div class="flex items-center justify-between mb-4">
<div class="p-3 bg-secondary/10 rounded-xl">
<span class="material-symbols-outlined text-secondary" data-icon="login">login</span>
</div>
<span class="text-label-caps text-secondary bg-secondary-container/30 px-2 py-1 rounded-full">Next 24h</span>
</div>
<h3 class="text-label-sm text-on-surface-variant font-medium mb-1">Upcoming Check-ins</h3>
<div class="flex items-baseline space-x-2">
<span class="text-headline-lg font-bold">12 today</span>
<span class="text-body-sm text-on-surface-variant">4 arriving soon</span>
</div>
<div class="flex -space-x-2 mt-4 overflow-hidden">
<img alt="Guest" class="w-8 h-8 rounded-full border-2 border-white" data-alt="A close-up high-quality 3D avatar of a friendly male traveler with spectacles and a beanie, set against a soft bokeh hostel lobby background. The lighting is warm and natural, suggesting a bright morning. The visual style is modern, clean, and professional, maintaining the CommonGround forest green and warm neutral color palette." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBU-RT7MTZ6eXH9sWsrdtVuK29YNyo6lz0Ai4TNgoKuCNICpjqHI7Q6vEG6yu10JhlIO4EhSyG_XnDA6H-BlDBR4lSsQK4wb03eUUejfQ5iK4QarkbX3iTwb1RsHaecXza74fhgMaQlChQsNn_m-IW2ZldceLfKos4cO73KGbmuCMu7ACqgitQAuCQvDrKQAejRPktKvvB-r_OxiIEiQu2wKU-39Xn040e8u4Cet8N_cb7CS_0R8p9KHwwHlJfzVHyGjiG7wAnZkz9V"/>
<img alt="Guest" class="w-8 h-8 rounded-full border-2 border-white" data-alt="A minimalist 3D character avatar of a smiling young woman with curly hair, wearing an orange outdoor jacket. The background is a blurred view of a lush green courtyard. The image uses soft, diffused light to create a welcoming and communal atmosphere consistent with modern property management UI aesthetics." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1YSrzi8RmemMP7Wvy6QbieYkJQesX9nTTrYmA95T9k2eyKinQ_p--rgr9PuslGYmHf1avfgV7zIDDAeM7Sd8tyxESmz73IS2Et-nrF4CW6Zq2N4i-gXi3b0Pij0ec1M7c_GTOP4MmUVb4Q0M5XOh4xOOny-DQIttC1yBY8veu4z_KMQ0qCBHEDj2g4Joc8OYy8RwxE8xXJe29-w7FGPksagD2hsO12FfGyyAqrYKfESnDx1uNF6ZgrzQx5B76zi4M3ZocpxdHobok"/>
<img alt="Guest" class="w-8 h-8 rounded-full border-2 border-white" data-alt="A clean, professional 3D avatar illustration of a backpacker with a short beard and a neutral expression. The background is a clean, minimalist wall with soft shadows. The lighting is crisp and cool-toned, aligning with the corporate yet inviting design language of the CommonGround hostel dashboard." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxSevcHtJJAyaDXNvsl9fzNT29wHAILGKGhFP0c-wli6Ykye5b1Ao0_HBpP5NHq6MMKCSwvfZpDe549pf6zZTRxF-RfI3-HRSw35KkFMoOsHgKMcoo7c9Mb8jhgrC7XSDyP0J_-niNI6e6Q1OTBEXQK99lI_pPo1xvfGYrMXaKwSBhYrwH_5UFtSUUmLRy7ylsZW3YJroepk4PwYgvkIMgjiazUf-DlXy-mGFY_nD0vD1j4rFzfez-_ZBL6-eNuQrQjSjG9oaGGXUG"/>
<div class="w-8 h-8 rounded-full border-2 border-white bg-surface-container-high flex items-center justify-center text-[10px] font-bold">+9</div>
</div>
</div>
<!-- Total Staff -->
<div class="col-span-12 md:col-span-4 bg-white rounded-2xl shadow-sm p-6 border-t-2 border-primary">
<div class="flex items-center justify-between mb-4">
<div class="p-3 bg-primary/10 rounded-xl">
<span class="material-symbols-outlined text-primary" data-icon="badge">badge</span>
</div>
<span class="text-label-caps text-primary bg-primary-fixed/30 px-2 py-1 rounded-full">6 on duty</span>
</div>
<h3 class="text-label-sm text-on-surface-variant font-medium mb-1">Total Staff</h3>
<div class="flex items-baseline space-x-2">
<span class="text-headline-lg font-bold">14</span>
<span class="text-body-sm text-on-surface-variant">Active roster</span>
</div>
<p class="text-label-sm text-on-surface-variant mt-4">Next shift starts in 45 mins (Reception)</p>
</div>
</div>
<!-- Lower Bento Grid -->
<div class="grid grid-cols-12 gap-6">
<!-- Occupancy Trend Chart (Asymmetric) -->
<div class="col-span-12 lg:col-span-8 bg-white rounded-2xl shadow-sm p-8">
<div class="flex items-center justify-between mb-8">
<div>
<h3 class="font-headline-md text-primary">Occupancy Trends</h3>
<p class="text-body-sm text-on-surface-variant">Booking volume vs. physical occupancy</p>
</div>
<div class="flex items-center space-x-2">
<button class="px-3 py-1 text-xs font-semibold rounded-lg bg-primary text-on-primary">7 Days</button>
<button class="px-3 py-1 text-xs font-semibold rounded-lg hover:bg-gray-50 text-on-surface-variant">30 Days</button>
</div>
</div>
<!-- Mock Line Chart -->
<div class="relative h-64 w-full flex items-end justify-between space-x-1 pt-4">
<!-- Chart Lines and Grid (SVG) -->
<svg class="absolute inset-0 w-full h-full" preserveaspectratio="none">
<path d="M0 160 Q 150 120, 300 140 T 600 80 T 900 100 T 1200 60" fill="none" stroke="#2D5A27" stroke-linecap="round" stroke-width="3"></path>
<path d="M0 160 Q 150 120, 300 140 T 600 80 T 900 100 T 1200 60 V 256 H 0 Z" fill="url(#gradient)" opacity="0.1"></path>
<defs>
<lineargradient id="gradient" x1="0%" x2="0%" y1="0%" y2="100%">
<stop offset="0%" style="stop-color:#2D5A27;stop-opacity:1"></stop>
<stop offset="100%" style="stop-color:#2D5A27;stop-opacity:0"></stop>
</lineargradient>
</defs>
</svg>
<!-- Grid Lines -->
<div class="absolute inset-0 flex flex-col justify-between opacity-10 pointer-events-none">
<div class="border-t border-gray-400 w-full"></div>
<div class="border-t border-gray-400 w-full"></div>
<div class="border-t border-gray-400 w-full"></div>
<div class="border-t border-gray-400 w-full"></div>
</div>
</div>
<div class="flex justify-between mt-4 text-label-sm text-on-surface-variant opacity-60">
<span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
</div>
</div>
<!-- Recent Activity Feed -->
<div class="col-span-12 lg:col-span-4 bg-white rounded-2xl shadow-sm p-8">
<h3 class="font-headline-md text-primary mb-6">Recent Activity</h3>
<div class="space-y-6">
<div class="flex gap-4">
<div class="relative">
<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-lg" data-icon="check_circle">check_circle</span>
</div>
<div class="absolute top-10 left-1/2 -translate-x-1/2 w-[1px] h-6 bg-gray-200"></div>
</div>
<div>
<p class="text-body-sm font-medium">New Booking: Room 304</p>
<p class="text-label-sm text-on-surface-variant">Sarah Jenkins • 2 mins ago</p>
</div>
</div>
<div class="flex gap-4">
<div class="relative">
<div class="w-10 h-10 rounded-full bg-secondary/10 flex items-center justify-center">
<span class="material-symbols-outlined text-secondary text-lg" data-icon="logout">logout</span>
</div>
<div class="absolute top-10 left-1/2 -translate-x-1/2 w-[1px] h-6 bg-gray-200"></div>
</div>
<div>
<p class="text-body-sm font-medium">Check-out Complete</p>
<p class="text-label-sm text-on-surface-variant">Mark Thompson • 15 mins ago</p>
</div>
</div>
<div class="flex gap-4">
<div class="relative">
<div class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant text-lg" data-icon="cleaning_services">cleaning_services</span>
</div>
<div class="absolute top-10 left-1/2 -translate-x-1/2 w-[1px] h-6 bg-gray-200"></div>
</div>
<div>
<p class="text-body-sm font-medium">Maintenance Request</p>
<p class="text-label-sm text-on-surface-variant">Room 102 - Faucet • 1h ago</p>
</div>
</div>
<div class="flex gap-4">
<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-lg" data-icon="payments">payments</span>
</div>
<div>
<p class="text-body-sm font-medium">Payment Received</p>
<p class="text-label-sm text-on-surface-variant">Group Booking - #8821 • 3h ago</p>
</div>
</div>
</div>
<button class="w-full mt-8 py-2 text-sm font-semibold text-primary hover:bg-gray-50 rounded-lg transition-all border border-primary/20">
                        View All Activity
                    </button>
</div>
</div>
<!-- Featured Rooms Row -->
<div class="mt-8">
<div class="flex items-center justify-between mb-6">
<h3 class="font-headline-md text-primary">Priority Rooms</h3>
<a class="text-label-sm font-bold text-primary flex items-center hover:underline" href="#">
                        Manage All Rooms
                        <span class="material-symbols-outlined text-sm ml-1">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Room Card 1 -->
<div class="bg-white rounded-2xl shadow-sm overflow-hidden group">
<div class="relative h-32 w-full overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A beautifully designed modern hostel dormitory room with high-quality wooden bunk beds and pristine white linen. The room features a large window with soft sunlight streaming in, illuminating a communal area with potted plants. The color palette is composed of forest greens, earthy browns, and crisp whites, reflecting a professional and inviting hostel management aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTCw7wk2r_7JD7L4qThd9vGnuMr-thfYF1cTKSqo80TetEfF7XZtm8q-DIEUqFQXDGgdcp2wUgV57wf5z_s7gtt-GBMyol36ucVYEMFssWrXd8fcZoJdCeBOIgofqaAVWFkz8Tj1m1zs8Nw6afia8uUcJqWJ3e5uKvV2RngfVm8NQNhYf_3R1ce_VMr_t4Po8WttvjekE6FBcy_6zOgHjfu1mxR81JeRQVTBUWSfsT4NjNdLDy1JunwVdlATLFTfvmSL3VHV19bCBm"/>
<span class="absolute top-2 right-2 px-2 py-1 bg-primary text-on-primary text-[10px] font-bold rounded">OCCUPIED</span>
</div>
<div class="p-4">
<div class="flex justify-between items-start mb-2">
<h4 class="font-bold text-body-md">Forest Dorm A</h4>
<span class="text-label-sm text-primary font-bold">$45/nt</span>
</div>
<p class="text-body-sm text-on-surface-variant mb-4">6 Beds • Mixed Gender</p>
<div class="flex gap-2">
<span class="material-symbols-outlined text-on-surface-variant text-sm" data-icon="wifi">wifi</span>
<span class="material-symbols-outlined text-on-surface-variant text-sm" data-icon="ac_unit">ac_unit</span>
<span class="material-symbols-outlined text-on-surface-variant text-sm" data-icon="lock">lock</span>
</div>
</div>
</div>
<!-- Room Card 2 -->
<div class="bg-white rounded-2xl shadow-sm overflow-hidden group">
<div class="relative h-32 w-full overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A boutique-style private hostel room featuring a minimalist platform bed with grey textiles and a small wooden desk. The walls are a soft off-white, and there is an artistic forest-themed mural on one wall. The scene is lit by warm pendant lights, creating a cozy and high-end feel for hostel guests. The overall style is clean, corporate, and minimalist." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1H5o__XyR3SpCOmQPCYleNyNIe_LHu2qThhCKoNkb8aYMdRWGBLwZ7ztT7I4CtaxZtVsUN7j-Ntqho-eXFU2NwaNZ1WTfNp6cWa7bAL27abL2tmzlqknDr83Nkf8uxl-zDRVUQCnhljVG80b35xka07hjEzF2Itxscp29cnLJNNqYgoc7BOYstJD1xojNDnbrlKR8iNYnyUB2iPFUDKUBnhKQJloFyTVpNIemACYqz1PkfxaWqhpGEzvhVGe21MXm1n__AiT4G1-N"/>
<span class="absolute top-2 right-2 px-2 py-1 bg-secondary text-on-primary text-[10px] font-bold rounded">CLEANING</span>
</div>
<div class="p-4">
<div class="flex justify-between items-start mb-2">
<h4 class="font-bold text-body-md">Private Suite 102</h4>
<span class="text-label-sm text-primary font-bold">$120/nt</span>
</div>
<p class="text-body-sm text-on-surface-variant mb-4">1 King Bed • Ensuite</p>
<div class="flex gap-2">
<span class="material-symbols-outlined text-on-surface-variant text-sm" data-icon="wifi">wifi</span>
<span class="material-symbols-outlined text-on-surface-variant text-sm" data-icon="tv">tv</span>
<span class="material-symbols-outlined text-on-surface-variant text-sm" data-icon="coffee_maker">coffee_maker</span>
</div>
</div>
</div>
<!-- Room Card 3 -->
<div class="bg-white rounded-2xl shadow-sm overflow-hidden group">
<div class="relative h-32 w-full overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A bright and airy female-only dormitory with light wood bunk beds and colorful accents like terracotta-colored cushions and forest green blankets. The room is exceptionally clean and organized, with dedicated locker spaces visible. High-key natural lighting through large windows enhances the professional property management UI style of CommonGround." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAixxptEXmJQnUYP8hqBdJ1RqlHIyPg0s4hzvclbe6SaaWj1y8ChEvjNOJgHDJ5UwHLJF62fFn2d5KFyV5Ele2-kMbqNKJ6ifn9JpT3w5CTUPJzwruH5QDocpDy3TNUy6DH6U9Dk6Pnprp4LW-2r9d66yvRO9bIoOmVljw8_RJVQgPmYwO40ywvJxfItaa7uULaSwslUrUeM2BdadiCmTs4SCdQSaQWCzxY61wwU8IncFobGIHkiAi161H8bZqDHnrxk9wESJd0L406"/>
<span class="absolute top-2 right-2 px-2 py-1 bg-primary text-on-primary text-[10px] font-bold rounded">OCCUPIED</span>
</div>
<div class="p-4">
<div class="flex justify-between items-start mb-2">
<h4 class="font-bold text-body-md">Meadow Dorm C</h4>
<span class="text-label-sm text-primary font-bold">$38/nt</span>
</div>
<p class="text-body-sm text-on-surface-variant mb-4">8 Beds • Female Only</p>
<div class="flex gap-2">
<span class="material-symbols-outlined text-on-surface-variant text-sm" data-icon="wifi">wifi</span>
<span class="material-symbols-outlined text-on-surface-variant text-sm" data-icon="dry_cleaning">dry_cleaning</span>
<span class="material-symbols-outlined text-on-surface-variant text-sm" data-icon="lock">lock</span>
</div>
</div>
</div>
<!-- Room Card 4 -->
<div class="bg-white rounded-2xl shadow-sm overflow-hidden group border-2 border-dashed border-gray-200 flex flex-col items-center justify-center p-6 hover:bg-gray-50 transition-colors cursor-pointer">
<div class="w-12 h-12 rounded-full bg-primary/5 flex items-center justify-center mb-3">
<span class="material-symbols-outlined text-primary" data-icon="add">add</span>
</div>
<p class="text-body-sm font-bold text-primary">Add New Room</p>
<p class="text-[10px] text-on-surface-variant text-center mt-1">Configure additional inventory</p>
</div>
</div>
</div>
</div>
</main>
</body></html>