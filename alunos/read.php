<?php

require_once '../conexao.php';

$sql = "SELECT * FROM alunos";
$stmt = $pdo->query($sql);

?>

<!DOCTYPE html>

<html class="dark" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Aluno Modern | Gestão de Alunos</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "background": "#0b0e14",
                        "surface": "#0b0e14",
                        "surface-container": "#11151d",
                        "primary": "#adc6ff",
                        "on-primary": "#002e69",
                        "secondary": "#c4c6cf",
                        "on-surface": "#e0e2ed",
                        "on-surface-variant": "#9ba1ad",
                        "outline": "#414755",
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
                    },
                    "fontFamily": {
                        "body": ["Inter", "sans-serif"],
                        "display": ["Inter", "sans-serif"]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #0b0e14;
        }

        ::-webkit-scrollbar-thumb {
            background: #31353d;
            border-radius: 10px;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body selection:bg-primary/30">

    <aside
        class="fixed left-0 top-0 h-screen w-sidebar-width bg-surface/40 backdrop-blur-xl border-r border-white/10 flex flex-col py-gutter px-4 z-50">
        <div class="mb-10 px-4">
            <h1 class="text-3xl font-bold text-primary tracking-tighter">Aluno Modern</h1>
        </div>
        <nav class="flex flex-col flex-1">
            <div class="space-y-2">
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors"
                    href="../painel.php">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span>Painel</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-primary bg-primary/10 border-l-2 border-primary transition-colors"
                    href="../alunos/read.php">
                    <span class="material-symbols-outlined">school</span>
                    <span>Alunos</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors"
                    href="../notas/read.php">
                    <span class="material-symbols-outlined">grade</span>
                    <span>Notas</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors"
                    href="../tarefas/read.php">
                    <span class="material-symbols-outlined">assignment</span>
                    <span>Tarefas</span>
                </a>
            </div>
            <a class="mt-auto flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-error transition-colors"
                href="../logout.php" onclick="return confirm('Tem certeza que deseja sair do sistema?');">
                <span class="material-symbols-outlined">logout</span>
                <span>Sair</span>
            </a>
        </nav>
    </aside>

    <header
        class="h-20 px-8 flex items-center justify-between border-b border-white/10 bg-surface/50 backdrop-blur-md sticky top-0 z-40 ml-sidebar-width">
        <div>
            <h2 class="text-xl font-bold text-on-surface">Alunos</h2>
            <p class="text-xs text-on-surface-variant">Gerencie os alunos cadastrados.</p>
        </div>
        <div class="flex items-center gap-3 pl-4 border-l border-white/10">
            <div class="text-right">
                <p class="text-[10px] text-primary uppercase tracking-widest">Nível Máx.</p>
                <p class="text-sm font-bold">Administrador</p>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="ml-sidebar-width pt-8 min-h-screen flex flex-col">
        <div class="p-8 flex-1">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-3">
                <div>
                    <h2 class="text-4xl font-bold text-on-surface tracking-tight mb-3">Alunos</h2>
                    <div class="w-1/2 h-1 bg-primary mb-4"></div>
                    <p class="text-on-surface-variant text-lg">Gerencie os alunos cadastrados no sistema.</p>
                </div>
                <a class="bg-primary text-on-primary px-6 py-3 rounded-lg font-bold flex items-center gap-2 hover:opacity-90 active:scale-[0.98] transition-all text-sm"
                    href="create.php">
                    <span class="material-symbols-outlined">add_circle</span>
                    ADICIONAR ALUNO
                </a>
            </div>

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-white/5 bg-white/5">
                        <th class="py-5 px-8">ID</th>
                        <th class="py-5 px-8">Nome Completo</th>
                        <th class="py-5 px-8">E-mail Institucional</th>
                        <th class="py-5 px-8 text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    <?php while ($aluno = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr class="hover:bg-white/[0.02] transition-colors group">
                            <td class="py-6 px-8"><?= $aluno['id'] ?></td>
                            <td class="py-6 px-8"><?= htmlspecialchars($aluno['nome']) ?></td>
                            <td class="py-6 px-8"><?= htmlspecialchars($aluno['email']) ?></td>
                            <td class="py-6 px-8 text-right">
                                <div class="flex justify-end gap-3">
                                    <a href="update.php?id=<?= $aluno['id'] ?>"
                                        class="w-10 h-10 flex items-center justify-center rounded-lg border border-white/10 hover:border-primary/50 hover:bg-primary/10 text-on-surface-variant hover:text-primary transition-all">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <a href="#" onclick="confirmDelete(<?= $aluno['id'] ?>); return false;"
                                        class="w-10 h-10 flex items-center justify-center rounded-lg border border-white/10 hover:border-red-500/50 hover:bg-red-500/10 text-on-surface-variant hover:text-red-500 transition-all">
                                        <span class="material-symbols-outlined">delete</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

        </div>

        <footer class="fixed bottom-4 left-0 right-0 flex justify-center items-center gap-8 opacity-40 text-center">
            <div class="flex items-center gap-4">
                <div class="h-[1px] w-8 bg-white/30 hidden sm:block"></div>
                <span class="text-[10px] tracking-[0.3em] text-on-surface uppercase">Aluno Modern</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[14px]">verified_user</span>
            </div>
        </footer>
    </main>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                icon: 'warning',
                title: 'Excluir aluno?',
                text: 'Esta ação não pode ser desfeita.',
                showCancelButton: true,
                confirmButtonText: 'Sim, excluir',
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#414755',
                background: '#11151d',
                color: '#e0e2ed'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "delete.php?id=" + id;
                }
            });
        }
    </script>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'sucesso'): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Cadastrado!',
                text: 'Aluno cadastrado com sucesso.',
                confirmButtonColor: '#adc6ff',
                background: '#11151d',
                color: '#e0e2ed'
            });
        </script>
    <?php endif; ?>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'deletado'): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Excluído!',
                text: 'Aluno removido com sucesso.',
                confirmButtonColor: '#adc6ff',
                background: '#11151d',
                color: '#e0e2ed'
            });
        </script>
    <?php endif; ?>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'editado'): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Atualizado!',
                text: 'Aluno atualizado com sucesso.',
                confirmButtonColor: '#adc6ff',
                background: '#11151d',
                color: '#e0e2ed'
            });
        </script>
    <?php endif; ?>

</body>

</html>