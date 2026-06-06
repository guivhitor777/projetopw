<?php
require_once '../conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $disciplina = trim($_POST['disciplina']);
    $descricao = trim($_POST['descricao']);
    $prazo = $_POST['prazo'];

    $sql = "INSERT INTO tarefas
            (disciplina, descricao, prazo)
            VALUES
            (:disciplina, :descricao, :prazo)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':disciplina', $disciplina);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':prazo', $prazo);

    if ($stmt->execute()) {
        header("Location: read.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AETHER EDU | Nova Missão Acadêmica</title>
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
                        "on-primary": "#002e69",
                        "on-tertiary-container": "#4c1a00",
                        "secondary": "#c4c6cf",
                        "inverse-surface": "#e0e2ed",
                        "background": "#10131b",
                        "outline-variant": "#414755",
                        "inverse-on-surface": "#2d3039",
                        "tertiary": "#ffb595",
                        "tertiary-fixed-dim": "#ffb595",
                        "on-primary-fixed-variant": "#004493",
                        "surface-variant": "#31353d",
                        "on-secondary-fixed-variant": "#44474e",
                        "on-primary-fixed": "#001a41",
                        "surface-container": "#1c2028",
                        "on-surface-variant": "#c1c6d7",
                        "on-tertiary": "#571e00",
                        "surface-container-low": "#181c23",
                        "tertiary-fixed": "#ffdbcc",
                        "error-container": "#93000a",
                        "on-primary-container": "#00285c",
                        "inverse-primary": "#005bc1",
                        "surface-dim": "#10131b",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "on-surface": "#e0e2ed",
                        "outline": "#8b90a0",
                        "on-secondary-fixed": "#191c22",
                        "on-error-container": "#ffdad6",
                        "secondary-container": "#464950",
                        "error": "#ffb4ab",
                        "primary-fixed": "#d8e2ff",
                        "secondary-fixed-dim": "#c4c6cf",
                        "primary-fixed-dim": "#adc6ff",
                        "surface-container-highest": "#31353d",
                        "surface-bright": "#363942",
                        "secondary-fixed": "#e1e2eb",
                        "on-error": "#690005",
                        "surface-container-high": "#272a32",
                        "on-tertiary-fixed": "#351000",
                        "primary-container": "#4b8eff",
                        "surface": "#10131b",
                        "on-background": "#e0e2ed",
                        "on-secondary": "#2e3037",
                        "primary": "#adc6ff",
                        "on-secondary-container": "#b6b8c1",
                        "surface-tint": "#adc6ff",
                        "surface-container-lowest": "#0b0e16",
                        "tertiary-container": "#ef6719"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "container-padding-desktop": "40px",
                        "unit": "4px",
                        "sidebar-width": "280px",
                        "container-padding-mobile": "20px"
                    },
                    "fontFamily": {
                        "label-caps": ["Space Grotesk"],
                        "headline-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "display-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }]
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
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
        }

        input,
        textarea {
            background-color: rgba(0, 0, 0, 0.2) !important;
            transition: all 0.2s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #4b8eff !important;
            box-shadow: 0 0 0 1px #4b8eff !important;
        }

        ::-webkit-calendar-picker-indicator {
            filter: invert(1);
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md overflow-x-hidden">
    <!-- SideNavBar (Authority: JSON & Strategy) -->
    <aside
        class="fixed left-0 top-0 h-screen w-sidebar-width bg-surface/40 backdrop-blur-xl border-r border-white/10 flex flex-col py-gutter px-4 z-50">

        <div class="mb-10 px-4">
            <h1 class="font-headline-lg text-headline-lg text-primary tracking-tighter">
                Aluno Modern
            </h1>
        </div>

        <nav class="flex flex-col flex-1">

            <div class="space-y-2">
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-primary bg-primary/10 border-l-2 border-primary"
                    href="../painel.php">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span>Painel</span>
                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5"
                    href="../alunos/read.php">
                    <span class="material-symbols-outlined">school</span>
                    <span>Alunos</span>
                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5"
                    href="../notas/read.php">
                    <span class="material-symbols-outlined">grade</span>
                    <span>Notas</span>
                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5"
                    href="../tarefas/read.php">
                    <span class="material-symbols-outlined">assignment</span>
                    <span>Tarefas</span>
                </a>
            </div>

            <!-- Sair sempre embaixo -->
            <a class="mt-auto flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-error transition-colors"
                href="../logout.php" onclick="return confirm('Tem certeza que deseja sair do sistema?');">
                <span class="material-symbols-outlined">logout</span>
                <span>Sair</span>
            </a>
        </nav>

    </aside>
    <!-- TopNavBar (Authority: JSON) -->
    <!-- Main Content Canvas -->
    <main class="md:ml-sidebar-width min-h-[calc(100vh-64px)] p-6 md:p-12 flex items-center justify-center relative">
        <!-- Atmospheric Ambient Light -->
        <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-primary/10 blur-[120px] rounded-full pointer-events-none">
        </div>
        <div
            class="absolute bottom-1/4 left-1/4 w-64 h-64 bg-tertiary-container/5 blur-[100px] rounded-full pointer-events-none">
        </div>
        <div class="w-full max-w-2xl animate-in fade-in slide-in-from-bottom-4 duration-700">
            <!-- Header Group -->
            <div class="text-center mb-10">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Nova Missão Acadêmica</h2>
                <p class="text-on-surface-variant font-body-md opacity-80">Preencha os protocolos para registrar a
                    tarefa no sistema.</p>
            </div>
            <!-- Form Module (Glass Card) -->
            <div class="glass-card rounded-xl p-8 shadow-2xl">
                <form action="create.php" class="space-y-8" method="POST">
                    <!-- Field: Disciplina -->
                    <div class="space-y-2">
                        <label class="font-label-caps text-label-caps text-on-surface-variant flex items-center gap-2"
                            for="disciplina">
                            <span class="material-symbols-outlined text-[14px]">school</span>
                            Disciplina / Módulo
                        </label>
                        <input
                            class="w-full rounded-lg border border-white/10 px-4 py-3 text-body-md text-on-surface placeholder:text-on-surface-variant/30 focus:ring-0"
                            id="disciplina" name="disciplina" placeholder="Ex: Artes" required="" type="text" />
                    </div>
                    <!-- Field: Descrição -->
                    <div class="space-y-2">
                        <label class="font-label-caps text-label-caps text-on-surface-variant flex items-center gap-2"
                            for="descricao">
                            <span class="material-symbols-outlined text-[14px]">description</span>
                            Descrição da Tarefa
                        </label>
                        <textarea
                            class="w-full rounded-lg border border-white/10 px-4 py-3 text-body-md text-on-surface placeholder:text-on-surface-variant/30 focus:ring-0 resize-none"
                            id="descricao" name="descricao" placeholder="Descreva os objetivos e requisitos..."
                            required="" rows="5"></textarea>
                    </div>
                    <!-- Field: Prazo -->
                    <div class="space-y-2">
                        <label class="font-label-caps text-label-caps text-on-surface-variant flex items-center gap-2"
                            for="prazo">
                            <span class="material-symbols-outlined text-[14px]">event</span>
                            Data de Entrega
                        </label>
                        <div class="relative">
                            <input
                                class="w-full rounded-lg border border-white/10 px-4 py-3 text-body-md text-on-surface focus:ring-0"
                                id="prazo" name="prazo" required="" type="date" />
                        </div>
                    </div>
                    <!-- Action Set -->
                    <div class="flex flex-col sm:flex-row items-center gap-4 pt-4">
                        <button
                            class="w-full sm:flex-1 bg-primary text-on-primary font-label-caps text-label-caps py-4 rounded-lg hover:brightness-110 active:scale-[0.98] transition-all shadow-lg shadow-primary/20"
                            type="submit">
                            Salvar Tarefa
                        </button>
                        <a class="w-full sm:w-auto px-8 py-4 border border-white/10 text-on-surface-variant font-label-caps text-label-caps rounded-lg text-center hover:bg-white/5 transition-colors"
                            href="read.php">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
            <!-- Footer Meta -->
            <div class="mt-8 flex items-center justify-between px-2">
                <div class="flex items-center gap-2 text-on-surface-variant/40">
                    <span class="material-symbols-outlined text-[16px]">verified_user</span>
                    <span class="font-label-caps text-[10px] tracking-widest uppercase">Encryption: AES-256</span>
                </div>
                <div class="text-on-surface-variant/40 font-label-caps text-[10px] tracking-widest uppercase">
                    System Ver: 4.2.0-Alpha
                </div>
            </div>
        </div>
    </main>
    <!-- Mobile Bottom Navigation Shell (Filter Logic) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 right-0 h-16 bg-surface-container-high/80 backdrop-blur-xl border-t border-white/10 flex items-center justify-around z-50">
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="#">
            <span class="material-symbols-outlined">grid_view</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="#">
            <span class="material-symbols-outlined">calendar_month</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-primary" href="#">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">assignment</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="#">
            <span class="material-symbols-outlined">chat_bubble</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="#">
            <span class="material-symbols-outlined">account_circle</span>
        </a>
    </nav>
    <script>
        // Micro-interaction for button hover effects
        document.querySelectorAll('button, a').forEach(el => {
            el.addEventListener('mousedown', () => {
                el.classList.add('scale-95');
                el.style.opacity = '0.8';
            });
            el.addEventListener('mouseup', () => {
                el.classList.remove('scale-95');
                el.style.opacity = '1';
            });
            el.addEventListener('mouseleave', () => {
                el.classList.remove('scale-95');
                el.style.opacity = '1';
            });
        });

        // Date input current date setter or logic can be added here if needed
        // const today = new Date().toISOString().split('T')[0];
        // document.getElementById('prazo').setAttribute('min', today);
    </script>
</body>

</html>