<!DOCTYPE html>

<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AETHER EDU | Task Command</title>
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
        body {
            background-color: #0b0e16;
            color: #e0e2ed;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .glass-card:hover {
            border-color: rgba(173, 198, 255, 0.4);
            background: rgba(255, 255, 255, 0.08);
        }

        .neon-accent {
            box-shadow: 0 0 15px rgba(173, 198, 255, 0.3);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.02);
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #4b8eff;
            border-radius: 10px;
        }
    </style>
</head>

<body class="flex min-h-screen overflow-hidden">
    <!-- SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-screen w-sidebar-width bg-surface-container-low/40 backdrop-blur-2xl border-r border-white/10 hidden md:flex flex-col py-8 px-4 gap-y-2 z-50">
        <div class="mb-10 px-4">
            <h1 class="font-headline-md text-headline-md font-bold text-on-surface tracking-tighter">AETHER OS</h1>
            <p class="font-label-caps text-label-caps text-on-surface-variant/60">Academic Command</p>
        </div>
        <nav class="flex-1 space-y-1">
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all group"
                href="#">
                <span class="material-symbols-outlined group-hover:text-primary" data-icon="grid_view">grid_view</span>
                <span class="font-label-caps text-label-caps">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-primary border-l-2 border-primary bg-primary/5 transition-all group translate-x-1"
                href="#">
                <span class="material-symbols-outlined" data-icon="assignment">assignment</span>
                <span class="font-label-caps text-label-caps">Assignments</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all group"
                href="#">
                <span class="material-symbols-outlined group-hover:text-primary"
                    data-icon="calendar_month">calendar_month</span>
                <span class="font-label-caps text-label-caps">Calendar</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all group"
                href="#">
                <span class="material-symbols-outlined group-hover:text-primary" data-icon="analytics">analytics</span>
                <span class="font-label-caps text-label-caps">Grades</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all group"
                href="#">
                <span class="material-symbols-outlined group-hover:text-primary"
                    data-icon="chat_bubble">chat_bubble</span>
                <span class="font-label-caps text-label-caps">Messages</span>
            </a>
        </nav>
        <div class="pt-6 border-t border-white/5 space-y-1">
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-all group"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-label-caps text-label-caps">Settings</span>
            </a>
            <button
                class="w-full flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-error/10 hover:text-error transition-all group">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="font-label-caps text-label-caps">Logout</span>
            </button>
        </div>
    </aside>
    <!-- Main Content -->
    <main class="flex-1 md:ml-sidebar-width relative h-screen flex flex-col">
        <!-- TopNavBar -->
        <header
            class="bg-surface/60 backdrop-blur-xl border-b border-white/10 sticky top-0 z-40 flex justify-between items-center w-full px-gutter h-16">
            <div class="flex items-center gap-6">
                <span class="md:hidden material-symbols-outlined text-primary cursor-pointer"
                    data-icon="menu">menu</span>
                <div class="font-label-caps text-label-caps tracking-widest text-primary font-bold">AETHER EDU</div>
            </div>
            <div class="flex items-center gap-4">
                <div
                    class="hidden md:flex items-center gap-2 px-3 py-1 bg-surface-container-high rounded-full border border-white/5">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span class="font-label-caps text-[10px] text-on-surface-variant">SYSTEM STATUS: OPTIMAL</span>
                </div>
                <div class="flex items-center gap-2">
                    <span
                        class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-colors"
                        data-icon="notifications">notifications</span>
                    <span
                        class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-colors"
                        data-icon="settings">settings</span>
                    <div class="h-8 w-8 rounded-full border border-primary/20 p-0.5 ml-2">
                        <img alt="User profile" class="h-full w-full rounded-full object-cover"
                            data-alt="A high-contrast, professional portrait of a tech-savvy student with a serious and focused expression. The subject is backlit by cool neon blue lights, emphasizing clean lines and a futuristic aesthetic. The background is a dark, sleek laboratory setting with soft bokeh effects of data monitors. The overall color palette is dominated by deep grays, blacks, and vibrant electric blue accents."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeUqq-3_0LAJuEeCtSTB8pwY3Bkj1QVSWap4fgnCf-sGKVd7n6SneR5oMi8wUjAR6RX-01ZckQSO5RfAFotsJd0uXPWIWaV7w1n377t_HiPQvdEOqoFyioysnwcTVDizJLwSNhCon271iDqD6GQuOS1c_SGsvYn6j3m0DYyQX598Y0r7szlpri39HIzc171wj2-eTsTgzj2Bk8q9Fmbc0ab06aFm8fCmvG3DTcnf_KuPEACgJbOSrFxtYXvtalEOYzEiDsJFZ4U6ZP" />
                    </div>
                </div>
            </div>
        </header>
        <!-- Viewport Scrollable -->
        <div class="flex-1 overflow-y-auto custom-scrollbar p-gutter">
            <!-- Hero / Search Section -->
            <section class="mb-10">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-8">
                    <div>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface mb-1">Central de Atribuições</h2>
                        <p class="font-body-md text-on-surface-variant">Gerencie suas tarefas acadêmicas no comando
                            central do Aether.</p>
                    </div>
                    <button
                        class="bg-primary hover:bg-primary-container text-on-primary font-label-caps px-6 py-3 rounded-lg flex items-center gap-2 transition-all active:scale-95 neon-accent">
                        <span class="material-symbols-outlined" data-icon="add">add</span>
                        Nova Tarefa
                    </button>
                </div>
                <!-- Search & Filters -->
                <div class="glass-card rounded-xl p-4 flex flex-col lg:flex-row gap-4 items-center">
                    <div class="relative w-full flex-1">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant"
                            data-icon="search">search</span>
                        <input
                            class="w-full bg-surface-container-lowest border-white/10 rounded-lg pl-12 py-3 text-body-md focus:ring-1 focus:ring-primary focus:border-primary transition-all"
                            placeholder="Pesquisar comandos ou tarefas..." type="text" />
                    </div>
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="font-label-caps text-label-caps text-on-surface-variant mr-2">Filtrar por
                            Status:</span>
                        <button
                            class="px-4 py-1.5 rounded-full border border-primary/40 bg-primary/10 text-primary font-label-caps text-[10px] hover:bg-primary/20 transition-all">TODAS</button>
                        <button
                            class="px-4 py-1.5 rounded-full border border-white/10 bg-white/5 text-on-surface-variant font-label-caps text-[10px] hover:border-error/40 hover:text-error transition-all">PENDENTE</button>
                        <button
                            class="px-4 py-1.5 rounded-full border border-white/10 bg-white/5 text-on-surface-variant font-label-caps text-[10px] hover:border-primary/40 hover:text-primary transition-all">EM
                            ANDAMENTO</button>
                        <button
                            class="px-4 py-1.5 rounded-full border border-white/10 bg-white/5 text-on-surface-variant font-label-caps text-[10px] hover:border-tertiary/40 hover:text-tertiary transition-all">CONCLUÍDA</button>
                    </div>
                </div>
            </section>
            <!-- Tasks Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                <!-- Task Card 1 (Active) -->
                <div class="glass-card rounded-xl p-6 flex flex-col relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4">
                        <div class="flex gap-2">
                            <button
                                class="p-2 rounded-lg bg-surface-container-high text-on-surface-variant hover:text-primary hover:bg-primary/10 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="terminal">terminal</span>
                            </button>
                            <button
                                class="p-2 rounded-lg bg-surface-container-high text-on-surface-variant hover:text-error hover:bg-error/10 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="delete">delete</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-2 h-2 rounded-full bg-primary shadow-[0_0_8px_rgba(173,198,255,1)]"></span>
                        <span class="font-label-caps text-[10px] text-primary tracking-widest uppercase">EM
                            ANDAMENTO</span>
                    </div>
                    <h3
                        class="font-headline-md text-headline-md text-on-surface mb-2 group-hover:text-primary transition-colors">
                        Algoritmos Avançados</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-2">Desenvolver a infraestrutura
                        lógica para o motor de busca neural usando grafos asssíncronos.</p>
                    <div class="mt-auto flex items-center justify-between">
                        <div class="flex items-center gap-2 text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px]" data-icon="schedule">schedule</span>
                            <span class="font-label-caps text-[11px]">ENTREGA: 12 DEZ</span>
                        </div>
                        <div class="flex -space-x-2">
                            <img alt="Avatar" class="w-6 h-6 rounded-full border border-surface"
                                data-alt="A close-up artistic portrait of a focused tech professional. The lighting is low and atmospheric, featuring cool blue and cyan tones that emphasize the contours of the face. The style is hyper-modern and minimalist, set against a dark, tech-inspired background with subtle light leaks. The image conveys a mood of high intelligence and technological expertise."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAMDP2u9FUVKpCcCSje2IHTBlJwpm30SEogXvJTIfHJ2LCHAzijKgpopdFD3bAygvfBLGkhyMDJsILhBiL_6g36hCoTJ-Rg6dm7d_Gh24oB_DNk5eB0v9_Uoad38eZuDRurVbCyXBwhpc-6Vfsgo8IxVysFD7pa_Lwgvdb68H2nL88ThXa2i9VhwutbCMkFIS1xyRlMpgeRxvyzgXEPYBsr5vOSxNQAOtr4B5qr3jaf2eeNhS75k_ueDi8iENWOQCSroUOzX09_5RbQ" />
                            <div
                                class="w-6 h-6 rounded-full border border-surface bg-primary/20 flex items-center justify-center text-[10px] text-primary font-bold">
                                +2</div>
                        </div>
                    </div>
                </div>
                <!-- Task Card 2 (Pending) -->
                <div class="glass-card rounded-xl p-6 flex flex-col relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4">
                        <div class="flex gap-2">
                            <button
                                class="p-2 rounded-lg bg-surface-container-high text-on-surface-variant hover:text-primary hover:bg-primary/10 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="edit">edit</span>
                            </button>
                            <button
                                class="p-2 rounded-lg bg-surface-container-high text-on-surface-variant hover:text-error hover:bg-error/10 transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="warning">warning</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-2 h-2 rounded-full bg-error shadow-[0_0_8px_rgba(255,180,171,1)]"></span>
                        <span class="font-label-caps text-[10px] text-error tracking-widest uppercase">PENDENTE</span>
                    </div>
                    <h3
                        class="font-headline-md text-headline-md text-on-surface mb-2 group-hover:text-error transition-colors">
                        Interface Aero-UI</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-2">Revisar os tokens de design para o
                        novo módulo de navegação espacial e garantir contraste de leitura.</p>
                    <div class="mt-auto flex items-center justify-between">
                        <div class="flex items-center gap-2 text-error">
                            <span class="material-symbols-outlined text-[18px]"
                                data-icon="priority_high">priority_high</span>
                            <span class="font-label-caps text-[11px]">ATRASADO: 2 DIAS</span>
                        </div>
                        <div class="flex -space-x-2">
                            <img alt="Avatar" class="w-6 h-6 rounded-full border border-surface"
                                data-alt="A highly detailed portrait of a creative professional in a futuristic workspace. The image uses soft, multi-colored neon lighting (pinks and blues) to create a sense of depth and creativity. The style is sharp and modern, with a dark, minimalist background that suggests a high-end design studio. The mood is professional, visionary, and intensely focused on digital innovation."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCam1snMydhVqHmCjWe3aPSjNN7IMbsQi5QMmIcQYAJIUT4KM3lS1Q04joQywEqF5VbyhztNNKBpJ7qwHk43FjU85Ukhz1gE_FiGzqedLLI5feFXAigf9zlsnQHGKIcAzYV0bGjCtC4X9Z1ICzDruywA_z6VJT4MxWlYAS3jBN9-cVoJygTbUSRvBlK2SN3knAYefV4jY3SOWmjasYVNIgMICXdlILgl5dXcCpr_G0Tp8gX6vXnHDUE16GjEv_8HrtkSHnR-S2f3tJ-" />
                        </div>
                    </div>
                </div>
                <!-- Task Card 3 (Completed) -->
                <div
                    class="glass-card rounded-xl p-6 flex flex-col relative overflow-hidden group opacity-80 hover:opacity-100">
                    <div class="absolute top-0 right-0 p-4">
                        <div class="flex gap-2">
                            <button
                                class="p-2 rounded-lg bg-surface-container-high text-on-surface-variant hover:text-primary transition-all">
                                <span class="material-symbols-outlined text-[18px]"
                                    data-icon="visibility">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-2 h-2 rounded-full bg-tertiary shadow-[0_0_8px_rgba(255,181,149,1)]"></span>
                        <span
                            class="font-label-caps text-[10px] text-tertiary tracking-widest uppercase">CONCLUÍDA</span>
                    </div>
                    <h3
                        class="font-headline-md text-headline-md text-on-surface mb-2 line-through decoration-tertiary/40">
                        Protocolo de Segurança</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-2">Implementação do protocolo SHA-256
                        para o armazenamento de credenciais de veteranos.</p>
                    <div class="mt-auto flex items-center justify-between">
                        <div class="flex items-center gap-2 text-tertiary">
                            <span class="material-symbols-outlined text-[18px]"
                                data-icon="check_circle">check_circle</span>
                            <span class="font-label-caps text-[11px]">FINALIZADO EM 08 DEZ</span>
                        </div>
                    </div>
                </div>
                <!-- Task Card 4 -->
                <div class="glass-card rounded-xl p-6 flex flex-col relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4">
                        <div class="flex gap-2">
                            <button
                                class="p-2 rounded-lg bg-surface-container-high text-on-surface-variant hover:text-primary transition-all">
                                <span class="material-symbols-outlined text-[18px]" data-icon="terminal">terminal</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 mb-4">
                        <span class="w-2 h-2 rounded-full bg-primary/40"></span>
                        <span
                            class="font-label-caps text-[10px] text-on-surface-variant tracking-widest uppercase">PLANEJADO</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Simulação Quântica</h3>
                    <p class="font-body-md text-on-surface-variant mb-6 line-clamp-2">Configurar o ambiente de simulação
                        para o laboratório de física nuclear no campus 4.</p>
                    <div class="mt-auto flex items-center justify-between">
                        <div class="flex items-center gap-2 text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px]"
                                data-icon="calendar_today">calendar_today</span>
                            <span class="font-label-caps text-[11px]">INÍCIO: 15 DEZ</span>
                        </div>
                    </div>
                </div>
                <!-- Empty State/Add Task Placeholder -->
                <div
                    class="border-2 border-dashed border-white/5 rounded-xl p-6 flex flex-col items-center justify-center text-center group cursor-pointer hover:border-primary/40 transition-all min-h-[220px]">
                    <div
                        class="w-12 h-12 rounded-full bg-white/5 flex items-center justify-center mb-4 group-hover:bg-primary/10 transition-all">
                        <span
                            class="material-symbols-outlined text-on-surface-variant group-hover:text-primary group-hover:scale-125 transition-all"
                            data-icon="add_task">add_task</span>
                    </div>
                    <span class="font-label-caps text-on-surface-variant group-hover:text-primary">Adicionar Novo
                        Comando</span>
                </div>
            </div>
        </div>
    </main>
    <!-- FAB for Mobile (Implicit requirement from system logic) -->
    <button
        class="md:hidden fixed bottom-8 right-8 w-14 h-14 bg-primary text-on-primary rounded-full flex items-center justify-center shadow-2xl z-50 neon-accent active:scale-90 transition-all">
        <span class="material-symbols-outlined text-3xl" data-icon="add">add</span>
    </button>
    <script>
        // Simple logic for interactive states
        document.querySelectorAll('.glass-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Potential hover effects via JS
            });
        });

        // Search bar focus effect
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('neon-accent');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('neon-accent');
        });
    </script>
</body>

</html>