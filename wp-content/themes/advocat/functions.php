<?php
/**
 *
 * GZIP сжатие
 */
function obSaveCookieAfter($s)
{
  setcookie("page_size_after", strlen($s));
  return $s;
}
// Аналогично, но для Cookie page_size_before.
function obSaveCookieBefore($s)
{
  setcookie("page_size_before", strlen($s));
  return $s;
}
// Устанавливаем конвейер обработчиков.
ob_start("obSaveCookieAfter");
ob_start("ob_gzhandler", 9);
ob_start("obSaveCookieBefore");
/**
 *
 * END сжатие
 */

require_once __DIR__ . '/inc/menu.php';

/**
 * вывод title
 */
// хук для title
add_action('after_setup_theme', 'titleStm');

function titleStm()
{
  /*добавляем title*/
  add_theme_support('title-tag');
}
/**
 * end вывод title
 */

/**
 * удаляем теги из html
 */
add_filter('the_generator', '__return_empty_string');

remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
// убрать вывод коротких ссылок
remove_action('wp_head', 'wp_shortlink_wp_head');
// Убрать вывод канонических ссылок:
remove_action('wp_head','rel_canonical');

remove_action('wp_head','adjacent_posts_rel_link_wp_head');
remove_action('wp_head','feed_links_extra', 3);

remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');

remove_action( 'wp_head', 'wp_resource_hints', 2 );
// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');

// Отключаем фильтры REST API
remove_action( 'xmlrpc_rsd_apis',            'rest_output_rsd' );
remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed',      'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired',        'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username',   'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash',       'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid',          'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );

// Отключаем события REST API
remove_action( 'init',          'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );

// Отключаем Embeds связанные с REST API
remove_action( 'rest_api_init',          'wp_oembed_register_route'              );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

/**
 * удаляем теги из html
 */

/**
 * загружаемые  стили и скрипты
 */
function loadStyleScript()
{
// подключаем стили сайта
  wp_enqueue_style('mainStyleAdvocat', get_template_directory_uri() . '/dist/css/main.css', [], null);
  wp_enqueue_style('styleAdvocat', get_stylesheet_uri());

// подключаем скрипты
  wp_enqueue_script('libAdvocat', get_template_directory_uri() . '/dist/js/lib.js', [], null, true);
  wp_enqueue_script('mapsGoogleApiAdvocat', '//maps.google.com/maps/api/js?key=AIzaSyAbF547wmpRHA68yKJP62H7yha2Nzsilm8&language=ru', [], null, true);
  wp_enqueue_script('mainScriptAdvocat', get_template_directory_uri() . '/dist/js/main.js', [], true, true);
}
// загружаем скрипты стили
add_action('wp_enqueue_scripts', 'loadStyleScript');
/**
 * end загружаемые  стили и скрипты
 */

/*menu*/
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
if ( ! function_exists( 'wpt_setup' ) ):
  function wpt_setup() {
    register_nav_menu( 'primary', __( 'Меню в шапке') );
    //register_nav_menu( 'footer', __( 'Меню в футере') );
  } endif;

/* end menu*/

require_once __DIR__ . '/inc/breadcrumbs.php';

/**
 * Поддержка миниатюр
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 1280,720 );
/**
 * End Поддержка миниатюр
 */


/**
Регистрируем новый тип записи
 */
add_action('init', 'advocatPostTypes');

function advocatPostTypes () {
  // регистрация слайдера на главной
  register_post_type('slider-main', [
    'labels' => [
      'name'               => 'Слайд на главной', // основное название для типа записи
      'singular_name'      => 'Слайд', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавить новый слайд', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование слайд', // для редактирования типа записи
      'new_item'           => 'Новый слайд', // текст новой записи
      'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
      'search_items'       => 'Искать слайды', // для поиска по этим типам записи
      'not_found'          => 'Слайд не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине слайда', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Слайд на главной', // название меню
    ],
    'public'              => true,
    'publicly_queryable'  => false, // убираем возможность перейти
    'exclude_from_search' => true, // убираем из поиска
    'menu_position'       => 25,
    'menu_icon'           => 'dashicons-images-alt2',
    'hierarchical'        => false,
    'supports'            => array('title'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'query_var'           => false
  ]);
}


/**
 * Свои поля в категориии
 */
// добавляет вызов функции при инициализации административного раздела
add_action('admin_init', 'category_custom_fields', 1);
// функция расширения функционала административного раздела
function category_custom_fields() {
  // добавления действия после отображения формы ввода параметров категории
  //add_action('lift_edit_form_fields', 'category_custom_fields_form');
  // add_action('cat_add_form_fields', 'category_custom_fields_form');   - можно добавить поля при создании категории, но могут быть проблемы, так как категории сохраняются через ajax
  // добавления действия при сохранении формы ввода параметров категории
  //add_action('edited_lift', 'category_custom_fields_save');

  add_action('category_edit_form_fields', 'category_custom_fields_form');
  add_action('edited_category', 'category_custom_fields_save');
}

function category_custom_fields_form($tag) {
  $t_id = $tag->term_id;
  $cat_meta = get_option("category_$t_id");
  ?>

  <!-- текст -->
  <tr class="form-field">
    <th scope="row" valign="top"><label for="extra1">Подзаголовок категории:</label></th>
    <td>
      <textarea name="Cat_meta[cat_text1]" id="Cat_meta[cat_text1]"><?php echo $cat_meta['cat_text1'] ? $cat_meta['cat_text1'] : ''; ?></textarea>
      <!--<input class="cat_img" type="text" name="Cat_meta[cat_title]" id="Cat_meta[cat_title]" size="25" style="width:60%;" value="<?php
      echo
      $cat_meta['cat_title'] ? $cat_meta['cat_title'] : '';
      ?>"> -->
      <p>Введите подзаголовок категории</p>
      <br />
    </td>
  </tr>
  <?php
}

function category_custom_fields_save($term_id) {
  if (isset($_POST['Cat_meta'])) {
    $t_id = $term_id;
    $cat_meta = get_option("category_$t_id");
    $cat_keys = array_keys($_POST['Cat_meta']);
    foreach ($cat_keys as $key) {
      if (isset($_POST['Cat_meta'][$key])) {
        $cat_meta[$key] = $_POST['Cat_meta'][$key];
      }
    }
//save the option array
    update_option("category_$t_id", $cat_meta);
  }
}

/**
 * End Свои поля в категориии
 */

/**
Длина анонса в блоге
 */
function new_excerpt_length($length) {
  if(is_category()) {
    return 10;
  } else if (is_page('pomoshh-advokata-yuridicheskim-i-fizicheskim-litsam')) {
    return 10;
  } else {
    return 60;
  }
}
add_filter('excerpt_length', 'new_excerpt_length');

/**
end Длина анонса в блоге
 */
/**
Окончание  анонса в блоге
 */
add_filter('excerpt_more', function($more) {
  return '';
});


/**
 * Длинна заголовка
 */

function do_heading($string, $word_limit) {
  $words = explode(' ', $string, ($word_limit + 1));
  if (count($words) > $word_limit)
    array_pop($words);
  echo implode(' ', $words);
}