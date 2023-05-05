<?php 
//se estiver setado nosso id, então é para atualizar
$objUsuario=NULL;
if(isset($_GET['id'])){
    //buscar da base o cara com o ID do get
    // e salvar na variavel $objUsuario;
    //Para usar o DAO eu preciso importar ele.
    require_once $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/model/dao/UsuarioDAO.php';
    //usar o meu getById da classe usuarioo dao e armazenar o retorno
    //na variável $objUsuario;
    $objUsuario=UsuarioDAO::getInstance()->getById($_GET['id']);
}

?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Tables</title>

        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?php
            //include => incluir um arquivo, se não achar sem bronca!
            //include_once => mesma coisa do include, só que apenas 1 vez
            //require => incluir um arquivo, se não achar "deu erro"!
            //require_once => mesma coisa do require, só que apenas 1 vez
            include $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/menuLateral.php';
            ?>

            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php
                    include $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/menuTopo.php';
                    ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                            For more information about DataTables, please visit the <a target="_blank"
                                                                                       href="https://datatables.net">official DataTables documentation</a>.</p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                            </div>
                            <div class="card-body">
                                <form method="post" action="control/usuarioControle.php">
                                    <div>
                                        <label for="nome">
                                            Nome:
                                        </label>
                                        <input type="text" name="nome" id="nome" 
                                               value="<?php echo ($objUsuario==NULL?"":$objUsuario->getNome())?>"/>
                                    </div>
                                    <div>
                                        <label for="cpf">
                                            CPF:
                                        </label>
                                        <input type="text" name="cpf" id="cpf"
                                               value="<?php echo ($objUsuario==NULL?"":$objUsuario->getCpf())?>"/>
                                    </div>
                                    <div>
                                        <label for="logradouro">
                                            Logradouro:
                                        </label>
                                        <input type="text" name="logradouro" id="logradouro"
                                               value="<?php echo ($objUsuario==NULL?"":$objUsuario->getLogradouro())?>"/>
                                    </div>
                                    <div>
                                        <label for="numero">
                                            Número:
                                        </label>
                                        <input type="text" name="numero" id="numero"
                                               value="<?php echo ($objUsuario==NULL?"":$objUsuario->getNumero())?>"/>
                                    </div>
                                    <div>
                                        <label for="bairro">
                                            Bairro:
                                        </label>
                                        <input type="text" name="bairro" id="bairro"
                                               value="<?php echo ($objUsuario==NULL?"":$objUsuario->getBairro())?>"/>
                                    </div>
                                    <div>
                                        <label for="Cidade">
                                            Cidade:
                                        </label>
                                        <input type="text" name="cidade" id="cidade"
                                               value="<?php echo ($objUsuario==NULL?"":$objUsuario->getCidade())?>"/>
                                    </div>
                                    <div>
                                        <label for="UF">
                                            UF:
                                        </label>
                                        <select name="uf" id="uf">
                                            <option value ="">Selecione</option>
                                            <option value ="AC" <?php echo ($objUsuario!=NULL&&$objUsuario->getUF()=="AC"?"selected":"")?>>AC</option>
                                            <option value ="PE" <?php echo ($objUsuario!=NULL&&$objUsuario->getUF()=="PE"?"selected":"")?>>PE</option>
                                            <option value ="PI">PI</option>
                                            <option value ="PB">PB</option>
                                            
                                        </select>
                                        <input type="text" name="uf" id="uf"
                                               value="<?php echo ($objUsuario==NULL?"":$objUsuario->getUF())?>"/>
                                    </div>
                                    <div>
                                        <label for="telefone">
                                            Telefone:
                                        </label>
                                        <input type="text" name="telefone" id="telefone"
                                               value="<?php echo ($objUsuario==NULL?"":$objUsuario->getTelefone())?>"/>
                                    </div>
                                    <div>
                                        <label for="email">
                                            E-mail:
                                        </label>
                                        <input type="email" name="email" id="email"
                                               value="<?php echo ($objUsuario==NULL?"":$objUsuario->getEmail())?>"/>
                                    </div>
                                    <div>
                                        <label for="senha">
                                            Senha:
                                        </label>
                                        <input type="password" name="senha" id="senha"/>
                                    </div>
                                    
                                    <input type="submit" value="Salvar" />
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?php
                include $_SERVER['DOCUMENT_ROOT'] . '/bibliotecaphp/rodape.php';
                ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

    </body>

</html>