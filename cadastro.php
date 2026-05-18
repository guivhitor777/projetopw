<?php
require_once 'conexao.php';

$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = trim($_POST['nome']) ;
    $email = trim($_POST['email']) ?? "";
    $senha = trim($_POST['senha']) ?? "";

    // Criptografar senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // SQL
    $sql = "INSERT INTO usuarios (nome, email, senha)
            VALUES (:nome, :email, :senha)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senhaHash);

    if ($stmt->execute()) {
        $mensagem = "Cadastro realizado com sucesso!";
    } else {
        $mensagem = "Erro ao cadastrar.";
    }
}
?>

<!DOCTYPE html>

<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AETHER EDU - Criar Conta</title>
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
                        "inverse-surface": "#e0e2ed",
                        "surface-container-lowest": "#0b0e16",
                        "on-primary-container": "#00285c",
                        "error": "#ffb4ab",
                        "background": "#10131b",
                        "primary-container": "#4b8eff",
                        "tertiary-fixed": "#ffdbcc",
                        "on-error-container": "#ffdad6",
                        "surface-container-highest": "#31353d",
                        "error-container": "#93000a",
                        "surface": "#10131b",
                        "secondary": "#c4c6cf",
                        "on-secondary-fixed-variant": "#44474e",
                        "surface-container-low": "#181c23",
                        "primary": "#adc6ff",
                        "secondary-container": "#464950",
                        "on-secondary-fixed": "#191c22",
                        "inverse-on-surface": "#2d3039",
                        "on-primary-fixed": "#001a41",
                        "outline-variant": "#414755",
                        "primary-fixed-dim": "#adc6ff",
                        "on-secondary": "#2e3037",
                        "on-secondary-container": "#b6b8c1",
                        "on-tertiary-fixed": "#351000",
                        "tertiary-container": "#ef6719",
                        "on-error": "#690005",
                        "surface-tint": "#adc6ff",
                        "secondary-fixed-dim": "#c4c6cf",
                        "on-tertiary": "#571e00",
                        "on-background": "#e0e2ed",
                        "tertiary": "#ffb595",
                        "on-primary": "#002e69",
                        "on-tertiary-container": "#4c1a00",
                        "on-surface-variant": "#c1c6d7",
                        "surface-dim": "#10131b",
                        "inverse-primary": "#005bc1",
                        "tertiary-fixed-dim": "#ffb595",
                        "primary-fixed": "#d8e2ff",
                        "surface-container": "#1c2028",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "on-surface": "#e0e2ed",
                        "surface-container-high": "#272a32",
                        "secondary-fixed": "#e1e2eb",
                        "on-primary-fixed-variant": "#004493",
                        "outline": "#8b90a0",
                        "surface-variant": "#31353d",
                        "surface-bright": "#363942"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "unit": "4px",
                        "container-padding-mobile": "20px",
                        "sidebar-width": "280px",
                        "gutter": "24px",
                        "container-padding-desktop": "40px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"]
                        "headline-md": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }]
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
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.05);
        }

        .bg-tech {
            background-color: #0B0E14;
            background-image:
                radial-gradient(circle at 50% 50%, rgba(173, 198, 255, 0.03) 0%, transparent 70%),
                linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 100% 100%, 40px 40px, 40px 40px;
        }

        .glow-border:focus-within {
            border-color: #4b8eff;
            box-shadow: 0 0 15px rgba(75, 142, 255, 0.2);
        }
    </style>
</head>

<body
    class="bg-tech min-h-screen flex items-center justify-center p-gutter selection:bg-primary-container selection:text-white">
    <!-- Background Visual Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-[-10%] right-[-5%] w-[40%] h-[40%] bg-primary/10 rounded-full blur-[120px]"></div>
        <div
            class="absolute bottom-[-10%] left-[-5%] w-[30%] h-[30%] bg-tertiary-container/5 rounded-full blur-[100px]">
        </div>
    </div>
    <main class="w-full max-w-[480px] z-10 relative">
        <!-- Logo/Header -->
        <div class="flex flex-col items-center mb-8">
            <div class="w-16 h-16 glass-panel rounded-xl flex items-center justify-center mb-6 border-primary/20">
                <span class="material-symbols-outlined text-primary text-4xl"
                    data-icon="rocket_launch">rocket_launch</span>
            </div>
            <h1 class="font-headline-lg text-headline-lg text-on-surface mb-2">Criar Conta</h1>
            <p class="font-body-md text-body-md text-on-surface-variant text-center max-w-sm">
                Cadastre-se no Sistema de Comando Acadêmico para iniciar sua trajetória.
            </p>
        </div>
        <!-- Registration Form -->
        <section class="glass-panel p-8 rounded-2xl">
            <form action="#" class="space-y-5" method="POST">
                <!-- Name -->
                <div class="space-y-2">
                    <label
                        class="font-label-caps text-label-caps text-on-surface-variant block uppercase tracking-widest">Nome
                        Completo</label>
                    <div
                        class="relative glow-border border border-white/10 rounded-lg bg-black/20 transition-all duration-300">
                        <input
                            class="w-full bg-transparent border-none text-on-surface placeholder:text-outline-variant focus:ring-0 py-3 px-4 font-body-md text-body-md"
                            placeholder="EX: LEONARDO DA VINCI" type="text" />
                    </div>
                </div>
                <!-- Email -->
                <div class="space-y-2">
                    <label
                        class="font-label-caps text-label-caps text-on-surface-variant block uppercase tracking-widest">E-mail
                        Institucional</label>
                    <div
                        class="relative glow-border border border-white/10 rounded-lg bg-black/20 transition-all duration-300 flex items-center">
                        <span class="material-symbols-outlined text-outline-variant ml-4"
                            data-icon="alternate_email">alternate_email</span>
                        <input
                            class="w-full bg-transparent border-none text-on-surface placeholder:text-outline-variant focus:ring-0 py-3 px-3 font-body-md text-body-md"
                            placeholder="nome@aether.edu" type="email" />
                    </div>
                </div>
                <!-- Password -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label
                            class="font-label-caps text-label-caps text-on-surface-variant block uppercase tracking-widest">Senha
                            de Acesso</label>
                        <div
                            class="relative glow-border border border-white/10 rounded-lg bg-black/20 transition-all duration-300 flex items-center">
                            <span class="material-symbols-outlined text-outline-variant ml-3"
                                data-icon="lock_open">lock_open</span>
                            <input
                                class="w-full bg-transparent border-none text-on-surface placeholder:text-outline-variant focus:ring-0 py-3 px-2 font-body-md text-body-md"
                                placeholder="••••••••" type="password" />
                            <span
                                class="material-symbols-outlined text-outline-variant mr-3 cursor-pointer hover:text-primary transition-colors"
                                data-icon="visibility">visibility</span>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label
                            class="font-label-caps text-label-caps text-on-surface-variant block uppercase tracking-widest">Confirmar
                            Senha</label>
                        <div
                            class="relative glow-border border border-white/10 rounded-lg bg-black/20 transition-all duration-300 flex items-center">
                            <input
                                class="w-full bg-transparent border-none text-on-surface placeholder:text-outline-variant focus:ring-0 py-3 px-4 font-body-md text-body-md"
                                placeholder="••••••••" type="password" />
                        </div>
                    </div>
                </div>
                <!-- Terms/Privacy Placeholder -->
                <div class="flex items-start gap-3 py-2">
                    <input
                        class="mt-1 rounded border-white/10 bg-black/40 text-primary focus:ring-primary/50 focus:ring-offset-0"
                        type="checkbox" />
                    <p class="font-label-caps text-[10px] leading-tight text-on-surface-variant uppercase">
                        Eu aceito os protocolos de segurança e termos de uso do ecossistema AETHER OS.
                    </p>
                </div>
                <!-- Action Button -->
                <button
                    class="w-full bg-primary-container text-on-primary-container font-label-caps text-label-caps py-4 rounded-lg font-bold tracking-[0.2em] hover:bg-primary transition-all active:scale-[0.98] shadow-lg shadow-primary/20"
                    type="submit">
                    CADASTRAR NO SISTEMA
                </button>
                <!-- Login Link -->
                <div class="text-center pt-2">
                    <p class="font-label-caps text-label-caps text-on-surface-variant tracking-widest">
                        Já possui acesso? <a class="text-primary hover:underline ml-2" href="login.php">FAZER LOGIN</a>
                    </p>
                </div>
            </form>
        </section>
        <!-- Footer Info -->
        <footer class="mt-12 flex justify-between items-center opacity-40">
            <div class="flex items-center gap-4">
                <div class="h-[1px] w-8 bg-white/30"></div>
                <span class="font-label-caps text-[10px] tracking-[0.3em] text-on-surface uppercase">Sistema
                    Operacional</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[14px]" data-icon="verified_user">verified_user</span>
                <span class="font-label-caps text-[10px] tracking-wider text-on-surface">v4.0.2 SECURE BIND</span>
            </div>
        </footer>
    </main>
    <!-- Decorative Corner Accents -->
    <div class="fixed top-8 left-8 w-16 h-16 border-t border-l border-white/10 pointer-events-none"></div>
    <div class="fixed top-8 right-8 w-16 h-16 border-t border-r border-white/10 pointer-events-none"></div>
    <div class="fixed bottom-8 left-8 w-16 h-16 border-b border-l border-white/10 pointer-events-none"></div>
    <div class="fixed bottom-8 right-8 w-16 h-16 border-b border-r border-white/10 pointer-events-none"></div>
    <!-- Data-alt image context for the background generation -->
    <div class="hidden"
        data-alt="A highly detailed cinematic view of a futuristic dark blue and black laboratory workstation in 2050. The scene features multiple glowing holographic interfaces and glass touch surfaces emitting a soft electric blue light. The lighting is low-key with sharp rim highlights on metallic and obsidian-like textures, creating a professional and visionary atmosphere. The overall style is minimalist and high-tech, evoking an advanced academic command center or a professional command bridge.">
    </div>
</body>

</html>