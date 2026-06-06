<?php

require_once '../conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM alunos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE alunos
            SET nome = :nome,
                email = :email
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: read.php");
        exit;
    }
}
?>

<!DOCTYPE html>

<html class="dark" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Editar Aluno - AETHER EDU</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <script data-purpose="tailwind-config">
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'aether-surface': '#10131b',
                        'aether-surface-dim': '#0b0e16',
                        'aether-surface-bright': '#181c23',
                        'aether-border': '#363942',
                        'aether-primary': '#a0c4ff', // Light blue from reference
                        'aether-accent': '#007aff',
                    },
                    boxShadow: {
                        'glow-primary': '0 0 15px rgba(160, 196, 255, 0.4)',
                    }
                }
            }
        }
    </script>
    <style data-purpose="custom-layout">
        body {
            background-color: #0b0e16;
            color: #e2e8f0;
            font-family: 'Inter', sans-serif;
        }

        .glass-card {
            background: rgba(24, 28, 35, 0.6);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(54, 57, 66, 0.5);
        }

        .sidebar-active {
            background: linear-gradient(90deg, rgba(160, 196, 255, 0.1) 0%, rgba(160, 196, 255, 0.02) 100%);
            border-left: 2px solid #a0c4ff;
        }
    </style>
</head>

<body class="min-h-screen flex">
    <!-- BEGIN: MainSidebar -->
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
    <!-- END: MainSidebar -->
    <!-- BEGIN: MainContent -->
    <main class="ml-64 flex-1 flex flex-col overflow-hidden">
        <!-- BEGIN: TopHeader -->
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
        <!-- END: TopHeader -->
        <!-- BEGIN: FormContainer -->
        <div class="flex-1 overflow-y-auto p-12 flex flex-col items-center">
            <!-- Page Title & Breadcrumbs -->
            <div class="w-full max-w-4xl mb-12">
                <nav
                    class="flex items-center gap-2 text-[10px] uppercase tracking-[0.15em] text-aether-primary font-semibold mb-6">
                    <a class="hover:underline" href="#">Dashboard</a>
                    <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    <a class="hover:underline" href="#">Alunos</a>
                    <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    <span class="text-gray-500">Editar</span>
                </nav>
                <h2 class="text-4xl font-bold tracking-tight mb-2">Editar Aluno</h2>
                <p class="text-gray-400">Atualize as informações do aluno abaixo.</p>
            </div>
            <!-- Main Edit Card -->
            <div class="w-full max-w-4xl glass-card rounded-xl p-8 lg:p-12 shadow-2xl" data-purpose="edit-student-card">
                <div class="flex items-center gap-3 mb-10 border-b border-aether-border pb-6">
                    <div class="p-2 bg-aether-primary/10 rounded-lg">
                        <svg class="w-5 h-5 text-aether-primary" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                            <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                    </div>
                    <span class="text-sm font-semibold uppercase tracking-widest text-aether-primary/80">Informações do
                        Aluno</span>
                </div>
                <form method="POST" class="space-y-8">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                        <!-- Nome -->
                        <div data-purpose="form-group">
                            <label
                                class="block text-[10px] font-bold uppercase tracking-widest text-gray-500 mb-3 ml-1">
                                Nome Completo
                            </label>

                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-500 pointer-events-none">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        </path>
                                    </svg>
                                </span>

                                <input type="text" name="nome" value="<?= $aluno['nome'] ?>"
                                    class="block w-full pl-11 pr-4 py-4 bg-aether-surface-dim border border-aether-border rounded-lg text-sm text-gray-100 placeholder-gray-600 focus:ring-1 focus:ring-aether-primary/50 focus:border-aether-primary/50 transition-all"
                                    required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div data-purpose="form-group">
                            <label
                                class="block text-[10px] font-bold uppercase tracking-widest text-gray-500 mb-3 ml-1">
                                E-mail Institucional
                            </label>

                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-500 pointer-events-none">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        </path>
                                    </svg>
                                </span>

                                <input type="email" name="email" value="<?= $aluno['email'] ?>"
                                    class="block w-full pl-11 pr-4 py-4 bg-aether-surface-dim border border-aether-border rounded-lg text-sm text-gray-100 placeholder-gray-600 focus:ring-1 focus:ring-aether-primary/50 focus:border-aether-primary/50 transition-all"
                                    required>
                            </div>
                        </div>

                    </div>

                    <div class="flex justify-end gap-4">

                        <div
                            class="flex flex-col sm:flex-row justify-end items-center gap-4 pt-8 border-t border-aether-border/50">
                            <button
                                class="w-full sm:w-auto px-10 py-3 text-sm font-semibold text-gray-400 hover:text-white border border-aether-border rounded-lg hover:bg-aether-border/20 transition-all duration-200"
                                type="button">
                                Cancelar
                            </button>
                            <button
                                class="w-full sm:w-auto px-10 py-3 text-sm font-bold text-aether-surface-dim bg-aether-primary rounded-lg hover:bg-blue-300 transition-all duration-200 shadow-glow-primary"
                                type="submit">
                                Salvar Alterações
                            </button>
                        </div>
                </form>
            </div>

            </form>
            <!-- Actions -->
            <!-- BEGIN: PageFooter -->
            <footer
                class="mt-auto py-12 w-full max-w-4xl flex items-center justify-between text-[10px] text-gray-600 uppercase tracking-widest border-t border-aether-border/30">
                <div class="flex items-center gap-4">
                    <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                        SECURE NODE 04</span>
                    <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-gray-500"></span>
                        SESSION: AE-9421</span>
                    <span class="flex items-center gap-1.5"><span class="w-1.5 h-1.5 rounded-full bg-gray-500"></span>
                        ENCRYPTION: AES-256</span>
                </div>
                <div class="text-right">
                    © 2023 Aether OS. Academic Command Rev. 4.0.2
                </div>
            </footer>
            <!-- END: PageFooter -->
        </div>
        <!-- END: FormContainer -->
    </main>
    <!-- END: MainContent -->
</body>

</html>