<?php include 'cabecalho.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Agendamento de Atendimento</title>
<style>
    body { font-family: Arial, sans-serif; background-color: #f2f2f2; }
    .container { width: 500px; margin: 50px auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);}
    h2 { text-align: center; }
    form input, form textarea, form select { width: 100%; padding: 10px; margin: 8px 0; border-radius: 4px; border: 1px solid #ccc;}
    form button { background-color: #004d99; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer;}
    form button:hover { background-color: #003366; }
</style>
</head>
<body>

<div class="container">
    <h2>Agendamento de Atendimento</h2>
    <form action="processa_agendamento.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Data do Atendimento:</label>
        <input type="date" name="data" required>

        <label>Horário:</label>
        <input type="time" name="horario" required>

        <label>Motivo do Atendimento:</label>
        <textarea name="motivo" rows="4" required></textarea>

        <button type="submit">Agendar</button>
    </form>
</div>

</body>
</html>

<?php include 'rodape.php'; ?>