<?php
require_once 'conexao.php';

$sql = "SELECT * FROM alunos";
 //$stmt = $pdo->prepare($sql);
 //$stmt->execute();

// $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<table border="1">
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

</table>
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
                <span class="font-body-md text-body-md">Painel</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors"
                href="#">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <span class="font-body-md text-body-md">Alunos</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
                <span class="font-body-md text-body-md">Notas</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded text-on-surface-variant hover:bg-white/5 hover:text-on-surface transition-all"
                href="#">
                <span class="material-symbols-outlined" data-icon="assignment">assignment</span>
                <span class="font-body-md text-body-md">Tarefas</span>
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
        </div>
        <div class="flex items-center gap-4">
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