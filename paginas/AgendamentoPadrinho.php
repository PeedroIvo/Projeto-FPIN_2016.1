<!DOCTYPE html>

<html>
    <head>
        <?php include('../php/Cadastro_Caes.php'); ?>
        
        <meta charset="UTF-8">
        <title>Agendar visita | Melhor Amigo</title>

        <link rel="stylesheet" type="text/css" href="../css/LayoutDefault.css">
        <link rel="stylesheet" type="text/css" href="../css/AgendamentoPadrinho.css">
    </head>

    <body>
        <div id="wrap">

            <p><a href="../index.html"><img id="logoPrincipal" src="../img/logo_melhor_amigo.png"></a></p>

            <header>
                <nav>
                    <p><a href="CaesParaAdocao.php">Adoções</a><a href="PaginaPadrinho.php">Apadrinhamento</a><a href="PaginaDoacao.html">Doações</a><a href="Voluntario_LOGIN.html">Voluntários</a><a href="PaginaLogin.html">Entrar</a><a href="FormularioDeCadastro2.html">Cadastre-se</a></p>
                </nav>
            </header>


            <div id="content">
                <h2 class="center">Agendamento de Visitas: Padrinho</h2>

                <p class="center">Cadastre a próxima visita preenchendo os dados abaixo,e responderemos por e-mail a disponibilidade em 24Horas</p>

                <article class="center">

                    <h3>Visita do Padrinho:</h3>
                    <form name="agendamento" method="post" action="PaginaPadrinho.php">
                        <fieldset>
                            <legend><b>Agendamento de Visita</b></legend>
                            <p><label>Data do Agendamento: </label><input type="date">
                            </p>
                            <p><label>Selecione um horário: </label>
                                <select>
                                    <option value="manha1">Manhã de 09:00 ás 11:20 (Segunda à Sexta) </option> 
                                    <option value="tarde1">Tarde de 13:30 ás 17:20 (Segunda à Sexta) </option>
                                    <option value="manha2">Manhã de 08:00 ás 12:20 (Sábados e Domingos) </option>
                                    <option value="tarde2">Tarde de 13:00 ás 19:30 (Sábados e Domingos) </option>
                                </select>
                            <p><input type="submit" value="Agendar" onclick="alert('Seu pedido de agendamento foi enviado!')" > <input type="reset" value="Limpar"></p>
                        </fieldset>
                    </form>
                </article>

                <table>
                    <thead>
                    <th colspan="5">Conheça alguns de nossos cãezinhos</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="itemLista">
                                <a href="Ficha_Caes/Ficha_Cao_LOGIN_2.php">
                                    <img src="../img/caes/cao_02.jpg" alt="<?php echo $cao_2["nome"]; ?>" title="<?php echo $cao_2["nome"]; ?>" />
                                </a>
                            </td>
                            <td class="itemLista">
                                 <a href="Ficha_Caes/Ficha_Cao_LOGIN_4.php">
                                    <img src="../img/caes/cao_04.jpg" alt="<?php echo $cao_4["nome"]; ?>" title="<?php echo $cao_4["nome"]; ?>" />
                                </a>
                            </td>
                            <td class="itemLista">
                                <a href="Ficha_Caes/Ficha_Cao_LOGIN_6.php">
                                    <img src="../img/caes/cao_06.jpg" alt="<?php echo $cao_6["nome"]; ?>" title="<?php echo $cao_6["nome"]; ?>" />
                                </a>
                            </td>
                            <td class="itemLista">
                                <a href="Ficha_Caes/Ficha_Cao_LOGIN_8.php">
                                    <img src="../img/caes/cao_08.jpg" alt="<?php echo $cao_8["nome"]; ?>" title="<?php echo $cao_8["nome"]; ?>" />
                                </a>
                            </td>
                            <td class="itemLista">
                                <a href="Ficha_Caes/Ficha_Cao_LOGIN_11.php">
                                    <img src="../img/caes/cao_11.jpg" alt="<?php echo $cao_11["nome"]; ?>" title="<?php echo $cao_11["nome"]; ?>" />
                                </a>
                            </td>
                        </tr>

                    <td class="paginas" colspan="5">
                        <a href="CaesParaAdocao.php"> +Cãezinhos</a>
                    </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <footer>
                <nav>
                    <p>
                        <a href="SobreNos.html">Sobre</a>
                        <a href="../index.html">Início</a>
                        <a href="LocalizacaoDaONG.html">Localização</a>
                    </p>
                </nav>
            </footer>

        </div>
    </body>