<?php
require_once("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Cria uma nova instância do PHPMailer
$mail = new PHPMailer();

//Diga ao PHPMailer para usar SMTP
$mail->isSMTP();

//Habilitar depuração SMTP
//SMTP::DEBUG_OFF = off (para uso em produção)
//SMTP::DEBUG_CLIENT = mensagens do cliente
//SMTP::DEBUG_SERVER = mensagens do cliente e do servidor
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//Defina o nome do host do servidor de e-mail
$mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//se sua rede não suporta SMTP sobre IPv6,
//embora isso possa causar problemas com TLS

//Defina o número da porta SMTP:
// - 465 para SMTP com TLS implícito, também conhecido como RFC8314 SMTPS ou
// - 587 para SMTP+STARTTLS
$mail->Port = 587;

//Defina o mecanismo de criptografia a ser usado:
// - SMTPS (TLS implícito na porta 465) ou
// - STARTTLS (TLS explícito na porta 587)

$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Se deve usar autenticação SMTP
$mail->SMTPAuth = True;

//Nome de usuário a ser usado para autenticação SMTP - use endereço de e-mail completo para o Gmail
$mail->Username = ' ';

//Senha a ser usada para autenticação SMTP
$mail->Password = ' ';

//Defina de quem a mensagem deve ser enviada
//Observe que com o Gmail você só pode usar o endereço da sua conta (o mesmo que `Nome de usuário`)
//ou aliases predefinidos que você configurou em sua conta.
//Não use endereços enviados pelo usuário aqui
$mail->setFrom(' ', 'Curso PHP 7 ');

//Defina um endereço de resposta alternativo
//Este é um bom lugar para colocar endereços enviados pelo usuário
//$mail->addReplyTo('replyto@example.com', 'Primeiro Último');

//Defina para quem a mensagem deve ser enviada
$mail->addAddress(' ', 'Rei');

//Defina a linha de assunto
$mail->Subject = 'Teste classe PHP E-MAIL';

//Ler o corpo de uma mensagem HTML de um arquivo externo, converter imagens referenciadas em incorporadas,
//converte HTML em um corpo alternativo básico de texto simples
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

//Substitui o corpo do texto simples por um criado manualmente
$mail->AltBody = 'Este é um corpo de mensagem em texto simples';

//Anexar um arquivo de imagem
//$mail->addAttachment('images/phpmailer_mini.png');

//envia a mensagem, verifica se há erros
if (!$mail->send()) {
    echo 'Erro do Mailer: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada!';
    //Seção 2: IMAP
    //Descomente-os para salvar sua mensagem na pasta "E-mails Enviados".
    #se (salvar_email($mail)) {
    # echo "Mensagem salva!";
    #}
}

//Seção 2: IMAP
//Os comandos IMAP requerem a extensão PHP IMAP, encontrada em: https://php.net/manual/en/imap.setup.php
//Função a ser chamada que usa as funções PHP imap_*() para salvar mensagens: https://php.net/manual/en/book.imap.php
//Você pode usar imap_getmailboxes($imapStream, '/imap/ssl', '*' ) para obter uma lista de pastas ou rótulos disponíveis, isso pode
//pode ser útil se você estiver tentando fazer isso funcionar em um servidor IMAP que não seja o Gmail.
?>