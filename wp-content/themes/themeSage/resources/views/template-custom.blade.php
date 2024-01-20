{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
<?php

global $wpdb;    
$results = $wpdb->get_results("SELECT 
                              wp_sclass.Name_E as sclass_Name_E, wp_sclass.Name_S,
                              (SELECT Name_E FROM wp_team WHERE TeamID = wp_schedule.HomeTeamID) AS teamA,
                              (SELECT Name_E FROM wp_team WHERE TeamID = wp_schedule.GuestTeamID) AS teamB,
                               wp_sclass.SclassID, wp_schedule.HomeScore, wp_schedule.GuestScore, wp_schedule.HomeHalfScore, wp_schedule.GuestHalfScore,
                               wp_schedule.MatchTime, wp_schedule.MatchTime2,
                               TIME_FORMAT(wp_schedule.MatchTime, '%H:%i') AS match_time_start
                            FROM wp_schedule 
                            INNER JOIN wp_sclass ON wp_schedule.ScheduleID=wp_sclass.SclassID
                            INNER JOIN wp_team ON wp_sclass.SClassID=wp_team.TeamID");
  
$scheduleArray = array();

foreach ($results as $result) {
    $sclassID = $result->SclassID;
        $scheduleArray[$result->sclass_Name_E.'/'.$result->Name_S][] = (object) array(
            'sclass_Name_E' => $result->sclass_Name_E,
            'Name_S' => $result->Name_S,
            'teamA' => $result->teamA,
            'teamB' => $result->teamB,
            'HomeScore' => $result->HomeScore,
            'GuestScore' => $result->GuestScore,
            'HomeHalfScore' => $result->HomeHalfScore,
            'GuestHalfScore' => $result->GuestHalfScore,
            'MatchTime' => $result->MatchTime,
            'MatchTime2' => $result->MatchTime2,
            'match_time_start' => $result->match_time_start
        );
}

  ?>
  <div class="container">
    <div class="flex gap-4">
      <x-button class="text-gray-700 bg-gray-300 px-3 py-2 rounded-md">
        <button class="create-table-btn" data-table-type="all">Tat ca</button>
      </x-button>
      <x-button class="text-gray-700 bg-gray-300 px-3 py-2 rounded-md">
        <button class="create-table-btn" data-table-type="live"><i class="fas fa-stream"></i> Truc tiep(26)</button>
      </x-button>
      <x-button class="text-gray-700 bg-gray-300 px-3 py-2 rounded-md">
        <button class="create-table-btn" data-table-type="finished">Da ket thuc</button>
      </x-button>
      <x-button class="text-gray-700 bg-gray-300 px-3 py-2 rounded-md">
        <button class="create-table-btn" data-table-type="schedule">Lich dau</button>
      </x-button>
    </div>

    <x-hello class="my-5 table-container" >
    </x-hello>
  </div>

  <script>
    window.jsData = <?php echo json_encode($scheduleArray) ?>;
  </script>
@endsection
