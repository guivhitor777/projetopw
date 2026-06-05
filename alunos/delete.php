<?php
require_once 'conexao.php';

$id = $_GET['id'] ?? 0;

if ($id > 0) {

    $sql = "DELETE FROM alunos WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: listar.php?msg=excluido");
        exit;
    } else {
        echo "Erro ao excluir aluno.";
    }

} else {
    echo "ID inválido.";
}
?>


<!DOCTYPE html>

<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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
                        "primary-fixed": "#d8e2ff",
                        "on-primary-container": "#00285c",
                        "surface-container": "#1c2028",
                        "on-tertiary-container": "#4c1a00",
                        "on-error-container": "#ffdad6",
                        "surface-dim": "#10131b",
                        "inverse-primary": "#005bc1",
                        "surface-container-highest": "#31353d",
                        "on-secondary-fixed": "#191c22",
                        "secondary-fixed-dim": "#c4c6cf",
                        "surface-container-high": "#272a32",
                        "on-secondary": "#2e3037",
                        "tertiary-fixed-dim": "#ffb595",
                        "primary-container": "#4b8eff",
                        "inverse-on-surface": "#2d3039",
                        "surface": "#10131b",
                        "primary-fixed-dim": "#adc6ff",
                        "secondary-container": "#464950",
                        "error-container": "#93000a",
                        "surface-container-lowest": "#0b0e16",
                        "outline-variant": "#414755",
                        "surface-bright": "#363942",
                        "background": "#10131b",
                        "on-tertiary": "#571e00",
                        "on-primary": "#002e69",
                        "secondary": "#c4c6cf",
                        "error": "#ffb4ab",
                        "tertiary-fixed": "#ffdbcc",
                        "surface-tint": "#adc6ff",
                        "on-primary-fixed": "#001a41",
                        "outline": "#8b90a0",
                        "on-secondary-container": "#b6b8c1",
                        "on-primary-fixed-variant": "#004493",
                        "on-tertiary-fixed": "#351000",
                        "inverse-surface": "#e0e2ed",
                        "on-background": "#e0e2ed",
                        "on-surface": "#e0e2ed",
                        "on-error": "#690005",
                        "tertiary-container": "#ef6719",
                        "tertiary": "#ffb595",
                        "on-surface-variant": "#c1c6d7",
                        "on-secondary-fixed-variant": "#44474e",
                        "surface-variant": "#31353d",
                        "surface-container-low": "#181c23",
                        "primary": "#adc6ff",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "secondary-fixed": "#e1e2eb"
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
                        "sidebar-width": "280px",
                        "container-padding-desktop": "40px",
                        "unit": "4px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .modal-overlay {
            background: rgba(11, 14, 20, 0.85);
            backdrop-filter: blur(8px);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen font-body-md overflow-hidden">
    <!-- SideNavBar Shell -->
    <aside
        class="w-[280px] h-full fixed left-0 top-0 bg-surface/40 backdrop-blur-xl border-r border-white/10 flex flex-col h-full py-gutter shadow-2xl z-40">
        <div class="px-6 mb-12">
            <h1 class="font-display-lg text-display-lg tracking-tighter text-primary">AETHER EDU</h1>
            <p class="font-label-caps text-label-caps text-on-surface-variant opacity-60">Academic Command Center</p>
        </div>
        <nav class="flex-1 px-4 space-y-2">
            <!-- Active logic: Assume student management is under Dashboard or an implied sub-category -->
            <a class="flex items-center gap-4 px-4 py-3 rounded transition-all duration-300 text-on-surface-variant hover:bg-white/5 hover:text-primary active:scale-[0.98]"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-label-caps text-label-caps uppercase">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded transition-all duration-300 text-primary border-l-2 border-primary bg-primary/10 active:scale-[0.98]"
                href="#">
                <span class="material-symbols-outlined" data-icon="group">group</span>
                <span class="font-label-caps text-label-caps uppercase">Alunos</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded transition-all duration-300 text-on-surface-variant hover:bg-white/5 hover:text-primary active:scale-[0.98]"
                href="#">
                <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
                <span class="font-label-caps text-label-caps uppercase">Calendar</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded transition-all duration-300 text-on-surface-variant hover:bg-white/5 hover:text-primary active:scale-[0.98]"
                href="#">
                <span class="material-symbols-outlined" data-icon="grade">grade</span>
                <span class="font-label-caps text-label-caps uppercase">Grades</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded transition-all duration-300 text-on-surface-variant hover:bg-white/5 hover:text-primary active:scale-[0.98]"
                href="#">
                <span class="material-symbols-outlined" data-icon="assignment">assignment</span>
                <span class="font-label-caps text-label-caps uppercase">Assignments</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded transition-all duration-300 text-on-surface-variant hover:bg-white/5 hover:text-primary active:scale-[0.98]"
                href="#">
                <span class="material-symbols-outlined" data-icon="mail">mail</span>
                <span class="font-label-caps text-label-caps uppercase">Messages</span>
            </a>
        </nav>
        <div class="px-4 mt-auto">
            <button
                class="w-full py-4 bg-primary text-on-primary font-label-caps text-label-caps uppercase tracking-widest hover:opacity-90 transition-opacity active:scale-[0.98]">
                New Research
            </button>
        </div>
    </aside>
    <!-- TopNavBar Shell -->
    <header
        class="h-20 fixed top-0 right-0 left-[280px] z-30 bg-surface/40 backdrop-blur-xl border-b border-white/10 flex justify-between items-center px-container-desktop w-full shadow-sm">
        <div class="flex items-center gap-6">
            <div class="relative focus-within:ring-1 focus-within:ring-primary rounded-lg overflow-hidden">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl"
                    data-icon="search">search</span>
                <input
                    class="bg-surface-container-lowest border-none pl-12 pr-4 py-2 w-80 text-sm focus:ring-0 text-on-surface"
                    placeholder="Global Command Search..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-6">
            <button class="text-on-surface-variant hover:text-primary-fixed-dim transition-colors">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <button class="text-on-surface-variant hover:text-primary-fixed-dim transition-colors">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
            </button>
            <div class="h-10 w-10 bg-primary-container rounded-full overflow-hidden border border-white/10">
                <img alt="User Profile Avatar" class="w-full h-full object-cover"
                    data-alt="A professional headshot of a high-level academic administrator for an educational platform. The person has a focused expression, wearing modern minimal glasses. The background is a soft-focus office with blue and black tech accents, maintaining the sleek, futuristic command center aesthetic of the UI."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxOc5Iu4kafwifWfXbEiOkM3EL1l4aotc9RIMoXg-nK57o757HN8p9ATl1sukHPxe-vAKe9tEu8bP1ntWNK-3ZOo099LpR8TkQFPEtAOncDxMyjiASBVF83hPi5niaJ9wm4ea5_l40_d_R3j3in8UOSe8aS70OWZl56k0NurqyhyWHtbHGwn8ayyaUkiplO7fiCTLSMbpRsHIgnNb2mrQHzLEm8FWp7V8Sm5m3ggdILuKQiXBLN_KTKzsNvUeehn3iuhgJseB2Ql2v" />
            </div>
        </div>
    </header>
    <!-- Main Content Canvas (Background Activity) -->
    <main class="pl-[280px] pt-20 h-screen w-full relative">
        <div class="p-gutter grid grid-cols-12 gap-6 opacity-30">
            <!-- Mock Background Content -->
            <div class="col-span-12 glass-card rounded-lg p-8 h-40 flex items-end">
                <div
                    class="h-full w-full border border-dashed border-white/20 flex items-center justify-center font-label-caps text-on-surface-variant">
                    Listagem de Alunos / Filtros Ativos</div>
            </div>
            <div class="col-span-4 glass-card rounded-lg h-60"></div>
            <div class="col-span-4 glass-card rounded-lg h-60"></div>
            <div class="col-span-4 glass-card rounded-lg h-60"></div>
        </div>
        <!-- Confirmation Modal Overlay -->
        <div class="fixed inset-0 z-50 flex items-center justify-center p-6 modal-overlay">
            <div
                class="glass-card w-full max-w-lg rounded-lg shadow-2xl p-10 flex flex-col items-center animate-in fade-in zoom-in duration-300">
                <!-- Circular Red Icon -->
                <div
                    class="w-20 h-20 rounded-full bg-error-container/20 border border-error/30 flex items-center justify-center mb-8">
                    <span class="material-symbols-outlined text-error text-5xl" data-icon="warning">warning</span>
                </div>
                <!-- Modal Title -->
                <h2 class="font-headline-lg text-headline-lg text-white mb-4">Excluir Aluno</h2>
                <!-- Warning Text -->
                <p class="font-body-md text-on-surface-variant text-center mb-8 max-w-sm">
                    Tem certeza que deseja excluir este aluno? Esta ação não poderá ser desfeita e todos os registros
                    acadêmicos serão perdidos.
                </p>
                <!-- Student Info Card -->
                <div
                    class="w-full bg-surface-container-lowest/50 border border-white/5 rounded p-6 mb-10 flex items-center gap-5">
                    <div class="w-12 h-12 rounded bg-surface-variant flex items-center justify-center overflow-hidden">
                        <img alt="Student Thumbnail"
                            data-alt="A small profile thumbnail of a male student named João Silva. The photo is a clean, modern studio portrait with a neutral background, lit with cool tones that align with the electric blue and dark slate color palette of the AETHER EDU command center system."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCH_VvQhQtbD8N2Ieq8zdj7z5lNln-juZv3K1ruAldMjrCVn9fGrQsDcMLmEZy2l_Vm0F-8Np0FD1BBTMRmF_NYzTTRnTasydhNipZ8cTmLcYBtpCnKlIkulggv3cYUZ0vGZoWpoEw6QFsr6ENm1dkZSeBtLSTIPVzRuadrbqKklX6LQZuvWOnNog7QCpVxwiZAAk4kN0zfUlOO2BCUmN62esy3vU61dS7vCKIAxQakG1jeS7p8KoekPfGv1fV6CFlo6Z-5-OA1-DGO" />
                    </div>
                    <div class="flex flex-col">
                        <span class="font-headline-md text-headline-md text-primary">João Silva</span>
                        <span
                            class="font-label-caps text-label-caps text-on-surface-variant opacity-60">joao@email.com</span>
                    </div>
                </div>
                <!-- Actions -->
                <div class="flex gap-4 w-full">
                    <button
                        class="flex-1 py-4 border border-outline-variant text-on-surface font-label-caps text-label-caps uppercase tracking-widest hover:bg-white/5 transition-all duration-300 active:scale-[0.98]">
                        Cancelar
                    </button>
                    <button
                        class="flex-1 py-4 bg-error text-on-error font-label-caps text-label-caps uppercase tracking-widest hover:opacity-90 transition-all duration-300 active:scale-[0.98]">
                        Excluir Aluno
                    </button>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Micro-interaction for buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mouseenter', () => {
                const icon = button.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.fontVariationSettings = "'FILL' 1, 'wght' 400";
                }
            });
            button.addEventListener('mouseleave', () => {
                const icon = button.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.fontVariationSettings = "'FILL' 0, 'wght' 400";
                }
            });
        });
    </script>
</body>

</html>