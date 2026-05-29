<!DOCTYPE html>

<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Confirmar Exclusão - AETHER EDU</title>
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
            overflow-x: hidden;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-modal {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(40px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.5);
        }

        .neon-border-red {
            border: 1px solid rgba(255, 75, 75, 0.3);
            box-shadow: 0 0 15px rgba(255, 75, 75, 0.2);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        .active-nav-glow {
            box-shadow: -15px 0 20px -10px rgba(173, 198, 255, 0.5);
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
                }
            }
        }
    </script>
</head>

<body class="font-body-md text-body-md selection:bg-primary/30">
    <!-- Navigation Shell -->
    <aside
        class="fixed left-0 top-0 h-full w-sidebar-width bg-surface/40 backdrop-blur-xl border-r border-white/10 z-30 flex flex-col h-full py-gutter px-4">
        <div class="mb-10 px-2">
            <h1 class="font-headline-lg text-headline-lg text-primary tracking-tighter">AETHER EDU</h1>
            <p class="font-label-caps text-label-caps text-on-surface-variant opacity-70">Command Center</p>
        </div>
        <nav class="flex-1 space-y-2">
            <!-- Navigation Items Mapping -->
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors scale-95 active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-label-caps text-label-caps">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors scale-95 active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
                <span class="font-label-caps text-label-caps">Calendar</span>
            </a>
            <!-- Active Tab: Grades -->
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-primary bg-primary/10 border-l-2 border-primary active-nav-glow scale-95 active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined" data-icon="grade">grade</span>
                <span class="font-label-caps text-label-caps">Grades</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors scale-95 active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined" data-icon="assignment">assignment</span>
                <span class="font-label-caps text-label-caps">Assignments</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors scale-95 active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined" data-icon="mail">mail</span>
                <span class="font-label-caps text-label-caps">Messages</span>
            </a>
        </nav>
        <div class="mt-auto pt-6 border-t border-white/5 space-y-2">
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors scale-95 active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-label-caps text-label-caps">Settings</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors scale-95 active:scale-90 transition-transform"
                href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span class="font-label-caps text-label-caps">Support</span>
            </a>
        </div>
    </aside>
    <header
        class="fixed top-0 right-0 w-[calc(100%-var(--sidebar-width))] h-16 bg-surface/30 backdrop-blur-lg border-b border-white/5 z-20 flex justify-between items-center px-container-padding-desktop">
        <div class="flex items-center bg-black/20 rounded-full px-4 py-1.5 border border-white/5 w-80">
            <span class="material-symbols-outlined text-on-surface-variant text-xl mr-2"
                data-icon="search">search</span>
            <input
                class="bg-transparent border-none focus:ring-0 text-sm text-on-surface w-full placeholder:text-on-surface-variant/50"
                placeholder="Pesquisar registros..." type="text" />
        </div>
        <div class="flex items-center gap-6">
            <button class="relative text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                <span class="absolute top-0 right-0 w-2 h-2 bg-primary rounded-full border border-surface"></span>
            </button>
            <button class="text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
            </button>
            <div class="h-8 w-8 rounded-full border border-primary/30 overflow-hidden">
                <img alt="Student Profile" class="w-full h-full object-cover"
                    data-alt="A professional and modern headshot of a student with a neutral expression, set against a dark, minimalist architectural background. The lighting is dramatic with cool blue rim lights, reflecting a high-tech academic environment. The image has a clean, high-end editorial feel with cinematic depth of field."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCu2imRN18WCa9pUG0wQ7KXQPxNvktVKT9Eis0Hh7fULxXiD_L1TiAituEeZNLtwGO60RBoB3UDyPXAo2cebDpDdothZp2XUJlUkK7agIONDNZwv-GbPn0bjo48dwIPZXnFmbHW4pSNeUrse13k8Mst2_-Y4rd8NeS22_9fHF5hYywxUH6GVj6qccRRclctQ0FNVOk_0KVuNXJauYg9FNZd_fyvoMWi4yquNGc1govhcyvf5tqvKHpidKc65E1ozQmTzIp4WUXlyou-" />
            </div>
        </div>
    </header>
    <!-- Main Content Canvas (Blurred Background) -->
    <main
        class="ml-[var(--sidebar-width)] pt-24 px-container-padding-desktop pb-gutter blur-md pointer-events-none select-none">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Gestão de Notas</h2>
                <p class="text-on-surface-variant mt-1">Semestre Atual: 2024.1 • Engenharia de Sistemas Aeroespaciais
                </p>
            </div>
            <div class="flex gap-4">
                <button
                    class="glass-panel px-6 py-2 rounded-lg font-label-caps text-label-caps text-primary hover:bg-primary/10 transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-lg" data-icon="download">download</span>
                    Exportar Relatório
                </button>
            </div>
        </div>
        <!-- Grades Table Bento Grid Style -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 glass-panel rounded-xl overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-white/5 border-b border-white/10">
                            <th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant">Código</th>
                            <th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant">Disciplina
                            </th>
                            <th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant text-center">P1
                            </th>
                            <th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant text-center">P2
                            </th>
                            <th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant text-center">
                                Média</th>
                            <th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant text-right">
                                Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        <tr>
                            <td class="px-6 py-4 font-label-caps text-primary">SYS-402</td>
                            <td class="px-6 py-4 font-headline-md text-sm">Cálculo Diferencial Avançado</td>
                            <td class="px-6 py-4 text-center">8.5</td>
                            <td class="px-6 py-4 text-center">9.2</td>
                            <td class="px-6 py-4 text-center font-bold text-primary">8.8</td>
                            <td class="px-6 py-4 text-right">
                                <span class="material-symbols-outlined text-on-surface-variant"
                                    data-icon="delete">delete</span>
                            </td>
                        </tr>
                        <tr class="bg-white/5">
                            <td class="px-6 py-4 font-label-caps text-primary">AER-101</td>
                            <td class="px-6 py-4 font-headline-md text-sm">Mecânica Orbital e Propulsão</td>
                            <td class="px-6 py-4 text-center">7.0</td>
                            <td class="px-6 py-4 text-center">6.8</td>
                            <td class="px-6 py-4 text-center font-bold text-error">6.9</td>
                            <td class="px-6 py-4 text-right">
                                <span class="material-symbols-outlined text-primary" data-icon="delete">delete</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 font-label-caps text-primary">DSN-204</td>
                            <td class="px-6 py-4 font-headline-md text-sm">Design de Interface Neural</td>
                            <td class="px-6 py-4 text-center">10.0</td>
                            <td class="px-6 py-4 text-center">9.8</td>
                            <td class="px-6 py-4 text-center font-bold text-primary">9.9</td>
                            <td class="px-6 py-4 text-right">
                                <span class="material-symbols-outlined text-on-surface-variant"
                                    data-icon="delete">delete</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Stats Mini Cards -->
            <div class="col-span-4 glass-panel p-6 rounded-xl">
                <div class="flex justify-between items-start mb-4">
                    <span class="font-label-caps text-label-caps text-on-surface-variant">Coeficiente Global</span>
                    <span class="material-symbols-outlined text-primary" data-icon="trending_up">trending_up</span>
                </div>
                <div class="text-4xl font-bold tracking-tighter text-on-surface">8.42</div>
                <div class="mt-2 text-xs text-primary">+0.15 desde o último mês</div>
            </div>
            <div class="col-span-4 glass-panel p-6 rounded-xl">
                <div class="flex justify-between items-start mb-4">
                    <span class="font-label-caps text-label-caps text-on-surface-variant">Créditos Cursados</span>
                    <span class="material-symbols-outlined text-primary" data-icon="school">school</span>
                </div>
                <div class="text-4xl font-bold tracking-tighter text-on-surface">142/220</div>
                <div class="mt-2 w-full bg-white/10 h-1 rounded-full overflow-hidden">
                    <div class="bg-primary h-full w-[64%]"></div>
                </div>
            </div>
            <div class="col-span-4 glass-panel p-6 rounded-xl border-primary/20">
                <div class="flex justify-between items-start mb-4">
                    <span class="font-label-caps text-label-caps text-on-surface-variant">Próximo Exame</span>
                    <span class="material-symbols-outlined text-tertiary" data-icon="event">event</span>
                </div>
                <div class="text-xl font-bold text-on-surface">Sistemas Críticos</div>
                <div class="mt-2 text-xs text-on-surface-variant">Amanhã às 09:00 - Bloco G</div>
            </div>
        </div>
    </main>
    <!-- DELETE CONFIRMATION MODAL -->
    <div
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm animate-in fade-in duration-300">
        <div class="glass-modal w-full max-w-lg rounded-2xl p-8 relative overflow-hidden neon-border-red">
            <!-- Atmospheric Glow Background Inside Modal -->
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-error/10 blur-[100px] rounded-full"></div>
            <div class="relative z-10">
                <div class="flex items-center gap-4 mb-6">
                    <div
                        class="w-12 h-12 rounded-xl bg-error/20 flex items-center justify-center border border-error/30 text-error">
                        <span class="material-symbols-outlined text-3xl" data-icon="warning">warning</span>
                    </div>
                    <div>
                        <h3 class="font-headline-md text-headline-md text-on-surface">Confirmar Exclusão</h3>
                        <p class="font-label-caps text-label-caps text-error tracking-widest uppercase">AETHER EDU
                            Secure Protocol</p>
                    </div>
                </div>
                <div class="bg-white/5 border border-white/10 rounded-xl p-5 mb-8">
                    <p class="font-body-md text-on-surface leading-relaxed">
                        <span
                            class="text-on-surface-variant font-bold block mb-2 font-label-caps tracking-tighter">Protocolo
                            de Exclusão:</span>
                        Tem certeza que deseja remover este registro acadêmico? Esta ação é irreversível e afetará
                        permanentemente o histórico do estudante.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button
                        class="flex-1 bg-on-error-container text-white font-label-caps text-label-caps py-4 px-6 rounded-lg hover:bg-[#ff4b4b] transition-all duration-300 active:scale-[0.98] border border-[#ff4b4b] shadow-[0_0_20px_rgba(255,75,75,0.3)]">
                        Confirmar Exclusão
                    </button>
                    <button
                        class="flex-1 glass-panel text-on-surface font-label-caps text-label-caps py-4 px-6 rounded-lg hover:bg-white/10 transition-all duration-300 active:scale-[0.98]">
                        Abortar
                    </button>
                </div>
                <p class="text-center text-[10px] font-label-caps text-on-surface-variant/40 mt-6 tracking-widest">
                    ID DE TRANSAÇÃO: AUTH-SEC-9281726-DEL
                </p>
            </div>
        </div>
    </div>
    <!-- Background Atmospheric Elements -->
    <div class="fixed top-0 left-0 w-full h-full pointer-events-none -z-10 overflow-hidden">
        <div class="absolute top-[10%] left-[20%] w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-[10%] right-[10%] w-[400px] h-[400px] bg-tertiary/5 blur-[120px] rounded-full">
        </div>
    </div>
    <script>
        // Subtle micro-interactions
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mousedown', () => {
                button.style.transform = 'scale(0.96)';
            });
            button.addEventListener('mouseup', () => {
                button.style.transform = '';
            });
            button.addEventListener('mouseleave', () => {
                button.style.transform = '';
            });
        });

        // Background floating motion effect
        document.addEventListener('mousemove', (e) => {
            const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
            const moveY = (e.clientY - window.innerHeight / 2) * 0.01;
            document.querySelectorAll('.bg-primary\\/5, .bg-tertiary\\/5').forEach(el => {
                el.style.transform = `translate(${moveX}px, ${moveY}px)`;
            });
        });
    </script>
</body>

</html>