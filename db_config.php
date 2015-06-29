<?

class Db_config
{
    public function __construct()
    {
        if (!mysql_connect('localhost', 'root', '123321')) {
            echo "Ошибка подключения к серверу MySQL";
            exit;
        }
        mysql_select_db('blog');
        mysql_set_charset('utf8');
    }

    public function db_query($query)
    {
        $result_arr = [];
        $res = mysql_query($query);
        while($row = mysql_fetch_assoc($res)) {
            $result_arr[] = $row;
        }
        return $result_arr;
    }
}