<?php
include("conexao.php");

$buscaCadastro  =   "SELECT * FROM tbclientes";
//Executa uym consulta no banco de dados
$queryCadastro  =   mysqli_query($mysqli, $buscaCadastro);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            $("#celular").mask("(99) 9.9999-9999");
        })
    </script>
</head>

<body>
    <h1 class="text-center">Cadastro de Clientes</h1>
    <br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Celular</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Obter uma linha da tabela do banco de dados
                while ($linha = mysqli_fetch_array(($queryCadastro))) {
                    $id         =   $linha['id'];
                    $nome       =   $linha['nome'];
                    $email      =   $linha['email'];
                    $celular    =   $linha['celular'];
                ?>
                    <tr>
                        <td scope="row"><?php echo $id; ?></td>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $celular; ?></td>
                        <td>
                        <form action="editar.php" method="POST">
                        <td>
                                <input type="text" class="form-control" name="id" value="<?php echo $id; ?>"hidden/>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success">Editar</button>
                            </td>
                        </form>
                        <form action="excluir.php" method="POST">
                            <td>
                                <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" hidden />
                            </td>
                            <td>
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </td>
                        </form>
                        </td>

                    </tr>
                <?php }; ?>
                <tr>
                    <form name="cadastrar" action="cadastrar.php" method="POST">
                        <td></td>
                        <td><input type="text" class="form-control" name="nome"></td>
                        <td><input type="text" class="form-control" name="email"></td>
                        <td><input type="text" class="form-control" name="celular" id="celular"></td>
                        <td></td>
                        <td></td>
                        <td><button type="submit" class="btn btn-primary">Cadastrar</button></td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>