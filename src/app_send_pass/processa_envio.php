<?php 

    require "bibliotecas/PHPMailer/Exception.php";
    require "bibliotecas/PHPMailer/OAuth.php";
    require "bibliotecas/PHPMailer/PHPMailer.php";
    require "bibliotecas/PHPMailer/POP3.php";
    require "bibliotecas/PHPMailer/SMTP.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //print_r($_POST);


        class Mensagem{
            private $pass = null;
            public $status = array('codigo_status' => null, 'descricao_status' => '');

            public function _get($atributo){
                return $this->$atributo;
            }

            public function _set($atributo, $valor){
                $this->$atributo = $valor;
            }

            


        }

        $email = $_POST['email'];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erro[]="E-mail inválido.";
     
          }

        $mensagem = new Mensagem();

        $novasenha=substr(sha1(time()), 0, 6);


        


        $mensagem->_set('pass', $novasenha);


        // print_r($mensagem);

        

        $phpmailer = new PHPMailer(true);

        try {
            //Server settings
            $phpmailer->SMTPDebug = false;                      //Enable verbose debug output
            
            $phpmailer->isSMTP();
            $phpmailer->Host = 'smtp.mailtrap.io';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = 2525;
            $phpmailer->Username = 'af653cff9934a8';
            $phpmailer->Password = '8adfbdd63a0c5c';                           //SMTP password
                     //Enable implicit TLS encryption
                                           //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $phpmailer->setFrom('suporte@sistemaweb.com', 'Web remetente');
            $phpmailer->addAddress($email, 'Web destinatário');     //Add a recipient              //Name is optional
            //  $mail->addReplyTo('diogo.alcarde123@gmail.com', 'Resposta');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $phpmailer->isHTML(true);                                  //Set email format to HTML
            $phpmailer->Subject = 'Nova senha - DeliveryStore';
            $phpmailer->Body    = 'Segue sua nova senha: ' . $mensagem->_get('pass');
            $phpmailer->AltBody = 'Necessario usar client que suporte HTML';

            if($phpmailer->send()){
                $mensagem->status['codigo_status'] = 1;
                $mensagem->status['descricao_status'] = 'Mensagem enviada com sucesso';
                require("../php/conecta.php");
                $nscriptografada= sha1($mensagem->_get('pass').'PalmeirasNaoTemMundial');
                $email_criptografado = sha1($email);
                $sql_code="UPDATE tb_sys_login SET pass =  '$nscriptografada' WHERE email = '$email_criptografado'";
                $sql_query=$mysqli->query($sql_code) or die($mysqli->error);
            }
        

        } catch (Exception $e) {
            $mensagem->status['codigo_status'] = 2;
            $mensagem->status['descricao_status'] = 'Não foi possível enviar o e-mail, por favor tente novamente mais tarde. Detalhes do erro: ' . $mail->ErrorInfo;
            


        }
    
?>



<html>
<head>
    
    <title>Envio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="py-3 text-center">
                    <img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
                    <h2>Send Mail</h2>
                    <p class="lead">Seu app de envio de e-mails particular!</p>
        </div>

        <div class="row">
            <div class="col-md-12">

                <?php if($mensagem->status['codigo_status'] == 1){ ?>

                    <div class="container">
                        <h1 class="display-4 text-success">Sucesso</h1>
                        <p><?= $mensagem->status['descricao_status'] ?></p>
                        <a href="../index.php" class="btn btn-success btn-lg mt-5 text-white">Voltar</a>
                    </div>
                
                <?php }else{?>

               

                    <div class="container">
                        <h1 class="display-4 text-danger">Ops!</h1>
                        <p><?= $mensagem->status['descricao_status'] ?></p>
                        <a href="../index.php" class="btn btn-danger btn-lg mt-5 text-white">Voltar</a>
                    </div>
                
                <?php }; ?>

            </div>
        </div>
    </div>
</body>
</html>