<?php

require_once '../conexao.php';

$id = $_GET['id'] ?? 0;

$sql = "DELETE FROM tarefas WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
header("Location: listar_tarefas.php");
exit;
}
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
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .modal-overlay {
            background: rgba(11, 14, 22, 0.85);
            backdrop-filter: blur(8px);
        }

        .glow-red {
            box-shadow: 0 0 20px rgba(239, 68, 68, 0.3);
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-highest": "#31353d",
                        "on-background": "#e0e2ed",
                        "inverse-surface": "#e0e2ed",
                        "primary-fixed-dim": "#adc6ff",
                        "on-tertiary": "#571e00",
                        "on-surface": "#e0e2ed",
                        "surface-container-lowest": "#0b0e16",
                        "surface-variant": "#31353d",
                        "error": "#ffb4ab",
                        "on-secondary": "#2e3037",
                        "on-secondary-container": "#b6b8c1",
                        "surface-container": "#1c2028",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "on-surface-variant": "#c1c6d7",
                        "surface-dim": "#10131b",
                        "surface-container-high": "#272a32",
                        "surface-bright": "#363942",
                        "on-primary-fixed-variant": "#004493",
                        "surface-container-low": "#181c23",
                        "on-primary": "#002e69",
                        "secondary-container": "#464950",
                        "primary": "#adc6ff",
                        "inverse-primary": "#005bc1",
                        "tertiary-container": "#ef6719",
                        "outline": "#8b90a0",
                        "tertiary-fixed": "#ffdbcc",
                        "on-primary-container": "#00285c",
                        "on-secondary-fixed-variant": "#44474e",
                        "error-container": "#93000a",
                        "surface-tint": "#adc6ff",
                        "secondary-fixed-dim": "#c4c6cf",
                        "secondary-fixed": "#e1e2eb",
                        "secondary": "#c4c6cf",
                        "primary-container": "#4b8eff",
                        "on-tertiary-container": "#4c1a00",
                        "on-primary-fixed": "#001a41",
                        "outline-variant": "#414755",
                        "on-secondary-fixed": "#191c22",
                        "inverse-on-surface": "#2d3039",
                        "background": "#10131b",
                        "on-error": "#690005",
                        "tertiary": "#ffb595",
                        "on-error-container": "#ffdad6",
                        "on-tertiary-fixed": "#351000",
                        "tertiary-fixed-dim": "#ffb595",
                        "surface": "#10131b",
                        "primary-fixed": "#d8e2ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sidebar-width": "280px",
                        "gutter": "24px",
                        "unit": "4px",
                        "container-padding-mobile": "20px",
                        "container-padding-desktop": "40px"
                    },
                    "fontFamily": {
                        "label-caps": ["Space Grotesk"],
                        "body-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "display-lg": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background text-on-background min-h-screen overflow-hidden">
    <!-- BACKGROUND CONTENT (DIMMED) -->
    <div class="flex h-screen pointer-events-none opacity-40 select-none">
        <!-- SideNavBar -->
        <aside
            class="fixed left-0 top-0 h-screen w-sidebar-width z-50 border-r border-white/10 bg-surface-container-low/60 backdrop-blur-2xl flex flex-col h-full py-8 overflow-y-auto">
            <div class="px-6 mb-12">
                <h1 class="font-display-lg text-display-lg font-bold text-primary dark:text-primary tracking-tight">
                    AETHER EDU</h1>
                <p class="font-label-caps text-label-caps text-on-surface-variant mt-2">Command Center</p>
            </div>
            <nav class="flex-1 space-y-1">
                <div
                    class="text-on-surface-variant hover:text-on-surface px-6 py-3 transition-colors flex items-center gap-4">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="font-body-md text-body-md">Dashboard</span>
                </div>
                <div
                    class="text-on-surface-variant hover:text-on-surface px-6 py-3 transition-colors flex items-center gap-4">
                    <span class="material-symbols-outlined">calendar_today</span>
                    <span class="font-body-md text-body-md">Calendar</span>
                </div>
                <div
                    class="text-on-surface-variant hover:text-on-surface px-6 py-3 transition-colors flex items-center gap-4">
                    <span class="material-symbols-outlined">assessment</span>
                    <span class="font-body-md text-body-md">Grades</span>
                </div>
                <!-- Active Tab: Assignments -->
                <div
                    class="text-primary font-bold border-l-2 border-primary bg-primary/10 px-6 py-3 flex items-center gap-4">
                    <span class="material-symbols-outlined">assignment</span>
                    <span class="font-body-md text-body-md">Assignments</span>
                </div>
                <div
                    class="text-on-surface-variant hover:text-on-surface px-6 py-3 transition-colors flex items-center gap-4">
                    <span class="material-symbols-outlined">forum</span>
                    <span class="font-body-md text-body-md">Messages</span>
                </div>
            </nav>
            <div class="mt-auto px-6 space-y-4">
                <button
                    class="w-full bg-primary text-on-primary py-3 rounded-lg font-body-md flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">add</span>
                    New Research
                </button>
                <div class="flex items-center gap-4 text-on-surface-variant px-2">
                    <span class="material-symbols-outlined">settings</span>
                    <span class="font-label-caps text-label-caps">Settings</span>
                </div>
            </div>
        </aside>
        <!-- TopNavBar -->
        <header
            class="fixed top-0 right-0 left-sidebar-width h-16 z-40 border-b border-white/10 bg-surface/40 backdrop-blur-xl flex justify-between items-center px-gutter h-full w-full">
            <div class="flex items-center gap-4">
                <span class="material-symbols-outlined text-on-surface-variant">search</span>
                <span class="text-on-surface-variant font-body-md">Search assets...</span>
            </div>
            <div class="flex items-center gap-6">
                <span class="material-symbols-outlined text-on-surface-variant">notifications_active</span>
                <span class="material-symbols-outlined text-on-surface-variant">grid_view</span>
                <div class="w-8 h-8 rounded-full bg-surface-container-highest border border-white/10 overflow-hidden">
                    <img alt="User Academic Profile" class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBcQtlZ-Cgh32CicSqAPdnI_oJDalDS8rgE385N3IuTyQix6wlK5y3xTcFZn0uIbX9qe5hsHX7HKuTJAL4pG4AL8nnpSmQU1zq-RIKUiRQYdJOv_2U-32XbcnUtbPs3sWgqC-KoYD4901nMEqXrszj5hdxkPKPny4pnbBuMPyBGKMHR2w3LySGx9dWiYGgWrJEZYvN27GbJRWw4qOqUeaHaEeB_gW7QbHdAyktUZbpPYWSPPiZWWGhgCKdc6p4RTRI5E7aljiiMnTdA" />
                </div>
            </div>
        </header>
        <!-- Placeholder Main Content -->
        <main class="ml-sidebar-width pt-24 px-gutter w-full overflow-hidden">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 glass-card h-40 rounded-xl"></div>
                <div class="col-span-4 glass-card h-80 rounded-xl"></div>
                <div class="col-span-8 glass-card h-80 rounded-xl"></div>
            </div>
        </main>
    </div>
    <!-- CONFIRMATION MODAL OVERLAY -->
    <div class="fixed inset-0 z-[100] flex items-center justify-center modal-overlay p-4">
        <!-- Centralized Modal -->
        <div
            class="max-w-md w-full glass-card rounded-2xl overflow-hidden shadow-2xl transform transition-all animate-in fade-in zoom-in duration-300">
            <!-- Header Icon Section -->
            <div class="pt-10 pb-6 flex flex-col items-center">
                <div
                    class="w-16 h-16 rounded-full bg-error-container/20 border border-error/30 flex items-center justify-center mb-6 relative">
                    <div class="absolute inset-0 bg-error/10 blur-xl rounded-full"></div>
                    <span class="material-symbols-outlined text-error text-[32px]">warning</span>
                </div>
                <h2 class="font-headline-lg text-headline-lg text-on-surface tracking-tight px-8 text-center">Excluir
                    Tarefa</h2>
            </div>
            <!-- Message Body -->
            <div class="px-8 pb-6 text-center">
                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                    Tem certeza que deseja excluir esta tarefa? Esta ação não poderá ser desfeita e removerá todos os
                    dados associados do sistema.
                </p>
            </div>
            <!-- Context Card (The Assignment Details) -->
            <div class="px-8 mb-8">
                <div class="bg-surface-container-lowest/80 border border-white/5 rounded-xl p-5 flex flex-col gap-3">
                    <div class="flex justify-between items-center">
                        <span class="font-label-caps text-label-caps text-on-surface-variant uppercase">Título</span>
                        <span class="font-body-md text-body-md text-primary font-medium">Trabalho de Matemática</span>
                    </div>
                    <div class="h-px bg-white/5 w-full"></div>
                    <div class="flex justify-between items-center">
                        <span class="font-label-caps text-label-caps text-on-surface-variant uppercase">Prazo</span>
                        <span class="font-body-md text-body-md text-on-surface">25/06/2026</span>
                    </div>
                </div>
            </div>
            <!-- Actions -->
            <div class="px-8 pb-10 flex gap-4">
                <button
                    class="flex-1 px-6 py-4 rounded-xl border border-outline-variant font-label-caps text-label-caps text-on-surface hover:bg-white/5 transition-all active:scale-95">
                    CANCELAR
                </button>
                <button
                    class="flex-1 px-6 py-4 rounded-xl bg-error text-on-error font-label-caps text-label-caps font-bold glow-red hover:brightness-110 transition-all active:scale-95">
                    EXCLUIR TAREFA
                </button>
            </div>
        </div>
    </div>
    <!-- Atmospheric Glow Effects -->
    <div
        class="fixed top-[-10%] right-[-10%] w-[50%] h-[50%] bg-primary/10 blur-[120px] rounded-full pointer-events-none z-0">
    </div>
    <div
        class="fixed bottom-[-10%] left-[-10%] w-[40%] h-[40%] bg-tertiary-container/5 blur-[100px] rounded-full pointer-events-none z-0">
    </div>
    <script>
        // Micro-interaction for buttons
        document.querySelectorAll('button').forEach(btn => {
            btn.addEventListener('mouseenter', () => {
                const icon = btn.querySelector('.material-symbols-outlined');
                if (icon) icon.style.transform = 'scale(1.1)';
            });
            btn.addEventListener('mouseleave', () => {
                const icon = btn.querySelector('.material-symbols-outlined');
                if (icon) icon.style.transform = 'scale(1)';
            });
        });
    </script>
</body>

</html>