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
                        "tertiary-fixed": "#ffd9e4",
                        "tertiary-fixed-dim": "#ffb0cc",
                        "primary-container": "#2d5a27",
                        "inverse-on-surface": "#f0f1ea",
                        "inverse-surface": "#2e312c",
                        "primary-fixed-dim": "#a1d494",
                        "on-primary-fixed-variant": "#23501e",
                        "on-secondary-fixed": "#3e0500",
                        "outline": "#72796e",
                        "surface-container-highest": "#e2e3dc",
                        "background": "#f3f4f6",
                        "primary": "#154212",
                        "on-primary": "#ffffff",
                        "on-background": "#191c18",
                        "surface-container-low": "#f3f4ed",
                        "secondary": "#9f402d",
                        "tertiary-container": "#7c3a55",
                        "on-tertiary-fixed": "#3b0520",
                        "on-tertiary-fixed-variant": "#71314c",
                        "surface-tint": "#3b6934",
                        "on-tertiary": "#ffffff",
                        "outline-variant": "#c2c9bb",
                        "on-surface-variant": "#42493e",
                        "secondary-fixed": "#ffdad3",
                        "error-container": "#ffdad6",
                        "on-tertiary-container": "#ffaac8",
                        "primary-fixed": "#bcf0ae",
                        "surface": "#f9faf2",
                        "secondary-fixed-dim": "#ffb4a5",
                        "surface-container": "#edefe7",
                        "on-secondary-fixed-variant": "#802918",
                        "on-error-container": "#93000a",
                        "on-secondary-container": "#732010",
                        "on-primary-fixed": "#002201",
                        "on-surface": "#191c18",
                        "tertiary": "#60233e",
                        "error": "#ba1a1a",
                        "inverse-primary": "#a1d494",
                        "on-secondary": "#ffffff",
                        "on-primary-container": "#9dd090",
                        "surface-bright": "#f9faf2"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "1rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline-xl": ["Inter"],
                        "label-sm": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-caps": ["Inter"]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-background min-h-screen flex items-center justify-center p-6 selection:bg-primary-fixed selection:text-on-primary-fixed">
<div class="w-full max-w-md">
<!-- Main Login Card -->
<div class="bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden border border-outline-variant/30 transition-all duration-300">
<!-- Card Header/Brand Branding Section -->
<div class="px-8 pt-10 pb-6 text-center">
<div class="flex justify-center mb-4">
<div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-container shadow-sm">
<span class="material-symbols-outlined text-3xl" data-icon="domain">domain</span>
</div>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">CommonGround</h1>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Manage your community with ease</p>
</div>
<!-- Content Area -->
<div class="px-8 pb-10">
<!-- Using a conceptual Laravel Form structure -->
<form action="#" class="space-y-6" method="POST">
<!-- @csrf -->
<!-- Email Field -->
<div class="space-y-2 group">
<label class="block font-label-sm text-label-sm text-on-surface-variant" for="email">Email Address</label>
<div class="relative">
<span class="absolute inset-y-0 left-0 pl-3 flex items-center text-outline pointer-events-none group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="mail">mail</span>
</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-primary-container/20 focus:border-primary transition-all duration-200" id="email" name="email" placeholder="name@example.com" required="" type="email"/>
</div>
<!-- @error('email') -->
<p class="hidden text-error text-xs mt-1">Please enter a valid email address.</p>
<!-- @enderror -->
</div>
<!-- Password Field -->
<div class="space-y-2 group">
<div class="flex justify-between items-center">
<label class="block font-label-sm text-label-sm text-on-surface-variant" for="password">Password</label>
</div>
<div class="relative">
<span class="absolute inset-y-0 left-0 pl-3 flex items-center text-outline pointer-events-none group-focus-within:text-primary transition-colors">
<span class="material-symbols-outlined text-lg" data-icon="lock">lock</span>
</span>
<input class="w-full pl-10 pr-12 py-3 bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-primary-container/20 focus:border-primary transition-all duration-200" id="password" name="password" placeholder="••••••••" required="" type="password"/>
<button class="absolute inset-y-0 right-0 pr-3 flex items-center text-outline hover:text-on-surface transition-colors" type="button">
<span class="material-symbols-outlined text-lg" data-icon="visibility">visibility</span>
</button>
</div>
<!-- @error('password') -->
<p class="hidden text-error text-xs mt-1">Incorrect password. Please try again.</p>
<!-- @enderror -->
</div>
<!-- Utilities: Remember & Forgot -->
<div class="flex items-center justify-between">
<div class="flex items-center">
<input class="h-4 w-4 rounded border-outline-variant text-primary focus:ring-primary-container transition-all" id="remember_me" name="remember" type="checkbox"/>
<label class="ml-2 block font-label-sm text-label-sm text-on-surface-variant cursor-pointer" for="remember_me">Remember Me</label>
</div>
<div class="text-label-sm">
<a class="font-medium text-secondary hover:text-on-secondary-container transition-colors" href="#">Forgot Password?</a>
</div>
</div>
<!-- Submit CTA -->
<div class="pt-2">
<button class="w-full py-3.5 px-4 bg-primary-container text-on-primary-fixed font-headline-md text-body-md rounded-xl shadow-sm hover:shadow-md active:scale-[0.98] transition-all duration-150 flex items-center justify-center gap-2" type="submit">
<span>Sign In to CommonGround</span>
<span class="material-symbols-outlined text-lg" data-icon="login">login</span>
</button>
</div>
</form>
<!-- Footer Divider -->
<div class="relative my-8">
<div class="absolute inset-0 flex items-center"><span class="w-full border-t border-outline-variant/30"></span></div>
<div class="relative flex justify-center text-xs"><span class="bg-surface-container-lowest px-4 text-outline font-label-caps">OR ACCESS VIA</span></div>
</div>
<!-- Secondary Actions -->
<div class="grid grid-cols-1 gap-3">
<button class="w-full flex items-center justify-center gap-3 px-4 py-3 border border-outline-variant rounded-xl font-label-sm text-on-surface hover:bg-surface-container transition-colors duration-200">
<img alt="Google Logo" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBmwuTu0pimn2VimEusLLR6bDHd_k3nNsrH35qxQVYEllDl53Ug7bePULp1KlOLqiNOlGGKPzfHChpKih4UzHQ-C4MEx642ppeKaxMJ5dz4IMXDE_N_4CWDzwy6FawnuRuFeRhLGknd9unTJN3V8JeOBjMh4UCPBaebqt_pC-PEN9X7-jl185HWHcQmqRApeT9sJWpl3gOR1zuk3Hm1TTVC5f3fH62W-y-ddynxG-Tb1WDDwzvx57aaggg3sYc4SDXixstLiim53aO"/>
<span>Continue with Google</span>
</button>
</div>
</div>
</div>
<!-- Decorative Illustration / Image -->
<div class="mt-8 rounded-2xl overflow-hidden shadow-lg h-48 relative group">
<img alt="Common Area" class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700" data-alt="A sun-drenched, modern hostel common area featuring a mix of minimalist forest green furniture and warm wooden accents. The large floor-to-ceiling windows look out onto a lush green urban garden. High-key natural lighting creates a professional yet inviting atmosphere consistent with a premium property management brand. The composition is airy and clean with intentional white space." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCu6HypJ_e44YjkFpQd-blnOK0RbD1ot_knVxjROXJtfxvC7cUMGbSxEZWmunlJUEsjcdNAlA8ai8Vw4aSzoJu98KlKfRuCjR9Palt9g02wtg85sbeNp9fW3pWx7Z_UNYjewuxAk2lu0HdOqJ7uFGHUoz-zg8rZPx0ImfhABv4kpMw8OLydIvzh4bZWNUm8ZbdWB06J92MdN8BHb_Huk7ydNKQ5v0BaWPqL7oULHlruBz6L2ky7Qbs54aTLDWBzys-XnewfSUSCaGrL"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-6">
<p class="text-white font-headline-md text-headline-md leading-tight">Elevate your hosting experience.</p>
<p class="text-white/80 font-body-sm text-body-sm mt-1">Smart management for shared spaces.</p>
</div>
</div>
<!-- Bottom Footer -->
<footer class="mt-8 text-center text-outline font-label-sm space-x-4">
<a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
<span>•</span>
<a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
<span>•</span>
<a class="hover:text-primary transition-colors" href="#">Help Center</a>
</footer>
</div>
</body></html>