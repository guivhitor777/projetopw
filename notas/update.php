<?php
require_once '../auth.php';
require_once '../conexao.php';

$id = $_GET['id'] ?? 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_aluno = $_POST['id_aluno'];
    $disciplina = $_POST['disciplina'];
    $nota = $_POST['nota'];

    $sql = "UPDATE notas
            SET id_aluno = :id_aluno,
                disciplina = :disciplina,
                nota = :nota
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_aluno', $id_aluno);
    $stmt->bindParam(':disciplina', $disciplina);
    $stmt->bindParam(':nota', $nota);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: read.php?status=editado");
        exit();
    }
}

$sql = "SELECT * FROM notas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$nota = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$nota) {
    header("Location: read.php");
    exit;
}
?>

<!DOCTYPE html>
<html class="dark" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Aluno Modern | Editar Nota</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#adc6ff",
                        "on-primary": "#002e69",
                        "background": "#0b0e14",
                        "surface": "#0b0e14",
                        "on-surface": "#e0e2ed",
                        "on-surface-variant": "#c1c6d7",
                        "surface-container": "#1c2028",
                        "surface-container-lowest": "#0b0e16",
                        "primary-container": "#4b8eff",
                        "outline": "#8b90a0",
                        "error": "#ffb4ab"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "sidebar-width": "260px"
                    },
                    "fontFamily": {
                        "label-caps": ["Space Grotesk"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Inter"]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #0b0e14;
            color: #e0e2ed;
            font-family: 'Inter', sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 1rem;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
    </style>
</head>

<body class="min-h-screen">

    <aside
        class="fixed left-0 top-0 h-screen w-sidebar-width bg-surface/40 backdrop-blur-xl border-r border-white/10 flex flex-col py-gutter px-4 z-50">
        <div class="mb-10 px-4">
            <h1 class="text-3xl font-bold text-primary tracking-tighter">Aluno Modern</h1>
        </div>
        <nav class="flex flex-col flex-1">
            <div class="space-y-2">
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors"
                    href="../painel.php">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span>Painel</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors"
                    href="../alunos/read.php">
                    <span class="material-symbols-outlined">school</span>
                    <span>Alunos</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-primary bg-primary/10 border-l-2 border-primary transition-colors"
                    href="../notas/read.php">
                    <span class="material-symbols-outlined">grade</span>
                    <span>Notas</span>
                </a>
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 transition-colors"
                    href="../tarefas/read.php">
                    <span class="material-symbols-outlined">assignment</span>
                    <span>Tarefas</span>
                </a>
            </div>
            <a class="mt-auto flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5 hover:text-error transition-colors"
                href="../logout.php" onclick="return confirm('Tem certeza que deseja sair do sistema?');">
                <span class="material-symbols-outlined">logout</span>
                <span>Sair</span>
            </a>
        </nav>
    </aside>

    <header
        class="h-20 px-8 flex items-center justify-between border-b border-white/10 bg-surface/50 backdrop-blur-md sticky top-0 z-40 ml-sidebar-width">
        <div>
            <h2 class="text-xl font-bold text-on-surface">Editar Nota</h2>
            <p class="text-xs text-on-surface-variant">Atualize as informações da nota.</p>
        </div>
        <div class="flex items-center gap-3 pl-4 border-l border-white/10">
            <div class="text-right">
                <p class="text-[10px] text-primary uppercase tracking-widest">Nível Máx.</p>
                <p class="text-sm font-bold">Administrador</p>
            </div>
        </div>
    </header>

    <main class="ml-sidebar-width min-h-screen flex flex-col p-gutter">
        <div class="flex-1 flex flex-col items-center justify-center">
            <div class="w-full max-w-xl">

                <div class="mb-8 text-center">
                    <h2 class="text-3xl font-bold text-on-surface mb-2">Editar Nota</h2>
                    <p class="text-on-surface-variant/70">Atualize as informações acadêmicas do registro.</p>
                </div>

                <div class="glass-card p-8 shadow-2xl">
                    <form action="update.php?id=<?= $id ?>" class="space-y-6" method="POST">

                        <input type="hidden" name="id" value="<?= $nota['id'] ?>">

                        <div class="space-y-2">
                            <label class="text-xs font-label-caps text-primary uppercase tracking-widest block">ID do
                                Aluno</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-sm">fingerprint</span>
                                <input type="number" name="id_aluno" value="<?= $nota['id_aluno'] ?>"
                                    class="w-full bg-surface-container-lowest border border-white/10 rounded-lg py-3 pl-12 pr-4 text-on-surface focus:border-primary/50 focus:ring-1 focus:ring-primary/20 outline-none transition-all">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label
                                class="text-xs font-label-caps text-primary uppercase tracking-widest block">Disciplina</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-sm">school</span>
                                <input type="text" name="disciplina"
                                    value="<?= htmlspecialchars($nota['disciplina']) ?>"
                                    class="w-full bg-surface-container-lowest border border-white/10 rounded-lg py-3 pl-12 pr-4 text-on-surface focus:border-primary/50 focus:ring-1 focus:ring-primary/20 outline-none transition-all">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label
                                class="text-xs font-label-caps text-primary uppercase tracking-widest block">Nota</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-sm">monitoring</span>
                                <input type="number" step="0.01" name="nota" value="<?= $nota['nota'] ?>"
                                    class="w-full bg-surface-container-lowest border border-white/10 rounded-lg py-3 pl-12 pr-4 text-on-surface focus:border-primary/50 focus:ring-1 focus:ring-primary/20 outline-none transition-all">
                            </div>
                        </div>

                        <div class="pt-4 flex flex-col sm:flex-row gap-3">
                            <button type="submit"
                                class="flex-1 bg-primary text-on-primary font-bold py-3 rounded-lg hover:bg-primary-container transition-all active:scale-[0.98] shadow-lg shadow-primary/10">
                                Salvar Alterações
                            </button>
                            <a href="read.php"
                                class="flex-1 border border-white/10 text-on-surface font-medium py-3 rounded-lg hover:bg-white/5 transition-all text-center">
                                Cancelar
                            </a>
                        </div>

                    </form>
                </div>

            </div>
        </div>

        <footer class="fixed bottom-4 left-0 right-0 flex justify-center items-center gap-8 opacity-40 text-center">
            <div class="flex items-center gap-4">
                <div class="h-[1px] w-8 bg-white/30 hidden sm:block"></div>
                <span class="text-[10px] tracking-[0.3em] text-on-surface uppercase">Aluno Modern</span>
            </div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-[14px]">verified_user</span>
            </div>
        </footer>
    </main>

    <script>
        document.querySelector('form').addEventListener('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                icon: 'question',
                title: 'Salvar alterações?',
                text: 'Deseja atualizar os dados desta nota?',
                showCancelButton: true,
                confirmButtonText: 'Sim, salvar',
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#adc6ff',
                cancelButtonColor: '#414755',
                background: '#0b0e14',
                color: '#e0e2ed'
            }).then((result) => {
                if (result.isConfirmed) {
                    e.target.submit();
                }
            });
        });
    </script>

</body>

</html>