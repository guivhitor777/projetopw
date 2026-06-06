<?php

require_once '../conexao.php';

$id = $_GET['id'] ?? 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   $titulo = trim($_POST['titulo']);
   $descricao = trim($_POST['descricao']);
   $data_entrega = $_POST['data_entrega'];
   $status = $_POST['status'];

  $sql = "UPDATE tarefas
         SET titulo = :titulo,
             descricao = :descricao,
             data_entrega = :data_entrega,
             status = :status
         WHERE id = :id";

 $stmt = $pdo->prepare($sql);

  $stmt->bindParam(':titulo', $titulo);
  $stmt->bindParam(':descricao', $descricao);
  $stmt->bindParam(':data_entrega', $data_entrega);
  $stmt->bindParam(':status', $status);
  $stmt->bindParam(':id', $id);

  $stmt->execute();

 header("Location: listar_tarefas.php");
 exit;
}
?>

<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AETHER EDU - Editar Tarefa</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=Space+Grotesk:wght@500;700&amp;display=swap"
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
        .glass-panel {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .neon-border-primary {
            box-shadow: 0 0 15px rgba(173, 198, 255, 0.1), inset 0 0 10px rgba(173, 198, 255, 0.05);
        }

        .input-focus-glow:focus-within {
            box-shadow: 0 0 12px rgba(173, 198, 255, 0.2);
            border-color: #adc6ff;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        ::-webkit-calendar-picker-indicator {
            filter: invert(1);
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md min-h-screen overflow-x-hidden selection:bg-primary/30">
    <!-- Top Navigation -->
    <header
            class="h-16 flex justify-between items-center px-container-padding-desktop bg-surface/30 backdrop-blur-lg border-b border-white/5 sticky top-0 z-40">
            <div class="flex items-center gap-6">
                <div class="relative">
                </div>
            </div>
            <div class="flex items-center gap-3 pl-4 border-l border-white/10">
                <div class="text-right">
                    <p class="font-label-caps text-[10px] text-primary">Nível Máx.</p>
                    <p class="font-body-md text-sm font-bold">Adminitrador</p>
                </div>
            </div>
            </div>
        </header>
    <!-- Side Navigation -->
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
    <main
        class="md:ml-sidebar-width p-gutter transition-all duration-500 min-h-[calc(100vh-64px)] flex flex-col items-center justify-center">
        <div class="w-full max-w-2xl mb-8">
            <nav
                class="flex items-center gap-2 text-[10px] font-label-caps tracking-widest text-on-surface-variant/60 uppercase mb-4">
                <a class="hover:text-primary transition-colors" href="#">Dashboard</a>
                <span class="material-symbols-outlined text-[12px]">chevron_right</span>
                <a class="hover:text-primary transition-colors" href="read.php">Tarefas</a>
                <span class="material-symbols-outlined text-[12px]">chevron_right</span>
                <span class="text-primary">Editar</span>
            </nav>
            <h2 class="font-headline-lg text-headline-lg text-on-surface">Editar Tarefa</h2>
            <p class="text-on-surface-variant mt-1">Atualize as informações da tarefa abaixo.</p>
        </div>
        <!-- Form Card -->
        <div
            class="w-full max-w-2xl glass-panel rounded-xl p-10 neon-border-primary animate-in fade-in slide-in-from-bottom-4 duration-500">
            <form action="update.php?id=1" class="space-y-8" method="POST">
                <!-- Disciplina -->
                <div class="space-y-3">
                    <label class="font-label-caps text-[11px] tracking-[0.2em] text-primary/70 uppercase"
                        for="disciplina">Disciplina</label>
                    <div
                        class="relative flex items-center bg-surface-container-lowest border border-white/10 rounded-lg input-focus-glow transition-all">
                        <span
                            class="material-symbols-outlined absolute left-4 text-on-surface-variant/50">menu_book</span>
                        <input
                            class="w-full bg-transparent border-none focus:ring-0 pl-12 pr-4 py-4 text-on-surface placeholder:text-on-surface-variant/30"
                            id="disciplina" name="disciplina" placeholder="Digite a disciplina..." type="text"
                            value="Matemática" />
                    </div>
                </div>
                <!-- Descrição -->
                <div class="space-y-3">
                    <label class="font-label-caps text-[11px] tracking-[0.2em] text-primary/70 uppercase"
                        for="descricao">Descrição</label>
                    <div
                        class="relative flex items-start bg-surface-container-lowest border border-white/10 rounded-lg input-focus-glow transition-all">
                        <span
                            class="material-symbols-outlined absolute left-4 top-4 text-on-surface-variant/50">description</span>
                        <textarea
                            class="w-full bg-transparent border-none focus:ring-0 pl-12 pr-4 py-4 text-on-surface placeholder:text-on-surface-variant/30 resize-none"
                            id="descricao" name="descricao" placeholder="Detalhes da tarefa..."
                            rows="5">Resolver exercícios sobre equações do 2º grau.</textarea>
                    </div>
                </div>
                <!-- Prazo de Entrega -->
                <div class="space-y-3">
                    <label class="font-label-caps text-[11px] tracking-[0.2em] text-primary/70 uppercase"
                        for="prazo">Prazo de Entrega</label>
                    <div
                        class="relative flex items-center bg-surface-container-lowest border border-white/10 rounded-lg input-focus-glow transition-all">
                        <span
                            class="material-symbols-outlined absolute left-4 text-on-surface-variant/50">calendar_today</span>
                        <input class="w-full bg-transparent border-none focus:ring-0 pl-12 pr-4 py-4 text-on-surface"
                            id="prazo" name="prazo" type="date" value="2025-05-25" />
                    </div>
                </div>
                <!-- Actions -->
                <div class="flex flex-col md:flex-row gap-4 pt-6">
                    <button
                        class="flex-1 bg-primary text-on-primary px-8 py-4 rounded-lg font-label-caps text-label-caps flex items-center justify-center gap-3 hover:opacity-90 transition-all active:scale-95 shadow-[0_0_20px_rgba(173,198,255,0.3)]"
                        type="submit">
                        <span class="material-symbols-outlined text-[20px]">save</span>
                        SALVAR ALTERAÇÕES
                    </button>
                    <a class="flex-1 border border-white/10 hover:bg-white/5 px-8 py-4 rounded-lg font-label-caps text-label-caps flex items-center justify-center gap-3 text-on-surface-variant hover:text-on-surface transition-all active:scale-95"
                        href="read.php">
                        <span class="material-symbols-outlined text-[20px]">close</span>
                        CANCELAR
                    </a>
                </div>
            </form>
        </div>
        <footer class="mt-12 text-[10px] font-label-caps tracking-widest text-on-surface-variant/40 uppercase">
            © 2025 AETHER OS. Todos os direitos reservados.
        </footer>
    </main>
    <script>
        // ESC key to cancel
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                window.location.href = 'read.php';
            }
        });
    </script>
</body>

</html>