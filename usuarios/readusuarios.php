<?php
require_once 'conexao.php';

session_start();

if (isset($_SESSION['usuario_id'])) {
    header('Location: /pages/categorias/index.php');
    exit();
}

$erro = '';
?>

<!DOCTYPE html>

<html class="dark" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ALUNO MODERN | Perfil do Estudante</title>
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
                        "tertiary-container": "#ef6719",
                        "on-surface": "#e0e2ed",
                        "inverse-on-surface": "#2d3039",
                        "error-container": "#93000a",
                        "surface-bright": "#363942",
                        "on-tertiary-fixed": "#351000",
                        "surface-container-lowest": "#0b0e16",
                        "surface-container-high": "#272a32",
                        "secondary-container": "#464950",
                        "on-primary-fixed-variant": "#004493",
                        "on-surface-variant": "#c1c6d7",
                        "on-secondary-fixed-variant": "#44474e",
                        "primary-fixed": "#d8e2ff",
                        "surface": "#10131b",
                        "on-primary-fixed": "#001a41",
                        "primary-container": "#4b8eff",
                        "secondary-fixed": "#e1e2eb",
                        "error": "#ffb4ab",
                        "on-secondary-container": "#b6b8c1",
                        "inverse-surface": "#e0e2ed",
                        "on-primary": "#002e69",
                        "background": "#10131b",
                        "tertiary-fixed-dim": "#ffb595",
                        "secondary-fixed-dim": "#c4c6cf",
                        "surface-container-highest": "#31353d",
                        "surface-dim": "#10131b",
                        "surface-container-low": "#181c23",
                        "on-tertiary": "#571e00",
                        "on-secondary-fixed": "#191c22",
                        "tertiary": "#ffb595",
                        "on-tertiary-container": "#4c1a00",
                        "on-error": "#690005",
                        "tertiary-fixed": "#ffdbcc",
                        "on-background": "#e0e2ed",
                        "secondary": "#c4c6cf",
                        "outline-variant": "#414755",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "surface-container": "#1c2028",
                        "on-secondary": "#2e3037",
                        "on-error-container": "#ffdad6",
                        "primary-fixed-dim": "#adc6ff",
                        "on-primary-container": "#00285c",
                        "primary": "#adc6ff",
                        "outline": "#8b90a0",
                        "surface-variant": "#31353d",
                        "surface-tint": "#adc6ff",
                        "inverse-primary": "#005bc1"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "container-padding-mobile": "20px",
                        "unit": "4px",
                        "container-padding-desktop": "40px",
                        "sidebar-width": "280px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "headline-lg-mobile": ["Inter"],
                        "display-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: inset 0 1px 0 0 rgba(255, 255, 255, 0.05);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md overflow-x-hidden">
    <!-- SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-screen w-sidebar-width hidden md:flex flex-col py-8 px-4 gap-y-2 bg-surface-container-low/40 backdrop-blur-2xl border-r border-white/10 z-[60]">
        <div class="mb-10 px-4">
            <h1 class="font-headline-md text-headline-md font-bold text-on-surface tracking-tighter">AETHER OS</h1>
            <p class="font-label-caps text-label-caps text-on-surface-variant uppercase mt-1">Comando Acadêmico</p>
        </div>
        <nav class="flex-1 flex flex-col gap-y-1">
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined" data-icon="grid_view">grid_view</span>
                <span class="font-label-caps text-label-caps">Painel</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
                <span class="font-label-caps text-label-caps">Notas</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined" data-icon="assignment">assignment</span>
                <span class="font-label-caps text-label-caps">Tarefas</span>
            </a>
        </nav>
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="logout.php">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="font-label-caps text-label-caps">Sair</span>
            </a>
            <div class="mt-6 px-4">
        </div>
    </aside>
    <!-- TopNavBar -->
    <header
        class="fixed top-0 right-0 left-0 md:left-sidebar-width h-16 bg-surface/60 backdrop-blur-xl border-b border-white/10 flex justify-between items-center px-gutter z-50">
        <div class="flex items-center gap-8">
            <span class="font-label-caps text-label-caps tracking-widest text-primary">ALUNO MODERN</span>
            <div
                class="hidden lg:flex items-center bg-surface-container-lowest border border-white/5 rounded-full px-4 py-1.5 gap-2">
                <span class="material-symbols-outlined text-outline text-[20px]" data-icon="search">search</span>
                <input
                    class="bg-transparent border-none focus:ring-0 text-body-md font-body-md text-on-surface w-64 placeholder:text-outline/50"
                    placeholder="Busca de Comandos..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="text-on-surface-variant hover:text-primary transition-colors duration-200">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <button class="text-on-surface-variant hover:text-primary transition-colors duration-200">
                <span class="material-symbols-outlined" data-icon="help">help</span>
            </button>
            <div class="h-8 w-8 rounded-full overflow-hidden border border-primary/30">
                <img alt="User profile" class="w-full h-full object-cover"
                    data-alt="A professional close-up portrait of a young male student with a focused and intelligent expression. He is set against a dark, tech-inspired background with subtle blue lens flares and digital geometric overlays. The lighting is dramatic and cool-toned, emphasizing sharp features and a modern, high-end educational aesthetic. The overall mood is serious and futuristic."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnbGuBpbQkv38O4cD7QiM342vWWQ95J0vbKl4taYr_9UwCFcmqFe9pTH_YnEnxeO5Yk62D-eUAmYaPGJFWRMrbnN3s5wCYm3HdF3TbCRn6bezoCwaUwm0OxsIel0BX78o1RuG_sRH6h3kBPKlg8IyWGoeXzZ8zdOufFNgKZS78i2EpaUAnS_nRp3iJdHyO0uMHtSmZU-2A8f9WJZEwb-z8LaqFNf735-NEG3dymG52i72uJmd-hSzdXMyIm4_rnHeAE_NSNf1bWatb" />
            </div>
        </div>
    </header>
    <!-- Main Canvas -->
    <main class="pt-24 pb-12 px-gutter md:ml-sidebar-width min-h-screen">
        <div class="max-w-[1440px] mx-auto space-y-8">
            <!-- Student Hero Section -->
            <section
                class="glass-card rounded-xl p-8 flex flex-col md:flex-row items-center gap-8 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/10 blur-[100px] rounded-full -mr-20 -mt-20">
                </div>
                <div class="relative">
                    <div class="w-32 h-32 md:w-40 md:h-40 rounded-full border-2 border-primary p-1">
                        <img alt="Student Large" class="w-full h-full object-cover rounded-full"
                            data-alt="A detailed, high-resolution portrait of a male student in a modern educational setting. The lighting is cinematic, utilizing deep shadows and vibrant cyan highlights to create a sense of technological depth. He has a determined look, representing the next generation of academic leaders. The background is a blurred, high-tech interface with glowing data points and translucent layers."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9aHWK2DT20VaZoe6tiW7Ks7WTjmcI8Ushb_AKO_-jH3elTsZUTLbWkPe224y8ifnkB8fcmnlJAJY_46VIyW9c7TcPIrBqc3JvHWCPup_ob97N7TSWGV0TggzqDkS1m5MHULcOlQQhigOhA3ULUGFx7U35NSg6q1_gO2IEFrr6e1DveIhcnNczo3EclfZze71MLv1GuusYIHTCV8EXqJ6Um-wmTZO5oYFD8AAUSIWgWd6W-flvmecKheBSc-gjhfZa8MoA4pl7JDbK" />
                    </div>
                    <div
                        class="absolute bottom-2 right-2 bg-primary text-on-primary w-8 h-8 rounded-full flex items-center justify-center border-2 border-background">
                        <span class="material-symbols-outlined text-[18px]" data-icon="verified">verified</span>
                    </div>
                </div>
                <div class="text-center md:text-left flex-1">
                    <h2 class="font-display-lg text-display-lg text-on-surface tracking-tighter">Alexander Thorne</h2>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4 mt-2">
                        <span
                            class="flex items-center gap-2 px-3 py-1 bg-primary/10 border border-primary/20 rounded-full text-primary font-label-caps text-label-caps"><span
                                class="material-symbols-outlined text-[16px]" data-icon="school">school</span> Classe de
                            2026</span>
                </div>
                <div class="flex gap-3">
                    <button
                        class="px-6 py-2.5 rounded-lg border border-white/10 text-on-surface font-label-caps text-label-caps hover:bg-white/5 transition-all">Editar
                        Perfil</button>
                </div>
            </section>
            <!-- Grid Layout for Details & Settings -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Left Column: Details -->
                <div class="lg:col-span-4 space-y-8">
                    <section class="glass-card rounded-xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="font-headline-md text-headline-md text-on-surface">Matriz de Identidade</h3>
                            <span class="material-symbols-outlined text-primary"
                                data-icon="fingerprint">fingerprint</span>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <p class="font-label-caps text-label-caps text-outline uppercase mb-1">Email do Estudante
                                </p>
                                <p class="font-body-lg text-body-lg text-on-surface">a.thorne@aether.edu</p>
                            </div>
                            <div>
                                <p class="font-label-caps text-label-caps text-outline uppercase mb-1">Nasc do Estudante
                                </p>
                                <p class="font-body-lg text-body-lg text-on-surface">14/10/2009</p>
                            </div>
                            <div>
                                <p class="font-label-caps text-label-caps text-outline uppercase mb-1">Matrícula do Estudante
                                </p>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                                    <p class="font-body-lg text-body-lg text-primary">Inscrição Ativa</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="glass-card rounded-xl p-6 bg-gradient-to-br from-primary/5 to-transparent">
                        <h3 class="font-label-caps text-label-caps text-outline uppercase mb-4">Velocidade Acadêmica
                        </h3>
                        <div class="flex items-end justify-between">
                            <div>
                                <p class="text-[48px] font-bold text-on-surface leading-none">3.94</p>
                                <p class="font-label-caps text-label-caps text-primary mt-1">GPA Acumulado</p>
                            </div>
                            <div class="text-right">
                                <p class="text-headline-md font-bold text-on-surface">92%</p>
                                <p class="font-label-caps text-label-caps text-outline">Conclusão</p>
                            </div>
                        </div>
                        <div class="w-full bg-white/5 h-1.5 rounded-full mt-4 overflow-hidden">
                            <div class="bg-primary h-full w-[92%] rounded-full shadow-[0_0_10px_rgba(173,198,255,0.5)]">
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Right Column: Settings & Preferences -->
                <div class="lg:col-span-8 space-y-8">
                    <section class="glass-card rounded-xl p-8">
                        <h3 class="font-headline-md text-headline-md text-on-surface mb-8 flex items-center gap-3"><span
                                class="material-symbols-outlined text-primary"
                                data-icon="settings_suggest">settings_suggest</span> Configuração do Sistema</h3>
                        <div class="space-y-10">
                            <!-- Group 1: Notifications -->
                            <div>
                                <h4
                                    class="font-label-caps text-label-caps text-primary uppercase mb-6 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]"
                                        data-icon="notifications_active">notifications_active</span> Protocolos de
                                    Notificação</h4>
                                <div class="space-y-6">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="font-body-lg text-on-surface">Autenticação de Dois Fatores</p>
                                            <p class="text-outline text-sm">Verificação biométrica ou por token de
                                                hardware para todas as tarefas administrativas.</p>
                                        </div>
                                        <button
                                            class="w-12 h-6 rounded-full bg-primary relative flex items-center px-1">
                                            <div
                                                class="w-4 h-4 bg-on-primary rounded-full translate-x-6 transition-transform">
                                            </div>
                                        </button>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="font-body-lg text-on-surface">Autenticação de Dois Fatores</p>
                                            <p class="text-outline text-sm">Verificação biométrica ou por token de
                                                hardware para todas as tarefas administrativas.</p>
                                        </div>
                                        <button
                                            class="w-12 h-6 rounded-full bg-white/10 relative flex items-center px-1">
                                            <div class="w-4 h-4 bg-white/40 rounded-full transition-transform"></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Group 2: Security -->
                            <div>
                                <h4
                                    class="font-label-caps text-label-caps text-primary uppercase mb-6 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]"
                                        data-icon="notifications_active">notifications_active</span> Protocolos de
                                    Notificação</h4>
                                <div class="space-y-6">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="font-body-lg text-on-surface">Autenticação de Dois Fatores</p>
                                            <p class="text-outline text-sm">Verificação biométrica ou por token de
                                                hardware para todas as tarefas administrativas.</p>
                                        </div>
                                        <button
                                            class="w-12 h-6 rounded-full bg-primary relative flex items-center px-1">
                                            <div
                                                class="w-4 h-4 bg-on-primary rounded-full translate-x-6 transition-transform">
                                            </div>
                                        </button>
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-4 bg-white/5 rounded-lg border border-white/5">
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="w-10 h-10 rounded-lg bg-surface flex items-center justify-center text-primary border border-primary/20">
                                                <span class="material-symbols-outlined" data-icon="key">key</span>
                                            </div>
                                            <div>
                                                <p class="font-body-md text-on-surface">Protocolo do Último Acesso</p>
                                                <p
                                                    class="text-outline text-xs uppercase font-label-caps tracking-wider">
                                                    San Francisco, CA • há 12 min</p>
                                            </div>
                                        </div>
                                        <button
                                            class="text-primary font-label-caps text-label-caps hover:underline">Revogar
                                            Acesso</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Group 3: Privacy -->
                            <div>
                                <h4
                                    class="font-label-caps text-label-caps text-primary uppercase mb-6 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[18px]"
                                        data-icon="notifications_active">notifications_active</span> Protocolos de
                                    Notificação</h4>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="p-4 rounded-lg bg-surface border border-white/10 flex flex-col gap-2">
                                        <span class="material-symbols-outlined text-outline"
                                            data-icon="groups">groups</span>
                                        <p class="font-body-md text-on-surface">Visibilidade entre Pares</p>
                                        <p class="text-xs text-outline">Permitir que colegas vejam sua carga horária e
                                            projetos de pesquisa.</p>
                                        <button
                                            class="mt-2 text-primary font-label-caps text-label-caps text-left">Atualmente:
                                            Restrito</button>
                                    </div>
                                    <div class="p-4 rounded-lg bg-surface border border-white/10 flex flex-col gap-2">
                                        <span class="material-symbols-outlined text-outline"
                                            data-icon="analytics">analytics</span>
                                        <p class="font-body-md text-on-surface">Transmissão de Dados</p>
                                        <p class="text-xs text-outline">Compartilhamento de análises anonimizadas para
                                            melhoria da plataforma institucional.</p>
                                        <button
                                            class="mt-2 text-primary font-label-caps text-label-caps text-left">Atualmente:
                                            Ativado</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12 pt-8 border-t border-white/10 flex justify-end gap-4">
                            <button
                                class="px-8 py-3 rounded text-on-surface-variant font-label-caps text-label-caps hover:text-on-surface">Descartar
                                Alterações</button>
                            <button
                                class="px-8 py-3 rounded bg-primary text-on-primary font-label-caps text-label-caps font-bold">Sincronizar
                                Perfil</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <!-- Bottom Navigation (Mobile Only) -->
    <nav
        class="fixed bottom-0 left-0 right-0 h-16 bg-surface/80 backdrop-blur-xl border-t border-white/10 md:hidden flex justify-around items-center z-[100] px-4">
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="#">
            <span class="material-symbols-outlined" data-icon="grid_view">grid_view</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="#">
            <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-primary" href="#">
            <span class="material-symbols-outlined" data-icon="settings" data-weight="fill">settings</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="#">
            <span class="material-symbols-outlined" data-icon="chat_bubble">chat_bubble</span>
        </a>
        <div class="w-8 h-8 rounded-full overflow-hidden border border-white/20">
            <img alt="Mobile Profile" class="w-full h-full object-cover"
                data-alt="Small thumbnail profile picture of a young male student in a futuristic setting."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuByx29CnpMoH6pZzwiMtq8UBRw9Y-umEMrjr3s3ADilaBh6_ioomXb04IjHZU3O4w84S5hIPjcXq_GLJnyCFTYrG3bePGsDJ3QVGY4GLnSTUtnHivkEtsLinyAs_Eg1CAzYq3HxaycANrGi-Rq06EGZ3S4WhsLu83vFencDWqC3xs0gRA6Rw_jHQj10yvHGjb9gdCfXrGbMa3fM8TG_1xz8ezeaY0eP4Y9YuNOr_QpzqddbTMqO7lL3V9icOIQTv6JkTUXuM3FFquBa" />
        </div>
    </nav>
</body>

</html>