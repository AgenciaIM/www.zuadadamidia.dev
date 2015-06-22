<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'zuada');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C52}$Pc-1sN[iB^|`5N++5(M4%fAU+FM,U)0r7:}]z? `|}LRfc+Ag92yh |T%Z/');
define('SECURE_AUTH_KEY',  '9$9P7U7|wADcTNM4}I!5[gQQAM/r@@+mQ<-2(?~rqBwVokG>PV^=1a+T|ICI5-oB');
define('LOGGED_IN_KEY',    'Q5Cu1+TbQ(Q`ww &pWDC8xxu;~ktbJ[aXhj-P|<kJVE6 RDdy`4&=P}E6c.!M-9t');
define('NONCE_KEY',        '+>dhW0Ky:+Rrod< %Re*Cifb_LCpx&l!`vS@.2xZTZbN,!@J:7lGL6MX,8oPrKI0');
define('AUTH_SALT',        'evW2yXq$<cO!Olo$vS]hiV5Gd1fKV95f9!`IvV8:DnkPz&BYh!xCv(pL4|lGo<cy');
define('SECURE_AUTH_SALT', '$q?+7?%r!1@v^]_R*UQ!5Eap{Vg><Kyajd`|*6^HO+[5,MP^=h:[|);wQ]t|zz).');
define('LOGGED_IN_SALT',   '1@)SL;Ub&n~Hq3iV#6p3&^SRo_YK(Ww}DMc#5o)&U<A*1-?[-&[tgV|c4Aa]@}k>');
define('NONCE_SALT',       '_x~[74svXK8o&5bVkI9iiGlyypFDUUw{8C/@Y!N~ms|2Vh-5-8XCk4GrvDFo^q8:');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
