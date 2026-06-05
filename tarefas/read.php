<?php

//require_once 'conexao.php';

//$sql = "SELECT * FROM tarefas";

//$stmt = $pdo->prepare($sql);
//$stmt->execute();

//$tarefas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tarefas | AETHER EDU</title>
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
    <!-- Theme Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline-variant": "#414755",
                        "error-container": "#93000a",
                        "on-tertiary": "#571e00",
                        "surface-container-high": "#272a32",
                        "secondary-fixed-dim": "#c4c6cf",
                        "tertiary-fixed": "#ffdbcc",
                        "surface-tint": "#adc6ff",
                        "surface-container": "#1c2028",
                        "surface-dim": "#10131b",
                        "secondary-fixed": "#e1e2eb",
                        "on-secondary-fixed-variant": "#44474e",
                        "on-background": "#e0e2ed",
                        "outline": "#8b90a0",
                        "on-tertiary-fixed": "#351000",
                        "on-primary-fixed": "#001a41",
                        "inverse-primary": "#005bc1",
                        "secondary": "#c4c6cf",
                        "on-primary": "#002e69",
                        "on-tertiary-container": "#4c1a00",
                        "on-secondary": "#2e3037",
                        "on-secondary-container": "#b6b8c1",
                        "error": "#ffb4ab",
                        "inverse-surface": "#e0e2ed",
                        "primary-fixed-dim": "#adc6ff",
                        "primary-container": "#4b8eff",
                        "primary-fixed": "#d8e2ff",
                        "surface-variant": "#31353d",
                        "tertiary": "#ffb595",
                        "surface-container-lowest": "#0b0e16",
                        "secondary-container": "#464950",
                        "surface-container-highest": "#31353d",
                        "tertiary-fixed-dim": "#ffb595",
                        "on-secondary-fixed": "#191c22",
                        "surface-container-low": "#181c23",
                        "surface": "#10131b",
                        "on-error-container": "#ffdad6",
                        "surface-bright": "#363942",
                        "on-surface-variant": "#c1c6d7",
                        "on-primary-fixed-variant": "#004493",
                        "on-primary-container": "#00285c",
                        "primary": "#adc6ff",
                        "background": "#10131b",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "inverse-on-surface": "#2d3039",
                        "tertiary-container": "#ef6719",
                        "on-error": "#690005",
                        "on-surface": "#e0e2ed"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-padding-desktop": "40px",
                        "gutter": "24px",
                        "sidebar-width": "280px",
                        "unit": "4px",
                        "container-padding-mobile": "20px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "headline-lg-mobile": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            background-color: #0B0E14;
            color: #e0e2ed;
            overflow-x: hidden;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .sidebar-active {
            background: rgba(173, 198, 255, 0.1);
            border-left: 2px solid #adc6ff;
            color: #adc6ff;
        }

        .btn-glow {
            box-shadow: 0 0 20px rgba(173, 198, 255, 0.3);
            transition: all 0.3s ease;
        }

        .btn-glow:hover {
            box-shadow: 0 0 30px rgba(173, 198, 255, 0.5);
            transform: translateY(-1px);
        }

        .table-row-hover:hover {
            background: rgba(255, 255, 255, 0.03);
        }
    </style>
</head>

<body class="font-body-md text-body-md selection:bg-primary/30">
    <!-- Side Navigation -->
    <nav
        class="w-[280px] h-full fixed left-0 top-0 flex flex-col h-full py-gutter bg-surface/40 backdrop-blur-xl border-r border-white/10 shadow-2xl z-50">
        <div class="px-6 mb-10">
            <h1 class="font-display-lg text-display-lg tracking-tighter text-primary">AETHER EDU</h1>
            <p class="font-label-caps text-label-caps text-on-surface-variant mt-1 opacity-70">Academic Command Center
            </p>
        </div>
        <div class="flex-1 space-y-1">
            <a class="flex items-center px-6 py-3 text-on-surface-variant hover:bg-white/5 hover:text-primary transition-all duration-300 group"
                href="#">
                <span class="material-symbols-outlined mr-4 opacity-70 group-hover:opacity-100">dashboard</span>
                <span class="font-label-caps text-label-caps uppercase">Dashboard</span>
            </a>
            <a class="flex items-center px-6 py-3 text-on-surface-variant hover:bg-white/5 hover:text-primary transition-all duration-300 group"
                href="#">
                <span class="material-symbols-outlined mr-4 opacity-70 group-hover:opacity-100">calendar_month</span>
                <span class="font-label-caps text-label-caps uppercase">Calendar</span>
            </a>
            <a class="flex items-center px-6 py-3 text-on-surface-variant hover:bg-white/5 hover:text-primary transition-all duration-300 group"
                href="#">
                <span class="material-symbols-outlined mr-4 opacity-70 group-hover:opacity-100">grade</span>
                <span class="font-label-caps text-label-caps uppercase">Grades</span>
            </a>
            <a class="flex items-center px-6 py-3 sidebar-active transition-all duration-300 group" href="#">
                <span class="material-symbols-outlined mr-4"
                    style="font-variation-settings: 'FILL' 1;">assignment</span>
                <span class="font-label-caps text-label-caps uppercase">Assignments</span>
            </a>
            <a class="flex items-center px-6 py-3 text-on-surface-variant hover:bg-white/5 hover:text-primary transition-all duration-300 group"
                href="#">
                <span class="material-symbols-outlined mr-4 opacity-70 group-hover:opacity-100">mail</span>
                <span class="font-label-caps text-label-caps uppercase">Messages</span>
            </a>
        </div>
        <div class="px-6 mt-auto">
            <button
                class="w-full bg-primary/10 border border-primary/20 text-primary py-3 px-4 rounded-lg font-label-caps text-label-caps hover:bg-primary/20 transition-all active:scale-[0.98]">
                New Research
            </button>
        </div>
    </nav>
    <!-- Top Navigation Bar -->
    <header
        class="h-20 fixed top-0 right-0 left-[280px] z-40 flex justify-between items-center px-container-desktop bg-surface/40 backdrop-blur-xl border-b border-white/10 shadow-sm">
        <div
            class="flex items-center space-x-4 bg-surface-container-low px-4 py-2 rounded-full border border-white/5 focus-within:ring-1 focus-within:ring-primary transition-all">
            <span class="material-symbols-outlined text-on-surface-variant">search</span>
            <input class="bg-transparent border-none focus:ring-0 text-sm w-64 placeholder:text-on-surface-variant/50"
                placeholder="Global Search..." type="text" />
        </div>
        <div class="flex items-center space-x-6">
            <button class="text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button class="text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">settings</span>
            </button>
            <div class="h-10 w-10 rounded-full overflow-hidden border border-primary/30">
                <img alt="User Profile Avatar" class="w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4RMEgsvU1cNMe63jaLcoWAj-Jbs19bReRaay1DOY22P0HvmdCdPDnFQn1ntrL7u3RU82LdxjUhNT5_f11MfUeZ6mGR65o2TGO3UpkbjX5nFNMv3W-JAGwtDSMf9py9RcAskPo51XxYFSV4asuiVqLjuH6d_04kvTGag_vhZfCgmX6x6TylH3E_o19Qh48DTAXbPuMHEz70UJLn7Fw7-xXi2NQuTf5M63FqGlT124BqfZV9JmmSMDSfo8xkYDJE0LZ4koeVI8fG8E2" />
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-[280px] pt-32 pb-20 px-container-desktop min-h-screen">
        <!-- Page Header -->
        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Tarefas</h2>
                <p class="text-on-surface-variant mt-2 font-body-md">Gerencie as tarefas dos alunos.</p>
            </div>
            <button
                class="bg-primary text-on-primary font-label-caps text-label-caps px-8 py-4 rounded transition-all btn-glow flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]">add</span>
                ADICIONAR TAREFA
            </button>
        </div>
        <!-- Data Table Container -->
        <div class="glass-panel rounded-xl overflow-hidden shadow-2xl">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-white/10 bg-white/5">
                        <th class="px-6 py-5 font-label-caps text-label-caps text-primary uppercase tracking-widest">ID
                        </th>
                        <th class="px-6 py-5 font-label-caps text-label-caps text-primary uppercase tracking-widest">
                            Disciplina</th>
                        <th
                            class="px-6 py-5 font-label-caps text-label-caps text-primary uppercase tracking-widest w-1/3">
                            Descrição</th>
                        <th class="px-6 py-5 font-label-caps text-label-caps text-primary uppercase tracking-widest">
                            Prazo de Entrega</th>
                        <th
                            class="px-6 py-5 font-label-caps text-label-caps text-primary uppercase tracking-widest text-center">
                            Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    <!-- Row 1 -->
                    <tr class="table-row-hover transition-colors">
                        <td class="px-6 py-5 font-label-caps text-on-surface-variant">01</td>
                        <td class="px-6 py-5">
                            <span
                                class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-semibold">Matemática</span>
                        </td>
                        <td class="px-6 py-5 text-on-surface">Resolver exercícios página 45</td>
                        <td class="px-6 py-5 text-on-surface-variant font-mono text-sm">20/06/2026</td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center space-x-2">
                                <button
                                    class="p-2 bg-surface-container-highest hover:bg-white/10 rounded transition-colors text-on-surface-variant hover:text-primary">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                                <button class="p-2 bg-error/10 hover:bg-error/20 rounded transition-colors text-error">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr class="table-row-hover transition-colors">
                        <td class="px-6 py-5 font-label-caps text-on-surface-variant">02</td>
                        <td class="px-6 py-5">
                            <span
                                class="px-3 py-1 bg-tertiary/10 text-tertiary rounded-full text-xs font-semibold">Português</span>
                        </td>
                        <td class="px-6 py-5 text-on-surface">Produção textual sobre meio ambiente</td>
                        <td class="px-6 py-5 text-on-surface-variant font-mono text-sm">22/06/2026</td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center space-x-2">
                                <button
                                    class="p-2 bg-surface-container-highest hover:bg-white/10 rounded transition-colors text-on-surface-variant hover:text-primary">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                                <button class="p-2 bg-error/10 hover:bg-error/20 rounded transition-colors text-error">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 3 -->
                    <tr class="table-row-hover transition-colors">
                        <td class="px-6 py-5 font-label-caps text-on-surface-variant">03</td>
                        <td class="px-6 py-5">
                            <span
                                class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-semibold">História</span>
                        </td>
                        <td class="px-6 py-5 text-on-surface">Pesquisa sobre Revolução Francesa</td>
                        <td class="px-6 py-5 text-on-surface-variant font-mono text-sm">25/06/2026</td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center space-x-2">
                                <button
                                    class="p-2 bg-surface-container-highest hover:bg-white/10 rounded transition-colors text-on-surface-variant hover:text-primary">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                                <button class="p-2 bg-error/10 hover:bg-error/20 rounded transition-colors text-error">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr class="table-row-hover transition-colors">
                        <td class="px-6 py-5 font-label-caps text-on-surface-variant">04</td>
                        <td class="px-6 py-5">
                            <span
                                class="px-3 py-1 bg-tertiary/10 text-tertiary rounded-full text-xs font-semibold">Geografia</span>
                        </td>
                        <td class="px-6 py-5 text-on-surface">Trabalho sobre biomas brasileiros</td>
                        <td class="px-6 py-5 text-on-surface-variant font-mono text-sm">28/06/2026</td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center space-x-2">
                                <button
                                    class="p-2 bg-surface-container-highest hover:bg-white/10 rounded transition-colors text-on-surface-variant hover:text-primary">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                                <button class="p-2 bg-error/10 hover:bg-error/20 rounded transition-colors text-error">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 5 -->
                    <tr class="table-row-hover transition-colors">
                        <td class="px-6 py-5 font-label-caps text-on-surface-variant">05</td>
                        <td class="px-6 py-5">
                            <span
                                class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs font-semibold">Física</span>
                        </td>
                        <td class="px-6 py-5 text-on-surface">Lista de exercícios de cinemática</td>
                        <td class="px-6 py-5 text-on-surface-variant font-mono text-sm">30/06/2026</td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center space-x-2">
                                <button
                                    class="p-2 bg-surface-container-highest hover:bg-white/10 rounded transition-colors text-on-surface-variant hover:text-primary">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                                <button class="p-2 bg-error/10 hover:bg-error/20 rounded transition-colors text-error">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Row 6 -->
                    <tr class="table-row-hover transition-colors border-none">
                        <td class="px-6 py-5 font-label-caps text-on-surface-variant">06</td>
                        <td class="px-6 py-5">
                            <span
                                class="px-3 py-1 bg-tertiary/10 text-tertiary rounded-full text-xs font-semibold">Química</span>
                        </td>
                        <td class="px-6 py-5 text-on-surface">Balanceamento de equações</td>
                        <td class="px-6 py-5 text-on-surface-variant font-mono text-sm">02/07/2026</td>
                        <td class="px-6 py-5">
                            <div class="flex justify-center space-x-2">
                                <button
                                    class="p-2 bg-surface-container-highest hover:bg-white/10 rounded transition-colors text-on-surface-variant hover:text-primary">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </button>
                                <button class="p-2 bg-error/10 hover:bg-error/20 rounded transition-colors text-error">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Footer Info -->
        <div
            class="mt-8 flex justify-between items-center text-on-surface-variant/60 font-label-caps text-[10px] tracking-[0.2em] uppercase">
            <div>© 2024 AETHER EDU - SYSTEM SECURED</div>
            <div class="flex items-center space-x-4">
                <span>Total: 6 TAREFAS ENCONTRADAS</span>
                <span class="w-[2px] h-3 bg-white/10"></span>
                <span>PÁGINA 1 DE 1</span>
            </div>
        </div>
    </main>
    <!-- Background Atmospheric Effect -->
    <div class="fixed top-0 left-0 w-full h-full pointer-events-none -z-10 overflow-hidden">
        <div class="absolute -top-[10%] -right-[10%] w-[60%] h-[60%] rounded-full bg-primary/5 blur-[120px]"></div>
        <div class="absolute -bottom-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-tertiary/5 blur-[100px]"></div>
    </div>
    <script>
        // Micro-interactions for table rows
        document.querySelectorAll('.table-row-hover').forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.querySelector('td:first-child').classList.add('text-primary');
            });
            row.addEventListener('mouseleave', () => {
                row.querySelector('td:first-child').classList.remove('text-primary');
            });
        });

        // Search bar focus effect
        const searchInput = document.querySelector('input[type="text"]');
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('bg-surface-container-highest');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('bg-surface-container-highest');
        });
    </script>
</body>

</html>