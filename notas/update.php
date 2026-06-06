<?php

require_once '../conexao.php';

$id = $_GET['id'];

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
        header("Location: read.php");
        exit();
    }
}

$sql = "SELECT * FROM notas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$nota = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sistema Escolar | Editar Nota</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Space+Grotesk:wght@500&amp;display=swap"
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
                        "on-primary": "#002e69",
                        "surface": "#10131b",
                        "on-surface": "#e0e2ed",
                        "on-surface-variant": "#c1c6d7",
                        "surface-container": "#1c2028",
                        "surface-container-lowest": "#0b0e16",
                        "primary-container": "#4b8eff",
                        "outline": "#8b90a0"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "sidebar-width": "280px",
                        "container-padding-desktop": "40px",
                        "unit": "4px"
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
            background-color: #0B0E14;
            color: #e0e2ed;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 1rem;
        }

        .active-nav {
            background: rgba(173, 198, 255, 0.1);
            border-left: 3px solid #adc6ff;
            color: #adc6ff;
        }
    </style>
    <!-- SIDEBAR -->
    <aside
        class="fixed left-0 top-0 h-screen w-sidebar-width bg-surface/40 backdrop-blur-xl border-r border-white/10 flex flex-col py-gutter px-4 z-50">

        <div class="mb-10 px-4">
            <h1 class="font-headline-lg text-headline-lg text-primary tracking-tighter">
                Aluno Modern
            </h1>
        </div>

        <nav class="flex flex-col flex-1">

            <div class="space-y-2">
                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-primary bg-primary/10 border-l-2 border-primary"
                    href="#">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span>Painel</span>
                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5"
                    href="../alunos/read.php">
                    <span class="material-symbols-outlined">school</span>
                    <span>Alunos</span>
                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5"
                    href="../notas/read.php">
                    <span class="material-symbols-outlined">grade</span>
                    <span>Notas</span>
                </a>

                <a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5"
                    href="../tarefas/read.php">
                    <span class="material-symbols-outlined">assignment</span>
                    <span>Tarefas</span>
                </a>
            </div>

            <!-- Sair sempre embaixo -->
            <a class="mt-auto flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-white/5"
                href="logout.php">
                <span class="material-symbols-outlined">logout</span>
                <span>Sair</span>
            </a>

        </nav>

    </aside>
    <!-- MAIN CONTENT -->
    <main class="ml-sidebar-width min-h-screen flex flex-col p-gutter">
        <div class="flex-1 flex flex-col items-center justify-center">
            <div class="w-full max-w-xl">
                <!-- Header Section -->
                <div class="mb-8 text-center">
                    <h2 class="text-3xl font-bold text-on-surface mb-2">Editar Nota</h2>
                    <p class="text-on-surface-variant/70">Atualize as informações acadêmicas do registro.</p>
                </div>
                <!-- Form Card -->
                <div class="glass-card p-8 shadow-2xl">
                    <form action="update.php?id=<?php echo $id; ?>" class="space-y-6" method="POST">

                        <!-- Hidden ID -->
                        <input type="hidden" name="id" value="<?php echo $nota['id']; ?>">

                        <!-- ID do Aluno -->
                        <div class="space-y-2">
                            <label for="id_aluno"
                                class="text-xs font-label-caps text-primary uppercase tracking-widest block">
                                ID do Aluno
                            </label>

                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-sm">
                                    fingerprint
                                </span>

                                <input type="number" name="id_aluno" value="<?= $nota['id_aluno'] ?>"
                                class="w-full bg-surface-container-lowest border border-white/10 rounded-lg py-3 pl-12
                                pr-4 text-on-surface focus:border-primary/50 focus:ring-1 focus:ring-primary/20
                                outline-none transition-all">
                            </div>
                        </div>

                        <!-- Disciplina -->
                        <div class="space-y-2">
                            <label for="disciplina"
                                class="text-xs font-label-caps text-primary uppercase tracking-widest block">
                                Disciplina
                            </label>

                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-sm">
                                    school
                                </span>

                                <input type="text" name="disciplina" value="<?= $nota['disciplina'] ?>"
                                class="w-full bg-surface-container-lowest border border-white/10 rounded-lg py-3 pl-12
                                pr-4 text-on-surface focus:border-primary/50 focus:ring-1 focus:ring-primary/20
                                outline-none transition-all">
                            </div>
                        </div>
                        <!-- Nota Field -->
                        <div class="space-y-2">
                            <label class="text-xs font-label-caps text-primary uppercase tracking-widest block"
                                for="nota">Nota</label>
                            <div class="relative">
                                <span
                                    class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50 text-sm">monitoring</span>
                                <input
                                    class="w-full bg-surface-container-lowest border border-white/10 rounded-lg py-3 pl-12 pr-4 text-on-surface focus:border-primary/50 focus:ring-1 focus:ring-primary/20 outline-none transition-all"
                                    type="number" step="0.01" name="nota" value="<?= $nota['nota'] ?>">
                            </div>
                        </div>
                        <!-- CTA Actions -->
                        <div class="pt-4 flex flex-col sm:flex-row gap-3">
                            <button
                                class="flex-1 bg-primary text-on-primary font-bold py-3 rounded-lg hover:bg-primary-container transition-all active:scale-[0.98] shadow-lg shadow-primary/10"
                                type="submit">
                                Salvar Alterações
                            </button>
                            <a class="flex-1 border border-white/10 text-on-surface font-medium py-3 rounded-lg hover:bg-white/5 transition-all text-center"
                                href="read.php">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
                <!-- Footer -->
                <footer
                    class="mt-12 text-center text-on-surface-variant/40 text-xs font-medium uppercase tracking-widest">
                    Sistema Escolar • Projeto PW
                </footer>
            </div>
        </div>
    </main>
    </body>

</html>