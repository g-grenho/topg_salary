<?php
function obter_dados($id_user)
{
    include "connections/conn.php";

    
    // Consulta para obter os dados do usuário correspondente ao id_user fornecido
    $sql = "SELECT * FROM users WHERE id = $id_user";
    $result = mysqli_query($conn, $sql);

    // Verifica se a consulta foi bem-sucedida e se o usuário existe
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    // O usuário não foi encontrado ou a consulta falhou
    include "connections/decon.php";
    return []; // Retorna um array vazio caso o usuário não seja encontrado
}
?>
