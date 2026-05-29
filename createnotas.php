<!DOCTYPE html>

<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Registro de Notas - AETHER EDU</title>
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
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.07);
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
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        }

        .neon-glow {
            box-shadow: 0 0 15px rgba(173, 198, 255, 0.4);
        }

        body {
            background-color: #0b0e14;
            color: #e0e2ed;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
    </style>
</head>

<body class="font-body-md text-body-md overflow-x-hidden">
    <!-- SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-full w-sidebar-width bg-surface/40 backdrop-blur-xl border-r border-white/10 flex flex-col py-gutter px-4 z-50">
        <div class="mb-10 px-2 flex items-center gap-3">
            <div class="w-10 h-10 bg-primary/20 rounded-lg flex items-center justify-center border border-primary/30">
                <span class="material-symbols-outlined text-primary"
                    style="font-variation-settings: 'FILL' 1;">deployed_code</span>
            </div>
            <div>
                <h1 class="font-headline-lg text-headline-lg text-primary tracking-tighter leading-none">AETHER EDU</h1>
                <p class="font-label-caps text-[10px] text-on-surface-variant tracking-[0.2em] mt-1">COMMAND CENTER</p>
            </div>
        </div>
        <nav class="flex-grow flex flex-col gap-1">
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors transition-transform scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-label-caps text-label-caps">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors transition-transform scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined">calendar_month</span>
                <span class="font-label-caps text-label-caps">Calendar</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-primary bg-primary/10 border-l-2 border-primary transition-colors transition-transform scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">grade</span>
                <span class="font-label-caps text-label-caps">Grades</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors transition-transform scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined">assignment</span>
                <span class="font-label-caps text-label-caps">Assignments</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors transition-transform scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined">mail</span>
                <span class="font-label-caps text-label-caps">Messages</span>
            </a>
        </nav>
        <div class="mt-auto flex flex-col gap-1 border-t border-white/5 pt-6">
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors transition-transform scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-label-caps text-label-caps">Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors transition-transform scale-95 active:scale-90"
                href="#">
                <span class="material-symbols-outlined">help</span>
                <span class="font-label-caps text-label-caps">Support</span>
            </a>
        </div>
    </aside>
    <!-- TopNavBar -->
    <header
        class="fixed top-0 right-0 w-[calc(100%-var(--sidebar-width))] h-16 bg-surface/30 backdrop-blur-lg border-b border-white/5 flex justify-between items-center px-container-padding-desktop z-40 transition-all duration-300">
        <div class="flex items-center gap-4 w-1/3">
            <div class="relative w-full max-w-sm">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-sm">search</span>
                <input
                    class="w-full bg-surface-container-lowest/50 border border-white/10 rounded-full py-1.5 pl-10 pr-4 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/30 transition-all"
                    placeholder="Search parameters..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-6">
            <button class="relative text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-0 right-0 w-2 h-2 bg-primary rounded-full border border-surface"></span>
            </button>
            <button class="text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">settings</span>
            </button>
            <div class="h-8 w-[1px] bg-white/10 mx-2"></div>
            <div class="flex items-center gap-3">
                <div class="text-right hidden sm:block">
                    <p class="text-[12px] font-bold text-on-surface leading-tight">Alex Vance</p>
                    <p class="text-[10px] text-on-surface-variant leading-tight">M.S. Cybernetics</p>
                </div>
                <img alt="Student Profile"
                    class="w-9 h-9 rounded-full border border-primary/40 bg-surface-container-high"
                    data-alt="A high-quality 3D rendered avatar profile picture of a young male student wearing professional glasses and a tech-focused sweater. The aesthetic is clean and modern with soft, cinematic studio lighting against a dark blue gradient background that matches the education platform's interface."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdtYR5nI21sE5egHocR-CekQwSrhF1Y38Ny07IzHypLn1TGrf9SPq-WGYJXZylKRn07Kj2ICWJnT5WktpYqQ3mhEr5pRCA1cWnuVkUHq5OWmSAmgw5VNWeIga9lgTzfrObOAHNHT0eG5t0h4qSJyMpf7ZSlM5v771CPPO9XRS0x9D7eibelKmrxZG0U_Aj_4mSGvyHQtcitey1m2rbBCIFggwq6WfBSkS8AuMI96kHvyY-v8ZqLC8jI7_jGFZYOHvzXTtQpRcA6bPV" />
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="ml-[var(--sidebar-width)] pt-16 min-h-screen">
        <div class="max-w-[1440px] mx-auto p-container-padding-desktop">
            <!-- Page Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-6">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Registro de Notas</h2>
                    <p class="text-on-surface-variant mt-2 font-body-md max-w-xl">Gerenciamento centralizado de
                        desempenho acadêmico e histórico de créditos para o semestre vigente.</p>
                </div>
                <button
                    class="bg-primary text-on-primary-container px-6 py-3 rounded-xl font-bold flex items-center gap-2 hover:scale-105 active:scale-95 transition-all neon-glow">
                    <span class="material-symbols-outlined">add</span>
                    <span>Adicionar Nota</span>
                </button>
            </div>
            <!-- Summary Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-10">
                <div class="glass-card p-6 rounded-2xl md:col-span-1">
                    <p class="font-label-caps text-label-caps text-on-surface-variant mb-4">MÉDIA GLOBAL (GPA)</p>
                    <div class="flex items-end gap-3">
                        <span class="text-5xl font-bold text-primary">3.92</span>
                        <div class="flex items-center text-primary text-sm mb-1 bg-primary/10 px-2 py-0.5 rounded-full">
                            <span class="material-symbols-outlined text-sm">trending_up</span>
                            <span>+0.12</span>
                        </div>
                    </div>
                    <p class="text-xs text-on-surface-variant/60 mt-4 italic">Top 5% da turma</p>
                </div>
                <div class="glass-card p-6 rounded-2xl md:col-span-1">
                    <p class="font-label-caps text-label-caps text-on-surface-variant mb-4">TOTAL DE CRÉDITOS</p>
                    <div class="flex items-end gap-3">
                        <span class="text-5xl font-bold text-on-surface">148</span>
                        <span class="text-on-surface-variant mb-2">/ 180</span>
                    </div>
                    <div class="w-full bg-white/5 h-1.5 rounded-full mt-5">
                        <div class="bg-primary h-full rounded-full w-[82%] shadow-[0_0_8px_rgba(173,198,255,0.5)]">
                        </div>
                    </div>
                </div>
                <div class="glass-card p-6 rounded-2xl md:col-span-2 relative">
                    <p class="font-label-caps text-label-caps text-on-surface-variant mb-2">EVOLUÇÃO DE DESEMPENHO</p>
                    <div class="h-24 w-full flex items-end gap-1.5 mt-4">
                        <!-- Mini Trend Line Mockup -->
                        <div class="flex-grow flex items-end justify-between h-full px-2">
                            <div class="w-2 bg-primary/20 h-[40%] rounded-t-sm"></div>
                            <div class="w-2 bg-primary/20 h-[55%] rounded-t-sm"></div>
                            <div class="w-2 bg-primary/20 h-[45%] rounded-t-sm"></div>
                            <div class="w-2 bg-primary/40 h-[70%] rounded-t-sm"></div>
                            <div class="w-2 bg-primary/40 h-[60%] rounded-t-sm"></div>
                            <div class="w-2 bg-primary/60 h-[85%] rounded-t-sm"></div>
                            <div class="w-2 bg-primary/60 h-[75%] rounded-t-sm"></div>
                            <div class="w-2 bg-primary h-[95%] rounded-t-sm shadow-[0_0_10px_rgba(173,198,255,0.3)]">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-2 text-[10px] font-label-caps text-on-surface-variant/40">
                        <span>SEM 1</span>
                        <span>SEM 2</span>
                        <span>SEM 3</span>
                        <span>ATUAL</span>
                    </div>
                </div>
            </div>
            <!-- Filter & Search Section -->
            <div class="flex flex-col md:flex-row gap-4 mb-6">
                <div class="relative flex-grow">
                    <span
                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                    <input
                        class="w-full bg-surface-container/60 border border-white/5 rounded-xl py-3 pl-12 pr-4 focus:ring-1 focus:ring-primary/40 focus:border-primary/40 transition-all outline-none"
                        placeholder="Filtrar por disciplina ou código..." type="text" />
                </div>
                <div class="flex gap-2">
                    <select
                        class="bg-surface-container/60 border border-white/5 rounded-xl px-4 py-3 text-on-surface-variant focus:ring-1 focus:ring-primary/40 outline-none appearance-none pr-10 relative">
                        <option>Todos os Semestres</option>
                        <option>2023 - 2º Semestre</option>
                        <option>2023 - 1º Semestre</option>
                    </select>
                    <button
                        class="bg-surface-container/60 border border-white/5 rounded-xl px-4 py-3 text-on-surface-variant hover:bg-white/5 transition-colors">
                        <span class="material-symbols-outlined">filter_list</span>
                    </button>
                </div>
            </div>
            <!-- Grades Table -->
            <div class="glass-card rounded-2xl overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-white/5 bg-white/5">
                            <th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant">DISCIPLINA
                            </th>
                            <th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant">NOTA</th>
                            <th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant">SEMESTRE</th>
                            <th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant">STATUS</th>
                            <th class="px-6 py-4 font-label-caps text-label-caps text-on-surface-variant text-right">
                                AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        <tr class="hover:bg-white/5 transition-colors group">
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center text-primary border border-primary/20">
                                        <span class="material-symbols-outlined">code</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-on-surface">Algoritmos e Estruturas de Dados II</p>
                                        <p class="text-xs text-on-surface-variant">COMP-402 • 4 Créditos</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span class="text-xl font-bold text-primary tracking-widest">A</span>
                            </td>
                            <td class="px-6 py-5 text-on-surface-variant">2º Semestre</td>
                            <td class="px-6 py-5">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Aprovado</span>
                            </td>
                            <td class="px-6 py-5 text-right">
                                <div
                                    class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button
                                        class="p-2 hover:bg-white/10 rounded-lg text-on-surface-variant hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-sm">edit</span>
                                    </button>
                                    <button
                                        class="p-2 hover:bg-white/10 rounded-lg text-on-surface-variant hover:text-error transition-colors">
                                        <span class="material-symbols-outlined text-sm">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors group">
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-on-surface-variant/10 flex items-center justify-center text-on-surface-variant border border-white/5">
                                        <span class="material-symbols-outlined">calculate</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-on-surface">Cálculo Diferencial e Integral III</p>
                                        <p class="text-xs text-on-surface-variant">MATH-201 • 6 Créditos</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span class="text-xl font-bold text-on-surface tracking-widest">B+</span>
                            </td>
                            <td class="px-6 py-5 text-on-surface-variant">2º Semestre</td>
                            <td class="px-6 py-5">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Aprovado</span>
                            </td>
                            <td class="px-6 py-5 text-right">
                                <div
                                    class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button
                                        class="p-2 hover:bg-white/10 rounded-lg text-on-surface-variant hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-sm">edit</span>
                                    </button>
                                    <button
                                        class="p-2 hover:bg-white/10 rounded-lg text-on-surface-variant hover:text-error transition-colors">
                                        <span class="material-symbols-outlined text-sm">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors group">
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-on-surface-variant/10 flex items-center justify-center text-on-surface-variant border border-white/5">
                                        <span class="material-symbols-outlined">psychology</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-on-surface">Sistemas Inteligentes</p>
                                        <p class="text-xs text-on-surface-variant">AI-301 • 4 Créditos</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span class="text-xl font-bold text-primary tracking-widest">A-</span>
                            </td>
                            <td class="px-6 py-5 text-on-surface-variant">1º Semestre</td>
                            <td class="px-6 py-5">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Aprovado</span>
                            </td>
                            <td class="px-6 py-5 text-right">
                                <div
                                    class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button
                                        class="p-2 hover:bg-white/10 rounded-lg text-on-surface-variant hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-sm">edit</span>
                                    </button>
                                    <button
                                        class="p-2 hover:bg-white/10 rounded-lg text-on-surface-variant hover:text-error transition-colors">
                                        <span class="material-symbols-outlined text-sm">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-white/5 transition-colors group">
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-on-surface-variant/10 flex items-center justify-center text-on-surface-variant border border-white/5">
                                        <span class="material-symbols-outlined">hub</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-on-surface">Redes de Computadores</p>
                                        <p class="text-xs text-on-surface-variant">NET-105 • 4 Créditos</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-5">
                                <span class="text-xl font-bold text-on-surface-variant/50 tracking-widest">--</span>
                            </td>
                            <td class="px-6 py-5 text-on-surface-variant">2º Semestre</td>
                            <td class="px-6 py-5">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary/10 text-primary border border-primary/20">Em
                                    Curso</span>
                            </td>
                            <td class="px-6 py-5 text-right">
                                <div
                                    class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button
                                        class="p-2 hover:bg-white/10 rounded-lg text-on-surface-variant hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-sm">edit</span>
                                    </button>
                                    <button
                                        class="p-2 hover:bg-white/10 rounded-lg text-on-surface-variant hover:text-error transition-colors">
                                        <span class="material-symbols-outlined text-sm">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Footer Meta -->
            <div
                class="mt-8 flex justify-between items-center text-on-surface-variant text-[11px] font-label-caps tracking-widest opacity-40">
                <p>© 2024 AETHER EDU ECOSYSTEM • SECURE NODE GR-82</p>
                <div class="flex gap-4">
                    <span>UPTIME: 99.98%</span>
                    <span>LATENCY: 12ms</span>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Simple micro-interaction for rows
        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.style.backdropFilter = 'brightness(1.2) blur(20px)';
            });
            row.addEventListener('mouseleave', () => {
                row.style.backdropFilter = 'blur(20px)';
            });
        });

        // Atmospheric mouse glow effect (lightweight)
        const main = document.querySelector('main');
        main.addEventListener('mousemove', (e) => {
            const x = e.clientX;
            const y = e.clientY;
            // Logic for a subtle radial glow could be added here via CSS variables
        });
    </script>
</body>

</html>