<?php
require_once 'conexao.php';

$sql = "SELECT * FROM alunos";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

/*<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>

    <?php foreach ($alunos as $aluno): ?>
        <tr>
            <td><?= $aluno['id'] ?></td>
            <td><?= htmlspecialchars($aluno['nome']) ?></td>
            <td><?= htmlspecialchars($aluno['email']) ?></td>
        </tr>
  <?php endforeach; ?>

<!DOCTYPE html>

<html class="dark" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AETHER EDU | Gestão de Alunos</title>
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
                        "surface-variant": "#31353d",
                        "secondary-fixed": "#e1e2eb",
                        "outline": "#8b90a0",
                        "secondary-container": "#464950",
                        "surface-container": "#1c2028",
                        "on-secondary": "#2e3037",
                        "inverse-surface": "#e0e2ed",
                        "on-primary": "#002e69",
                        "on-tertiary-fixed": "#351000",
                        "on-primary-container": "#00285c",
                        "tertiary-fixed-dim": "#ffb595",
                        "surface-bright": "#363942",
                        "on-tertiary-container": "#4c1a00",
                        "on-surface": "#e0e2ed",
                        "on-primary-fixed": "#001a41",
                        "on-error-container": "#ffdad6",
                        "surface-container-highest": "#31353d",
                        "on-tertiary": "#571e00",
                        "on-secondary-fixed-variant": "#44474e",
                        "primary-fixed-dim": "#adc6ff",
                        "surface-container-low": "#181c23",
                        "primary-fixed": "#d8e2ff",
                        "on-tertiary-fixed-variant": "#7c2e00",
                        "surface-dim": "#10131b",
                        "surface": "#10131b",
                        "tertiary-fixed": "#ffdbcc",
                        "secondary": "#c4c6cf",
                        "primary": "#adc6ff",
                        "primary-container": "#4b8eff",
                        "on-secondary-fixed": "#191c22",
                        "error": "#ffb4ab",
                        "on-primary-fixed-variant": "#004493",
                        "tertiary-container": "#ef6719",
                        "inverse-primary": "#005bc1",
                        "on-secondary-container": "#b6b8c1",
                        "surface-container-high": "#272a32",
                        "secondary-fixed-dim": "#c4c6cf",
                        "on-error": "#690005",
                        "on-background": "#e0e2ed",
                        "outline-variant": "#414755",
                        "on-surface-variant": "#c1c6d7",
                        "error-container": "#93000a",
                        "surface-container-lowest": "#0b0e16",
                        "inverse-on-surface": "#2d3039",
                        "surface-tint": "#adc6ff",
                        "background": "#10131b",
                        "tertiary": "#ffb595"
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
                        "gutter": "24px",
                        "container-padding-desktop": "40px"
                    },
                    "fontFamily": {
                        "label-caps": ["Space Grotesk"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-caps": ["12px", { "lineHeight": "1.0", "letterSpacing": "0.1em", "fontWeight": "500" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .active-nav-border {
            box-shadow: inset 2px 0 0 0 #adc6ff;
        }

        ::-webkit-scrollbar {
            width: 4px;
        }

        ::-webkit-scrollbar-track {
            background: #10131b;
        }

        ::-webkit-scrollbar-thumb {
            background: #31353d;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md selection:bg-primary/30">
    <!-- Sidebar Navigation -->
    <aside
        class="fixed left-0 top-0 h-screen w-sidebar-width bg-surface-container-low/40 backdrop-blur-2xl border-r border-white/10 flex flex-col py-8 px-4 gap-y-2 z-50">
        <div class="px-4 mb-10">
            <h1 class="font-headline-md text-headline-md font-bold text-on-surface tracking-tighter">AETHER OS</h1>
            <p class="font-label-caps text-label-caps text-on-surface-variant opacity-60">Academic Command</p>
        </div>
        <nav class="flex-1 space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="grid_view">grid_view</span>
                <span class="font-label-caps text-label-caps">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
                <span class="font-label-caps text-label-caps">Calendar</span>
            </a>
            <!-- Active State: Alunos logic mapping to Academic Records or similar, here mimicking Sidebar JSON structure -->
            <a class="flex items-center gap-3 px-4 py-3 text-primary border-l-2 border-primary bg-primary/5 transition-all duration-300 translate-x-1"
                href="#">
                <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
                <span class="font-label-caps text-label-caps">Grades</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="assignment">assignment</span>
                <span class="font-label-caps text-label-caps">Assignments</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="chat_bubble">chat_bubble</span>
                <span class="font-label-caps text-label-caps">Messages</span>
            </a>
        </nav>
        <div class="mt-auto pt-4 space-y-1 border-t border-white/5">
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-label-caps text-label-caps">Settings</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all duration-300"
                href="#">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="font-label-caps text-label-caps">Logout</span>
            </a>
        </div>
    </aside>
    <!-- Top Navigation Bar -->
    <header
        class="fixed top-0 left-sidebar-width right-0 h-16 bg-surface/60 backdrop-blur-xl border-b border-white/10 flex justify-between items-center px-gutter z-40">
        <div class="flex items-center gap-4">
            <div class="bg-surface-container-highest px-3 py-1.5 flex items-center gap-2 border border-white/5">
                <span class="material-symbols-outlined text-on-surface-variant text-[18px]"
                    data-icon="search">search</span>
                <input
                    class="bg-transparent border-none text-body-md font-body-md focus:ring-0 text-on-surface placeholder:text-on-surface-variant/50 w-64"
                    placeholder="Localizar registro..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-6">
            <div class="flex items-center gap-4">
                <button class="text-on-surface-variant hover:text-primary transition-colors duration-200">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <button class="text-on-surface-variant hover:text-primary transition-colors duration-200">
                    <span class="material-symbols-outlined" data-icon="help">help</span>
                </button>
            </div>
            <div class="h-8 w-[1px] bg-white/10"></div>
            <div class="flex items-center gap-3">
                <span class="font-label-caps text-label-caps text-primary tracking-widest">AETHER EDU</span>
                <img alt="User profile"
                    class="w-8 h-8 rounded-none border border-primary/30 object-cover grayscale hover:grayscale-0 transition-all cursor-pointer"
                    data-alt="A professional close-up portrait of a male educator in a modern minimalist setting. He is wearing a dark navy blazer over a charcoal turtleneck. The lighting is crisp and cool, casting soft shadows that highlight the textures of his clothing. Behind him, a softly blurred glass office partition reflects deep blue tones and tech-inspired ambient light, maintaining a sophisticated academic command center aesthetic."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDcV_evx9wcQhhEUiuJbZyWFySkSxMu7A64-ZARPfkaJwY_hRJ53P8drCC3M4PDa_eUVtZT2c6h_O3w_BNZTnIpAzeH_MQOmi-_nfnYZYCcvUu81oiZ9tXFGkmnDwacXK2O31-XLT6TItZtmnqEi4kwhF65-1OjIQ7VQBwYupgFTxzRClU7JWMG60cMW9zOOFFdHsEHm4XOwoLKAP2Xnq02HtfQuzGSAFgj76TI9JfEYLI_kDUmJ-g6z8meL6Fr8xyj3_jzCq50eL5d" />
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-sidebar-width pt-16 min-h-screen">
        <div class="max-w-[1440px] mx-auto p-gutter lg:p-container-padding-desktop">
            <!-- Page Header Area -->
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface tracking-tight mb-2">Alunos</h2>
                    <p class="text-on-surface-variant font-body-md opacity-70">Gerencie os alunos cadastrados no
                        sistema.</p>
                </div>
                <a class="bg-primary text-on-primary px-6 py-3 font-label-caps text-label-caps flex items-center gap-2 hover:opacity-90 active:scale-[0.98] transition-all"
                    href="create.php">
                    <span class="material-symbols-outlined text-[18px]" data-icon="person_add">person_add</span>
                    ADICIONAR ALUNO
                </a>
            </div>
            <!-- Management Table (Registro de Notas style) -->
            <div class="glass-panel overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-white/10 bg-white/5">
                            <th class="py-4 px-6 font-label-caps text-label-caps text-on-surface-variant">ID</th>
                            <th class="py-4 px-6 font-label-caps text-label-caps text-on-surface-variant">NOME</th>
                            <th class="py-4 px-6 font-label-caps text-label-caps text-on-surface-variant">EMAIL</th>
                            <th class="py-4 px-6 font-label-caps text-label-caps text-on-surface-variant text-right">
                                AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/5">
                        <!-- Sample Row 1 -->
                        <tr class="hover:bg-white/[0.02] transition-colors group">
                            <td class="py-4 px-6 font-label-caps text-label-caps text-primary/80">#1</td>
                            <td class="py-4 px-6 font-headline-md text-body-md font-semibold text-on-surface">João Silva
                            </td>
                            <td class="py-4 px-6 font-body-md text-on-surface-variant">joao@email.com</td>
                            <td class="py-4 px-6 text-right">
                                <div class="flex justify-end gap-2">
                                    <a class="w-10 h-10 flex items-center justify-center border border-white/10 hover:border-primary/50 hover:bg-primary/5 text-on-surface-variant hover:text-primary transition-all active:scale-90"
                                        href="update.php?id=1" title="Editar">
                                        <span class="material-symbols-outlined text-[18px]" data-icon="edit">edit</span>
                                    </a>
                                    <button
                                        class="w-10 h-10 flex items-center justify-center border border-white/10 hover:border-error/50 hover:bg-error/5 text-on-surface-variant hover:text-error transition-all active:scale-90"
                                        onclick="confirmDelete(1)" title="Excluir">
                                        <span class="material-symbols-outlined text-[18px]"
                                            data-icon="delete">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Sample Row 2 -->
                        <tr class="hover:bg-white/[0.02] transition-colors group">
                            <td class="py-4 px-6 font-label-caps text-label-caps text-primary/80">#2</td>
                            <td class="py-4 px-6 font-headline-md text-body-md font-semibold text-on-surface">Maria
                                Souza</td>
                            <td class="py-4 px-6 font-body-md text-on-surface-variant">maria@email.com</td>
                            <td class="py-4 px-6 text-right">
                                <div class="flex justify-end gap-2">
                                    <a class="w-10 h-10 flex items-center justify-center border border-white/10 hover:border-primary/50 hover:bg-primary/5 text-on-surface-variant hover:text-primary transition-all active:scale-90"
                                        href="update.php?id=2" title="Editar">
                                        <span class="material-symbols-outlined text-[18px]" data-icon="edit">edit</span>
                                    </a>
                                    <button
                                        class="w-10 h-10 flex items-center justify-center border border-white/10 hover:border-error/50 hover:bg-error/5 text-on-surface-variant hover:text-error transition-all active:scale-90"
                                        onclick="confirmDelete(2)" title="Excluir">
                                        <span class="material-symbols-outlined text-[18px]"
                                            data-icon="delete">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Dynamic Row Template (For Reference in PHP loop) -->
                        <!-- 
                        <tr class="hover:bg-white/[0.02] transition-colors group">
                            <td class="py-4 px-6 font-label-caps text-label-caps text-primary/80">#<?php echo $row['id']; ?></td>
                            <td class="py-4 px-6 font-headline-md text-body-md font-semibold text-on-surface"><?php echo $row['nome']; ?></td>
                            <td class="py-4 px-6 font-body-md text-on-surface-variant"><?php echo $row['email']; ?></td>
                            <td class="py-4 px-6 text-right">
                                <div class="flex justify-end gap-2">
                                    <a href="update.php?id=<?php echo $row['id']; ?>" class="w-10 h-10 flex items-center justify-center border border-white/10 hover:border-primary/50 hover:bg-primary/5 text-on-surface-variant hover:text-primary transition-all active:scale-90">
                                        <span class="material-symbols-outlined text-[18px]" data-icon="edit">edit</span>
                                    </a>
                                    <button onclick="confirmDelete(<?php echo $row['id']; ?>)" class="w-10 h-10 flex items-center justify-center border border-white/10 hover:border-error/50 hover:bg-error/5 text-on-surface-variant hover:text-error transition-all active:scale-90">
                                        <span class="material-symbols-outlined text-[18px]" data-icon="delete">delete</span>
                                    </button>
                                </div>
                            </td>
                        </tr> 
                        -->
                    </tbody>
                </table>
                <!-- Footer / Pagination -->
                <div class="px-6 py-4 border-t border-white/5 flex items-center justify-between bg-white/[0.02]">
                    <span class="text-on-surface-variant font-label-caps text-[10px] uppercase tracking-widest">Exibindo
                        2 de 2 registros</span>
                    <div class="flex items-center gap-1">
                        <button
                            class="w-8 h-8 flex items-center justify-center text-on-surface-variant opacity-30 cursor-not-allowed">
                            <span class="material-symbols-outlined text-[20px]"
                                data-icon="chevron_left">chevron_left</span>
                        </button>
                        <button
                            class="w-8 h-8 flex items-center justify-center text-primary font-bold bg-primary/10 border border-primary/20">1</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center text-on-surface-variant opacity-30 cursor-not-allowed">
                            <span class="material-symbols-outlined text-[20px]"
                                data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Task focused info footer -->
            <div class="mt-8 flex justify-between items-center px-4">
                <div class="flex items-center gap-2 text-primary/40">
                    <span class="material-symbols-outlined text-[16px]" data-icon="security">security</span>
                    <span class="font-label-caps text-[10px] tracking-[0.2em] uppercase">Security Level:
                        Administrative</span>
                </div>
                <div class="text-right">
                    <span
                        class="font-label-caps text-[10px] text-on-surface-variant/40 tracking-[0.2em] uppercase">AETHER
                        SYSTEM CLOUD REV. 4.0.2</span>
                </div>
            </div>
        </div>
    </main>
    <script>
        function confirmDelete(id) {
            if (confirm("Você tem certeza que deseja excluir este aluno? Esta ação não pode ser desfeita.")) {
                window.location.href = "delete.php?id=" + id;
            }
        }

        // Add subtle hover glow to glass panels
        document.querySelectorAll('.glass-panel').forEach(panel => {
            panel.addEventListener('mousemove', e => {
                const rect = panel.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                panel.style.setProperty('--mouse-x', `${x}px`);
                panel.style.setProperty('--mouse-y', `${y}px`);
            });
        });
    </script>
</body>

</html>