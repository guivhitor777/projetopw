<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AETHER EDU - Task Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Space+Grotesk:wght@500;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary": "#571e00",
                        "background": "#10131b",
                        "tertiary": "#ffb595",
                        "inverse-surface": "#e0e2ed",
                        "error": "#ffb4ab",
                        "on-error": "#690005",
                        "secondary-fixed": "#e1e2eb",
                        "primary-fixed-dim": "#adc6ff",
                        "surface-container": "#1c2028",
                        "outline": "#8b90a0",
                        "surface-container-lowest": "#0b0e16",
                        "tertiary-fixed-dim": "#ffb595",
                        "surface-bright": "#363942",
                        "surface-dim": "#10131b",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "on-error-container": "#ffdad6",
                        "surface-variant": "#31353d",
                        "surface-container-low": "#181c23",
                        "secondary-fixed-dim": "#c4c6cf",
                        "primary-container": "#4b8eff",
                        "on-secondary-container": "#b6b8c1",
                        "on-secondary-fixed-variant": "#44474e",
                        "on-primary-fixed-variant": "#004493",
                        "inverse-primary": "#005bc1",
                        "outline-variant": "#414755",
                        "on-tertiary-container": "#4c1a00",
                        "on-secondary-fixed": "#191c22",
                        "tertiary-container": "#ef6719",
                        "surface-container-highest": "#31353d",
                        "tertiary-fixed": "#ffdbcc",
                        "secondary": "#c4c6cf",
                        "on-primary-fixed": "#001a41",
                        "on-primary-container": "#00285c",
                        "error-container": "#93000a",
                        "on-background": "#e0e2ed",
                        "surface-tint": "#adc6ff",
                        "on-tertiary-fixed": "#351000",
                        "on-primary": "#002e69",
                        "surface-container-high": "#272a32",
                        "inverse-on-surface": "#2d3039",
                        "secondary-container": "#464950",
                        "on-surface": "#e0e2ed",
                        "surface": "#10131b",
                        "primary": "#adc6ff",
                        "on-secondary": "#2e3037",
                        "primary-fixed": "#d8e2ff",
                        "on-surface-variant": "#c1c6d7"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sidebar-width": "280px",
                        "container-padding-mobile": "20px",
                        "unit": "4px",
                        "container-padding-desktop": "40px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "headline-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }]
                    }
                },
            },
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .neon-border-primary {
            box-shadow: 0 0 15px rgba(173, 198, 255, 0.1), inset 0 0 10px rgba(173, 198, 255, 0.05);
        }

        .neon-border-error {
            box-shadow: 0 0 15px rgba(255, 180, 171, 0.15);
        }

        .input-focus-glow:focus {
            box-shadow: 0 0 12px rgba(173, 198, 255, 0.3);
            border-color: #adc6ff;
            outline: none;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        ::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md min-h-screen overflow-x-hidden selection:bg-primary/30">
    <!-- Top Navigation -->
    <header
        class="bg-surface/60 backdrop-blur-xl border-b border-white/10 font-body-md text-body-md docked full-width top-0 sticky z-50 flex justify-between items-center w-full px-gutter h-16">
        <div class="flex items-center gap-8">
            <span class="font-label-caps text-label-caps tracking-widest text-primary uppercase">AETHER EDU</span>
            <div class="hidden md:flex gap-6">
                <a class="text-primary font-bold transition-colors duration-200" href="#">Dashboard</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors duration-200"
                    href="#">Curriculum</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors duration-200"
                    href="#">Resources</a>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <img alt="User Profile" class="w-8 h-8 rounded-full border border-white/10"
                data-alt="A professional headshot of a young educator in a tech-focused setting, soft cinematic lighting with cool blue and deep grey tones. The portrait is high-detail with a shallow depth of field, reflecting a modern, visionary aesthetic consistent with a high-end educational command center."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBZwkH4d5ZNw2ro-hpdlPXOpBCd1chNBDyJOreYCl2oCS7KNvdbagxdHo_TyuzXl0x37fh9wzepIGD_JMdI2NNOYbb4eghFHWjVEw4tdNiWYUmYBsc8KtNy_g5ZKXrP1MyTg6VJxK9W2qjnlPbi3H2KMYVihiqcHleVZZRMzwBh2BO-sQilCyInV0CDabROoYS2oILfCwLpXQ6V53kCsFF1756TFCQw3o7UnG62rWBz9L2JUyYbYf05r76AfNHI6HXTkggzhzCMk7K" />
        </div>
    </header>
    <!-- Side Navigation (Web) -->
    <aside
        class="hidden md:flex flex-col py-8 px-4 gap-y-2 fixed left-0 top-0 h-screen w-sidebar-width bg-surface-container-low/40 backdrop-blur-2xl border-r border-white/10 z-40">
        <div class="mb-10 px-4">
            <h1 class="font-headline-md text-headline-md font-bold text-on-surface tracking-tighter">AETHER OS</h1>
            <p class="text-[10px] text-primary/60 font-label-caps tracking-[0.2em] uppercase">Academic Command</p>
        </div>
        <nav class="flex-1 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-primary border-l-2 border-primary bg-primary/5 transition-all"
                href="#">
                <span class="material-symbols-outlined">grid_view</span>
                <span class="font-label-caps text-label-caps">Painel</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-label-caps text-label-caps">Notas</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined">assignment</span>
                <span class="font-label-caps text-label-caps">Tarefas</span>
            </a>
        </nav>
        <div class="pt-6 border-t border-white/5 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-label-caps text-label-caps">Logout</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main class="md:ml-sidebar-width p-gutter transition-all duration-500 min-h-screen">
        <header class="mb-10 flex justify-between items-end">
            <div>
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Mission Briefing</h2>
                <p class="text-on-surface-variant mt-1">Manage your active academic operational tasks.</p>
            </div>
            <button
                class="bg-primary text-on-primary px-6 py-2.5 rounded-lg font-label-caps text-label-caps flex items-center gap-2 hover:opacity-90 transition-all active:scale-95 shadow-[0_0_20px_rgba(173,198,255,0.2)]"
                onclick="document.getElementById('task-modal').classList.remove('hidden')">
                <span class="material-symbols-outlined text-[18px]">add</span>
                Adicionar tarefa
            </button>
        </header>
        <!-- Bento Grid Placeholder Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 glass-panel rounded-xl p-6 neon-border-primary">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-headline-md text-headline-md">Active Tasks</h3>
                    <span class="text-primary font-label-caps text-label-caps">4 PENDING</span>
                </div>
                <div class="space-y-4">
                    <!-- Task Item -->
                    <div class="p-4 rounded-lg bg-surface-container-highest/40 border border-white/5 flex items-center justify-between group cursor-pointer hover:border-primary/30 transition-all"
                        onclick="document.getElementById('task-modal').classList.remove('hidden')">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">science</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface">Quantum Physics Lab Report</h4>
                                <p class="text-sm text-on-surface-variant">Analyze wave-particle duality data</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <span
                                class="px-2 py-1 bg-error-container/20 text-error text-[10px] font-bold rounded uppercase tracking-wider">Critical</span>
                            <span
                                class="material-symbols-outlined text-on-surface-variant group-hover:text-primary">chevron_right</span>
                        </div>
                    </div>
                    <!-- Task Item -->
                    <div
                        class="p-4 rounded-lg bg-surface-container-highest/40 border border-white/5 flex items-center justify-between group cursor-pointer hover:border-primary/30 transition-all">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-tertiary-container/10 flex items-center justify-center text-tertiary">
                                <span class="material-symbols-outlined">menu_book</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-on-surface">Neural Networks Ethics Essay</h4>
                                <p class="text-sm text-on-surface-variant">Due in 3 days</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <span
                                class="px-2 py-1 bg-primary/10 text-primary text-[10px] font-bold rounded uppercase tracking-wider">Operational</span>
                            <span
                                class="material-symbols-outlined text-on-surface-variant group-hover:text-primary">chevron_right</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-y-6">
                <div class="glass-panel rounded-xl p-6 flex flex-col items-center justify-center text-center">
                    <div class="w-24 h-24 rounded-full border-4 border-primary/20 border-t-primary animate-spin mb-4"
                        style="animation-duration: 3s;"></div>
                    <h3 class="font-headline-md text-headline-md mb-2">Sync Progress</h3>
                    <p class="text-on-surface-variant text-sm">Synchronizing academic records with central command.</p>
                </div>
                <div class="glass-panel rounded-xl p-6">
                    <h3 class="font-headline-md text-headline-md mb-4">Command Center</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 bg-white/5 rounded-lg text-center">
                            <span class="block text-2xl font-bold text-primary">82%</span>
                            <span class="text-[10px] uppercase font-label-caps text-on-surface-variant">G.P.A.</span>
                        </div>
                        <div class="p-4 bg-white/5 rounded-lg text-center">
                            <span class="block text-2xl font-bold text-tertiary">12</span>
                            <span class="text-[10px] uppercase font-label-caps text-on-surface-variant">Credits</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- TASK MODAL (CREATE/EDIT) -->
    <div class="fixed inset-0 z-[100] flex items-center justify-center px-4 overflow-y-auto hidden" id="task-modal">
        <!-- Backdrop -->
        <div class="fixed inset-0 bg-background/80 backdrop-blur-md"
            onclick="document.getElementById('task-modal').classList.add('hidden')"></div>
        <!-- Modal Content -->
        <div
            class="relative w-full max-w-2xl glass-panel rounded-2xl overflow-hidden neon-border-primary animate-in fade-in zoom-in duration-300">
            <!-- Header -->
            <div class="px-8 py-6 border-b border-white/10 flex justify-between items-center bg-white/[0.02]">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">MANAGE TASK</h2>
                    <p class="text-on-surface-variant text-xs font-label-caps uppercase tracking-widest mt-1">
                        Operational Parameters</p>
                </div>
                <button
                    class="material-symbols-outlined text-on-surface-variant hover:text-on-surface transition-colors"
                    onclick="document.getElementById('task-modal').classList.add('hidden')">close</button>
            </div>
            <!-- Form -->
            <form class="p-8 space-y-6">
                <!-- Title -->
                <div class="space-y-2">
                    <label class="font-label-caps text-label-caps text-primary/80 block">TASK TITLE</label>
                    <input
                        class="w-full bg-surface-container-lowest border border-white/10 rounded-lg px-4 py-3 text-on-surface placeholder:text-on-surface-variant/40 input-focus-glow transition-all"
                        placeholder="e.g. Advanced Bio-Engineering Research" type="text" />
                </div>
                <!-- Description -->
                <div class="space-y-2">
                    <label class="font-label-caps text-label-caps text-primary/80 block">DESCRIPTION</label>
                    <textarea
                        class="w-full bg-surface-container-lowest border border-white/10 rounded-lg px-4 py-3 text-on-surface placeholder:text-on-surface-variant/40 input-focus-glow transition-all resize-none"
                        placeholder="Detailed mission objectives and technical specifications..." rows="4"></textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Deadline -->
                    <div class="space-y-2">
                        <label class="font-label-caps text-label-caps text-primary/80 block">DEADLINE</label>
                        <div class="relative">
                            <input
                                class="w-full bg-surface-container-lowest border border-white/10 rounded-lg px-4 py-3 text-on-surface input-focus-glow transition-all appearance-none"
                                type="date" />
                        </div>
                    </div>
                    <!-- Priority -->
                    <div class="space-y-2">
                        <label class="font-label-caps text-label-caps text-primary/80 block">PRIORITY LEVEL</label>
                        <select
                            class="w-full bg-surface-container-lowest border border-white/10 rounded-lg px-4 py-3 text-on-surface input-focus-glow transition-all">
                            <option class="bg-surface-container" value="critical">Crítica</option>
                            <option class="bg-surface-container" selected="" value="operational">Operacional</option>
                            <option class="bg-surface-container" value="low">Baixa</option>
                        </select>
                    </div>
                </div>
                <!-- Status -->
                <div class="space-y-2">
                    <label class="font-label-caps text-label-caps text-primary/80 block">MISSION STATUS</label>
                    <div class="flex flex-wrap gap-3">
                        <label class="cursor-pointer">
                            <input checked="" class="hidden peer" name="status" type="radio" />
                            <span
                                class="px-4 py-2 rounded-full border border-white/10 text-xs font-bold peer-checked:bg-primary/20 peer-checked:border-primary peer-checked:text-primary transition-all block uppercase tracking-wider">In
                                Analysis</span>
                        </label>
                        <label class="cursor-pointer">
                            <input class="hidden peer" name="status" type="radio" />
                            <span
                                class="px-4 py-2 rounded-full border border-white/10 text-xs font-bold peer-checked:bg-primary/20 peer-checked:border-primary peer-checked:text-primary transition-all block uppercase tracking-wider">In
                                Progress</span>
                        </label>
                        <label class="cursor-pointer">
                            <input class="hidden peer" name="status" type="radio" />
                            <span
                                class="px-4 py-2 rounded-full border border-white/10 text-xs font-bold peer-checked:bg-primary/20 peer-checked:border-primary peer-checked:text-primary transition-all block uppercase tracking-wider">Review</span>
                        </label>
                    </div>
                </div>
                <!-- Danger Zone Section (Confirm Deletion) -->
                <div class="pt-6 border-t border-white/5">
                    <div
                        class="p-4 rounded-lg bg-error-container/5 border border-error/10 flex items-center justify-between">
                        <div>
                            <p class="text-xs font-bold text-error uppercase tracking-widest">Danger Zone</p>
                            <p class="text-[11px] text-on-surface-variant mt-0.5">Permanent removal of this task record.
                            </p>
                        </div>
                        <button
                            class="text-error border border-error/20 hover:bg-error/10 px-4 py-1.5 rounded text-[10px] font-bold transition-all uppercase tracking-widest"
                            onclick="toggleDeleteConfirm()" type="button">
                            REMOVER REGISTRO
                        </button>
                    </div>
                    <!-- Nested Delete Confirmation -->
                    <div class="hidden mt-4 p-6 bg-error-container/20 border border-error/30 rounded-xl neon-border-error animate-in slide-in-from-top-4 duration-300"
                        id="delete-confirm">
                        <div class="flex items-start gap-4">
                            <span class="material-symbols-outlined text-error text-3xl">warning</span>
                            <div>
                                <h4 class="font-bold text-on-surface">Confirm Destruction?</h4>
                                <p class="text-sm text-on-surface-variant mt-1">This action cannot be undone. All
                                    associated telemetry and data logs will be purged from AETHER OS.</p>
                                <div class="mt-4 flex gap-3">
                                    <button
                                        class="bg-error text-on-error px-4 py-2 rounded-lg text-xs font-bold uppercase tracking-widest shadow-[0_0_15px_rgba(255,180,171,0.3)]"
                                        type="button">PERMANENT DELETE</button>
                                    <button
                                        class="text-on-surface-variant hover:text-on-surface px-4 py-2 text-xs font-bold uppercase tracking-widest"
                                        onclick="toggleDeleteConfirm()" type="button">ABORT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Actions -->
                <div class="flex flex-col-reverse md:flex-row justify-end gap-4 pt-6 border-t border-white/10">
                    <button
                        class="px-8 py-3 rounded-lg font-label-caps text-label-caps border border-white/10 text-on-surface-variant hover:bg-white/5 transition-all"
                        onclick="document.getElementById('task-modal').classList.add('hidden')" type="button">
                        CANCELAR
                    </button>
                    <button
                        class="px-8 py-3 rounded-lg font-label-caps text-label-caps bg-primary text-on-primary hover:opacity-90 transition-all shadow-[0_0_20px_rgba(173,198,255,0.4)] active:scale-95 uppercase"
                        type="submit">
                        SALVAR ALTERAÇÕES
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Micro-interactions Script -->
    <script>
        function toggleDeleteConfirm() {
            const confirmBox = document.getElementById('delete-confirm');
            confirmBox.classList.toggle('hidden');
            if (!confirmBox.classList.contains('hidden')) {
                confirmBox.scrollIntoView({ behavior: 'smooth', block: 'end' });
            }
        }

        // Initialize Date Input with today's date if empty
        const dateInput = document.querySelector('input[type="date"]');
        if (dateInput && !dateInput.value) {
            dateInput.valueAsDate = new Date();
        }

        // ESC key to close modal
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                document.getElementById('task-modal').classList.add('hidden');
            }
        });
    </script>
</body>

</html>