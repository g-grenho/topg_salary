<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <h1 class="text-center">Intranet - Processamento Salarial</h1>
                <h2 class="text-center">Login</h2>
                <form method="POST">
                    <div class="form-group">
                        <!-- Campo para inserção de usuário -->
                        <label for="username">Utilizador:</label>
                        <input type="text" name="nome" id="username" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <!-- Campo para inserção de senha -->
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <!-- Botão de envio do formulário -->
                    <button type="submit" name="login" class="btn btn-primary btn-block">Entrar</button>
                </form>
                
                <?php
                    if (isset($_POST["login"])) {
                        $nome = $_POST["nome"];
                        $password = $_POST["password"];
                        validar_login($nome, $password);
                    }

                    echo $_SESSION["log_type"];
                ?>

                
            </div>
        </div>
    </div>

</section>
