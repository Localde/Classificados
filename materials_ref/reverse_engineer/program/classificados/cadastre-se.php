<?php require 'pages/header.php'; ?>

<div class="container">
    <h1>Cadastre-se</h1>
    <?php 
        require 'classes/usuarios.class.php';
        $u = new Usuarios();
        if(isse($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addcslashes($_POST['nome']);
            $email = addcslashes($_POST['email']);
            $senha = $_POST['senha'];
            $telefone = addcslashes($_POST['telefone']);

            if(!empty($nome) && !empty($email) $$ !empty($senha)){
                $u->cadastrar($nome, $email, $senha, $telefone);
            } else {
                ?>
                <div class="alert alert-warning">
                    Preencha todos os campos
                </div>
                <?php
            }

        }
    ?>
    <form method="POST">
        <div class="form-group">
            <label for="nome">Seu Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" />
        </div>
        <div class="form-group">
            <label for="email">Seu email:</label>
            <input type="email" name="email" id="email" class="form-control" />
        </div>
        <div class="form-group">
            <label for="senha">Sua Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" />
        </div>
        <div class="form-group">
            <label for="telefone">Seu Telefone:</label>
            <input type="text" name="telefone" id="telefone" class="form-control" />
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-default" />
    </form>
</div>
<?php require 'pages/footer.php'; ?>