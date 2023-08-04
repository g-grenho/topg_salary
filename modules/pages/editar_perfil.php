<?php

$id_user = $_SESSION['id_user'];

$dados_user = obter_dados($id_user);

echo $id_user;
echo '<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <h1 class="text-center">EDITAR PERFIL</h1>
            <form method="post">
        <div class="form-group row">
            <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="inputNome" value="'.$dados_user['nome'].'" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputDataNasc" class="col-sm-2 col-form-label">Data Nasc</label>
            <div class="col-sm-10">
                <input type="date" readonly class="form-control-plaintext" id="inputDataNasc" value="'.$dados_user['data_nascimento'].'" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputNif" class="col-sm-2 col-form-label">Nif</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="inputNif" value="'.$dados_user['nif'].'" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputIban" class="col-sm-2 col-form-label">Iban</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputIban" value="'.$dados_user['iban'].'" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTelm" class="col-sm-2 col-form-label">Telm</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="inputTelm" value="'.$dados_user['telm'].'" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputTel" class="col-sm-2 col-form-label">Tel</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="inputTel" value="'.$dados_user['tel'].'" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="'.$dados_user['email'].'" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputMorada" class="col-sm-2 col-form-label">Morada</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputMorada" value="'.$dados_user['morada'].'" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputLocalidade" class="col-sm-2 col-form-label">Localidade</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputLocalidade" value="'.$dados_user['localidade'].'" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputCp" class="col-sm-2 col-form-label">Cp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputCp" value="'.$dados_user['cp'].'" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="staticDepartamento" class="col-sm-2 col-form-label">Departamento</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticDepartamento" value="'.$dados_user['departamento'].'" required>
            </div>
        </div>
        
        <div class="container mt-5">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
        </div>
    </form>
        </div>
    </div>
</div>';

?>