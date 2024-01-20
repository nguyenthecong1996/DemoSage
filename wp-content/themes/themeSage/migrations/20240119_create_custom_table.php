<?php

global $wpdb;
$table_name = $wpdb->prefix . 'schedule';
$charset_collate = $wpdb->get_charset_collate();

$sql = "CREATE TABLE $table_name (
    ScheduleID int,
    SclassID int,
    MatchSeason char(10),
    round smallint,
    grouping char(10),
    HomeTeamID int,
    GuestTeamID int,
    Neutrality bit,
    MatchTime datetime,
    MatchTime2 datetime,
    MatchState smallint,
    WeatherIcon smallint,
    Temperature char(10),
    TV varchar(100),
    Umpire char(50),
    Visitor int,
    HomeScore smallint,
    GuestScore smallint,
    HomeHalfScore smallint,
    GuestHalfScore smallint,
    Home_Red smallint,
    Guest_Red smallint,
    Home_Yellow smallint,
    Guest_Yellow smallint,
    bf_changetime datetime,
    shangpan tinyint,
    grouping2 char(1),
    Explain_en varchar(255),
    bfShow bit,
    subSclassID int,
    Explainlist nvarchar(100),
    Home_OrderEn nvarchar(15),
    Guest_OrderEn nvarchar(15),
    VenuesID int,
    isGuessRed bit,
    isLive bit,
    homeCorner tinyint,
    homeCornerHalf tinyint,
    guestCorner tinyint,
    guestCornerHalf tinyint
) $charset_collate;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);

$data_to_insert = array(
    array(
        'ScheduleID' => 1,
        'SclassID' => 1,
        'HomeTeamID' => 2,
        'GuestTeamID' => 3,
        'HomeScore' => 2,
        'GuestScore' => 1,
        'HomeHalfScore' => 1,
        'GuestHalfScore' => 1,
        'MatchTime' => '2024-01-20 16:00:00',
        'MatchTime2' => '2024-01-20 16:55:00',
    ),
    array(
        'ScheduleID' => 2,
        'SclassID' => 1,
        'HomeTeamID' => 1,
        'GuestTeamID' => 2,
        'HomeScore' => 4,
        'GuestScore' => 1,
        'HomeHalfScore' => 1,
        'GuestHalfScore' => 1,
        'MatchTime' => '2024-01-20 16:30:00',
        'MatchTime2' => '2024-01-20 17:20:00',
    ),
    array(
        'ScheduleID' => 1,
        'SclassID' => 1,
        'HomeTeamID' => 3,
        'GuestTeamID' => 1,
        'HomeScore' => 0,
        'GuestScore' => 1,
        'HomeHalfScore' => 1,
        'GuestHalfScore' => 1,
        'MatchTime' => '2024-01-20 17:00:00',
        'MatchTime2' => '2024-01-20 17:55:00',
    ),
    array(
        'ScheduleID' => 1,
        'SclassID' => 2,
        'HomeTeamID' => 5,
        'GuestTeamID' => 4,
        'HomeScore' => 0,
        'GuestScore' => 1,
        'HomeHalfScore' => 1,
        'GuestHalfScore' => 1,
        'MatchTime' => '2024-01-20 18:00:00',
        'MatchTime2' => '2024-01-20 18:50:00',
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

