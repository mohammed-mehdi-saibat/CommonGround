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
                    "2xl": "1rem",
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
<script defer="" src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface min-h-screen">
<header class="bg-white dark:bg-slate-900 shadow-sm border-b border-gray-200 dark:border-gray-800">
<div class="max-w-7xl mx-auto px-6 h-16 flex justify-between items-center w-full">
<div class="flex items-center gap-8">
<span class="text-xl font-bold text-green-800 dark:text-green-500 font-headline-md">CommonGround</span>
<nav class="hidden md:flex gap-6 items-center h-16">
<a class="text-gray-500 dark:text-gray-400 hover:text-green-700 font-inter text-sm font-medium tracking-tight h-full flex items-center" href="#">Home</a>
<a class="text-green-800 dark:text-green-400 border-b-2 border-green-800 pb-0 h-full flex items-center font-inter text-sm font-medium tracking-tight" href="#">Profile</a>
</nav>
</div>
<div class="flex items-center gap-4" x-data="{ open: false }">
<button class="p-2 text-gray-500 hover:bg-gray-50 rounded-full transition-colors">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<div class="relative">
<button @click="open = !open" class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-gray-50 transition-colors font-inter text-sm font-medium tracking-tight">
<span class="text-gray-500">Alex Rivera</span>
<span class="material-symbols-outlined text-gray-400">expand_more</span>
</button>
<div @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white border border-gray-100 rounded-xl shadow-lg py-2 z-50" x-cloak="" x-show="open">
<a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" href="#">Settings</a>
<hr class="my-1 border-gray-100"/>
<a class="block px-4 py-2 text-sm text-on-error-container font-semibold" href="#">Logout</a>
</div>
</div>
</div>
</div>
</header>
<main class="max-w-7xl mx-auto px-6 py-12">
<div class="mb-10">
<h1 class="font-headline-xl text-headline-xl text-primary mb-2">Account Management</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Manage your public presence and account security.</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<section class="lg:col-span-4">
<div class="bg-white rounded-2xl shadow-sm border-t-2 border-primary-container p-6">
<div class="flex flex-col items-center text-center">
<div class="relative mb-6">
<div class="w-32 h-32 rounded-full overflow-hidden border-4 border-surface-container">
<img class="w-full h-full object-cover" data-alt="A professional yet relaxed portrait of Alex Rivera, a digital nomad with a warm smile, set against a soft-focus background of a modern communal workspace. The lighting is natural and bright, highlighting a clean, high-end minimalist aesthetic with subtle green accents. The overall mood is approachable, professional, and adventurous, reflecting a life of travel and productivity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAf4MkFhGYmaLvlHFKggQDm-ZQ3IjankCDFfstp8PsEStFhn99wPCtSZykl9UnHqBAe7-GVHeRf7GN32lV8HCzGSy_MFJ-RcDp1MeemIm-L9yhu0lNiilJKVxff4mvSfZu3U9uhq2s0R6i0MITmcHLJTotns43Mx4ltylhQBNLBdDzMBDb0qrcYGfEBxa50ArNXUg1aTo4uCoMeAhgZzk0mF-RTasFTiB_70Jm23IzY_6WoBOfpeQPJnjgjRpQad_1Q6a0YxwJ5DieA"/>
</div>
<button class="absolute bottom-0 right-0 bg-primary-container text-white p-2 rounded-full shadow-md hover:scale-105 transition-transform">
<span class="material-symbols-outlined text-sm">edit</span>
</button>
</div>
<h2 class="font-headline-md text-headline-md text-on-surface mb-1">Alex Rivera</h2>
<p class="font-label-sm text-label-sm text-primary uppercase tracking-widest mb-4">Digital Nomad</p>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Passionate traveler and digital nomad currently exploring Europe.
                        </p>
</div>
<div class="mt-8 pt-8 border-t border-gray-100">
<div class="flex justify-between items-center mb-4">
<span class="font-label-sm text-label-sm text-on-surface-variant">Account Status</span>
<span class="bg-primary-fixed-dim text-on-primary-fixed px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider">Verified</span>
</div>
<div class="flex justify-between items-center">
<span class="font-label-sm text-label-sm text-on-surface-variant">Member Since</span>
<span class="font-body-sm text-body-sm text-on-surface">Oct 2023</span>
</div>
</div>
</div>
</section>
<section class="lg:col-span-8 space-y-8">
<div class="bg-white rounded-2xl shadow-sm p-8">
<h3 class="font-headline-md text-headline-md text-on-surface mb-6">Security &amp; Settings</h3>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="font-label-sm text-label-sm text-on-surface-variant px-1">Email Address</label>
<input class="w-full px-4 py-3 rounded-xl border border-outline-variant focus:border-primary-container focus:ring-0 transition-all font-body-md text-body-md" type="email" value="alex.rivera@example.com"/>
</div>
<div class="space-y-2">
<label class="font-label-sm text-label-sm text-on-surface-variant px-1">Phone Number</label>
<input class="w-full px-4 py-3 rounded-xl border border-outline-variant focus:border-primary-container focus:ring-0 transition-all font-body-md text-body-md" type="tel" value="+1 (555) 0123"/>
</div>
</div>
<div class="space-y-2">
<label class="font-label-sm text-label-sm text-on-surface-variant px-1">Change Password</label>
<input class="w-full px-4 py-3 rounded-xl border border-outline-variant focus:border-primary-container focus:ring-0 transition-all font-body-md text-body-md" placeholder="••••••••••••" type="password"/>
<p class="text-[11px] text-on-surface-variant px-1">Leave blank to keep current password</p>
</div>
<div class="pt-6">
<h4 class="font-label-caps text-label-caps text-on-surface mb-4">Notification Preferences</h4>
<div class="space-y-4">
<label class="flex items-center justify-between p-4 rounded-xl border border-gray-50 hover:bg-surface-container-low transition-colors cursor-pointer group">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary" data-icon="mail">mail</span>
<div>
<span class="block font-body-md text-body-md font-semibold">Email Notifications</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Stay updated on your stay and community news</span>
</div>
</div>
<input checked="" class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-0" type="checkbox"/>
</label>
<label class="flex items-center justify-between p-4 rounded-xl border border-gray-50 hover:bg-surface-container-low transition-colors cursor-pointer group">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary" data-icon="notifications_active">notifications_active</span>
<div>
<span class="block font-body-md text-body-md font-semibold">Push Notifications</span>
<span class="block font-label-sm text-label-sm text-on-surface-variant">Real-time alerts for tasks and messages</span>
</div>
</div>
<input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-0" type="checkbox"/>
</label>
</div>
</div>
<div class="pt-8 flex justify-end">
<button class="bg-primary-container text-white px-8 py-3 rounded-xl font-semibold shadow-sm hover:shadow-md active:scale-[0.98] transition-all flex items-center gap-2" type="submit">
<span class="material-symbols-outlined text-sm" data-weight="fill">save</span>
                                Save Changes
                            </button>
</div>
</form>
</div>
<div class="bg-secondary-fixed/20 rounded-2xl p-6 border border-secondary-fixed">
<div class="flex items-start gap-4">
<span class="material-symbols-outlined text-secondary" data-icon="info">info</span>
<div>
<h4 class="font-body-md text-body-md font-bold text-on-secondary-fixed">Danger Zone</h4>
<p class="font-body-sm text-body-sm text-on-secondary-fixed-variant mb-4">Deleting your account is permanent and cannot be undone. All your stay history will be removed.</p>
<button class="text-secondary font-semibold hover:underline text-body-sm">Delete Account</button>
</div>
</div>
</div>
</section>
</div>
</main>
<nav class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-6 pt-3 bg-white dark:bg-slate-900 shadow-[0_-4px_6px_-1px_rgba(0,0,0,0.05)] border-t border-gray-100 dark:border-gray-800 z-50 rounded-t-2xl">
<div class="flex flex-col items-center justify-center text-gray-400 dark:text-gray-500 px-4 py-2 transition-transform active:scale-95">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="text-[10px] font-semibold uppercase tracking-wider mt-1">Home</span>
</div>
<div class="flex flex-col items-center justify-center text-gray-400 dark:text-gray-500 px-4 py-2 transition-transform active:scale-95">
<span class="material-symbols-outlined" data-icon="bed">bed</span>
<span class="text-[10px] font-semibold uppercase tracking-wider mt-1">My Stay</span>
</div>
<div class="flex flex-col items-center justify-center text-gray-400 dark:text-gray-500 px-4 py-2 transition-transform active:scale-95">
<span class="material-symbols-outlined" data-icon="assignment">assignment</span>
<span class="text-[10px] font-semibold uppercase tracking-wider mt-1">Tasks</span>
</div>
<div class="flex flex-col items-center justify-center bg-green-50 dark:bg-green-900/40 text-green-800 dark:text-green-300 rounded-2xl px-4 py-2 transition-transform active:scale-95">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="text-[10px] font-semibold uppercase tracking-wider mt-1">Profile</span>
</div>
</nav>
</body></html>