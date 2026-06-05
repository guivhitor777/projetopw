<?php

require_once 'conexao.php';

$id = $_GET['id'] ?? 0;

$sql = "SELECT * FROM alunos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$aluno) {
    die("Aluno não encontrado.");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');

    $sql = "UPDATE alunos
            SET nome = :nome,
                email = :email
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Aluno atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar.";
    }
}
?>
<!DOCTYPE html>

<html class="dark" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Editar Aluno - AETHER EDU</title>
    <!-- Tailwind CSS v3 with Plugins -->
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
    <aside class="w-64 border-r border-aether-border bg-aether-surface flex flex-col shrink-0" data-purpose="sidebar">
        <div class="p-8">
            <h1 class="text-xl font-bold tracking-tight">AETHER EDU</h1>
            <p class="text-[10px] text-gray-500 uppercase tracking-[0.2em] -mt-1">Command Center</p>
        </div>
        <nav class="flex-1 px-4 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-sm text-gray-400 hover:text-white transition-colors"
                href="#">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                Dashboard
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-sm text-gray-400 hover:text-white transition-colors"
                href="#">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                Calendar
            </a>
            <a class="sidebar-active flex items-center gap-3 px-4 py-3 text-sm text-aether-primary transition-colors"
                href="#">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                Alunos
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-sm text-gray-400 hover:text-white transition-colors"
                href="#">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path
                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                Assignments
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-sm text-gray-400 hover:text-white transition-colors"
                href="#">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                Messages
            </a>
        </nav>
        <div class="p-4 border-t border-aether-border space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-sm text-gray-400 hover:text-white transition-colors"
                href="#">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2"></path>
                </svg>
                Settings
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-sm text-gray-400 hover:text-white transition-colors"
                href="#">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                Logout
            </a>
        </div>
    </aside>
    <!-- END: MainSidebar -->
    <!-- BEGIN: MainContent -->
    <main class="flex-1 flex flex-col overflow-hidden">
        <!-- BEGIN: TopHeader -->
        <header
            class="h-16 border-b border-aether-border flex items-center justify-between px-8 bg-aether-surface/30 backdrop-blur-sm"
            data-purpose="header">
            <div class="relative w-96">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </span>
                <input
                    class="block w-full pl-10 pr-3 py-2 border-0 bg-aether-surface-dim/50 rounded-md text-sm text-gray-200 placeholder-gray-500 focus:ring-1 focus:ring-aether-primary/50"
                    placeholder="Pesquisar registros..." type="text" />
            </div>
            <div class="flex items-center gap-6">
                <button class="text-gray-400 hover:text-white transition-colors relative">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    <span
                        class="absolute -top-1 -right-1 block h-2 w-2 rounded-full bg-aether-primary shadow-[0_0_8px_rgba(160,196,255,1)]"></span>
                </button>
                <div class="flex items-center gap-3">
                    <div class="text-right">
                        <p
                            class="text-[10px] text-aether-primary uppercase font-bold tracking-widest leading-none mb-1">
                            Administrator</p>
                        <p class="text-xs font-medium">Dr. Julian Vane</p>
                    </div>
                    <img alt="Avatar" class="w-8 h-8 rounded-md border border-aether-border"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJo6TD4AOhBGZarVfHqUQ0VyGMoZF7lYiMTjJRz2Qi4HelrwHNTjgy8Z2DlLIRFvKY1oHhf3Akiwxs__a4Ct52x-u38Wq_puEe6Q53nxveBmLXX2MaKNIQZJU58UdMxSeIo_yttiQTM1ngdg5YvshMcJ148A308MCLOmj7Iji07ckf9x_4ZJjIaJOo7cxVHegyuYUv-4KFFY6edAyIcNsf8AlK6aPDnLHeqeUh_mgRDPz3YNNHYrDAXqluwd2uayBHm11JcQEExQTs" />
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
                <form class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Full Name Field -->
                        <div data-purpose="form-group">
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-gray-500 mb-3 ml-1"
                                for="full_name">Nome Completo</label>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-500 pointer-events-none">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </svg>
                                </span>
                                <input
                                    class="block w-full pl-11 pr-4 py-4 bg-aether-surface-dim border border-aether-border rounded-lg text-sm text-gray-100 placeholder-gray-600 focus:ring-1 focus:ring-aether-primary/50 focus:border-aether-primary/50 transition-all"
                                    id="full_name" placeholder="Digite o nome completo..." type="text"
                                    value="Alex Rivera" />
                            </div>
                        </div>
                        <!-- Email Field -->
                        <div data-purpose="form-group">
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-gray-500 mb-3 ml-1"
                                for="email">E-mail Institucional</label>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-500 pointer-events-none">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                        <path
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    </svg>
                                </span>
                                <input
                                    class="block w-full pl-11 pr-4 py-4 bg-aether-surface-dim border border-aether-border rounded-lg text-sm text-gray-100 placeholder-gray-600 focus:ring-1 focus:ring-aether-primary/50 focus:border-aether-primary/50 transition-all"
                                    id="email" placeholder="exemplo@aether.edu" type="email"
                                    value="alex.rivera@aether.edu" />
                            </div>
                        </div>
                    </div>
                    <!-- Actions -->
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