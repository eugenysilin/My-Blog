<?
/**
 * @param $url
 *
 * @return mixed
 */
function getHtml($url)
{
    $ch      = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

/**
 * @param $title
 * @param $url
 *
 * @return bool
 */
function issetRowInTempLinksCategoriesTable($title, $url)
{
    global $my_db;
    $res = $my_db->db_query(
        'SELECT * FROM temp_links_categories WHERE title = "' . $title . '" AND link = "' . $url . '"'
    );
    if ($res) {
        return $res[0];
    } else {
        return false;
    }
}

header('Content-Type: text/html; charset=utf-8');

include_once('db_config.php');
global $my_db;
$my_db = new Db_config();

$html = getHtml('http://rozetka.com.ua/');

preg_match('/id=\"m-main\".+<\/nav>/s', $html, $contents);
preg_match_all('/<a .+<\/a>/', $contents[0], $links);
foreach ($links[0] as $link) {
    preg_match('/href="([^"]+)"/', $link, $href);
    preg_match('/<a[^<>]+?>(.*?)<\/a>/uis', $link, $data);
    $url   = $href[1];
    $title = $data[1];
    if ($url && $url != '#' && $title != '') {
        if (!issetRowInTempLinksCategoriesTable($title, $url)) {
            $db_result = $my_db->db_query(
                'INSERT INTO temp_links_categories SET title="' . $title . '", link="' . $url . '", site="Rozetka"'
            );
        }
    }
}
die;