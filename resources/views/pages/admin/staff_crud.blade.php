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
          "fontFamily": {
            "body-md": ["Inter"],
            "body-lg": ["Inter"],
            "label-sm": ["Inter"],
            "headline-xl": ["Inter"],
            "label-caps": ["Inter"],
            "headline-md": ["Inter"],
            "body-sm": ["Inter"],
            "headline-lg": ["Inter"]
          }
        }
      }
    }
  </script>
<style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
    body { font-family: 'Inter', sans-serif; background-color: #f9faf2; }
  </style>
</head>
<body class="bg-background text-on-surface">
<!-- SideNavBar -->
<aside class="fixed left-0 top-0 h-full w-64 border-r bg-white border-gray-200 shadow-sm flex flex-col py-6 z-50">
<div class="px-6 mb-8">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-xl bg-primary flex items-center justify-center text-on-primary">
<span class="material-symbols-outlined" data-icon="common_ground">home_work</span>
</div>
<div>
<h1 class="text-xl font-bold text-green-800 tracking-tight">CommonGround</h1>
<p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Hostel Management</p>
</div>
</div>
</div>
<nav class="flex-1 px-4 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-inter text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
<span class="font-inter text-sm font-medium">Bookings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="bed">bed</span>
<span class="font-inter text-sm font-medium">Rooms</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span class="font-inter text-sm font-medium">Guests</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-green-800 bg-gray-50 border-r-4 border-green-800 rounded-l-lg transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="badge">badge</span>
<span class="font-inter text-sm font-medium">Staff</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-all duration-200" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-inter text-sm font-medium">Settings</span>
</a>
</nav>
<div class="px-4 mt-auto">
<button class="w-full flex items-center justify-center gap-2 py-3 bg-gray-50 text-gray-700 rounded-xl font-medium text-sm hover:bg-gray-100 transition-all active:scale-[0.98]">
<span class="material-symbols-outlined text-sm">help</span>
        Support Center
      </button>
</div>
</aside>
<!-- TopAppBar -->
<header class="fixed top-0 right-0 w-[calc(100%-16rem)] border-b bg-white/80 backdrop-blur-md border-gray-200 shadow-sm z-40 flex items-center justify-between px-8 h-16">
<div class="flex items-center w-96 relative">
<span class="material-symbols-outlined absolute left-3 text-gray-400">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-gray-50 border-none rounded-lg focus:ring-2 focus:ring-primary text-sm" placeholder="Search staff directory..." type="text"/>
</div>
<div class="flex items-center gap-4">
<button class="flex items-center gap-2 bg-primary text-on-primary px-4 py-2 rounded-lg text-sm font-bold active:scale-[0.98] transition-all">
<span class="material-symbols-outlined text-sm">person_add</span>
        Add Staff
      </button>
<div class="flex items-center gap-2 ml-4">
<button class="p-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-all"><span class="material-symbols-outlined">notifications</span></button>
<button class="p-2 text-gray-500 hover:bg-gray-50 rounded-lg transition-all"><span class="material-symbols-outlined">help</span></button>
<div class="h-8 w-8 rounded-full overflow-hidden border border-gray-200 ml-2">
<img class="w-full h-full object-cover" data-alt="A professional close-up headshot of a hostel manager with a warm and friendly expression. The background is a brightly lit, modern shared living space with soft natural light streaming in, featuring minimalist decor and earthy tones. The photograph uses a shallow depth of field to create a professional and welcoming corporate portrait suitable for a property management interface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJ3rUniAjBa2MYbkkVSo3pIH-CrGgm5lo2lHKSVXM1ItSiXuNImP8IAuVSO7FzctBEdNTfvYuDu205aA22f45FCqrWfEuDWeR6jqSVMUcgMmqkL-jXjhXYjoBsUSvQvuJpiOXL9WHKSU93xIBWvqpjzA019Ambz6utc8rmskASaWNEA49HEpQrvpDTJFakJH5vMm9y7dinHSmF3UYuDO_WGeaWhIPQU1w51R7nTSHV5XbBTDi0AzE2VX7afkG3fOyPoTs9-hfmIIuD"/>
</div>
</div>
</div>
</header>
<!-- Main Content -->
<main class="ml-64 pt-24 px-8 pb-12 min-h-screen">
<div class="max-w-container-max mx-auto">
<div class="mb-8">
<h2 class="font-headline-xl text-headline-xl text-on-surface mb-2">Staff Directory</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Manage your hostel team, roles, and access levels from a central dashboard.</p>
</div>
<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
<div class="bg-white rounded-2xl p-6 shadow-sm border-t-2 border-primary">
<p class="text-label-sm font-label-sm text-gray-500 uppercase mb-1">Total Team</p>
<p class="text-headline-md font-headline-md text-primary">24 Members</p>
</div>
<div class="bg-white rounded-2xl p-6 shadow-sm border-t-2 border-secondary">
<p class="text-label-sm font-label-sm text-gray-500 uppercase mb-1">On Duty</p>
<p class="text-headline-md font-headline-md text-secondary">8 Active</p>
</div>
<div class="bg-white rounded-2xl p-6 shadow-sm border-t-2 border-gray-400">
<p class="text-label-sm font-label-sm text-gray-500 uppercase mb-1">Departments</p>
<p class="text-headline-md font-headline-md text-on-surface">5 Groups</p>
</div>
<div class="bg-white rounded-2xl p-6 shadow-sm border-t-2 border-primary-container">
<p class="text-label-sm font-label-sm text-gray-500 uppercase mb-1">Growth</p>
<p class="text-headline-md font-headline-md text-primary-container">+12% MoM</p>
</div>
</div>
<!-- Bento-style Staff List Container -->
<div class="bg-white rounded-2xl shadow-sm overflow-hidden">
<div class="p-6 border-b border-gray-100 flex items-center justify-between">
<div class="flex gap-4">
<button class="px-4 py-2 text-sm font-bold text-primary bg-primary/10 rounded-lg">All Staff</button>
<button class="px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 rounded-lg">Managers</button>
<button class="px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 rounded-lg">Housekeeping</button>
<button class="px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 rounded-lg">Reception</button>
</div>
<button class="p-2 text-gray-400 hover:text-primary transition-colors">
<span class="material-symbols-outlined">filter_list</span>
</button>
</div>
<div class="overflow-x-auto">
<table class="w-full border-collapse">
<thead>
<tr class="bg-gray-50/50">
<th class="px-6 py-4 text-left text-label-caps font-label-caps text-gray-500">Staff Member</th>
<th class="px-6 py-4 text-left text-label-caps font-label-caps text-gray-500">Role</th>
<th class="px-6 py-4 text-left text-label-caps font-label-caps text-gray-500">Email Address</th>
<th class="px-6 py-4 text-left text-label-caps font-label-caps text-gray-500">Status</th>
<th class="px-6 py-4 text-right text-label-caps font-label-caps text-gray-500">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-100">
<!-- Row 1 -->
<tr class="hover:bg-gray-50/50 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<img class="h-10 w-10 rounded-full object-cover" data-alt="A portrait of a male hospitality professional with a friendly smile, set in a bright hostel lounge environment. The image is captured with high-key lighting, emphasizing clarity and professionalism. The aesthetic is clean and modern, consistent with a premium property management system’s team directory." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAOxskrWG6_fr6V2e3TzJbGkWSi2hOIqo6QRSAPGUxnScrW6qDOmBuyikn1ZszL5kc7VxiLqMcL-jE7a4T6oH5E1wNEnqFD0o1b0S6VX2yg4WwhL9_cdxSYqe6Y7sX6_w71Zm1JZKmgYW3_8P6l0psHkWTgG5jxIOl__a-9uJUD_a-YClqtyu82aYO8a-Ex71cMUH9BSIRVLt69vOjymGXoA9zcNyBsD-eeIkfXdm0Fu24agC5tiuYsGTYb0gHkokdbMBRRVEFTBhrW"/>
<div>
<p class="font-body-md text-body-md font-semibold text-on-surface">Alex Thompson</p>
<p class="text-label-sm text-gray-500">Employee ID: #CG001</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="px-3 py-1 text-[11px] font-bold uppercase tracking-wider bg-blue-100 text-blue-800 rounded-full">Manager</span>
</td>
<td class="px-6 py-4 font-body-sm text-body-sm text-on-surface-variant">a.thompson@commonground.hostel</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="text-sm font-medium text-gray-600">Active</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-error hover:bg-error-container rounded-lg transition-all">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-gray-50/50 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<img class="h-10 w-10 rounded-full object-cover" data-alt="A portrait of a female housekeeping lead in a stylish, minimalist uniform. The background shows a beautifully staged, sunny hostel room with soft lighting and natural textures. The visual style is crisp and professional, using a natural color palette that feels warm and trustworthy." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSEWRlPclAtiSkVx8TN18lIi5doCh9hTJUv4SaLL-kD6BxxipiqkT9DVA5jtvERmLSvzZUM-rC-scZ8cOlcuH79dyElY-sLUqb7GSNZumaIWXk2Dbbe7J9rArfgik97X-lXzo-QcKlRhgdvAWdQMFakm2RrQ6zrdNkYhCrOaZbfrgGWa4QwwLz11UuqjKkNuJ9GL2L4qPzBP0BtVfUlqiQ39PzJuZ4WflDZE3iROe-dWdGqqc8Hs5WmLpI1h8ahUUfhTbWvDDnpMuS"/>
<div>
<p class="font-body-md text-body-md font-semibold text-on-surface">Sarah Jenkins</p>
<p class="text-label-sm text-gray-500">Employee ID: #CG042</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="px-3 py-1 text-[11px] font-bold uppercase tracking-wider bg-blue-100 text-blue-800 rounded-full">Housekeeping</span>
</td>
<td class="px-6 py-4 font-body-sm text-body-sm text-on-surface-variant">s.jenkins@commonground.hostel</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="text-sm font-medium text-gray-600">Active</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-error hover:bg-error-container rounded-lg transition-all">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-gray-50/50 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<img class="h-10 w-10 rounded-full object-cover" data-alt="A close-up portrait of a male receptionist with a friendly and approachable demeanor. The setting is a modern hostel reception desk with plants and warm wood finishes in the background. The lighting is soft and even, highlighting the clean, minimalist professional aesthetic of the CommonGround brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCiwHxkVm4ZxYRCcuFns3GxAgOiDi3B58rxXSQWJQyti91DftBC-tZAwh8JSyDxYXMwA4F6EQscPjo1T1-c1bcjgIbw1t5NKc7tgRKacv6A_eh03gBVE-VQh5hE4am46tk0ERz11hn8BTCExst8hdjh3gK1Gei87KdTz13hdygLvO_vLlz0Y45SmsOrhui4bnIu1vy4HTWJdKSHdFat1T8WR6RvEo5b7XyETgmra6lBAJdXSXMuykoCnH3APY6x4y0W03jJFMV41z8r"/>
<div>
<p class="font-body-md text-body-md font-semibold text-on-surface">Marcus Chen</p>
<p class="text-label-sm text-gray-500">Employee ID: #CG015</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="px-3 py-1 text-[11px] font-bold uppercase tracking-wider bg-blue-100 text-blue-800 rounded-full">Reception</span>
</td>
<td class="px-6 py-4 font-body-sm text-body-sm text-on-surface-variant">m.chen@commonground.hostel</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-amber-400"></div>
<span class="text-sm font-medium text-gray-600">Off Duty</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-error hover:bg-error-container rounded-lg transition-all">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-gray-50/50 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="h-10 w-10 rounded-full bg-primary-fixed-dim flex items-center justify-center font-bold text-primary">EL</div>
<div>
<p class="font-body-md text-body-md font-semibold text-on-surface">Emma Lofton</p>
<p class="text-label-sm text-gray-500">Employee ID: #CG088</p>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="px-3 py-1 text-[11px] font-bold uppercase tracking-wider bg-blue-100 text-blue-800 rounded-full">Events Coord</span>
</td>
<td class="px-6 py-4 font-body-sm text-body-sm text-on-surface-variant">e.lofton@commonground.hostel</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="w-2 h-2 rounded-full bg-green-500"></div>
<span class="text-sm font-medium text-gray-600">Active</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-error hover:bg-error-container rounded-lg transition-all">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="p-6 bg-gray-50/50 border-t border-gray-100 flex items-center justify-between">
<p class="text-sm text-gray-500">Showing <span class="font-bold text-gray-700">1-4</span> of <span class="font-bold text-gray-700">24</span> employees</p>
<div class="flex gap-2">
<button class="px-4 py-2 text-sm font-medium text-gray-400 cursor-not-allowed">Previous</button>
<div class="flex gap-1">
<button class="w-8 h-8 flex items-center justify-center text-sm font-bold bg-primary text-on-primary rounded-lg">1</button>
<button class="w-8 h-8 flex items-center justify-center text-sm font-medium text-gray-600 hover:bg-gray-100 rounded-lg">2</button>
<button class="w-8 h-8 flex items-center justify-center text-sm font-medium text-gray-600 hover:bg-gray-100 rounded-lg">3</button>
<span class="px-1 text-gray-400 self-center">...</span>
<button class="w-8 h-8 flex items-center justify-center text-sm font-medium text-gray-600 hover:bg-gray-100 rounded-lg">6</button>
</div>
<button class="px-4 py-2 text-sm font-medium text-primary hover:bg-primary/5 rounded-lg transition-all">Next</button>
</div>
</div>
</div>
<!-- Quick Actions / Cards for new hires -->
<div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
<div class="relative overflow-hidden rounded-3xl bg-primary p-8 text-on-primary shadow-lg">
<div class="relative z-10">
<h3 class="text-2xl font-bold mb-4">Team Training Modules</h3>
<p class="mb-6 text-primary-fixed opacity-90">Keep your team's skills sharp with our integrated learning management system. New safety protocols available.</p>
<button class="bg-white text-primary px-6 py-2 rounded-xl font-bold text-sm active:scale-95 transition-all">Go to Training</button>
</div>
<div class="absolute right-[-20px] bottom-[-20px] opacity-10">
<span class="material-symbols-outlined text-[200px]" data-icon="school">school</span>
</div>
</div>
<div class="relative overflow-hidden rounded-3xl bg-secondary p-8 text-on-primary shadow-lg">
<div class="relative z-10">
<h3 class="text-2xl font-bold mb-4">Shift Scheduling</h3>
<p class="mb-6 text-secondary-fixed opacity-90">Automate your roster and manage time-off requests directly from the calendar view.</p>
<button class="bg-white text-secondary px-6 py-2 rounded-xl font-bold text-sm active:scale-95 transition-all">Open Schedule</button>
</div>
<div class="absolute right-[-20px] bottom-[-20px] opacity-10">
<span class="material-symbols-outlined text-[200px]" data-icon="event_note">event_note</span>
</div>
</div>
</div>
</div>
</main>
</body></html>