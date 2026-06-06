<?php

require_once '../conexao.php';

$sql = "SELECT * FROM notas";
$stmt = $pdo->query($sql);

?>

<!DOCTYPE html>

<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sistema Escolar - Notas</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500&amp;display=swap"
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
                        "primary": "#adc6ff",
                        "on-primary": "#002e69",
                        "background": "#10131b",
                        "surface": "#10131b",
                        "surface-container": "#1c2028",
                        "surface-container-low": "#181c23",
                        "on-surface": "#e0e2ed",
                        "on-surface-variant": "#c1c6d7",
                        "outline-variant": "#414755",
                        "error": "#ffb4ab"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sidebar-width": "260px",
                        "gutter": "24px"
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #414755;
            border-radius: 10px;
        }
    </style>
</head>

<body class="bg-background text-on-background selection:bg-primary/30 selection:text-primary min-h-screen flex">
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
                    href="../painel.php">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span>Painel</span>
                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5"
                    href="../alunos/read.php">
                    <span class="material-symbols-outlined">school</span>
                    <span>Alunos</span>
                </a>

                <a
                    class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-400 hover:text-primary hover:bg-primary/10 border-l-2 border-transparent hover:border-primary transition-colors"
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
    <!-- Main Content -->
    <main class="ml-sidebar-width flex-1 flex flex-col">
        <!-- Header -->
        <header
            class="h-20 px-8 flex items-center justify-between border-b border-outline-variant/10 bg-surface/50 backdrop-blur-md sticky top-0 z-40">
            <div>
                <h2 class="text-xl font-bold text-on-surface">Notas</h2>
                <p class="text-xs text-on-surface-variant">Gerencie as notas cadastradas.</p>
            </div>
            <a class="bg-primary text-on-primary px-5 py-2.5 rounded-lg text-sm font-bold flex items-center gap-2 hover:opacity-90 active:scale-[0.98] transition-all"
                href="create.php">
                <span class="material-symbols-outlined text-[20px]">add</span>
                <span>Adicionar Nota</span>
            </a>
        </header>
        <!-- Content -->
        <div class="p-8 max-w-6xl w-full mx-auto flex-1">
            <div class="bg-surface-container-low border border-outline-variant/20 rounded-xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">

                        <thead>
                            <tr class="border-b border-outline-variant/20 bg-white/5">
                                <th
                                    class="px-6 py-4 text-[11px] font-semibold text-on-surface-variant uppercase tracking-wider">
                                    ID
                                </th>

                                <th
                                    class="px-6 py-4 text-[11px] font-semibold text-on-surface-variant uppercase tracking-wider">
                                    Aluno ID
                                </th>

                                <th
                                    class="px-6 py-4 text-[11px] font-semibold text-on-surface-variant uppercase tracking-wider">
                                    Disciplina
                                </th>

                                <th
                                    class="px-6 py-4 text-[11px] font-semibold text-on-surface-variant uppercase tracking-wider">
                                    Nota
                                </th>

                                <th
                                    class="px-6 py-4 text-[11px] font-semibold text-on-surface-variant uppercase tracking-wider text-right">
                                    Ações
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-outline-variant/10">

                            <?php while ($nota = $stmt->fetch(PDO::FETCH_ASSOC)): ?>

                                <tr class="hover:bg-white/[0.02] transition-colors">

                                    <td class="px-6 py-4 text-sm text-on-surface-variant">
                                        #<?= $nota['id'] ?>
                                    </td>

                                    <td class="px-6 py-4 text-sm font-medium text-on-surface">
                                        <?= $nota['id_aluno'] ?>
                                    </td>

                                    <td class="px-6 py-4 text-sm text-on-surface-variant">
                                        <?= $nota['disciplina'] ?>
                                    </td>

                                    <td class="px-6 py-4">
                                        <span class="text-sm font-bold text-primary">
                                            <?= $nota['nota'] ?>
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end gap-3">

                                            <a href="update.php?id=<?= $nota['id'] ?>"
                                                class="text-on-surface-variant hover:text-primary transition-colors"
                                                title="Editar">
                                                <span class="material-symbols-outlined text-[20px]">edit</span>
                                            </a>

                                            <a href="delete.php?id=<?= $nota['id'] ?>"
                                                onclick="return confirm('Tem certeza que deseja apagar esta nota?');"
                                                class="text-on-surface-variant hover:text-error transition-colors"
                                                title="Excluir">
                                                <span class="material-symbols-outlined text-[20px]">delete</span>
                                            </a>

                                        </div>
                                    </td>

                                </tr>

                            <?php endwhile; ?>

                        </tbody>

                    </table>
                </div>
                <!-- Pagination -->
                <div
                    class="px-6 py-4 border-t border-outline-variant/10 flex items-center justify-between bg-white/[0.01]">
                    <div class="flex items-center gap-1">
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="p-8 mt-auto border-t border-outline-variant/10 text-center">
            <p class="text-xs text-on-surface-variant font-medium">Sistema Escolar • Projeto PW</p>
        </footer>
    </main>
    <script>
        function confirmDelete(id) {
            if (confirm("Tem certeza que deseja excluir esta nota? Esta ação não pode ser desfeita.")) {
                // No ambiente real, redirecionaria para delete.php?id=...
                window.location.href = `delete.php?id=${id}`;
            }
        }
    </script>
</body>

</html>