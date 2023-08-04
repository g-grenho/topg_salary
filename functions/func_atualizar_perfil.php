<?php
function atualizar_perfil($id_user, $dados_atualizados)
{
    include "connections/conn.php";

    // Verifica se o ID do usuário fornecido é válido
    if (!is_numeric($id_user)) {
        include "connections/decon.php";
        return false;
    }

    // Monta a consulta SQL usando Prepared Statements para atualizar o perfil
    $sql = "UPDATE users SET nome = ?, data_nascimento = ?, nif = ?, iban = ?, telm = ?, tel = ?, email = ?, morada = ?, localidade = ?, cp = ?, departamento = ? WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);

    // Verifica se o Prepared Statement foi criado com sucesso
    if ($stmt) {
        // Extrai os valores do array associativo com os dados atualizados
        $nome = $dados_atualizados['nome'];
        $data_nascimento = $dados_atualizados['data_nascimento'];
        $nif = $dados_atualizados['nif'];
        $iban = $dados_atualizados['iban'];
        $telm = $dados_atualizados['telm'];
        $tel = $dados_atualizados['tel'];
        $email = $dados_atualizados['email'];
        $morada = $dados_atualizados['morada'];
        $localidade = $dados_atualizados['localidade'];
        $cp = $dados_atualizados['cp'];
        $departamento = $dados_atualizados['departamento'];

        // Vincula os parâmetros do Prepared Statement
        mysqli_stmt_bind_param($stmt, "sssssssssssi", $nome, $data_nascimento, $nif, $iban, $telm, $tel, $email, $morada, $localidade, $cp, $departamento, $id_user);

        // Executa o Prepared Statement para atualizar o perfil
        $result = mysqli_stmt_execute($stmt);

        // Fecha o Prepared Statement
        mysqli_stmt_close($stmt);

        include "connections/decon.php";

        // Retorna true se a atualização foi bem-sucedida ou false em caso de erro
        return $result;
        
    }

    // Caso o Prepared Statement não seja criado com sucesso
    include "connections/decon.php";
    return false;
}
?>
