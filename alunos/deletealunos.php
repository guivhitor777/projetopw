<!DOCTYPE html>

<html class="dark" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.05);
        }

        .danger-glow {
            box-shadow: 0 0 20px rgba(239, 68, 68, 0.2);
        }

        .neon-text-red {
            text-shadow: 0 0 8px rgba(255, 180, 171, 0.6);
        }

        @keyframes pulse-red {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .animate-pulse-red {
            animation: pulse-red 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed": "#191c22",
                        "surface-container-low": "#181c23",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "on-surface": "#e0e2ed",
                        "on-primary-container": "#00285c",
                        "primary-container": "#4b8eff",
                        "surface-container-highest": "#31353d",
                        "surface": "#10131b",
                        "secondary-fixed-dim": "#c4c6cf",
                        "error-container": "#93000a",
                        "tertiary-container": "#ef6719",
                        "on-secondary": "#2e3037",
                        "on-error-container": "#ffdad6",
                        "on-tertiary": "#571e00",
                        "on-surface-variant": "#c1c6d7",
                        "on-secondary-fixed-variant": "#44474e",
                        "inverse-primary": "#005bc1",
                        "tertiary": "#ffb595",
                        "error": "#ffb4ab",
                        "on-tertiary-fixed": "#351000",
                        "primary": "#adc6ff",
                        "on-secondary-container": "#b6b8c1",
                        "surface-container-lowest": "#0b0e16",
                        "surface-container-high": "#272a32",
                        "secondary-container": "#464950",
                        "surface-container": "#1c2028",
                        "on-primary-fixed": "#001a41",
                        "on-primary": "#002e69",
                        "inverse-on-surface": "#2d3039",
                        "surface-bright": "#363942",
                        "on-background": "#e0e2ed",
                        "tertiary-fixed": "#ffdbcc",
                        "outline-variant": "#414755",
                        "on-primary-fixed-variant": "#004493",
                        "secondary-fixed": "#e1e2eb",
                        "secondary": "#c4c6cf",
                        "tertiary-fixed-dim": "#ffb595",
                        "surface-variant": "#31353d",
                        "surface-dim": "#10131b",
                        "primary-fixed-dim": "#adc6ff",
                        "primary-fixed": "#d8e2ff",
                        "on-error": "#690005",
                        "on-tertiary-container": "#4c1a00",
                        "inverse-surface": "#e0e2ed",
                        "surface-tint": "#adc6ff",
                        "background": "#10131b",
                        "outline": "#8b90a0"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-padding-mobile": "20px",
                        "gutter": "24px",
                        "unit": "4px",
                        "sidebar-width": "280px",
                        "container-padding-desktop": "40px"
                    },
                    "fontFamily": {
                        "display-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "headline-lg-mobile": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-surface text-on-surface font-body-md overflow-hidden">
    <!-- Background Atmospheric Effect -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden -z-10">
        <div class="absolute top-[-10%] right-[-10%] w-[500px] h-[500px] bg-error/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[400px] h-[400px] bg-primary/5 rounded-full blur-[100px]">
        </div>
    </div>
    <!-- SideNavBar (Suppressed for focused task, but kept as context anchor) -->
    <!-- Content starts here -->
    <div class="flex flex-col items-center justify-center min-h-screen px-gutter">
        <!-- Modal Container -->
        <div class="glass-card w-full max-w-xl rounded-xl p-8 md:p-12 relative overflow-hidden danger-glow">
            <!-- Security Status Bar -->
            <div
                class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-error to-transparent opacity-50">
            </div>
            <div class="flex flex-col items-center text-center">
                <!-- Critical Icon -->
                <div class="mb-8 p-6 rounded-full bg-error-container/20 border border-error/30 animate-pulse-red">
                    <span class="material-symbols-outlined text-error text-[64px] neon-text-red"
                        data-icon="report">report</span>
                </div>
                <!-- Header Typography -->
                <h1 class="font-headline-lg text-headline-lg text-on-surface mb-4 tracking-tight">
                    Confirmar Exclusão de Conta
                </h1>
                <div
                    class="flex items-center gap-2 mb-8 py-2 px-4 rounded-full bg-error-container/30 border border-error/20">
                    <span class="material-symbols-outlined text-error text-sm" data-icon="security"
                        style="font-variation-settings: 'FILL' 1;">security</span>
                    <span class="font-label-caps text-label-caps text-error">Ação Irreversível — Nível de Segurança:
                        Crítico</span>
                </div>
                <!-- Warning Content -->
                <div class="space-y-6 mb-10 text-on-surface-variant">
                    <p class="font-body-lg text-body-lg">
                        Você está prestes a encerrar sua jornada no <span class="text-primary font-bold">AETHER
                            OS</span>. Esta ação removerá permanentemente todos os seus dados de nossos servidores
                        seguros.
                    </p>
                    <!-- Bento-style Data List -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left">
                        <div class="glass-card p-4 rounded-lg bg-surface-container/50">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-error"
                                    data-icon="analytics">analytics</span>
                                <h3 class="font-label-caps text-label-caps text-on-surface">Histórico Acadêmico</h3>
                            </div>
                            <p class="text-xs opacity-70">Notas, créditos e progresso curricular serão eliminados.</p>
                        </div>
                        <div class="glass-card p-4 rounded-lg bg-surface-container/50">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-error"
                                    data-icon="folder_shared">folder_shared</span>
                                <h3 class="font-label-caps text-label-caps text-on-surface">Arquivos &amp; Projetos</h3>
                            </div>
                            <p class="text-xs opacity-70">Todos os uploads e submissões serão deletados.</p>
                        </div>
                        <div class="glass-card p-4 rounded-lg bg-surface-container/50 md:col-span-2">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-error"
                                    data-icon="key_visualizer">key_visualizer</span>
                                <h3 class="font-label-caps text-label-caps text-on-surface">Identidade Digital</h3>
                            </div>
                            <p class="text-xs opacity-70">Seu perfil, badges e acessos biométricos serão revogados
                                imediatamente.</p>
                        </div>
                    </div>
                </div>
                <!-- Action Buttons -->
                <div class="flex flex-col md:flex-row-reverse gap-4 w-full">
                    <!-- Danger Action -->
                    <button
                        class="flex-1 bg-error-container text-on-error-container hover:bg-error transition-all duration-300 font-label-caps text-label-caps py-4 rounded-lg flex items-center justify-center gap-2 active:scale-95 group">
                        Confirmar Exclusão
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform"
                            data-icon="delete_forever">delete_forever</span>
                    </button>
                    <!-- Cancel Action -->
                    <button
                        class="flex-1 border border-outline/30 hover:bg-white/5 text-on-surface transition-all duration-300 font-label-caps text-label-caps py-4 rounded-lg active:scale-95"
                        onclick="window.history.back()">
                        Manter Conta
                    </button>
                </div>
                <p class="mt-8 text-xs text-on-surface-variant/40 italic">
                    Ao confirmar, você aceita que a recuperação destes dados não é possível via suporte técnico.
                </p>
            </div>
        </div>
        <!-- System Image Background Decor -->
        <div class="mt-12 opacity-30 grayscale hover:grayscale-0 transition-all duration-700 max-w-sm hidden md:block">
            <img alt="Security confirmation" class="w-full h-24 object-cover rounded-xl border border-white/5"
                data-alt="A macro close-up of a high-tech obsidian keyboard with a single glowing red emergency key in a dark, futuristic laboratory setting. The lighting is moody and cinematic, with deep shadows and sharp electric blue highlights reflecting off glass surfaces. The style is ultra-modern and professional, evoking a sense of high-stakes digital security and critical system commands. The overall color palette is dominated by deep blacks and cool grays, contrasted by a vibrant neon red light source."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsOgr9DLiV_iKxpe4RmdVFXv2atkVS_urYSHpP1FXqNMA1bS9-GLEe0_4ibzJqR2iuMwdCMyQ2mfGTWcM3gbGAtlhsghIViDBdEOGBwBV1xYB4fEJPlDysyZyjKSh2ux2NTS0PmSC3TNkCF2OWio3JpbU0Ten4Bt00STEJp1Q-uaPFknhLm3IN_NwiDS8q57fIypsL9raXHvndNAvX0kabG1-d8E_lepWVfIZETewACtFybPlm0ynjrBUZft18YYlprKXkll3oIZZJ" />
        </div>
    </div>
    <!-- Micro-interactions Script -->
    <script>
        // Atmospheric tilt effect for the card
        const card = document.querySelector('.glass-card');
        document.addEventListener('mousemove', (e) => {
            const xAxis = (window.innerWidth / 2 - e.pageX) / 50;
            const yAxis = (window.innerHeight / 2 - e.pageY) / 50;
            card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
        });

        // Soften entrance animation
        window.addEventListener('load', () => {
            card.style.opacity = '0';
            card.style.transform = 'scale(0.95) translateY(20px)';
            card.style.transition = 'all 0.8s cubic-bezier(0.16, 1, 0.3, 1)';

            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'scale(1) translateY(0)';
            }, 100);
        });
    </script>
</body>

</html>