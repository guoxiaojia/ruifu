<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'rapidzpay');

/** MySQL数据库用户名 */
define('DB_USER', 'novatraderex');

/** MySQL数据库密码 */
define('DB_PASSWORD', '.Fc7]rA_7VQq');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'i9<nN^6sUV_}/g$A|%FfZZ~]U%JOvw7&y;}jAqkCYf2&ry@J8zM [SXGuqObKcfK');
define('SECURE_AUTH_KEY',  'g;N?%+BPSC)_dY+@ivL<v@^la>VLYYVMRJC*2FX[? |oXwyDdAEK9dTYExTUe{-R');
define('LOGGED_IN_KEY',    'k4Z>xi-a8%AMK . [+%,^Z6ry}B87N5mKOC@b!%/1x{KTAGcb2I-RVv9]>Y:fi_(');
define('NONCE_KEY',        '$uvbLfa:cBE[3C|484mA7UQM&a#R/};*@)byK%V/+#jqO;rdY/r.]Dcj g1a$l%M');
define('AUTH_SALT',        'plkS_R3Nm}gw EFdRqZ$CU6C(0-y&%s?,F)g1hH?Y_nx~xxq+[N>D_TDjK0]H<di');
define('SECURE_AUTH_SALT', 'bH&9$J2H4q#C&y{!3$$4BoA:T%MSH{vp1z>qdC7+7?|T-]-+^Qmc#P60i6Rkda_G');
define('LOGGED_IN_SALT',   '9zSBhP~>:y-V3%2NuhynygWN9*Bs%:XKxR-.ZyVFUEzqWZ4Kkcup%W2O;97}2{w4');
define('NONCE_SALT',       ';|b,&hD:Gy=#%nN}Fs6Y*9-;r*usvjh4{=HOdBu;ufDrf0:=5+(3*r?`u/bE*:iz');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
