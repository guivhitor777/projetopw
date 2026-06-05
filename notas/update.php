<?php

//require_once 'conexao.php';

//$id = $_GET['id'] ?? 0;

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//  $disciplina = trim($_POST['disciplina']);
//  $nota = $_POST['nota'];

//  $sql = "UPDATE notas
//          SET disciplina = :disciplina,
//              nota = :nota
//          WHERE id = :id";

//  $stmt = $pdo->prepare($sql);

//  $stmt->bindParam(':disciplina', $disciplina);
//  $stmt->bindParam(':nota', $nota);
//  $stmt->bindParam(':id', $id);

//  $stmt->execute();

// header("Location: listar_notas.php");
// exit;
//}
?>

<!DOCTYPE html>

<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AETHER EDU | Editar Nota</title>
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
    <!-- Shared Components Styles & Tokens -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#ffdbcc",
                        "surface": "#10131b",
                        "outline": "#8b90a0",
                        "on-tertiary": "#571e00",
                        "surface-tint": "#adc6ff",
                        "surface-container": "#1c2028",
                        "on-primary-fixed-variant": "#004493",
                        "inverse-on-surface": "#2d3039",
                        "surface-container-low": "#181c23",
                        "surface-container-lowest": "#0b0e16",
                        "secondary-fixed-dim": "#c4c6cf",
                        "on-secondary-container": "#b6b8c1",
                        "on-primary-fixed": "#001a41",
                        "inverse-primary": "#005bc1",
                        "on-secondary-fixed-variant": "#44474e",
                        "on-primary-container": "#00285c",
                        "surface-variant": "#31353d",
                        "secondary-fixed": "#e1e2eb",
                        "secondary-container": "#464950",
                        "on-background": "#e0e2ed",
                        "tertiary-fixed-dim": "#ffb595",
                        "outline-variant": "#414755",
                        "on-tertiary-container": "#4c1a00",
                        "error": "#ffb4ab",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "on-error": "#690005",
                        "tertiary-container": "#ef6719",
                        "on-surface": "#e0e2ed",
                        "surface-container-highest": "#31353d",
                        "on-error-container": "#ffdad6",
                        "primary-fixed-dim": "#adc6ff",
                        "secondary": "#c4c6cf",
                        "on-surface-variant": "#c1c6d7",
                        "primary": "#adc6ff",
                        "on-tertiary-fixed": "#351000",
                        "on-secondary": "#2e3037",
                        "tertiary": "#ffb595",
                        "surface-container-high": "#272a32",
                        "surface-dim": "#10131b",
                        "background": "#10131b",
                        "on-secondary-fixed": "#191c22",
                        "primary-container": "#4b8eff",
                        "on-primary": "#002e69",
                        "surface-bright": "#363942",
                        "primary-fixed": "#d8e2ff",
                        "inverse-surface": "#e0e2ed",
                        "error-container": "#93000a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "sidebar-width": "280px",
                        "container-padding-desktop": "40px",
                        "unit": "4px",
                        "container-padding-mobile": "20px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #0B0E14;
            color: #e0e2ed;
            overflow-x: hidden;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0.02)) 1;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .active-nav {
            background: rgba(173, 198, 255, 0.1);
            border-left: 2px solid #adc6ff;
            color: #adc6ff;
        }

        .input-focus-glow:focus {
            box-shadow: 0 0 15px rgba(173, 198, 255, 0.3);
            border-color: #adc6ff;
        }
    </style>
</head>

<body class="font-body-md text-body-md selection:bg-primary/30">
    <!-- SIDEBAR -->
    <aside
        class="fixed left-0 top-0 h-full w-sidebar-width bg-surface/40 backdrop-blur-xl border-r border-white/10 flex flex-col py-gutter px-4 z-50">
        <div class="mb-10 px-4">
            <h1 class="font-headline-lg text-headline-lg text-primary tracking-tighter">AETHER EDU</h1>
            <p class="font-label-caps text-label-caps text-on-surface-variant opacity-60">Command Center</p>
        </div>
        <nav class="flex-1 space-y-2">
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors group"
                href="#">
                <span class="material-symbols-outlined group-hover:text-primary transition-colors">dashboard</span>
                <span class="font-label-caps text-label-caps">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors group"
                href="#">
                <span class="material-symbols-outlined group-hover:text-primary transition-colors">calendar_month</span>
                <span class="font-label-caps text-label-caps">Calendar</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg active-nav group" href="#">
                <span class="material-symbols-outlined text-primary"
                    style="font-variation-settings: 'FILL' 1;">grade</span>
                <span class="font-label-caps text-label-caps">Grades</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors group"
                href="#">
                <span class="material-symbols-outlined group-hover:text-primary transition-colors">assignment</span>
                <span class="font-label-caps text-label-caps">Assignments</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors group"
                href="#">
                <span class="material-symbols-outlined group-hover:text-primary transition-colors">mail</span>
                <span class="font-label-caps text-label-caps">Messages</span>
            </a>
        </nav>
        <div class="pt-6 border-t border-white/5 space-y-2">
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors group"
                href="#">
                <span class="material-symbols-outlined group-hover:text-primary transition-colors">settings</span>
                <span class="font-label-caps text-label-caps">Settings</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors group"
                href="#">
                <span class="material-symbols-outlined group-hover:text-primary transition-colors">help</span>
                <span class="font-label-caps text-label-caps">Support</span>
            </a>
        </div>
    </aside>
    <!-- TOP BAR -->
    <header
        class="fixed top-0 right-0 w-[calc(100%-var(--sidebar-width))] h-16 bg-surface/30 backdrop-blur-lg border-b border-white/5 flex justify-between items-center px-container-padding-desktop z-40">
        <div class="flex items-center gap-4">
            <div class="relative">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                <input
                    class="bg-surface-container-lowest border-none rounded-full pl-10 pr-4 py-1.5 text-body-md w-64 focus:ring-1 focus:ring-primary/50 transition-all"
                    placeholder="Pesquisar registros..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-6">
            <button class="text-on-surface-variant hover:text-primary transition-colors relative">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-0 right-0 w-2 h-2 bg-primary rounded-full"></span>
            </button>
            <div class="flex items-center gap-3 pl-6 border-l border-white/10">
                <div class="text-right">
                    <p class="font-label-caps text-[10px] text-primary">ADMINISTRATOR</p>
                    <p class="font-body-md text-sm font-semibold">Dr. Julian Vane</p>
                </div>
                <img alt="Profile" class="w-8 h-8 rounded-full border border-primary/30"
                    data-alt="A professional headshot of a refined university administrator in his 40s, wearing a modern charcoal suit. The portrait is set against a blurred background of a high-tech academic office with subtle electric blue lighting and sleek glass elements, maintaining a futuristic and authoritative aesthetic."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2Pobx7zrpbcXGkpagOViNT-id7TAuCAmUdqW4rKVJSb6TdjqjY_1fpOhC2TYAQrIaUAluiIL2AjEBONPiPxYe0Jnzelehad7M-Ekz5Zb5BQTUvcbHMToEh3HIxrVZcIx0aTitsmrXDvSiJu9K74qPE85jIIviBsmkFd_QFbtQTh9cJLMQUyNFm-In-lbpstZB9lt77vQ4L2O6IO1cgXV7R9wK8fOp4DECI3KyD-T45wUZk6CplLBa07xwAOEyYxhbwUQGGl-WATXL" />
            </div>
        </div>
    </header>
    <!-- MAIN CONTENT -->
    <main class="ml-sidebar-width pt-16 min-h-screen flex items-center justify-center p-gutter">
        <div class="w-full max-w-2xl animate-in fade-in slide-in-from-bottom-4 duration-700">
            <!-- Header Section -->
            <div class="mb-10 text-center">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Editar Nota</h2>
                <p class="text-on-surface-variant opacity-80 max-w-md mx-auto">Atualize as informações acadêmicas do
                    registro selecionado.</p>
            </div>
            <!-- Form Card -->
            <div class="glass-card p-10 relative overflow-hidden">
                <!-- Subtle Decorative Light Leak -->
                <div
                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-primary/40 to-transparent">
                </div>
                <form action="update.php" class="space-y-8" method="POST">
                    <!-- ID do Aluno Field -->
                    <div class="space-y-2">
                        <label class="font-label-caps text-label-caps text-primary block uppercase tracking-widest"
                            for="student_id">ID do Aluno</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50">fingerprint</span>
                            <input
                                class="w-full bg-surface-container-lowest border border-white/10 rounded-lg py-4 pl-12 pr-4 text-on-surface placeholder:text-on-surface-variant/30 outline-none transition-all focus:border-primary/50 input-focus-glow"
                                id="student_id" name="student_id" required="" type="number" value="1024" />
                        </div>
                    </div>
                    <!-- Disciplina Field -->
                    <div class="space-y-2">
                        <label class="font-label-caps text-label-caps text-primary block uppercase tracking-widest"
                            for="subject">Disciplina</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50">school</span>
                            <input
                                class="w-full bg-surface-container-lowest border border-white/10 rounded-lg py-4 pl-12 pr-4 text-on-surface placeholder:text-on-surface-variant/30 outline-none transition-all focus:border-primary/50 input-focus-glow"
                                id="subject" name="subject" required="" type="text" value="Dinâmica Orbital" />
                        </div>
                    </div>
                    <!-- Nota Field -->
                    <div class="space-y-2">
                        <label class="font-label-caps text-label-caps text-primary block uppercase tracking-widest"
                            for="grade">Nota (0 - 10)</label>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50">monitoring</span>
                            <input
                                class="w-full bg-surface-container-lowest border border-white/10 rounded-lg py-4 pl-12 pr-4 text-on-surface placeholder:text-on-surface-variant/30 outline-none transition-all focus:border-primary/50 input-focus-glow"
                                id="grade" max="10" min="0" name="grade" required="" step="0.1" type="number"
                                value="9.5" />
                        </div>
                        <div class="flex justify-between items-center px-1">
                            <span class="text-[10px] text-on-surface-variant/40">Min: 0.0</span>
                            <span class="text-[10px] text-on-surface-variant/40">Max: 10.0</span>
                        </div>
                    </div>
                    <!-- CTA Actions -->
                    <div class="pt-6 flex flex-col sm:flex-row gap-4">
                        <button
                            class="flex-1 bg-primary text-on-primary font-label-caps text-label-caps py-4 rounded-lg hover:bg-primary-container transition-all active:scale-[0.98] shadow-[0_0_20px_rgba(173,198,255,0.2)]"
                            type="submit">
                            Salvar Alterações
                        </button>
                        <a class="flex-1 border border-white/10 text-on-surface font-label-caps text-label-caps py-4 rounded-lg hover:bg-white/5 transition-all text-center active:scale-[0.98]"
                            href="read.php">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
            <!-- System Footer Status -->
            <div
                class="mt-8 flex items-center justify-center gap-4 text-on-surface-variant/30 font-label-caps text-[10px]">
                <div class="flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary/40"></span>
                    <span>SECURE NODE 04</span>
                </div>
                <div class="flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary/40"></span>
                    <span>SESSION: AE-9421</span>
                </div>
                <div class="flex items-center gap-1">
                    <span class="w-1.5 h-1.5 rounded-full bg-primary/40"></span>
                    <span>ENCRYPTION: AES-256</span>
                </div>
            </div>
        </div>
    </main>
    <!-- Visual Background Enhancements -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute top-[-10%] right-[-10%] w-[50%] h-[50%] bg-primary/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/3 rounded-full blur-[100px]"></div>
    </div>
    <script>
        // Micro-interactions for button press
        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('mousedown', () => btn.classList.add('scale-95'));
            btn.addEventListener('mouseup', () => btn.classList.remove('scale-95'));
            btn.addEventListener('mouseleave', () => btn.classList.remove('scale-95'));
        });
    </script>
</body>

</html>