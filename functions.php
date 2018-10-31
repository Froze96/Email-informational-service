<?php



function  get_events() {
        global $db;
        $query = "SELECT * FROM events";
        $res = mysqli_query($db,$query);
        return mysqli_fetch_all($res, MYSQL_ASSOC);
}

function  get_emails() {
    global $db;
    $query = "SELECT emails FROM email";
    $result = $db->query($query);
    $arr= array();
    //выводим данные
        while($row = $result->fetch_array()) {
        	$arr[] = $row['emails'];
        }
        return $arr;   //отправляем массив из emails
}

function get_json($arr) {
        $data = '[';
        foreach($arr as $item){
        $data .= '{ "date": "'. $item['date'] . '","title":  "'. $item['title'] . '","description": "'. $item['description'] . '","url": "' . $item['url'] . '"},';
        }
        $data .= ']';
        return $data;
        }

function print_arr($arr){
            echo '<pre>' . print_r($arr, true) . '</pre>';
}






function  get_today_events() {

        global $db;
       // $query = "SELECT * FROM events WHERE DATE = CURDATE() LIMIT 1";
         $query = "  SELECT * FROM events WHERE date(DATE) = CURDATE() LIMIT 1";
      
        $res = mysqli_query($db,$query);
       return mysqli_fetch_all($res, MYSQL_ASSOC);
}


function  get_future_events() {

        global $db;
        $query = "SELECT * FROM events WHERE date(DATE) > CURDATE()  LIMIT 1";
        $res = mysqli_query($db,$query);
       return mysqli_fetch_all($res, MYSQL_ASSOC);
}

function get_jsonDay($arr) {
       
        foreach($arr as $item){
        $data .= '{ "date": "'. $item['date'] . '","title":  "'. $item['title'] . '","description": "'. $item['description'] . '","url": "' . $item['url'] . '"}';
        }
      
        return $data;
        }

/*
function get_json($arr) {
        $data = '[';
        foreach($arr as $item){
        $data .= '{ "date": "'. $item['date'] . '","title":  "'. $item['title'] . '","description": "'. $item['description'] . '","url": "?id=' . $item['id'] . '"},';
        }
        $data .= ']';
        return $data;
        }
*/
