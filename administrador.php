<?php include 'cabecalho.php'; ?>

<h2>Área do Administrador</h2>
<p>Bem-vindo, administrador! Aqui você pode gerenciar as informações do site.</p>

<h3>Cadastrar Novo Administrador</h3>
<form method="POST" action="">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" required><br><br>

    <input type="submit" name="cadastrar" value="Cadastrar">
</form>

<?php
if (isset($_POST['cadastrar'])) {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=sistema', 'root', 'password:1234');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Verifica se o email já está cadastrado
        $stmt = $pdo->prepare("SELECT * FROM administradores WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            echo "<p style='color:red;'>Este email já está cadastrado.</p>";
        } else {
            // Insere novo administrador
            $stmt = $pdo->prepare("INSERT INTO administradores (email, senha) VALUES (?, ?)");
            $stmt->execute([$email, $senha]);
            echo "<p style='color:green;'>Administrador cadastrado com sucesso!</p>";
        }
    } catch (PDOException $e) {
        echo "<p style='color:red;'>Erro ao cadastrar: " . $e->getMessage() . "</p>";
    }
}

?>
<a href="inicial.php" style="background-color: blue; color: white; padding: 10px 20px; text-decoration: none; display: inline-block; border-radius: 5px;">
  Início
</a>
<?php include 'rodape.php'; ?>
