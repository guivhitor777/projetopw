<?php

//require_once 'conexao.php';

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$aluno_id = $_POST['aluno_id'] ?? '';
$disciplina = trim($_POST['disciplina'] ?? '');
$nota = $_POST['nota'] ?? '';

$sql = "INSERT INTO notas (aluno_id, disciplina, nota)
            VALUES (:aluno_id, :disciplina, :nota)";

// $stmt = $pdo->prepare($sql);

//  $stmt->bindParam(':aluno_id', $aluno_id);
//   $stmt->bindParam(':disciplina', $disciplina);
//    $stmt->bindParam(':nota', $nota);

//  if ($stmt->execute()) {
//    echo "Nota cadastrada com sucesso!";
//  } else {
//  echo "Erro ao cadastrar nota.";
// }

?>

<!DOCTYPE html>

<html class="dark" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.05);
        }

        .glow-blue {
            box-shadow: 0 0 20px rgba(173, 198, 255, 0.3);
        }

        body {
            background-color: #0b0e16;
            color: #e0e2ed;
            overflow-x: hidden;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-variant": "#31353d",
                        "primary": "#adc6ff",
                        "on-tertiary-container": "#4c1a00",
                        "on-primary-fixed": "#001a41",
                        "on-background": "#e0e2ed",
                        "tertiary-fixed-dim": "#ffb595",
                        "primary-fixed": "#d8e2ff",
                        "surface-container-lowest": "#0b0e16",
                        "inverse-primary": "#005bc1",
                        "surface-container-highest": "#31353d",
                        "inverse-on-surface": "#2d3039",
                        "on-surface-variant": "#c1c6d7",
                        "on-tertiary": "#571e00",
                        "on-primary-fixed-variant": "#004493",
                        "on-secondary-fixed": "#191c22",
                        "tertiary-fixed": "#ffdbcc",
                        "on-secondary-fixed-variant": "#44474e",
                        "background": "#10131b",
                        "secondary-fixed-dim": "#c4c6cf",
                        "primary-container": "#4b8eff",
                        "on-error-container": "#ffdad6",
                        "on-secondary-container": "#b6b8c1",
                        "surface-container": "#1c2028",
                        "error": "#ffb4ab",
                        "error-container": "#93000a",
                        "on-tertiary-fixed": "#351000",
                        "surface-dim": "#10131b",
                        "tertiary": "#ffb595",
                        "surface": "#10131b",
                        "outline-variant": "#414755",
                        "on-primary": "#002e69",
                        "secondary-fixed": "#e1e2eb",
                        "secondary-container": "#464950",
                        "primary-fixed-dim": "#adc6ff",
                        "on-primary-container": "#00285c",
                        "outline": "#8b90a0",
                        "on-secondary": "#2e3037",
                        "secondary": "#c4c6cf",
                        "surface-tint": "#adc6ff",
                        "surface-container-low": "#181c23",
                        "on-error": "#690005",
                        "inverse-surface": "#e0e2ed",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "surface-container-high": "#272a32",
                        "tertiary-container": "#ef6719",
                        "surface-bright": "#363942",
                        "on-surface": "#e0e2ed"
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
                        "container-padding-desktop": "40px",
                        "unit": "4px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "headline-lg": ["Inter"],
                        "headline-lg-mobile": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-surface-container-lowest font-body-md text-on-surface selection:bg-primary/30 selection:text-primary">
    <!-- SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-full w-sidebar-width bg-surface-container dark:bg-surface-container-lowest/80 backdrop-blur-xl border-r border-outline-variant/10 flex flex-col h-screen p-gutter z-50 transition-all duration-300 ease-in-out">
        <div class="mb-10 flex items-center gap-4">
            <div class="w-10 h-10 bg-primary/20 flex items-center justify-center border border-primary/30">
                <span class="material-symbols-outlined text-primary"
                    style="font-variation-settings: 'FILL' 1;">terminal</span>
            </div>
            <div class="flex flex-col">
                <span class="font-label-caps text-label-caps tracking-widest text-primary uppercase">AETHER EDU</span>
                <span class="text-[10px] text-on-surface-variant font-bold tracking-[0.2em]">ACADEMIC OS</span>
            </div>
        </div>
        <nav class="flex flex-col gap-2 flex-grow">
            <a class="flex items-center gap-4 px-4 py-3 transition-colors duration-300 hover:bg-surface-variant/20 hover:text-primary text-on-surface-variant font-medium"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 transition-colors duration-300 hover:bg-surface-variant/20 hover:text-primary text-on-surface-variant font-medium"
                href="#">
                <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
                <span>Calendar</span>
            </a>
            <!-- Grades is active -->
            <a class="flex items-center gap-4 px-4 py-3 transition-colors duration-300 text-primary font-bold border-l-2 border-primary bg-primary/5"
                href="#">
                <span class="material-symbols-outlined" data-icon="grade"
                    style="font-variation-settings: 'FILL' 1;">grade</span>
                <span>Grades</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 transition-colors duration-300 hover:bg-surface-variant/20 hover:text-primary text-on-surface-variant font-medium"
                href="#">
                <span class="material-symbols-outlined" data-icon="assignment">assignment</span>
                <span>Assignments</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 transition-colors duration-300 hover:bg-surface-variant/20 hover:text-primary text-on-surface-variant font-medium"
                href="#">
                <span class="material-symbols-outlined" data-icon="mail">mail</span>
                <span>Messages</span>
            </a>
        </nav>
        <div class="mt-auto pt-6 border-t border-outline-variant/10">
            <div class="flex items-center gap-3 p-2">
                <img alt="User Profile" class="w-10 h-10 object-cover border border-outline-variant"
                    data-alt="Close-up portrait of a professional academic administrator in a high-tech university office setting. The lighting is cool and sophisticated with blue and cyan accents from background screens. The man has a serious, focused expression, reflecting a high-end command center aesthetic with cinematic depth of field."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbjH7Vyym9_tUcgDpS1r4NQ58hb0ZI_asfp3cbfSu0faxmXiHDuvr9m5Zj_weCRzsB6y0WWHGSOCyJLgxKDJAT_mUubim9Q6D4JobtkW-AGUxR-5X3ARkbR2pDMydQmXi_fLRirMyfUVGzUUkXTMssKC9VBbTuGRSnnNl-WmQ7M9IcZBsQjcvK8s85JgchJs0U0T-maQOT6xh5MewkedR19Ef6Vs1y2ovAALrB9C62T4RYnvLldPzUBPA68Hp0erqa5Ne6n0gqwwiH" />
                <div class="flex flex-col">
                    <span class="text-sm font-bold">Dr. Aris Thorne</span>
                    <span class="text-[10px] text-on-surface-variant uppercase tracking-wider">Registrar General</span>
                </div>
            </div>
        </div>
    </aside>
    <!-- TopNavBar -->
    <header
        class="fixed top-0 right-0 h-16 ml-sidebar-width w-[calc(100%-280px)] bg-surface/40 dark:bg-surface-dim/40 backdrop-blur-2xl border-b border-outline-variant/10 flex justify-between items-center px-container-padding-desktop z-40">
        <div class="flex items-center gap-4">
            <span class="font-headline-md text-headline-md text-primary font-bold">Grades Module</span>
            <div class="h-4 w-[1px] bg-outline-variant mx-2"></div>
            <span class="text-on-surface-variant text-sm font-medium">Create New Entry</span>
        </div>
        <div class="flex items-center gap-6">
            <div class="relative group">
                <span
                    class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-all active:opacity-80"
                    data-icon="notifications">notifications</span>
                <span class="absolute top-0 right-0 w-2 h-2 bg-primary animate-pulse"></span>
            </div>
            <span
                class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-all active:opacity-80"
                data-icon="settings">settings</span>
        </div>
    </header>
    <!-- Main Content -->
    <main class="ml-sidebar-width pt-16 min-h-screen flex flex-col">
        <div class="flex-grow p-container-padding-desktop flex flex-col items-center justify-center">
            <!-- Atmospheric Background Decor -->
            <div class="fixed top-1/4 right-1/4 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[120px] -z-10"></div>
            <div
                class="fixed bottom-1/4 left-1/3 w-[300px] h-[300px] bg-tertiary-container/5 rounded-full blur-[100px] -z-10">
            </div>
            <!-- Centralized Form Container -->
            <div class="w-full max-w-2xl glass-panel p-10 animate-in fade-in slide-in-from-bottom-4 duration-700">
                <div class="mb-8 border-l-4 border-primary pl-6">
                    <h1 class="font-headline-lg text-headline-lg text-on-surface uppercase tracking-tight">Registrar
                        Nova Avaliação</h1>
                    <p class="text-on-surface-variant font-body-md mt-2">Input academic credentials and performance
                        metrics into the encrypted ledger.</p>
                </div>
                <form action="create.php" class="space-y-8" method="POST">
                    <!-- Form Fields -->
                    <div class="space-y-6">
                        <!-- Student ID -->
                        <div class="flex flex-col gap-2">
                            <label class="font-label-caps text-label-caps text-primary tracking-widest uppercase"
                                for="student_id">ID do Aluno</label>
                            <div class="relative">
                                <span
                                    class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-on-surface-variant text-lg"
                                    data-icon="fingerprint">fingerprint</span>
                                <input
                                    class="w-full bg-surface-container-lowest/50 border border-outline-variant/30 py-4 pl-12 pr-4 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/50 transition-all text-on-surface placeholder:text-on-surface-variant/40"
                                    id="student_id" name="student_id" placeholder="Enter numerical identifier..."
                                    required="" type="number" />
                            </div>
                        </div>
                        <!-- Subject -->
                        <div class="flex flex-col gap-2">
                            <label class="font-label-caps text-label-caps text-primary tracking-widest uppercase"
                                for="subject">Disciplina</label>
                            <div class="relative">
                                <span
                                    class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-on-surface-variant text-lg"
                                    data-icon="science">science</span>
                                <input
                                    class="w-full bg-surface-container-lowest/50 border border-outline-variant/30 py-4 pl-12 pr-4 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/50 transition-all text-on-surface placeholder:text-on-surface-variant/40"
                                    id="subject" name="subject" placeholder="Advanced Quantum Mechanics..." required=""
                                    type="text" />
                            </div>
                        </div>
                        <!-- Grade -->
                        <div class="flex flex-col gap-2">
                            <label class="font-label-caps text-label-caps text-primary tracking-widest uppercase"
                                for="grade">Nota</label>
                            <div class="relative">
                                <span
                                    class="absolute left-4 top-1/2 -translate-y-1/2 material-symbols-outlined text-on-surface-variant text-lg"
                                    data-icon="analytics">analytics</span>
                                <input
                                    class="w-full bg-surface-container-lowest/50 border border-outline-variant/30 py-4 pl-12 pr-4 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/50 transition-all text-on-surface placeholder:text-on-surface-variant/40"
                                    id="grade" max="10" min="0" name="grade" placeholder="00.00" required="" step="0.01"
                                    type="number" />
                                <div
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-[10px] text-on-surface-variant font-bold tracking-tighter">
                                    MAX: 10.00</div>
                            </div>
                        </div>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <button
                            class="flex-1 bg-primary text-on-primary-fixed font-bold py-4 uppercase tracking-widest transition-all hover:brightness-110 active:scale-[0.98] glow-blue flex items-center justify-center gap-2"
                            type="submit">
                            <span class="material-symbols-outlined" data-icon="save"
                                style="font-variation-settings: 'FILL' 1;">save</span>
                            Salvar Nota
                        </button>
                        <button
                            class="flex-1 bg-transparent border border-outline-variant text-on-surface-variant font-bold py-4 uppercase tracking-widest transition-all hover:bg-surface-variant/20 active:scale-[0.98] flex items-center justify-center gap-2"
                            type="button">
                            <span class="material-symbols-outlined" data-icon="close">close</span>
                            Cancelar
                        </button>
                    </div>
                </form>
            </div>
            <!-- Bento-style Metadata Display -->
            <div class="w-full max-w-2xl mt-8 grid grid-cols-3 gap-4 h-24">
                <div class="glass-panel p-4 flex flex-col justify-between overflow-hidden relative">
                    <span class="text-[10px] text-primary uppercase font-bold tracking-widest">Network</span>
                    <span class="text-sm font-medium">UPLINK ACTIVE</span>
                    <div class="absolute -right-4 -bottom-4 w-12 h-12 border-2 border-primary/20 rotate-45"></div>
                </div>
                <div class="glass-panel p-4 flex flex-col justify-between border-primary/30">
                    <span class="text-[10px] text-primary uppercase font-bold tracking-widest">Latency</span>
                    <span class="text-sm font-medium">0.02ms</span>
                </div>
                <div class="glass-panel p-4 flex flex-col justify-between">
                    <span class="text-[10px] text-primary uppercase font-bold tracking-widest">Location</span>
                    <span class="text-sm font-medium">NODE-04-BRA</span>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer
            class="mt-auto border-t border-outline-variant/10 px-container-padding-desktop py-6 flex justify-between items-center text-on-surface-variant bg-surface-container-lowest">
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2 px-3 py-1 bg-surface-variant/30 border border-outline-variant/20">
                    <span class="material-symbols-outlined text-[14px]" data-icon="lock"
                        style="font-variation-settings: 'FILL' 1;">lock</span>
                    <span class="text-[10px] font-bold tracking-[0.2em]">ENCRYPTION: AES-256</span>
                </div>
                <span class="text-[10px] uppercase tracking-widest opacity-40">Session ID: 882-AXP-9921</span>
            </div>
            <div class="text-[10px] font-bold tracking-[0.2em] opacity-60">
                SYSTEM VER: 4.2.0-ALPHA
            </div>
        </footer>
    </main>
    <script>
        // Micro-interaction for form inputs
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.parentElement.classList.add('scale-[1.01]');
            });
            input.addEventListener('blur', () => {
                input.parentElement.parentElement.classList.remove('scale-[1.01]');
            });
        });

        // Form submission animation mock
        document.querySelector('form').addEventListener('submit', (e) => {
            const btn = e.target.querySelector('button[type="submit"]');
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin" data-icon="sync">sync</span> PROCESSING...';
            btn.classList.add('opacity-80', 'pointer-events-none');
        });
    </script>
</body>

</html>