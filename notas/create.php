<?php

require_once '../conexao.php';

$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_aluno = $_POST['id_aluno'] ?? '';
    $disciplina = $_POST['disciplina'] ?? '';
    $nota = $_POST['nota'] ?? '';

    $sql = "INSERT INTO notas (id_aluno, disciplina, nota)
            VALUES (:id_aluno, :disciplina, :nota)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id_aluno', $id_aluno);
    $stmt->bindParam(':disciplina', $disciplina);
    $stmt->bindParam(':nota', $nota);

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
    <title>Cadastrar Nota | AETHER EDU</title>
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
                        "tertiary": "#ffb595",
                        "on-secondary-container": "#b6b8c1",
                        "secondary-container": "#464950",
                        "primary": "#adc6ff",
                        "outline-variant": "#414755",
                        "secondary": "#c4c6cf",
                        "on-error-container": "#ffdad6",
                        "primary-fixed": "#d8e2ff",
                        "on-secondary-fixed": "#191c22",
                        "on-primary-container": "#00285c",
                        "surface-container-lowest": "#0b0e16",
                        "secondary-fixed": "#e1e2eb",
                        "surface-dim": "#10131b",
                        "on-background": "#e0e2ed",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "tertiary-container": "#ef6719",
                        "surface-container-low": "#181c23",
                        "surface-container-highest": "#31353d",
                        "secondary-fixed-dim": "#c4c6cf",
                        "inverse-on-surface": "#2d3039",
                        "on-tertiary": "#571e00",
                        "inverse-surface": "#e0e2ed",
                        "surface-tint": "#adc6ff",
                        "outline": "#8b90a0",
                        "surface-variant": "#31353d",
                        "surface-bright": "#363942",
                        "primary-container": "#4b8eff",
                        "on-tertiary-container": "#4c1a00",
                        "on-primary-fixed-variant": "#004493",
                        "on-primary-fixed": "#001a41",
                        "on-surface-variant": "#c1c6d7",
                        "on-secondary": "#2e3037",
                        "on-primary": "#002e69",
                        "tertiary-fixed-dim": "#ffb595",
                        "primary-fixed-dim": "#adc6ff",
                        "on-surface": "#e0e2ed",
                        "inverse-primary": "#005bc1",
                        "surface-container-high": "#272a32",
                        "surface": "#10131b",
                        "on-tertiary-fixed": "#351000",
                        "error-container": "#93000a",
                        "on-error": "#690005",
                        "tertiary-fixed": "#ffdbcc",
                        "surface-container": "#1c2028",
                        "on-secondary-fixed-variant": "#44474e",
                        "background": "#10131b",
                        "error": "#ffb4ab"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sidebar-width": "280px",
                        "container-padding-desktop": "40px",
                        "unit": "4px",
                        "container-padding-mobile": "20px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        body {
            background-color: #0b0e14;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md overflow-x-hidden">
    <!-- SideNavBar -->
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
                    href="#">
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
            <a class="mt-auto flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5"
                href="logout.php">
                <span class="material-symbols-outlined">logout</span>
                <span>Sair</span>
            </a>

        </nav>

    </aside>
    <!-- Main Content -->
    <main class="ml-sidebar-width min-h-screen flex flex-col">
        <!-- TopAppBar -->
        <header
            class="flex justify-between items-center h-16 px-gutter w-full sticky top-0 bg-surface/80 backdrop-blur-md border-b border-outline-variant/10 z-40">
            <div class="flex flex-col">
                <h2 class="font-headline-md text-lg font-bold text-primary uppercase tracking-wide">Cadastrar Nota
                </h2>
                <p class="text-xs text-on-surface-variant">Preencha as informações abaixo.</p>
            </div>
            <div class="flex items-center gap-4">
            </div>
            </div>
        </header>
        <div class="flex-1 flex flex-col items-center justify-center p-gutter">
            <div class="w-full max-w-[600px] glass-card rounded-xl p-8 shadow-2xl relative overflow-hidden">
                <!-- Subtle Top Accent Glow -->
                <div
                    class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary/40 to-transparent">
                </div>
                <?php if ($mensagem): ?>
                    <p><?= $mensagem ?></p>
                <?php endif; ?>
                <form action="" method="POST" class="space-y-6">

                    <!-- ID do Aluno -->
                    <div class="space-y-2">
                        <label class="text-xs font-label-caps text-on-surface-variant tracking-wider uppercase">
                            ID do Aluno
                        </label>

                        <div class="relative group">
                            <input type="number" name="id_aluno" placeholder="Ex: 1" required
                                class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-lg px-4 py-3 text-on-surface">
                        </div>
                    </div>

                    <!-- Disciplina -->
                    <div class="space-y-2">
                        <label class="text-xs font-label-caps text-on-surface-variant tracking-wider uppercase">
                            Disciplina
                        </label>

                        <div class="relative group">
                            <input type="text" name="disciplina" placeholder="Ex: Matemática" required
                                class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-lg px-4 py-3 text-on-surface">
                        </div>
                    </div>

                    <!-- Nota -->
                    <div class="space-y-2">
                        <label class="text-xs font-label-caps text-on-surface-variant tracking-wider uppercase">
                            Nota
                        </label>

                        <div class="relative group">
                            <input type="number" name="nota" min="0" max="10" step="0.01" placeholder="0.00" required
                                class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-lg px-4 py-3 text-on-surface">
                        </div>
                    </div>

                    <!-- Botão -->
                    <button type="submit" class="w-full py-3 bg-primary text-on-primary rounded-lg font-bold">
                        Cadastrar Nota
                    </button>

                </form>
            </div>
        </div>
        <!-- Footer -->
        <footer
            class="py-8 text-center text-xs font-label-caps text-on-surface-variant opacity-50 uppercase tracking-[0.2em]">
            Sistema Escolar • Projeto PW
        </footer>
    </main>
    <script>
        // Simple input validation visual feedback
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', function () {
                if (this.checkValidity()) {
                    this.classList.remove('border-error');
                    this.classList.add('border-primary/50');
                } else {
                    this.classList.add('border-error');
                    this.classList.remove('border-primary/50');
                }
            });
        });
    </script>
</body>

</html>