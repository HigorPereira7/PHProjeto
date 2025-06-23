<?php include 'cabecalho.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Atendimentos Agendados</title>
<style>
    body { 
        font-family: Arial, sans-serif; 
        background-color: #f2f2f2; 
        margin: 0; 
        padding: 0;
    }
    h2 {
        text-align: center;
        margin-top: 20px;
    }
    table {
        border-collapse: collapse;
        width: 90%;
        margin: 20px auto;
        background-color: white;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }
    th {
        background-color: #004d99;
        color: white;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    a {
        color: #004d99;
        text-decoration: none;
        font-weight: bold;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<h2>Atendimentos Agendados</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Data</th>
        <th>Horário</th>
        <th>Motivo</th>
        <th>Data do Agendamento</th>
    </tr>


</table>

<div style="text-align:center; margin-bottom: 20px;">
    <a href="promotoria.php">Voltar para a Promotoria</a>
</div>

</body>
</html>

<?php include 'rodape.php'; ?>
