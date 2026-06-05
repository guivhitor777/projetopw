<?php

//require_once 'conexao.php';

//$id = $_GET['id'] ?? 0;

//$sql = "DELETE FROM notas WHERE id = :id";

//$stmt = $pdo->prepare($sql);
//$stmt->bindParam(':id', $id);

//if ($stmt->execute()) {
 //   header("Location: listar_notas.php");
 //   exit;
//}
?>

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
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed": "#d8e2ff",
                        "surface-tint": "#adc6ff",
                        "on-secondary-fixed": "#191c22",
                        "tertiary-fixed-dim": "#ffb595",
                        "on-error": "#690005",
                        "inverse-primary": "#005bc1",
                        "surface-container": "#1c2028",
                        "primary-container": "#4b8eff",
                        "outline": "#8b90a0",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "surface-container-highest": "#31353d",
                        "primary": "#adc6ff",
                        "surface-container-low": "#181c23",
                        "on-primary-fixed": "#001a41",
                        "inverse-surface": "#e0e2ed",
                        "surface": "#10131b",
                        "on-secondary-container": "#b6b8c1",
                        "on-secondary": "#2e3037",
                        "on-primary-fixed-variant": "#004493",
                        "surface-variant": "#31353d",
                        "primary-fixed-dim": "#adc6ff",
                        "on-secondary-fixed-variant": "#44474e",
                        "error-container": "#93000a",
                        "surface-dim": "#10131b",
                        "on-error-container": "#ffdad6",
                        "on-surface-variant": "#c1c6d7",
                        "error": "#ffb4ab",
                        "surface-bright": "#363942",
                        "secondary-fixed-dim": "#c4c6cf",
                        "on-surface": "#e0e2ed",
                        "on-primary": "#002e69",
                        "secondary-fixed": "#e1e2eb",
                        "secondary-container": "#464950",
                        "background": "#10131b",
                        "tertiary-container": "#ef6719",
                        "on-tertiary-container": "#4c1a00",
                        "on-background": "#e0e2ed",
                        "inverse-on-surface": "#2d3039",
                        "surface-container-high": "#272a32",
                        "surface-container-lowest": "#0b0e16",
                        "tertiary": "#ffb595",
                        "outline-variant": "#414755",
                        "tertiary-fixed": "#ffdbcc",
                        "on-tertiary": "#571e00",
                        "on-primary-container": "#00285c",
                        "on-tertiary-fixed": "#351000",
                        "secondary": "#c4c6cf"
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
                        "gutter": "24px",
                        "container-padding-desktop": "40px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "headline-lg-mobile": ["Inter"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }]
                    }
                },
            },
        }
    </script>
    <style>
        .glass-card {
            background: rgba(24, 28, 35, 0.6);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        .data-card-inner {
            background: rgba(11, 14, 22, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .destructive-glow {
            box-shadow: 0 0 20px rgba(239, 103, 25, 0.2);
        }

        body {
            background-color: #10131b;
            color: #e0e2ed;
            overflow: hidden;
        }
    </style>
</head>

<body class="font-body-md text-body-md">
    <!-- Mocked Background Dashboard (Blurred) -->
    <div class="fixed inset-0 z-0 flex blur-md opacity-40 pointer-events-none scale-105">
        <!-- Sidebar Mock -->
        <aside
            class="w-sidebar-width h-screen bg-surface-container-low/40 border-r border-white/10 p-8 flex flex-col gap-y-2">
            <div class="font-headline-md text-headline-md font-bold text-on-surface tracking-tighter mb-12">AETHER OS
            </div>
            <div class="flex items-center gap-4 px-4 py-3 text-primary border-l-2 border-primary bg-primary/5">
                <span class="material-symbols-outlined">grid_view</span>
                <span class="font-label-caps text-label-caps uppercase">Dashboard</span>
            </div>
            <div class="flex items-center gap-4 px-4 py-3 text-on-surface-variant">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-label-caps text-label-caps uppercase">Grades</span>
            </div>
        </aside>
        <!-- Content Mock -->
        <main class="flex-1 p-gutter">
            <header class="h-16 flex justify-between items-center mb-12">
                <div class="font-label-caps text-label-caps tracking-widest text-primary uppercase">Academic Command
                </div>
                <div class="w-10 h-10 rounded-full bg-surface-container-highest"></div>
            </header>
            <div class="grid grid-cols-12 gap-gutter">
                <div class="col-span-8 h-64 glass-card rounded-xl"></div>
                <div class="col-span-4 h-64 glass-card rounded-xl"></div>
                <div class="col-span-12 h-96 glass-card rounded-xl"></div>
            </div>
        </main>
    </div>
    <!-- Modal Overlay -->
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-background/80 backdrop-blur-sm p-4">
        <!-- Confirmation Modal -->
        <div class="glass-card w-full max-w-[480px] rounded-xl overflow-hidden animate-in fade-in zoom-in duration-300">
            <div class="p-8 flex flex-col items-center text-center">
                <!-- Red circular alert icon -->
                <div
                    class="w-16 h-16 rounded-full bg-error-container flex items-center justify-center mb-6 ring-4 ring-error-container/20">
                    <span class="material-symbols-outlined text-error text-4xl"
                        style="font-variation-settings: 'FILL' 1;">warning</span>
                </div>
                <!-- Title & Subtext -->
                <h2 class="font-headline-md text-headline-md text-on-surface mb-2">Excluir Nota</h2>
                <p class="text-on-surface-variant font-body-md mb-8 max-w-[340px]">
                    Tem certeza que deseja excluir esta nota? Esta ação não poderá ser desfeita.
                </p>
                <!-- Data Card -->
                <div class="data-card-inner w-full rounded-lg p-6 mb-8 text-left flex items-center justify-between">
                    <div class="space-y-1">
                        <div class="flex flex-col">
                            <span
                                class="font-label-caps text-[10px] text-outline uppercase tracking-widest">Aluno</span>
                            <span class="text-on-surface font-medium">João Silva</span>
                        </div>
                        <div class="flex flex-col pt-2">
                            <span
                                class="font-label-caps text-[10px] text-outline uppercase tracking-widest">Disciplina</span>
                            <span class="text-on-surface font-medium">Matemática</span>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="font-label-caps text-[10px] text-outline uppercase tracking-widest">Nota</span>
                        <span class="text-primary font-bold text-4xl tracking-tighter">8.5</span>
                    </div>
                </div>
                <!-- Actions -->
                <div class="flex flex-col sm:flex-row gap-4 w-full">
                    <button
                        class="flex-1 h-12 rounded-lg border border-outline-variant text-on-surface font-label-caps uppercase tracking-wider hover:bg-white/5 transition-all active:scale-95">
                        Cancelar
                    </button>
                    <button
                        class="flex-1 h-12 rounded-lg bg-error-container text-on-error-container font-label-caps uppercase tracking-wider hover:brightness-110 destructive-glow transition-all active:scale-95">
                        Excluir Nota
                    </button>
                </div>
            </div>
            <!-- Subtle Light Leak Detail -->
            <div
                class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent">
            </div>
        </div>
    </div>
    <!-- Atmospheric Micro-interaction Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.querySelector('.glass-card');

            // Subtle parallax effect on mouse move
            window.addEventListener('mousemove', (e) => {
                const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
                const moveY = (e.clientY - window.innerHeight / 2) * 0.01;
                modal.style.transform = `translate(${moveX}px, ${moveY}px)`;
            });

            // Close logic placeholder
            const cancelBtn = document.querySelector('button:first-of-type');
            cancelBtn.addEventListener('click', () => {
                modal.classList.add('scale-95', 'opacity-0');
                setTimeout(() => {
                    alert('Action Cancelled');
                }, 300);
            });
        });
    </script>
</body>

</html>