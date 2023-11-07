<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos Disponíveis</title>
</head>
<body>
    <h1>Produtos Disponíveis</h1>

    <?php
  
        $caminhoBanco = __DIR__ . '/banco.sqlite';
        $pdo = new PDO('sqlite:' . $caminhoBanco);
            

        $sql = "SELECT * FROM produtos";
        $stmt = $conexao->query($sql);

       
        if ($stmt->rowCount() > 0) {
            echo '<table>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Nome do Produto</th>';
            echo '<th>Preço</th>';
            echo '<th>Quantidade em Estoque</th>';
            echo '</tr>';

            
            while ($row = $stmt->fetch()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['nome'] . '</td>';
                echo '<td>R$' . $row['preco'] . '</td>';
                echo '<td>' . $row['quantidade_em_estoque'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'Nenhum produto disponível no momento.';
        }
    
    
    ?>
</body>
</html>