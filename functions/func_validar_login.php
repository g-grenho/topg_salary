<?php
function validar_login($email, $password)
{
    include "connections/conn.php";

    // Limpa e protege os valores de entrada para evitar ataques de injeção de SQL
    $email = mysqli_real_escape_string($conn, $email);

    // Consulta para obter o registro correspondente ao email fornecido
    $sql = "SELECT * FROM login WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    // Verifica se a consulta foi bem-sucedida
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        // Verifica se a senha fornecida corresponde à senha armazenada no banco de dados
        if ($password == $hashedPassword) {
            // Autenticação bem-sucedida, define as variáveis de sessão e redireciona
            $_SESSION["log_type"] = $row["type_user"];
            $_SESSION["login"] = $email;
            $id_user = $row["id_user"];
            
            $_SESSION['id_user'] = $id_user;
            
            echo $id_user;

            switch ($_SESSION["log_type"]) {
                case '1':
                    header('Location: ?main=admin');
                    break;
                case '0':
                    header('Location: ?main=utilizador');
                    break;
                default:
                    break;
            }

            include "connections/decon.php";
            
        }
    }

    // Autenticação falhou ou email não encontrado
    
    include "connections/decon.php";
    
}
?>