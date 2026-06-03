<?php

 //require_once 'conexao.php';

$sql = "SELECT
            notas.id,
            alunos.nome,
            notas.disciplina,
            notas.nota
        FROM notas
        INNER JOIN alunos
        ON notas.aluno_id = alunos.id";

 //$stmt = $pdo->prepare($sql);
//$stmt->execute();

//$notas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html class="dark" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AETHER OS - Grade Detail</title>
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
                },
            },
        }
    </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-blur {
            background: rgba(24, 28, 35, 0.4);
            backdrop-filter: blur(32px);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            background-color: #0B0E14;
        }
    </style>
</head>

<body class="text-on-surface selection:bg-primary selection:text-on-primary">
    <!-- TopNavBar -->
    <nav
        class="bg-surface/60 backdrop-blur-xl text-primary font-body-md text-body-md docked full-width top-0 sticky z-50 border-b border-white/10 flex justify-between items-center w-full px-gutter h-16">
        <div class="flex items-center gap-6">
            <span class="font-label-caps text-label-caps tracking-widest text-primary uppercase">AETHER EDU</span>
        <div class="flex items-center gap-4">
            <button
                class="material-symbols-outlined hover:text-primary transition-colors duration-200">notifications</button>
            <button
                class="material-symbols-outlined hover:text-primary transition-colors duration-200">settings</button>
            <button class="material-symbols-outlined hover:text-primary transition-colors duration-200">help</button>
            <div class="w-8 h-8 rounded-full overflow-hidden border border-primary/20">
                <img alt="User profile" class="w-full h-full object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRWhW-2L3XsUP6VLEevuVgND5rnG-6JMPt6P831ZUrQ93SAkvcx8J3JiLAnlfIHcoGX_pSsO8N7Ri4DS6iFMkuzmz9GBsjFSNMf2EKFo_x7BIE9lNceXot-QBxqU4PoHV9z34jwQw_alPqOs1JL2knOLJz_xpJc_FVrBjhvJSThaXioZjVJvhNP56dcLhIisH6CzwNrHG91sSGg4c9JQnfvXyiEeDQoor4Cqc_ProSHSpKVjtDUYl1BLlJt5U--USX8XxnN3buB7-J" />
            </div>
        </div>
    </nav>
    <div class="flex min-h-[calc(100vh-64px)]">
        <!-- SideNavBar -->
        <aside
            class="hidden md:flex flex-col py-8 px-4 gap-y-2 fixed left-0 top-16 h-[calc(100vh-64px)] w-sidebar-width bg-surface-container-low/40 backdrop-blur-2xl border-r border-white/10 z-40">
            <div class="mb-8 px-2">
                <h2 class="font-headline-md text-headline-md font-bold text-on-surface tracking-tighter">AETHER OS</h2>
                <p class="font-label-caps text-label-caps text-on-surface-variant opacity-60">Academic Command</p>
            </div>
            <nav class="space-y-1">
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all group"
                    href="#">
                    <span class="material-symbols-outlined">grid_view</span>
                    <span class="font-label-caps text-label-caps">Painel</span>
                </a>
                 <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <span class="font-body-md text-body-md">Alunos</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-primary border-l-2 border-primary bg-primary/5 transition-all group"
                    href="#">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">analytics</span>
                    <span class="font-label-caps text-label-caps">Notas</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all group"
                    href="#">
                    <span class="material-symbols-outlined">assignment</span>
                    <span class="font-label-caps text-label-caps">Tarefas</span>
                </a>
            </nav>
            <div class="mt-auto space-y-1">
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-error/80 hover:bg-error/5 transition-all group"
                    href="#">
                    <span class="material-symbols-outlined">logout</span>
                    <span class="font-label-caps text-label-caps">Sair</span>
                </a>
            </div>
        </aside>
        <!-- Main Content -->
        <main class="flex-1 md:ml-sidebar-width p-gutter md:p-container-desktop">
            <div class="max-w-4xl mx-auto">
                <!-- Back Button & Title -->
                <div class="flex items-center justify-between mb-12">
                    <div class="flex flex-col gap-2">
                        <button
                            class="flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors group mb-4"
                            onclick="history.back()">
                            <span
                                class="material-symbols-outlined transition-transform group-hover:-translate-x-1">arrow_back</span>
                            <span class="font-label-caps text-label-caps">Voltar para listagem</span>
                        </button>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Detalhes da
                            Avaliação</h1>
                    </div>
                </div>
                <!-- Grade Detail Card -->
                <div class="glass-card rounded-xl overflow-hidden shadow-2xl relative">
                    <!-- Tech Glow Decoration -->
                    <div
                        class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-primary/40 to-transparent">
                    </div>
                    <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 blur-[80px] rounded-full -mr-16 -mt-16">
                    </div>
                    <div class="p-8 md:p-12">
                        <!-- Header Information -->
                        <div
                            class="flex flex-col md:flex-row justify-between items-start md:items-center gap-8 mb-12 border-b border-white/5 pb-12">
                            <div>
                                <p class="font-label-caps text-label-caps text-primary mb-2">DISCIPLINA</p>
                                <h2 class="font-display-lg text-display-lg md:text-display-lg text-on-surface">
                                    Arquitetura de Sistemas Cloud</h2>
                                <div class="flex items-center gap-4 mt-4">
                                    <div
                                        class="flex items-center gap-2 glass-card bg-surface-container-high/40 px-3 py-1.5 rounded-full">
                                        <span
                                            class="material-symbols-outlined text-[18px] text-on-surface-variant">calendar_today</span>
                                        <span class="font-label-caps text-label-caps text-on-surface-variant">2º
                                            Semestre • 2023</span>
                                    </div>
                                    <div
                                        class="flex items-center gap-2 glass-card bg-surface-container-high/40 px-3 py-1.5 rounded-full">
                                        <span
                                            class="material-symbols-outlined text-[18px] text-on-surface-variant">event_available</span>
                                        <span class="font-label-caps text-label-caps text-on-surface-variant">Registrado
                                            em 14 Nov 2023</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-end gap-3 min-w-[180px]">
                                <p class="font-label-caps text-label-caps text-on-surface-variant">NOTA FINAL</p>
                                <div
                                    class="text-[64px] font-bold text-on-surface leading-none tracking-tighter flex items-start">
                                    9.8<span
                                        class="text-headline-md text-on-surface-variant font-normal opacity-50 mt-2">/10</span>
                                </div>
                                <span
                                    class="bg-primary/20 text-primary px-4 py-1.5 rounded-full font-label-caps text-label-caps border border-primary/30 animate-pulse">
                                    EXCELENTE
                                </span>
                            </div>
                        </div>
                        <!-- Content Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
                            <!-- Teacher Observations -->
                            
                    <!-- Footer Action -->
                    <div
                        class="bg-surface-container-high/20 border-t border-white/5 p-8 flex flex-col md:flex-row items-center justify-between gap-6">
                        <div class="flex items-center gap-2 text-on-surface-variant">
                            <span class="material-symbols-outlined text-[18px]">verified_user</span>
                        </div>
                        <button
                            class="bg-primary text-on-primary-fixed px-8 py-3 rounded-lg font-label-caps text-label-caps font-bold hover:scale-[1.02] active:scale-95 transition-all shadow-lg shadow-primary/20">
                            Editar
                        </button>
                    </div>
                </div>
                <!-- Related Content -->
                </div>
            </div>
        </main>
    </div>
    <!-- Atmospheric Glow Background Elements -->
    <div
        class="fixed top-[-10%] left-[-10%] w-[40vw] h-[40vw] rounded-full bg-primary/5 blur-[120px] pointer-events-none z-[-1]">
    </div>
    <div
        class="fixed bottom-[-20%] right-[-10%] w-[50vw] h-[50vw] rounded-full bg-tertiary/5 blur-[150px] pointer-events-none z-[-1]">
    </div>
    <script>
        // Simple micro-interaction for cards
        document.querySelectorAll('.glass-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });
    </script>
</body>

</html>