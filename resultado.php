<?php
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$data_nascimento = $_POST['data_nascimento'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

// Verifica se todos os campos estão preenchidos
$erro = false;
if (empty($nome) || empty($email) || empty($data_nascimento) || empty($telefone) || empty($mensagem)) {
    $erro = true;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

  <div class="container mt-5">
    <h2 class="mb-4">Resultado da Consulta</h2>

    <?php if ($erro): ?>
      <div class="alert alert-danger">Por favor, preencha todos os campos.</div>
      <a href="formulario.html" class="btn btn-secondary mt-2">Voltar</a>
    <?php else: ?>
      <form class="p-4 border rounded bg-white shadow-sm">
        <div class="mb-3">
          <label class="form-label">Nome completo</label>
          <input type="text" class="form-control" value="<?= htmlspecialchars($nome) ?>" readonly>
        </div>

        <div class="mb-3">
          <label class="form-label">E-mail</label>
          <input type="email" class="form-control" value="<?= htmlspecialchars($email) ?>" readonly>
        </div>

        <div class="mb-3">
          <label class="form-label">Data de Nascimento</label>
          <input type="date" class="form-control" value="<?= htmlspecialchars($data_nascimento) ?>" readonly>
        </div>

        <div class="mb-3">
          <label class="form-label">Telefone</label>
          <input type="tel" class="form-control" value="<?= htmlspecialchars($telefone) ?>" readonly>
        </div>

        <div class="mb-3">
          <label class="form-label">Mensagem</label>
          <textarea class="form-control" rows="4" readonly><?= htmlspecialchars($mensagem) ?></textarea>
        </div>
      </form>
    <?php endif; ?>
  </div>

</body>
</html>
