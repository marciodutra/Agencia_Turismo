<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
    <link rel="stylesheet" href="styles/style.css" media="all">
    <style>
        #guides {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            border: 1px solid black;
            width: 740px;
        }

        #guides th {
            text-align: left;
            background-color: #3A6070;
            color: #fff;
            padding: 4px;
        }

        #guides td {
            border: 1px solid black;
            padding: 4px;
            text-align: left;
        }

        #guides tr:nth-child(odd) td {
            background-color: #E7EDF0;
        }

        #regoff {
            font-size: 15px;
        }

        #headoff {
            font-size: 16px;
        }

    </style>

</head>
<body>
    <!--Main container starts here-->
    <div class="main_wrapper">
        <!--Header starts here-->
        <?php include 'includes/header.php'; ?>
        <!--Header ends here-->
        <!--Navbar starts here-->
        <?php include 'includes/navbar.php'; ?>
        <!--Navbar ends here-->
        <!--Content starts here-->
        <div class="content_wrapper">
            <div class="sidebar">
                <div id="sidebar_title"><b>Contato</b></div>
                <br><br><br><br><br><br><br>
                <div id="sidebar_title"><b>24/7 Atendimento</b></div>
                <div id="sidebar_title"><b>Disque: 16505</b></div>
            </div>
            <div id="content_area">
                <div id="packages_box">
                    <br>
                    <h2 style="font-family: Cambria;">Nossos guias locais</h2>
                    <br>
                    <table id="guides" align="center" bgcolor="#EEE0CB">
                        <tr align="center" bgcolor="#5FCEE8">
                            <th id="thfix">Nome</th>
                            <th id="thfix">Email</th>
                            <th id="thfix">Localização</th>
                            <th id="thfix">Endereço</th>
                            <th id="thfix">Contato</th>
                        </tr>
                        <?php
                        include("includes/db.php");

                        $get_c = "SELECT * FROM employees";
                        $run_c = mysqli_query($con, $get_c);
                        $i = 0;

                        while ($row_c = mysqli_fetch_array($run_c)) {
                            $e_id = $row_c['emp_id'];
                            $e_name = $row_c['emp_name'];
                            $e_email = $row_c['emp_email'];
                            $e_designation = $row_c['emp_designation'];
                            $e_location = $row_c['emp_location'];
                            $e_address = $row_c['emp_address'];
                            $e_contact = $row_c['emp_contact'];
                            $i++;

                            ?>
                            <tr align="left">
                                <td style="width: 150px;"><?php echo $e_name; ?></td>
                                <td style="width: 160px;"><?php echo $e_email; ?></td>
                                <td style="width: 100px;"><?php echo $e_location; ?></td>
                                <td style="width: 240px;" align="center"><?php echo $e_address; ?></td>
                                <td style="width: 120px;"><?php echo $e_contact; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>

                    <br><br><br>
                    <h3 style="font-family: Cambria;">Sede:</h3>
                    <p id="headoff"><b>Endereço: </b>Rua C 1574, Porto Alegre, RS.<br>
                        <b>Contato: </b>51 994690210
                    </p>
                    <br>
                    <h4 style="font-family: Cambria;">Escritório regional:</h4>
                    <p id="regoff"><b>Endereço: </b>Rua Cel. Genuino, 342, Centro, Porto Alegre, RS<br>
                        <b>Contato: </b>51 33521452
                    </p>
                </div>
            </div>
        </div>
        <!--Content ends here-->
        <!--footer starts-->
        <?php include "includes/footer.php";?>
        <!--footer ends-->
    </div>
    <!--Main container ends here-->
</body>
</html>