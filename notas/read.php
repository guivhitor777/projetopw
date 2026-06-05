<?php

//require_once 'conexao.php';

//$sql = "SELECT
//            notas.id,
//          alunos.nome,
//         notas.disciplina,
//        notas.nota
//    FROM notas
//   INNER JOIN alunos
//   ON notas.aluno_id = alunos.id";

//$stmt = $pdo->prepare($sql);
//$stmt->execute();

//$notas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AETHER EDU | Notas</title>
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
                        "primary": "#adc6ff",
                        "tertiary-fixed": "#ffdbcc",
                        "surface-container-lowest": "#0b0e16",
                        "on-surface-variant": "#c1c6d7",
                        "on-secondary-container": "#b6b8c1",
                        "error-container": "#93000a",
                        "tertiary-fixed-dim": "#ffb595",
                        "outline": "#8b90a0",
                        "surface-container-high": "#272a32",
                        "surface-bright": "#363942",
                        "on-secondary-fixed": "#191c22",
                        "on-background": "#e0e2ed",
                        "surface-variant": "#31353d",
                        "background": "#10131b",
                        "surface-dim": "#10131b",
                        "primary-fixed": "#d8e2ff",
                        "secondary": "#c4c6cf",
                        "on-primary-fixed-variant": "#004493",
                        "on-secondary-fixed-variant": "#44474e",
                        "on-primary": "#002e69",
                        "error": "#ffb4ab",
                        "surface-container-low": "#181c23",
                        "on-tertiary-container": "#4c1a00",
                        "secondary-container": "#464950",
                        "on-error": "#690005",
                        "secondary-fixed-dim": "#c4c6cf",
                        "surface-container": "#1c2028",
                        "on-tertiary": "#571e00",
                        "outline-variant": "#414755",
                        "on-tertiary-fixed": "#351000",
                        "primary-fixed-dim": "#adc6ff",
                        "surface-tint": "#adc6ff",
                        "tertiary": "#ffb595",
                        "on-primary-container": "#00285c",
                        "primary-container": "#4b8eff",
                        "on-primary-fixed": "#001a41",
                        "secondary-fixed": "#e1e2eb",
                        "on-secondary": "#2e3037",
                        "tertiary-container": "#ef6719",
                        "on-surface": "#e0e2ed",
                        "on-error-container": "#ffdad6",
                        "surface-container-highest": "#31353d",
                        "inverse-surface": "#e0e2ed",
                        "inverse-primary": "#005bc1",
                        "surface": "#10131b",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "inverse-on-surface": "#2d3039"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "unit": "4px",
                        "sidebar-width": "280px",
                        "container-padding-mobile": "20px",
                        "container-padding-desktop": "40px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "label-caps": ["Space Grotesk"],
                        "headline-lg-mobile": ["Inter"],
                        "display-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-top-color: rgba(255, 255, 255, 0.15);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
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

<body
    class="bg-background text-on-background font-body-md overflow-x-hidden selection:bg-primary/30 selection:text-primary">
    <!-- SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-full w-sidebar-width bg-surface-container dark:bg-surface-container-lowest/80 backdrop-blur-xl border-r border-outline-variant/10 flex flex-col z-50">
        <div class="p-gutter flex items-center gap-3">
            <div class="w-10 h-10 bg-primary/20 rounded flex items-center justify-center border border-primary/30">
                <span class="material-symbols-outlined text-primary">auto_awesome</span>
            </div>
            <div>
                <h1 class="font-label-caps text-label-caps tracking-widest text-primary uppercase">AETHER EDU</h1>
                <p class="text-[10px] text-on-surface-variant font-medium tracking-tight">Academic OS</p>
            </div>
        </div>
        <nav class="flex-1 mt-6 px-4 space-y-2">
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant font-medium hover:bg-surface-variant/20 hover:text-primary transition-colors group"
                href="#">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">dashboard</span>
                <span class="font-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant font-medium hover:bg-surface-variant/20 hover:text-primary transition-colors group"
                href="#">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">calendar_month</span>
                <span class="font-body-md">Calendar</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-primary font-bold border-l-2 border-primary bg-primary/5 group"
                href="#">
                <span class="material-symbols-outlined scale-110">grade</span>
                <span class="font-body-md">Grades</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant font-medium hover:bg-surface-variant/20 hover:text-primary transition-colors group"
                href="#">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">assignment</span>
                <span class="font-body-md">Assignments</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant font-medium hover:bg-surface-variant/20 hover:text-primary transition-colors group"
                href="#">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">mail</span>
                <span class="font-body-md">Messages</span>
            </a>
        </nav>
        <div class="p-gutter border-t border-outline-variant/10">
            <a class="flex items-center gap-4 px-4 py-3 rounded-lg text-on-surface-variant font-medium hover:text-error transition-colors group"
                href="#">
                <span
                    class="material-symbols-outlined group-hover:translate-x-[-2px] transition-transform">logout</span>
                <span class="font-body-md">Sair</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Wrapper -->
    <main class="ml-sidebar-width min-h-screen">
        <!-- TopNavBar -->
        <header
            class="flex justify-between items-center h-16 px-container-padding-desktop bg-surface/40 dark:bg-surface-dim/40 backdrop-blur-2xl border-b border-outline-variant/10 sticky top-0 z-40">
            <div class="flex items-center gap-6">
                <div class="relative group">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none group-focus-within:text-primary transition-colors">search</span>
                    <input
                        class="bg-surface-container-low border border-outline-variant/20 rounded-lg pl-10 pr-4 py-2 text-sm w-64 focus:outline-none focus:border-primary/50 transition-all placeholder:text-outline-variant"
                        placeholder="Procurar nota..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button
                    class="w-10 h-10 flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors hover:bg-surface-variant/20 rounded-full">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <button
                    class="w-10 h-10 flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors hover:bg-surface-variant/20 rounded-full">
                    <span class="material-symbols-outlined">settings</span>
                </button>
                <div class="w-px h-6 bg-outline-variant/20 mx-2"></div>
                <div class="flex items-center gap-3 pl-2">
                    <div class="text-right">
                        <p class="text-xs font-bold text-on-surface leading-none">Prof. Ricardo</p>
                        <p class="text-[10px] text-on-surface-variant uppercase tracking-wider mt-1">Matemática</p>
                    </div>
                    <img alt="User Profile" class="w-8 h-8 rounded-lg border border-outline-variant/30"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-P1DvUqoS8UsWf3Zl5YL8b7JdcPhRD8pkrWf5Oeju3EPvlXCvASq5vbZ6c4YU0BlQBACNQvbPaH_65eOL73Ku3pyB3ntIkcTgOfgxICkhJkGF0JLHm36IVOSHxcczAkHclJowcya2plSVzXvaE9C9k_3I5yrkHEhdGz0B7CHlbLmKLyUv5ojMruSY2IVD39sAt3igrCg8dZR38lAIR-qStujppMbYmftjCW5SJL_zqFMrDrETGrrDvQZwDnf-NJLOVPuDZiEM4H5g" />
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <div class="p-container-padding-desktop max-w-[1440px] mx-auto">
            <!-- Content Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Notas</h2>
                    <p class="text-on-surface-variant mt-2 font-body-md">Gerencie as notas dos alunos.</p>
                </div>
                <a class="bg-primary text-on-primary px-6 py-3 rounded-lg font-bold flex items-center gap-2 hover:opacity-90 active:scale-95 transition-all shadow-lg shadow-primary/20"
                    href="create.php">
                    <span class="material-symbols-outlined">add</span>
                    <span>Adicionar Nota</span>
                </a>
            </div>
            <!-- Table Section -->
            <div class="glass-card rounded-xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-outline-variant/20 bg-white/5">
                                <th class="px-6 py-5 font-label-caps text-label-caps text-on-surface-variant">ID</th>
                                <th class="px-6 py-5 font-label-caps text-label-caps text-on-surface-variant">ALUNO</th>
                                <th class="px-6 py-5 font-label-caps text-label-caps text-on-surface-variant">DISCIPLINA
                                </th>
                                <th class="px-6 py-5 font-label-caps text-label-caps text-on-surface-variant">NOTA</th>
                                <th
                                    class="px-6 py-5 font-label-caps text-label-caps text-on-surface-variant text-right">
                                    AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant/10">
                            <!-- Placeholder Data Rows -->
                            <!-- In production, this would be: while($row = $result->fetch_assoc()) { ... } -->
                            <!-- Mock Row 1 -->
                            <tr class="hover:bg-white/[0.02] transition-colors group">
                                <td class="px-6 py-5 text-on-surface-variant font-label-caps">#1</td>
                                <td class="px-6 py-5 font-medium text-on-surface">João Silva</td>
                                <td class="px-6 py-5 text-on-surface-variant">Matemática</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="px-3 py-1 rounded bg-primary-container/20 text-primary border border-primary/20 font-bold text-sm">9.5</span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a class="w-9 h-9 flex items-center justify-center rounded bg-surface-variant/30 text-on-surface-variant hover:text-primary hover:bg-primary/10 transition-all"
                                            href="update.php?id=1" title="Editar">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </a>
                                        <button
                                            class="w-9 h-9 flex items-center justify-center rounded bg-surface-variant/30 text-on-surface-variant hover:text-error hover:bg-error/10 transition-all"
                                            onclick="confirmDelete(1)" title="Excluir">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Mock Row 2 -->
                            <tr class="hover:bg-white/[0.02] transition-colors group">
                                <td class="px-6 py-5 text-on-surface-variant font-label-caps">#2</td>
                                <td class="px-6 py-5 font-medium text-on-surface">Maria Souza</td>
                                <td class="px-6 py-5 text-on-surface-variant">Português</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="px-3 py-1 rounded bg-primary-container/20 text-primary border border-primary/20 font-bold text-sm">8.7</span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a class="w-9 h-9 flex items-center justify-center rounded bg-surface-variant/30 text-on-surface-variant hover:text-primary hover:bg-primary/10 transition-all"
                                            href="update.php?id=2">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </a>
                                        <button
                                            class="w-9 h-9 flex items-center justify-center rounded bg-surface-variant/30 text-on-surface-variant hover:text-error hover:bg-error/10 transition-all"
                                            onclick="confirmDelete(2)">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Mock Row 3 -->
                            <tr class="hover:bg-white/[0.02] transition-colors group">
                                <td class="px-6 py-5 text-on-surface-variant font-label-caps">#3</td>
                                <td class="px-6 py-5 font-medium text-on-surface">Carlos Oliveira</td>
                                <td class="px-6 py-5 text-on-surface-variant">História</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="px-3 py-1 rounded bg-primary-container/20 text-primary border border-primary/20 font-bold text-sm">7.8</span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a class="w-9 h-9 flex items-center justify-center rounded bg-surface-variant/30 text-on-surface-variant hover:text-primary hover:bg-primary/10 transition-all"
                                            href="update.php?id=3">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </a>
                                        <button
                                            class="w-9 h-9 flex items-center justify-center rounded bg-surface-variant/30 text-on-surface-variant hover:text-error hover:bg-error/10 transition-all"
                                            onclick="confirmDelete(3)">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Mock Row 4 -->
                            <tr class="hover:bg-white/[0.02] transition-colors group">
                                <td class="px-6 py-5 text-on-surface-variant font-label-caps">#4</td>
                                <td class="px-6 py-5 font-medium text-on-surface">Ana Pereira</td>
                                <td class="px-6 py-5 text-on-surface-variant">Inglês</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="px-3 py-1 rounded bg-primary-container/20 text-primary border border-primary/20 font-bold text-sm">9.2</span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a class="w-9 h-9 flex items-center justify-center rounded bg-surface-variant/30 text-on-surface-variant hover:text-primary hover:bg-primary/10 transition-all"
                                            href="update.php?id=4">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </a>
                                        <button
                                            class="w-9 h-9 flex items-center justify-center rounded bg-surface-variant/30 text-on-surface-variant hover:text-error hover:bg-error/10 transition-all"
                                            onclick="confirmDelete(4)">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Mock Row 5 -->
                            <tr class="hover:bg-white/[0.02] transition-colors group">
                                <td class="px-6 py-5 text-on-surface-variant font-label-caps">#5</td>
                                <td class="px-6 py-5 font-medium text-on-surface">Lucas Costa</td>
                                <td class="px-6 py-5 text-on-surface-variant">Física</td>
                                <td class="px-6 py-5">
                                    <span
                                        class="px-3 py-1 rounded bg-primary-container/20 text-primary border border-primary/20 font-bold text-sm">8.1</span>
                                </td>
                                <td class="px-6 py-5 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a class="w-9 h-9 flex items-center justify-center rounded bg-surface-variant/30 text-on-surface-variant hover:text-primary hover:bg-primary/10 transition-all"
                                            href="update.php?id=5">
                                            <span class="material-symbols-outlined text-[18px]">edit</span>
                                        </a>
                                        <button
                                            class="w-9 h-9 flex items-center justify-center rounded bg-surface-variant/30 text-on-surface-variant hover:text-error hover:bg-error/10 transition-all"
                                            onclick="confirmDelete(5)">
                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Pagination / Status Footer -->
                <div class="px-6 py-4 bg-white/5 border-t border-outline-variant/10 flex items-center justify-between">
                    <p class="text-[12px] text-on-surface-variant font-medium">Mostrando <span
                            class="text-on-surface">5</span> de <span class="text-on-surface">32</span> lançamentos</p>
                    <div class="flex items-center gap-1">
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded text-on-surface-variant hover:bg-surface-variant/30 transition-colors">
                            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                        </button>
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded bg-primary text-on-primary font-bold text-xs">1</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded text-on-surface-variant hover:bg-surface-variant/30 transition-colors font-bold text-xs">2</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded text-on-surface-variant hover:bg-surface-variant/30 transition-colors font-bold text-xs">3</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded text-on-surface-variant hover:bg-surface-variant/30 transition-colors">
                            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        function confirmDelete(id) {
            if (confirm("Tem certeza que deseja excluir esta nota? Esta ação não pode ser desfeita.")) {
                window.location.href = `delete.php?id=${id}`;
            }
        }

        // Atmospheric hover effect for rows
        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('mousemove', (e) => {
                const rect = row.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                row.style.setProperty('--mouse-x', `${x}px`);
                row.style.setProperty('--mouse-y', `${y}px`);
            });
        });
    </script>
</body>

</html>