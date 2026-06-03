<!DOCTYPE html>

<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Aluno Modern | Centro de Comando</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Space+Grotesk:wght@500&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Space+Grotesk:wght@100..900&amp;display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --sidebar-width: 280px;
        }

        body {
            background-color: #0b0e16;
            color: #e0e2ed;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(173, 198, 255, 0.3), transparent);
        }

        .glow-blue {
            box-shadow: 0 0 20px rgba(0, 91, 193, 0.2);
        }

        .chart-bar {
            transition: height 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link-hover {
            transition: all 0.3s ease;
        }

        .nav-link-hover:hover {
            color: #adc6ff;
            text-shadow: 0 0 8px rgba(173, 198, 255, 0.5);
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary": "#2e3037",
                        "secondary": "#c4c6cf",
                        "on-tertiary": "#571e00",
                        "on-error": "#690005",
                        "on-error-container": "#ffdad6",
                        "surface-container-highest": "#31353d",
                        "surface-bright": "#363942",
                        "inverse-on-surface": "#2d3039",
                        "secondary-container": "#464950",
                        "inverse-primary": "#005bc1",
                        "on-secondary-fixed": "#191c22",
                        "tertiary-fixed-dim": "#ffb595",
                        "outline-variant": "#414755",
                        "primary-fixed": "#d8e2ff",
                        "on-primary-fixed-variant": "#004493",
                        "inverse-surface": "#e0e2ed",
                        "on-primary-fixed": "#001a41",
                        "error": "#ffb4ab",
                        "surface-container-lowest": "#0b0e16",
                        "tertiary-fixed": "#ffdbcc",
                        "primary-fixed-dim": "#adc6ff",
                        "primary-container": "#4b8eff",
                        "outline": "#8b90a0",
                        "tertiary-container": "#ef6719",
                        "error-container": "#93000a",
                        "secondary-fixed-dim": "#c4c6cf",
                        "primary": "#adc6ff",
                        "tertiary": "#ffb595",
                        "surface": "#10131b",
                        "on-tertiary-fixed": "#351000",
                        "on-tertiary-container": "#4c1a00",
                        "surface-variant": "#31353d",
                        "surface-container": "#1c2028",
                        "secondary-fixed": "#e1e2eb",
                        "on-surface": "#e0e2ed",
                        "on-surface-variant": "#c1c6d7",
                        "on-background": "#e0e2ed",
                        "surface-dim": "#10131b",
                        "surface-tint": "#adc6ff",
                        "on-secondary-fixed-variant": "#44474e",
                        "background": "#10131b",
                        "surface-container-low": "#181c23",
                        "surface-container-high": "#272a32",
                        "on-secondary-container": "#b6b8c1",
                        "on-primary": "#002e69",
                        "on-primary-container": "#00285c",
                        "on-tertiary-fixed-variant": "#7c2e00"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "unit": "4px",
                        "gutter": "24px",
                        "container-padding-desktop": "40px",
                        "container-padding-mobile": "20px",
                        "sidebar-width": "280px"
                    },
                    fontFamily: {
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    fontSize: {
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background text-on-background min-h-screen">
    <!-- SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-full w-sidebar-width bg-surface/40 backdrop-blur-xl border-r border-white/10 flex flex-col py-gutter px-4 z-50">
        <div class="mb-10 px-4">
            <h1 class="font-headline-lg text-headline-lg text-primary tracking-tighter">Aluno Modern</h1>
        </div>
        <nav class="flex-1 space-y-2">
            <!-- Active: Dashboard -->
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-primary bg-primary/10 border-l-2 border-primary transition-all duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-body-md text-body-md">Painel</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <span class="font-body-md text-body-md">Alunos</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="grade">grade</span>
                <span class="font-body-md text-body-md">Notas</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="assignment">assignment</span>
                <span class="font-body-md text-body-md">Tarefas</span>
            </a>
        </nav>
        </div>
    </aside>
    <!-- Main Content Area -->
    <main class="ml-[280px] min-h-screen">
        <!-- TopNavBar -->
        <header
            class="h-16 flex justify-between items-center px-container-padding-desktop bg-surface/30 backdrop-blur-lg border-b border-white/5 sticky top-0 z-40">
            <div class="flex items-center gap-6">
                <div class="relative">
                </div>
            </div>
            <div class="flex items-center gap-3 pl-4 border-l border-white/10">
                <div class="text-right">
                    <p class="font-label-caps text-[10px] text-primary">Nível 4 - Engenharia</p>
                    <p class="font-body-md text-sm font-bold">Arthur Pendragon</p>
                </div>
                <img alt="Student Profile" class="w-10 h-10 rounded-full border border-primary/30"
                    data-alt="A highly detailed portrait of a focused male student with sharp features, wearing a modern, minimalist technical collar. The lighting is dramatic and cinematic, with cool blue neon rim lights against a deep dark background, reflecting a professional high-tech aerospace aesthetic. The mood is serious and intellectual."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxlZ-V7Oxmx5hEZGmpoqt2Tdnpq9hzLWIZugfukVXHTzvPfEtYZYK9PNgZxdq-r3qlxYIcqb0whYjU1cspVA_UKAenI8rb9k5B3hYM-tAeTaCg3STv64sd77dVVSaHQFGhr5pmkGCe8Z4wqYg4XTbdbrqb375P0p6Y_mkV4Wdy-_egOy51CAG9q0-tW59Bzmu43UmZfCtn8vfZ0AOvKjMFbLJvi8IbCnPS11tGpAHbmQyFwbVXmPHKwGaNv_rUkJx9elc4jirUVFMQ" />
            </div>
            </div>
        </header>
        <!-- Dashboard Content -->
        <div class="p-gutter max-w-[1440px] mx-auto space-y-gutter">
            <!-- 1. Welcome & Status -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <div>
                    <h2 class="font-display-lg text-display-lg text-white">Bem-vindo ao Aluno Modern</h2>
                    <div class="flex items-center gap-4 mt-2">
                        <span
                            class="flex items-center gap-1.5 px-3 py-1 bg-primary/10 border border-primary/20 rounded-full text-[10px] font-label-caps text-primary">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full animate-pulse"></span>
                            Sincronização Ativa
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2. Top Row Metrics -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <div class="glass-card p-6 rounded-none group hover:border-primary/40 transition-all duration-500 relative">
                <button
                    class="absolute top-4 right-4 px-4 py-2 bg-primary text-on-primary rounded-lg transition-all hover:brightness-110 shadow-sm shadow-primary/20 flex items-center gap-2 font-medium">
                    Acessar Alunos
                    <span class="material-symbols-outlined text-sm">north_east</span>
                </button>
                <div class="flex items-end justify-between">
                    <h3 class="font-display-lg text-4xl text-primary font-bold">Alunos</h3>
                </div>
                <div class="w-full bg-white/5 h-1 mt-4 rounded-full overflow-hidden">
                    <div class="bg-primary h-full w-[100%] shadow-[0_0_8px_#adc6ff]"></div>
                </div>
            </div>
            <div class="glass-card p-6 rounded-none group hover:border-primary/40 transition-all duration-500 relative">
                <button
                    class="absolute top-4 right-4 px-4 py-2 bg-primary text-on-primary rounded-lg transition-all hover:brightness-110 shadow-sm shadow-primary/20 flex items-center gap-2 font-medium">
                    Acessar Notas
                    <span class="material-symbols-outlined text-sm">north_east</span>
                </button>
                <div class="flex items-end justify-between">
                    <h3 class="font-display-lg text-4xl text-white font-bold">Notas</h3>
                </div>
                <div class="w-full bg-white/5 h-1 mt-4 rounded-full overflow-hidden">
                    <div class="bg-white/40 h-full w-[100%]"></div>
                </div>
            </div>
            <div class="glass-card p-6 rounded-none group hover:border-primary/40 transition-all duration-500 relative">
                <button
                    class="absolute top-4 right-4 px-4 py-2 bg-primary text-on-primary rounded-lg transition-all hover:brightness-110 shadow-sm shadow-primary/20 flex items-center gap-2 font-medium">
                    Acessar Tarefas
                    <span class="material-symbols-outlined text-sm">north_east</span>
                </button>
                <div class="flex items-end justify-between">
                    <h3 class="font-display-lg text-4xl text-tertiary-container font-bold">Tarefas</h3>
                </div>
                <div class="w-full bg-white/5 h-1 mt-4 rounded-full overflow-hidden">
                    <div class="bg-tertiary-container h-full w-[100%] shadow-[0_0_8px_#ef6719]"></div>
                </div>
            </div>
        </div>
        <!-- 3. Middle Row (Evolution & Status) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
            <!-- Footer Decoration -->
            <footer class="p-gutter text-center border-t border-white/5 mt-10">
                <p class="font-label-caps text-[10px] text-on-surface-variant tracking-widest uppercase opacity-40">
                    AETHER EDU Core v4.2.0 • Sincronização Encriptada via Protocolo Quantum-Link
                </p>
            </footer>
    </main>
    <!-- Contextual FAB (Only for main screens) -->
</body>

</html>