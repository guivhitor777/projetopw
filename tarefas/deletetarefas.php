<!DOCTYPE html>

<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AETHER OS - Confirmar Exclusão</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;700&amp;display=swap"
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
                        "on-secondary-fixed": "#191c22",
                        "surface-container-low": "#181c23",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "on-surface": "#e0e2ed",
                        "on-primary-container": "#00285c",
                        "primary-container": "#4b8eff",
                        "surface-container-highest": "#31353d",
                        "surface": "#10131b",
                        "secondary-fixed-dim": "#c4c6cf",
                        "error-container": "#93000a",
                        "tertiary-container": "#ef6719",
                        "on-secondary": "#2e3037",
                        "on-error-container": "#ffdad6",
                        "on-tertiary": "#571e00",
                        "on-surface-variant": "#c1c6d7",
                        "on-secondary-fixed-variant": "#44474e",
                        "inverse-primary": "#005bc1",
                        "tertiary": "#ffb595",
                        "error": "#ffb4ab",
                        "on-tertiary-fixed": "#351000",
                        "primary": "#adc6ff",
                        "on-secondary-container": "#b6b8c1",
                        "surface-container-lowest": "#0b0e16",
                        "surface-container-high": "#272a32",
                        "secondary-container": "#464950",
                        "surface-container": "#1c2028",
                        "on-primary-fixed": "#001a41",
                        "on-primary": "#002e69",
                        "inverse-on-surface": "#2d3039",
                        "surface-bright": "#363942",
                        "on-background": "#e0e2ed",
                        "tertiary-fixed": "#ffdbcc",
                        "outline-variant": "#414755",
                        "on-primary-fixed-variant": "#004493",
                        "secondary-fixed": "#e1e2eb",
                        "secondary": "#c4c6cf",
                        "tertiary-fixed-dim": "#ffb595",
                        "surface-variant": "#31353d",
                        "surface-dim": "#10131b",
                        "primary-fixed-dim": "#adc6ff",
                        "primary-fixed": "#d8e2ff",
                        "on-error": "#690005",
                        "on-tertiary-container": "#4c1a00",
                        "inverse-surface": "#e0e2ed",
                        "surface-tint": "#adc6ff",
                        "background": "#10131b",
                        "outline": "#8b90a0"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-padding-mobile": "20px",
                        "gutter": "24px",
                        "unit": "4px",
                        "sidebar-width": "280px",
                        "container-padding-desktop": "40px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "headline-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.05);
        }

        .neon-border-error {
            box-shadow: 0 0 15px rgba(255, 180, 171, 0.3), inset 0 0 5px rgba(255, 180, 171, 0.2);
            border: 1px solid #ffb4ab;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        @keyframes scanline {
            0% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(100%);
            }
        }

        .scanline {
            background: linear-gradient(to bottom, transparent, rgba(173, 198, 255, 0.05), transparent);
            height: 100px;
            width: 100%;
            position: absolute;
            animation: scanline 8s linear infinite;
            pointer-events: none;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md min-h-screen overflow-hidden">
    <!-- Atmospheric Background Overlay -->
    <div class="fixed inset-0 pointer-events-none z-0">
        <div class="scanline"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(0,91,193,0.1)_0%,transparent_70%)]">
        </div>
    </div>
    <!-- Sidebar (AETHER OS) -->
    <nav
        class="fixed left-0 top-0 h-screen w-sidebar-width bg-surface-container-low/40 backdrop-blur-2xl border-r border-white/10 flex flex-col py-8 px-4 gap-y-2 z-40 hidden md:flex">
        <div class="px-4 mb-10">
            <h1 class="font-headline-md text-headline-md font-bold text-on-surface tracking-tighter">AETHER OS</h1>
            <p class="font-label-caps text-label-caps text-on-surface-variant opacity-60">Academic Command</p>
        </div>
        <div class="space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-primary border-l-2 border-primary bg-primary/5 transition-all"
                href="#">
                <span class="material-symbols-outlined">grid_view</span>
                <span class="font-label-caps text-label-caps">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined">calendar_month</span>
                <span class="font-label-caps text-label-caps">Calendar</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-label-caps text-label-caps">Grades</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined">assignment</span>
                <span class="font-label-caps text-label-caps">Assignments</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined">chat_bubble</span>
                <span class="font-label-caps text-label-caps">Messages</span>
            </a>
        </div>
        <div class="mt-auto border-t border-white/5 pt-6 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-label-caps text-label-caps">Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-label-caps text-label-caps">Logout</span>
            </a>
        </div>
    </nav>
    <!-- Top Navigation Bar -->
    <header
        class="bg-surface/60 backdrop-blur-xl border-b border-white/10 fixed top-0 left-0 md:left-sidebar-width right-0 h-16 flex justify-between items-center px-gutter z-50">
        <div class="flex items-center gap-4">
            <div class="md:hidden">
                <span class="material-symbols-outlined text-primary">menu</span>
            </div>
            <span class="font-label-caps text-label-caps tracking-widest text-primary uppercase">Mission Terminal</span>
        </div>
        <div class="flex items-center gap-6">
            <div
                class="hidden sm:flex items-center bg-surface-container-highest/30 px-4 py-1.5 rounded-full border border-white/5">
                <span class="material-symbols-outlined text-on-surface-variant text-sm mr-2">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-xs w-48 text-on-surface"
                    placeholder="Global Search..." type="text" />
            </div>
            <div class="flex items-center gap-4">
                <span
                    class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer transition-colors">notifications</span>
                <span
                    class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer transition-colors">help</span>
                <div class="h-8 w-8 rounded-full overflow-hidden border border-primary/30">
                    <img alt="User profile" class="h-full w-full object-cover"
                        data-alt="A high-tech digital avatar portrait of a modern student in a futuristic setting. The character has a sleek, tech-enabled headset and glows with a soft cyan light. The background is a dark, minimalist laboratory with geometric glass panels and ambient blue lighting, following a professional aerospace UI aesthetic."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5oYpQx4lTQRFPNQArinKKjdk9dBO53pPiipl01b7ofX_7xgvfsb77ytIQ-AqnSpgBu9nFw5XYUxlUXa4_s6EWBBM5A1DM_wNGPS-mMelTbVwJJoSz3adocwUCtG91FbALAYcjnvqfpjn46ZMPGzpUg_X1T_TE2T_es--Cvpw8mTA7Aa4-ZTM-5-b-d6wLqPZ_-SNyFAVhFkKDmw0Mw5WW2DSQC5OmIZB-mfAeSa1upyY288u2Yt8b4BL-sB96ZJ0z_JLH7QAkFrKS" />
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content Area / Overlay for Modal -->
    <main class="relative pt-16 md:pl-sidebar-width h-screen w-full flex items-center justify-center p-gutter z-10">
        <!-- Modal Backdrop Blur Focus -->
        <div class="absolute inset-0 bg-background/40 backdrop-blur-sm z-0"></div>
        <!-- Confirm Deletion Modal -->
        <div class="relative w-full max-w-lg glass-panel p-8 rounded-xl z-20 overflow-hidden">
            <!-- Decorative Accent Corner -->
            <div class="absolute top-0 right-0 w-24 h-24 bg-error/10 blur-3xl pointer-events-none"></div>
            <div class="flex flex-col gap-6">
                <!-- Header Icon & Status -->
                <div class="flex items-center gap-4">
                    <div
                        class="h-14 w-14 rounded-lg bg-error-container/20 flex items-center justify-center border border-error/30 text-error">
                        <span class="material-symbols-outlined text-3xl"
                            style="font-variation-settings: 'FILL' 1;">warning</span>
                    </div>
                    <div>
                        <p class="font-label-caps text-label-caps text-error tracking-[0.2em] mb-1">Critical Action
                            Required</p>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Deletar Protocolo?
                        </h2>
                    </div>
                </div>
                <!-- Mission Details -->
                <div class="bg-surface-container-lowest/50 border border-white/5 p-5 rounded-lg">
                    <p class="font-label-caps text-[10px] text-on-surface-variant tracking-wider uppercase mb-2">
                        Identificador da Tarefa</p>
                    <div class="flex justify-between items-end">
                        <span class="font-headline-md text-headline-md text-primary tracking-tighter">Sincronização de
                            Dados Orbitais</span>
                        <span class="text-on-surface-variant text-xs mb-1">ID: #4092-TX</span>
                    </div>
                </div>
                <!-- Warning Message -->
                <div class="flex gap-4 p-4 border-l-2 border-error/50 bg-error-container/5">
                    <span class="material-symbols-outlined text-error">info</span>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        Atenção: Se você confirmar esta ação, a <span class="text-on-surface font-semibold">missão será
                            abortada</span> permanentemente. Todos os logs de progresso e dados de telemetria associados
                        a esta tarefa serão expurgados do sistema AETHER. Esta ação não pode ser desfeita.
                    </p>
                </div>
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 mt-4">
                    <button
                        class="flex-1 px-6 py-4 rounded-lg bg-error text-on-error font-bold tracking-tight hover:brightness-110 active:scale-95 transition-all flex items-center justify-center gap-2 neon-border-error">
                        <span class="material-symbols-outlined text-lg">close</span>
                        Abortar Missão
                    </button>
                    <button
                        class="flex-1 px-6 py-4 rounded-lg border border-outline-variant text-on-surface font-semibold hover:bg-white/5 active:scale-95 transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-lg">shield</span>
                        Manter Tarefa
                    </button>
                </div>
            </div>
            <!-- Footer Meta -->
            <div class="mt-8 pt-6 border-t border-white/5 flex justify-between items-center opacity-40">
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 rounded-full bg-error animate-pulse"></div>
                    <span class="text-[10px] font-label-caps">Secure Authorization Required</span>
                </div>
                <span class="text-[10px] font-label-caps tracking-widest uppercase">System Core 0.9.4</span>
            </div>
        </div>
        <!-- Background Content (Simulating Dashboard Context) -->
        <div class="absolute inset-0 p-gutter grid grid-cols-1 md:grid-cols-3 gap-6 opacity-10 pointer-events-none">
            <div class="glass-panel rounded-xl h-64"></div>
            <div class="glass-panel rounded-xl h-64"></div>
            <div class="glass-panel rounded-xl h-64"></div>
            <div class="glass-panel rounded-xl h-64 col-span-2"></div>
            <div class="glass-panel rounded-xl h-64"></div>
        </div>
    </main>
    <!-- Interactions Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const abortBtn = document.querySelector('.bg-error');
            const keepBtn = document.querySelector('.border-outline-variant');
            const modal = document.querySelector('.glass-panel');

            // Subtle micro-interactions
            abortBtn.addEventListener('mouseenter', () => {
                abortBtn.style.transform = 'translateY(-2px)';
            });
            abortBtn.addEventListener('mouseleave', () => {
                abortBtn.style.transform = 'translateY(0)';
            });

            keepBtn.addEventListener('click', () => {
                modal.style.opacity = '0';
                modal.style.transform = 'scale(0.95)';
                modal.style.transition = 'all 0.3s ease-out';
                setTimeout(() => {
                    alert('Operação Cancelada. A missão continua operacional.');
                    modal.style.opacity = '1';
                    modal.style.transform = 'scale(1)';
                }, 300);
            });
        });
    </script>
</body>

</html>