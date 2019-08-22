<?php 

Class Config{

	//INFORMÃÇÕES BÁSICAS DO SITE
	const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja";
	const SITE_NOME = "E-commerce - PHP 7 e Mysqli";
	const SITE_EMAIL_ADM = "carlos.oli1505@gmail.com";
	const BD_LIMIT_POR_PAG = 6;
	const SITE_CEP = '83823277';


	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "lojacarlos",
		  BD_PREFIX = "qc_"; 





	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "smtp.gmail.com";
	const EMAIL_USER = "carlos.oli1505@mail.com";
	const EMAIL_NOME = "Contato E-commerce";
	const EMAIL_SENHA = "carloskiq069";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "depaula.carlos@outlook.com";



	//CONSTANTES PARA O PAGSEGURO
	const PS_EMAIL  = "depaula.carlos@outlook.com"; // email pagseguro
    const PS_TOKEN  = "0E86ADF6373348509E7B35389D92004C"; // token produção
    const PS_TOKEN_SBX = "1FB4D7860EA9491BA7AB4A9D9336C275";  // token do sandbox
    const PS_AMBIENTE = "production"; // production   /  sandbox

}
 ?>

