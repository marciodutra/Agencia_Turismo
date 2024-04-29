<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Painel de administração</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css" media="all">
    </head>
    <body>
        <div class="main_wrapper">
            <div id="header">

            </div>
            <div id="right">
                <h2 style="text-align: center; margin-top: 10px; font-family: Cambria;">Gerenciar conteúdo</h2>
                <ul>
                    <li><a href="index.php">Painel de adm : Home</a></li>
                    <li><a href="index.php?insert_package">Inserir novo pacote</a></li>
                    <li><a href="index.php?view_packages">Ver todos pacotes</a></li>
                    <li><a href="index.php?insert_cat">Inserir nova categoria</a></li>
                    <li><a href="index.php?view_cats">Ver todas categorias</a></li>
                    <li><a href="index.php?insert_type">Inserir novo tipo</a></li>
                    <li><a href="index.php?view_types">Ver todos tipos</a></li>
                    <li><a href="index.php?insert_employee">Inserir novo funcionário</a></li>
                    <li><a href="index.php?view_employees">Ver todos funcionários</a></li>
                    <li><a href="index.php?view_customers">Ver todos os clientes</a></li>
                    <li><a href="index.php?view_orders">Ver pedidos</a></li>
                    <li><a href="index.php?view_payments">Ver pagamentos</a></li>
                    <li><a href="logout.php">Sair</a></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div id="left">
                <h2 style="color: red; text-align: center; font-family: Cambria; margin-top: 15px;"><?php echo @$_GET['logged_in']; ?></h2>
                <?php
                if (isset($_GET['insert_package'])) {
                    include("insert_package.php");
                }
                if (isset($_GET['view_packages'])) {
                    include("view_packages.php");
                }
                if (isset($_GET['edit_pack'])) {
                    include("edit_pack.php");
                }
                if (isset($_GET['insert_cat'])) {
                    include("insert_cat.php");
                }
                if (isset($_GET['view_cats'])) {
                    include("view_cats.php");
                }
                if (isset($_GET['edit_cat'])) {
                    include("edit_cat.php");
                }
                if (isset($_GET['insert_type'])) {
                    include("insert_type.php");
                }
                if (isset($_GET['view_types'])) {
                    include("view_types.php");
                }
                if (isset($_GET['edit_type'])) {
                    include("edit_type.php");
                }
                if (isset($_GET['view_customers'])) {
                    include("view_customers.php");
                }
                if (isset($_GET['insert_employee'])) {
                    include("insert_employee.php");
                }
                if (isset($_GET['view_employees'])) {
                    include("view_employees.php");
                }
                if (isset($_GET['edit_emp'])) {
                    include("edit_emp.php");
                }
                ?>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>
