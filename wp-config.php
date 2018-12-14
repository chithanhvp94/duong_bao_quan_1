<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'duong_bao_quan_1');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', 'Concua712');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NLqt?%j?gsn`(rcHn=+e.HLO/Adj}CACqaFUO[06-4sp-v O)6DdK2Z+E@%#k0&8');
define('SECURE_AUTH_KEY',  'TO];V:8O)uE3D^JLgouCb^CPvw(S)!sjy+Y84L}}^_fSgr[+#J}g&qg3FU2k&sE/');
define('LOGGED_IN_KEY',    '^q`%jU6(,b~q)3~>&3kt4xK8LeB+;@2n)sxU1]p8PeV>=?NM#w-4p1hwi)TwNadU');
define('NONCE_KEY',        '*aFz%}_xb5[Rrwy}qq#Ol#V:If5Cp@~k?M,SVmH@^TZun5S/!OsW`Ydh@xA#@?Rm');
define('AUTH_SALT',        'EJbuY0cALh-6fZ5QXA|qIsm6iQ!@$BON#PR*kP5*!zvw&(Qp0b8wl}RA]=s;S-!j');
define('SECURE_AUTH_SALT', 'A+v(&qcP6.H>/uM$a!b?r!Ij-zEwCcsHerG18{Q]dZaN*Q28j5ngXYnDdCN#%i/:');
define('LOGGED_IN_SALT',   ':bdxG_m`Eq<SWrKV+W<8)6FEtuSsx@A}0j,~sz6b(Wv= >1[D<:1hXRvyi6T_,a/');
define('NONCE_SALT',       '6nwvm9*Eg9nk~KZY.oN6],Fg3Bc<]u>^#E ^!;}{t*F0w??f*#{#^392C#<|yB9[');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'dbq_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
