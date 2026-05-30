<!DOCTYPE html>

<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Editor de Registro Acadêmico - AETHER EDU</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --sidebar-width: 280px;
        }

        body {
            background-color: #10131b;
            color: #e0e2ed;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.05);
        }

        .neon-glow:focus {
            box-shadow: 0 0 15px rgba(173, 198, 255, 0.3);
            border-color: #adc6ff;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .active-nav-indicator {
            position: absolute;
            left: 0;
            width: 2px;
            height: 100%;
            background-color: #adc6ff;
            box-shadow: 0 0 10px #adc6ff;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary": "#2e3037",
                        "on-secondary-container": "#b6b8c1",
                        "on-tertiary-fixed": "#351000",
                        "on-tertiary-container": "#4c1a00",
                        "surface": "#10131b",
                        "surface-bright": "#363942",
                        "tertiary": "#ffb595",
                        "error-container": "#93000a",
                        "surface-dim": "#10131b",
                        "surface-container-highest": "#31353d",
                        "on-surface-variant": "#c1c6d7",
                        "surface-container-high": "#272a32",
                        "secondary-fixed": "#e1e2eb",
                        "secondary": "#c4c6cf",
                        "primary": "#adc6ff",
                        "primary-fixed-dim": "#adc6ff",
                        "on-error-container": "#ffdad6",
                        "tertiary-container": "#ef6719",
                        "primary-fixed": "#d8e2ff",
                        "primary-container": "#4b8eff",
                        "on-secondary-fixed": "#191c22",
                        "error": "#ffb4ab",
                        "inverse-on-surface": "#2d3039",
                        "surface-container-lowest": "#0b0e16",
                        "on-primary-fixed": "#001a41",
                        "tertiary-fixed": "#ffdbcc",
                        "tertiary-fixed-dim": "#ffb595",
                        "surface-variant": "#31353d",
                        "on-secondary-fixed-variant": "#44474e",
                        "secondary-fixed-dim": "#c4c6cf",
                        "inverse-primary": "#005bc1",
                        "on-primary-container": "#00285c",
                        "on-primary": "#002e69",
                        "outline-variant": "#414755",
                        "outline": "#8b90a0",
                        "on-surface": "#e0e2ed",
                        "surface-container": "#1c2028",
                        "background": "#10131b",
                        "inverse-surface": "#e0e2ed",
                        "surface-container-low": "#181c23",
                        "on-tertiary": "#571e00",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "on-error": "#690005",
                        "secondary-container": "#464950",
                        "on-background": "#e0e2ed",
                        "surface-tint": "#adc6ff",
                        "on-primary-fixed-variant": "#004493"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "unit": "4px",
                        "container-padding-mobile": "20px",
                        "sidebar-width": "280px",
                        "container-padding-desktop": "40px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }]
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-background text-on-background">
    <!-- SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-full w-sidebar-width bg-surface/40 backdrop-blur-xl border-r border-white/10 flex flex-col py-gutter px-4 z-50">
        <div class="mb-10 px-2 flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center">
                <span class="material-symbols-outlined text-on-primary-container"
                    style="font-variation-settings: 'FILL' 1;">terminal</span>
            </div>
            <div>
                <h1 class="font-headline-lg text-primary tracking-tighter text-[20px] leading-none">AETHER EDU</h1>
                <p class="font-label-caps text-[10px] text-on-surface-variant uppercase mt-1">Command Center</p>
            </div>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors scale-95 active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-label-caps text-label-caps">Dashboard</span>
            </a>
            <a class="relative flex items-center gap-4 px-4 py-3 rounded-lg text-primary bg-primary/10 border-l-2 border-primary scale-95 active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">grade</span>
                <span class="font-label-caps text-label-caps">Notas</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors scale-95 active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined">assignment</span>
                <span class="font-label-caps text-label-caps">Tarefas</span>
            </a>
            </aside>
    <!-- TopNavBar -->
    <header
        class="fixed top-0 right-0 w-[calc(100%-var(--sidebar-width))] h-16 bg-surface/30 backdrop-blur-lg border-b border-white/5 flex justify-between items-center px-container-padding-desktop z-40">
        <div class="flex items-center gap-4 bg-surface-container-low px-4 py-2 rounded-full border border-white/5 w-96">
            <span class="material-symbols-outlined text-on-surface-variant text-[20px]">search</span>
            <input
                class="bg-transparent border-none focus:ring-0 text-body-md w-full placeholder:text-on-surface-variant/50"
                placeholder="Search academic records..." type="text" />
        </div>
        <div class="flex items-center gap-6">
            <button class="relative text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-0 right-0 w-2 h-2 bg-primary rounded-full"></span>
            </button>
            <div class="h-8 w-[1px] bg-white/10"></div>
            <div class="flex items-center gap-3">
                <div class="text-right">
                    <p class="font-label-caps text-[12px] text-on-surface">Alex Chen</p>
                    <p class="font-label-caps text-[10px] text-on-surface-variant/70">ID: 29402-EDU</p>
                </div>
                <div class="w-10 h-10 rounded-full border border-primary/30 p-0.5">
                    <img alt="Student Profile" class="w-full h-full rounded-full object-cover"
                        data-alt="A close-up portrait of a young male student with a focused and intelligent expression. The lighting is soft and cinematic, using cool blue tones to match a futuristic educational interface. He is set against a dark, minimalist background that feels like a high-tech academic environment. The overall aesthetic is professional, clean, and visionary."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjWGrAQs4HbYkMLj1ibPKmAlTQ0TFFCsWVOTtNFuFDuJ3N9seiNWdQxKQq6YlH2Anbf4VoaDM7-4woGtQ7QRe6omDTu7X5WCbbs51R2Q5ehDZZTEqZLhXW6dlo0THUVBMLnj2FmnYMZ4dcWmAYwg6JZfH9ZG7d9By7uawz5YZbrgorOGDgxfs9DJ30bUG5FwifPZlWq8mF3sqmDcuo1N0856Du1m-5q-RXpnvBXBfbLE16sh8D15EqW5QQya5XKslx6iqLUfDmlARn" />
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="ml-[var(--sidebar-width)] pt-16 min-h-screen relative overflow-hidden">
        <!-- Background Atmospheric Element -->
        <div
            class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full pointer-events-none">
        </div>
        <div
            class="absolute bottom-[-10%] left-[5%] w-[400px] h-[400px] bg-tertiary/5 blur-[100px] rounded-full pointer-events-none">
        </div>
        <div class="max-w-4xl mx-auto px-container-padding-desktop py-12 relative z-10">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 mb-6 text-on-surface-variant/60">
                <span
                    class="font-label-caps text-[11px] hover:text-primary cursor-pointer transition-colors">DASHBOARD</span>
                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <span
                    class="font-label-caps text-[11px] hover:text-primary cursor-pointer transition-colors">GRADES</span>
                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <span class="font-label-caps text-[11px] text-primary">EDITOR</span>
            </nav>
            <header class="mb-10">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Editor de Registro Acadêmico</h2>
                <p class="font-body-md text-on-surface-variant max-w-2xl">Modify academic performance records for the
                    current semester. Changes will be synchronized across the distributed ledger system.</p>
            </header>
            <!-- Centered Form Card -->
            <div class="glass-card rounded-xl p-8 border border-white/10 relative overflow-hidden">
                <!-- Inner Light Leak -->
                <div
                    class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/30 to-transparent">
                </div>
                <form class="space-y-8" onsubmit="return false;">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Discipline Select -->
                        <div class="space-y-2">
                            <label
                                class="font-label-caps text-label-caps text-on-surface-variant flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">book</span>
                                DISCIPLINE
                            </label>
                            <div class="relative group">
                                <select
                                    class="w-full bg-surface-container-lowest border border-white/10 rounded-lg px-4 py-3 text-body-md text-on-surface appearance-none focus:outline-none focus:border-primary/50 transition-all neon-glow">
                                    <option disabled="" selected="" value="">Select a discipline</option>
                                    <option value="cs101">Computer Science: Neural Networks</option>
                                    <option value="math202">Advanced Quantum Calculus</option>
                                    <option value="phy303">Theoretical Astrophysics</option>
                                    <option value="eng105">Digital Rhetoric &amp; Ethics</option>
                                </select>
                                <span
                                    class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                            </div>
                        </div>
                        <!-- Semester Select -->
                        <div class="space-y-2">
                            <label
                                class="font-label-caps text-label-caps text-on-surface-variant flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">event_note</span>
                                SEMESTER
                            </label>
                            <div class="relative group">
                                <select
                                    class="w-full bg-surface-container-lowest border border-white/10 rounded-lg px-4 py-3 text-body-md text-on-surface appearance-none focus:outline-none focus:border-primary/50 transition-all neon-glow">
                                    <option value="2024.1">2024 - Quarter I</option>
                                    <option value="2024.2">2024 - Quarter II</option>
                                    <option value="2023.4">2023 - Quarter IV</option>
                                </select>
                                <span
                                    class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                            </div>
                        </div>
                        <!-- Grade Input -->
                        <div class="space-y-2">
                            <label
                                class="font-label-caps text-label-caps text-on-surface-variant flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">percent</span>
                                GRADE / SCORE
                            </label>
                            <div class="relative">
                                <input
                                    class="w-full bg-surface-container-lowest border border-white/10 rounded-lg px-4 py-3 text-body-md text-on-surface focus:outline-none focus:border-primary/50 transition-all neon-glow placeholder:text-on-surface-variant/30"
                                    placeholder="e.g. 9.5 or A+" type="text" />
                                <div class="absolute right-4 top-1/2 -translate-y-1/2 flex gap-1">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary/40"></span>
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary/20"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Status Indicator (Auto-derived) -->
                        <div class="space-y-2">
                            <label
                                class="font-label-caps text-label-caps text-on-surface-variant flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">verified</span>
                                PERFORMANCE STATUS
                            </label>
                            <div
                                class="h-[50px] flex items-center px-4 bg-primary/5 border border-primary/20 rounded-lg text-primary font-label-caps text-[13px] tracking-wider">
                                <span class="material-symbols-outlined text-[18px] mr-2"
                                    style="font-variation-settings: 'FILL' 1;">bolt</span>
                                EXCELLENCE CRITERIA MET
                            </div>
                        </div>
                    </div>
                    <!-- Observations Textarea -->
                    <div class="space-y-2">
                        <label class="font-label-caps text-label-caps text-on-surface-variant flex items-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">description</span>
                            OBSERVATIONS
                        </label>
                        <textarea
                            class="w-full bg-surface-container-lowest border border-white/10 rounded-lg px-4 py-3 text-body-md text-on-surface focus:outline-none focus:border-primary/50 transition-all neon-glow placeholder:text-on-surface-variant/30 resize-none"
                            placeholder="Document specific achievements, mitigating circumstances, or faculty remarks..."
                            rows="5"></textarea>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end gap-4 pt-6">
                        <button
                            class="px-8 py-3 rounded-lg font-label-caps text-label-caps text-on-surface-variant border border-white/10 hover:bg-white/5 transition-all active:scale-95"
                            type="button">
                            Cancelar
                        </button>
                        <button
                            class="group relative px-10 py-3 rounded-lg font-label-caps text-label-caps bg-primary text-on-primary-container overflow-hidden transition-all hover:shadow-[0_0_20px_rgba(173,198,255,0.4)] active:scale-95"
                            type="submit">
                            <span class="relative z-10">Salvar Alterações</span>
                            <div
                                class="absolute inset-0 bg-white/20 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-500 skew-x-[-20deg]">
                            </div>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Contextual Information (High-end Detail) -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-4 rounded-lg bg-surface-container-high/50 border border-white/5">
                    <p class="font-label-caps text-[10px] text-on-surface-variant/50 mb-2 uppercase">Last Modified</p>
                    <p class="font-body-md text-on-surface text-[14px]">Oct 24, 2023 - 14:22 GMT</p>
                </div>
                <div class="p-4 rounded-lg bg-surface-container-high/50 border border-white/5">
                    <p class="font-label-caps text-[10px] text-on-surface-variant/50 mb-2 uppercase">System Integrity
                    </p>
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 rounded-full bg-primary animate-pulse"></div>
                        <p class="font-body-md text-on-surface text-[14px]">Blockchain Verified</p>
                    </div>
                </div>
                <div class="p-4 rounded-lg bg-surface-container-high/50 border border-white/5">
                    <p class="font-label-caps text-[10px] text-on-surface-variant/50 mb-2 uppercase">Faculty Access</p>
                    <p class="font-body-md text-on-surface text-[14px]">Level 4 Clearance</p>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Simple micro-interaction for select menus
        document.querySelectorAll('select').forEach(select => {
            select.addEventListener('change', function () {
                this.parentElement.classList.add('border-primary');
                setTimeout(() => {
                    this.parentElement.classList.remove('border-primary');
                }, 1000);
            });
        });

        // Atmospheric mouse following subtle light
        document.addEventListener('mousemove', (e) => {
            const glow = document.createElement('div');
            // Logic for a very subtle cursor trail could go here, 
            // but for a professional UI we'll keep it static to avoid distraction.
        });
    </script>
</body>

</html>