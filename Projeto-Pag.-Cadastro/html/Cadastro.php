<?php

    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $campo = $_POST['genero'];
        $Prazo = $_POST['data_nascimento'];
        

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$email','$campo','$Prazo')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro AEAtech</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(9, 34, 199));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 20px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 13px;
            border-radius: 10px;
            outline: none;
            font-size: 13px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(1, 63, 133), rgb(40, 0, 116));
            width: 100%;
            border: none;
            padding: 15px;
            color: rgb(23, 19, 131);
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(1, 63, 133), rgb(40, 0, 116));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="form.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="campo">
                   <p><label><strong>Qual tipo de profissional você busca?</strong></label></p>
                    <label>
                        <input type="radio" name="devweb" value="frontend" checked>Front-end
                    </label>
                    <label>
                        <input type="radio" name="devweb" value="backend">Back-end
                    </label>
                    <label>
                        <input type="radio" name="devweb" value="fullstack">Fullstack
                    </label>
                </div>
                <br>
                <label for="Prazo"><b>Prazo desejado</b></label>
                <input type="Prazo" name="Prazo desejado" id="Prazo desejado" required>
                <br>
                
                <!-- Campo de tecnologias para escolha de 1 ou mais opções para marcar (checkbox) e css de classe "campo" -->
                <div id="check">
                    <label><strong>Selecione as tecnologias que sua empreza já utiliza/pretende utilizar:</strong></label><br><br>
                    <input type="checkbox" id="tecnologia1" name="tecnologia1" value="HTML">
                    <label for="tecnologia1"> HTML</label>
                    <input type="checkbox" id="tecnologia2" name="tecnologia2" value="CSS">
                    <label for="tecnologia2"> CSS</label>
                    <input type="checkbox" id="tecnologia3" name="tecnologia3" value="JavaScript">
                    <label for="tecnologia3"> JavaScript</label>
                    <input type="checkbox" id="tecnologia4" name="tecnologia4" value="PHP">
                    <label for="tecnologia4"> PHP</label>
                    <input type="checkbox" id="tecnologia5" name="tecnologia5" value="C#">
                    <label for="tecnologia5"> C#</label>
                    <input type="checkbox" id="tecnologia6" name="tecnologia6" value="Python">
                    <label for="tecnologia6"> Python</label>
                    <input type="checkbox" id="tecnologia7" name="tecnologia7" value="Java">
                    <label for="tecnologia7"> Java</label>
                    <input type="checkbox" id="tecnologia7" name="tecnologia7" value="Não conheço">
                    <label for="tecnologia7">Nenhuma das anteriores </label>
                </div>
            </fieldset>

            <!-- Caixa de texto -->
            <div class="campo">
                <br>
                <label for="experiencia"><strong>descreva resumidamente o que sua empreza necessita : </strong></label>
                <textarea rows="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
            </div>

            <!-- Botão para enviar o formulário -->
          <p> <button class="botao" type="submit" onsubmit="">Concluído</button> </p>    
        </form>
    </div>
</body>
</html>