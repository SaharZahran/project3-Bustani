<?php
/**
 * إعدادات ووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'project_3' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * تغيير هذه العبارات إلى عبارات فريدة مختلفة!
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * يمكنك تغيير هذه في أي وقت لإلغاء جميع ملفات تعريف الارتباط الموجودة. سيؤدي هذا إلى إجبار جميع المستخدمين على تسجيل الدخول مرة أخرى.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q<P<Tws)fgXBb}&n y,.zO*e4=H[Dtz-k^O;zYBVXU ^ia8?aEF>3byd@2tFJo:m' );
define( 'SECURE_AUTH_KEY',  'u$<KGa3G//}Ru];TZ]rtMZXJpz8rtaKnC&#b6A,3v~j(w;L~PNV7Mjr+;.UCNN{n' );
define( 'LOGGED_IN_KEY',    'FZ)xXYNQ=? QG&=t=ae^+=y>!N^Puiv,]f-`-1+5@|PGY)sU7@N~=,6Trw@,nU M' );
define( 'NONCE_KEY',        '{Gd!@Lfui^j{_| 0oc:PnD*l$kD)i1m?g?+0JXRG_ ]ZF8_5l^7$]Z*5,I@`k;2[' );
define( 'AUTH_SALT',        '$-WP shLh7vY{3Oh9Ns[15:oknlFK JA!0HYlRXOD9/jA#*nSoe^lnb1ocS1o6<3' );
define( 'SECURE_AUTH_SALT', 'u4(JTB6!F0ShhD9UUK;#Q@sdXP;v-SE_${{W(5bi$DbgLgM!?Wz8G+%V{:_v~+TI' );
define( 'LOGGED_IN_SALT',   '5nZ.97o=is7 d&dhi@(ruWDNINM-~_nsSw`4ptW1&fK$g%ZOTXX14fZEuwv*wWOf' );
define( 'NONCE_SALT',       'd7)g)!MSW5jMH>*r+!`>4jUut:oqH!Z0a[{!-/t><ZD1dAFy{6HjCqQ6<G0tuLM8' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
