<?php

global $wpdb;
$table_name = $wpdb->prefix . 'team';

$charset_collate = $wpdb->get_charset_collate();

$sql = "CREATE TABLE $table_name (
    TeamID int,
    Kind smallint,
    SClassID int,
    Name_E nchar(50),
    Found_date char(20),
    Capacity int,
    Flag char(50),
    address char(150),
    URL char(80),
    GuestPoloShirt char(50),
    HomePoloShirt char(50),
    ModifyTime datetime,
    introduceEn varchar(255),
    AreaEn nchar(30),
    GymnasiumEn nvarchar(50),
    VenuesID int,
    Conference tinyint,
    isNational bit
) $charset_collate;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);

// Dữ liệu mẫu
$data_to_insert = array(
    array(
        'TeamID' => 1,
        'Kind' => 1,
        'SClassID' => 1,
        'Name_E' => 'Team A',
        'Found_date' => '2024-01-01',
        'Capacity' => 50000,
        'Flag' => 'team_a_flag.jpg',
        'address' => '123 Main Street, City',
        'URL' => 'http://www.team-a.com',
        'GuestPoloShirt' => 'blue',
        'HomePoloShirt' => 'red',
        'ModifyTime' => current_time('mysql'),
        'introduceEn' => 'Team A is a professional sports team.',
        'AreaEn' => 'North',
        'GymnasiumEn' => 'Sports Arena',
        'VenuesID' => 1,
        'Conference' => 1,
        'isNational' => 1,
    ),
    array(
        'TeamID' => 2,
        'Kind' => 1,
        'SClassID' => 1,
        'Name_E' => 'Team B',
        'Found_date' => '2024-02-01',
        'Capacity' => 45000,
        'Flag' => 'team_b_flag.jpg',
        'address' => '456 Oak Street, City',
        'URL' => 'http://www.team-b.com',
        'GuestPoloShirt' => 'green',
        'HomePoloShirt' => 'yellow',
        'ModifyTime' => current_time('mysql'),
        'introduceEn' => 'Team B is another professional sports team.',
        'AreaEn' => 'South',
        'GymnasiumEn' => 'Sports Dome',
        'VenuesID' => 2,
        'Conference' => 1,
        'isNational' => 1,
    ),
    array(
        'TeamID' => 3,
        'Kind' => 1,
        'SClassID' => 1,
        'Name_E' => 'Team C',
        'Found_date' => '2024-03-01',
        'Capacity' => 48000,
        'Flag' => 'team_c_flag.jpg',
        'address' => '789 Pine Street, City',
        'URL' => 'http://www.team-c.com',
        'GuestPoloShirt' => 'yellow',
        'HomePoloShirt' => 'green',
        'ModifyTime' => current_time('mysql'),
        'introduceEn' => 'Team C is yet another professional sports team.',
        'AreaEn' => 'West',
        'GymnasiumEn' => 'Sports Hall',
        'VenuesID' => 3,
        'Conference' => 1,
        'isNational' => 1,
    ),
    array(
        'TeamID' => 4,
        'Kind' => 1,
        'SClassID' => 2,
        'Name_E' => 'Team D',
        'Found_date' => '2024-04-01',
        'Capacity' => 52000,
        'Flag' => 'team_d_flag.jpg',
        'address' => '101 Elm Street, City',
        'URL' => 'http://www.team-d.com',
        'GuestPoloShirt' => 'red',
        'HomePoloShirt' => 'blue',
        'ModifyTime' => current_time('mysql'),
        'introduceEn' => 'Team D is a rival professional sports team.',
        'AreaEn' => 'East',
        'GymnasiumEn' => 'Sports Center',
        'VenuesID' => 4,
        'Conference' => 1,
        'isNational' => 1,
    ),
    array(
        'TeamID' => 5,
        'Kind' => 1,
        'SClassID' => 2,
        'Name_E' => 'Team E',
        'Found_date' => '2024-05-01',
        'Capacity' => 49000,
        'Flag' => 'team_e_flag.jpg',
        'address' => '202 Maple Street, City',
        'URL' => 'http://www.team-e.com',
        'GuestPoloShirt' => 'orange',
        'HomePoloShirt' => 'black',
        'ModifyTime' => current_time('mysql'),
        'introduceEn' => 'Team E is a newcomer to the professional sports scene.',
        'AreaEn' => 'Central',
        'GymnasiumEn' => 'Sports Complex',
        'VenuesID' => 5,
        'Conference' => 1,
        'isNational' => 1,
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
