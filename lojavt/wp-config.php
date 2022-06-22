<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'lojavt' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#?=HsVq{^J+U9CG?]*DWCqqp/WHtq$zMT7 5^/bb7dX}JuZV)DgW36/R`::N10E.' );
define( 'SECURE_AUTH_KEY',  'th`6S!}}&-lrJl`=|rJtiJM#G4/W,x>DwjAm^FM oW;Mj;RKpM::{iEK=,V I>tW' );
define( 'LOGGED_IN_KEY',    '-f^,mg-;L6b5+bv:A}@4>IHpCG)RD<%bzE1UVY^iiYfR} /w1r 2<7)>NPhD9[,j' );
define( 'NONCE_KEY',        'T0vIXeEs_bs-sS+ipIAA3$Pw7qex**6N<:x8nrM%Q<f#`+-&ky (XKCA^,kb/*N(' );
define( 'AUTH_SALT',        'WNJ:f7n}AL^RXT_MNQP-A*T|qQdb_jnG]`KJ}nN&kihJc4NE_NM)W?_D})}U<go)' );
define( 'SECURE_AUTH_SALT', 'owRl+C)%[A(a]/CP]g9sGt9okjDPCCVA=#7yCjH}hMqPXIS4{jb(ny01Fwhk!hXP' );
define( 'LOGGED_IN_SALT',   'wV]xCO+_j2._gB1]!g1KqTuzX ^dOB0b2V}k=d,cLQxyPfqREeW#z:|L.{D7dcye' );
define( 'NONCE_SALT',       '`NfM|vD{uwQQ7>QwV2?@f$JUa?5ewBEVm`&Kp|Q,(Hb^m7HcBxAWt~ULc7LaSO`O' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
