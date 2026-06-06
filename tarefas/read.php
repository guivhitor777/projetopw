<?php
require_once '../conexao.php';

$sql = "SELECT * FROM tarefas";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$tarefas = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <aside
        class="fixed left-0 top-0 h-screen w-sidebar-width bg-surface/40 backdrop-blur-xl border-r border-white/10 flex flex-col py-gutter px-4 z-50">

        <div class="mb-10 px-4">
            <h1 class="font-headline-md text-headline-md font-bold text-on-surface tracking-tighter">
                Aluno Modern
            </h1>
        </div>

        <nav class="flex flex-col flex-1">

            <div class="space-y-2">
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:text-primary hover:bg-primary/10 border-l-2 border-transparent hover:border-primary transition-colors"
                    href="../painel.php">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="font-label-caps text-label-caps">
                        Painel
                    </span>
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

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:text-primary hover:bg-primary/10 border-l-2 border-transparent hover:border-primary transition-colors"
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
    </nav>

    <div class="p-4 border-t border-aether-border">
        <a href="../logout.php"
            class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-300 hover:text-red-400 transition">
            <span class="material-symbols-outlined">logout</span>
            <span>Sair</span>
        </a>
    </div>

    </aside>
    </div>
    </nav>
    <!-- Top Navigation Bar -->
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
    <!-- Main Content Canvas -->
    <main class="ml-[280px] pt-32 pb-20 px-container-desktop min-h-screen">
        <!-- Page Header -->
        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Tarefas</h2>
                <p class="text-on-surface-variant mt-2 font-body-md">Gerencie as tarefas dos alunos.</p>
            </div>
            <a href="create.php"
                class="bg-primary text-on-primary font-label-caps text-label-caps px-8 py-4 rounded transition-all btn-glow flex items-center gap-2 inline-flex">
                <span class="material-symbols-outlined text-[18px]">add</span>
                ADICIONAR TAREFA
            </a>
        </div>
        <!-- Data Table Container -->
        <div class="glass-panel rounded-xl overflow-hidden shadow-2xl">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-white/10 bg-white/5">
                        <th class="px-6 py-5 font-label-caps text-label-caps text-primary uppercase tracking-widest">
                            ID
                        </th>

                        <th class="px-6 py-5 font-label-caps text-label-caps text-primary uppercase tracking-widest">
                            Disciplina
                        </th>

                        <th
                            class="px-6 py-5 font-label-caps text-label-caps text-primary uppercase tracking-widest w-1/3">
                            Descrição
                        </th>

                        <th class="px-6 py-5 font-label-caps text-label-caps text-primary uppercase tracking-widest">
                            Prazo de Entrega
                        </th>

                        <th
                            class="px-6 py-5 font-label-caps text-label-caps text-primary uppercase tracking-widest text-center">
                            Ações
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($tarefas as $tarefa): ?>
                        <tr class="border-b border-white/10 hover:bg-white/5 transition-colors">

                            <td class="px-6 py-5">
                                <?= $tarefa['id'] ?>
                            </td>

                            <td class="px-6 py-5">
                                <?= htmlspecialchars($tarefa['disciplina']) ?>
                            </td>

                            <td class="px-6 py-5">
                                <?= htmlspecialchars($tarefa['descricao']) ?>
                            </td>

                            <td class="px-6 py-5">
                                <?= date('d/m/Y', strtotime($tarefa['prazo'])) ?>
                            </td>

                            <td class="px-6 py-5 text-center">
                                <a href="update.php?id=<?= $tarefa['id'] ?>"
                                    class="text-on-surface-variant hover:text-primary transition-colors" title="Editar">
                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                </a>

                                <a href="delete.php?id=<?= $tarefa['id'] ?>"
                                    onclick="return confirm('Tem certeza que deseja apagar esta tarefa?');"
                                    class="text-on-surface-variant hover:text-error transition-colors" title="Excluir">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
        <div class="absolute -bottom-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-tertiary/5 blur-[100px]">
        </div>
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