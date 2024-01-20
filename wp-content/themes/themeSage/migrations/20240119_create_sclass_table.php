<?php

global $wpdb;
$table_name = $wpdb->prefix . 'sclass';

$charset_collate = $wpdb->get_charset_collate();

$sql = "CREATE TABLE $table_name (
    SclassID int,
    Color char(7),
    Name_E nchar(50),
    Name_ES nchar(30),
    Name_S char(5),
    Kind smallint,
    Mode smallint,
    count_round smallint,
    curr_round smallint,
    Curr_matchSeason char(10),
    Sclass_pic varchar(50),
    ifstop tinyint,
    Sclass_type tinyint,
    count_group smallint,
    Bf_simply_disp tinyint,
    sclass_sequence smallint,
    InfoID smallint,
    Bf_IfDisp tinyint,
    ModifyTime datetime,
    BeginSeason varchar(9),
    subSclassID int,
    ifHaveSub bit,
    ifSort bit,
    ifHavePaper bit,
    ifShowScore bit,
    rank_matchSeason char(10)
) $charset_collate;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);

// Dữ liệu mẫu
$data_to_insert = array(
    array(
        'SclassID' => 1,
        'Color' => '#FF0000',
        'Name_E' => 'Example Class 1',
        'Name_ES' => 'Class ES 1',
        'Name_S' => 'S1',
        'Kind' => 1,
        'Mode' => 1,
        'count_round' => 3,
        'curr_round' => 1,
        'Curr_matchSeason' => '2024',
        'Sclass_pic' => 'example1.jpg',
        'ifstop' => 0,
        'Sclass_type' => 1,
        'count_group' => 2,
        'Bf_simply_disp' => 1,
        'sclass_sequence' => 1,
        'InfoID' => 1,
        'Bf_IfDisp' => 1,
        'ModifyTime' => current_time('mysql'),
        'BeginSeason' => '2024/01',
        'subSclassID' => 0,
        'ifHaveSub' => 0,
        'ifSort' => 1,
        'ifHavePaper' => 1,
        'ifShowScore' => 1,
        'rank_matchSeason' => '2024'
    ),
    array(
        'SclassID' => 2,
        'Color' => '#00FF00',
        'Name_E' => 'Example Class 2',
        'Name_ES' => 'Class ES 2',
        'Name_S' => 'S2',
        'Kind' => 2,
        'Mode' => 1,
        'count_round' => 4,
        'curr_round' => 2,
        'Curr_matchSeason' => '2024',
        'Sclass_pic' => 'example2.jpg',
        'ifstop' => 0,
        'Sclass_type' => 1,
        'count_group' => 2,
        'Bf_simply_disp' => 1,
        'sclass_sequence' => 2,
        'InfoID' => 2,
        'Bf_IfDisp' => 1,
        'ModifyTime' => current_time('mysql'),
        'BeginSeason' => '2024/01',
        'subSclassID' => 0,
        'ifHaveSub' => 0,
        'ifSort' => 1,
        'ifHavePaper' => 1,
        'ifShowScore' => 1,
        'rank_matchSeason' => '2024'
    ),
    array(
        'SclassID' => 3,
        'Color' => '#0000FF',
        'Name_E' => 'Example Class 3',
        'Name_ES' => 'Class ES 3',
        'Name_S' => 'S3',
        'Kind' => 3,
        'Mode' => 1,
        'count_round' => 5,
        'curr_round' => 3,
        'Curr_matchSeason' => '2024',
        'Sclass_pic' => 'example3.jpg',
        'ifstop' => 0,
        'Sclass_type' => 1,
        'count_group' => 2,
        'Bf_simply_disp' => 1,
        'sclass_sequence' => 3,
        'InfoID' => 3,
        'Bf_IfDisp' => 1,
        'ModifyTime' => current_time('mysql'),
        'BeginSeason' => '2024/01',
        'subSclassID' => 0,
        'ifHaveSub' => 0,
        'ifSort' => 1,
        'ifHavePaper' => 1,
        'ifShowScore' => 1,
        'rank_matchSeason' => '2024'
    ),
    array(
        'SclassID' => 4,
        'Color' => '#FF00FF',
        'Name_E' => 'Example Class 4',
        'Name_ES' => 'Class ES 4',
        'Name_S' => 'S4',
        'Kind' => 4,
        'Mode' => 1,
        'count_round' => 6,
        'curr_round' => 4,
        'Curr_matchSeason' => '2024',
        'Sclass_pic' => 'example4.jpg',
        'ifstop' => 0,
        'Sclass_type' => 1,
        'count_group' => 2,
        'Bf_simply_disp' => 1,
        'sclass_sequence' => 4,
        'InfoID' => 4,
        'Bf_IfDisp' => 1,
        'ModifyTime' => current_time('mysql'),
        'BeginSeason' => '2024/01',
        'subSclassID' => 0,
        'ifHaveSub' => 0,
        'ifSort' => 1,
        'ifHavePaper' => 1,
        'ifShowScore' => 1,
        'rank_matchSeason' => '2024'
    ),
    array(
        'SclassID' => 5,
        'Color' => '#FFFF00',
        'Name_E' => 'Example Class 5',
        'Name_ES' => 'Class ES 5',
        'Name_S' => 'S5',
        'Kind' => 5,
        'Mode' => 1,
        'count_round' => 7,
        'curr_round' => 5,
        'Curr_matchSeason' => '2024',
        'Sclass_pic' => 'example5.jpg',
        'ifstop' => 0,
        'Sclass_type' => 1,
        'count_group' => 2,
        'Bf_simply_disp' => 1,
        'sclass_sequence' => 5,
        'InfoID' => 5,
        'Bf_IfDisp' => 1,
        'ModifyTime' => current_time('mysql'),
        'BeginSeason' => '2024/01',
        'subSclassID' => 0,
        'ifHaveSub' => 0,
        'ifSort' => 1,
        'ifHavePaper' => 1,
        'ifShowScore' => 1,
        'rank_matchSeason' => '2024'
    ),
);

// Thực hiện truy vấn INSERT cho mỗi dữ liệu mẫu
foreach ($data_to_insert as $data) {
    $wpdb->insert($table_name, $data);

    // Kiểm tra lỗi
    if ($wpdb->last_error) {
        echo "Lỗi: " . $wpdb->last_error;
    } else {
        echo "Dữ liệu đã được thêm thành công!<br>";
    }
}
