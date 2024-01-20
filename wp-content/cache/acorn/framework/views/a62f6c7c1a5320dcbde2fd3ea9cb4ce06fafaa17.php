<?php $__env->startSection('content'); ?>
<!-- <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
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
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'text-gray-700 bg-gray-300 px-3 py-2 rounded-md']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-gray-700 bg-gray-300 px-3 py-2 rounded-md']); ?>
        <button class="create-table-btn" data-table-type="all">Tat ca</button>
       <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'text-gray-700 bg-gray-300 px-3 py-2 rounded-md']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-gray-700 bg-gray-300 px-3 py-2 rounded-md']); ?>
        <button class="create-table-btn" data-table-type="live"><i class="fas fa-stream"></i> Truc tiep(26)</button>
       <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'text-gray-700 bg-gray-300 px-3 py-2 rounded-md']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-gray-700 bg-gray-300 px-3 py-2 rounded-md']); ?>
        <button class="create-table-btn" data-table-type="finished">Da ket thuc</button>
       <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
      <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['class' => 'text-gray-700 bg-gray-300 px-3 py-2 rounded-md']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-gray-700 bg-gray-300 px-3 py-2 rounded-md']); ?>
        <button class="create-table-btn" data-table-type="schedule">Lich dau</button>
       <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.hello','data' => ['class' => 'my-5 table-container']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('hello'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'my-5 table-container']); ?>
        <!-- <table class="table-auto">
          <thead>
            <tr>
              <th colspan="4"><i class="fa-regular fa-star text-gray-400 px-2"></i> <span class="text-gray-400"><span class="fi fi-gr"></span> Algeria:</span><span class="font-semibold"> Giai bong da nu</span></th>
            </tr>
          </thead>
          <tbody class="text-gray-400">
            <tr>
              <td><i class="fa-regular fa-star px-2"></i> 16:00</td>
              <td class="text-red-700 w-[10%] text-center">56'</td>
              <td class="text-center text-slate-600">
                <span>
                  <span>CLB nu Akbou </span> <span class="fi fi-gr"></span>
                </span>
                <span class="text-red-700 w-[10%] text-center px-5">1 - 0</span>
                <span>
                  <span class="fi fi-gr"></span> <span>Afak </span>
                </span>
              </td>
              <td>HT 1-0</td>
            </tr>
            <tr>
              <td><i class="fa-regular fa-star px-2"></i> 16:00</td>
              <td class="text-red-700 w-[10%] text-center">Nghi giua hiep</td>
              <td class="text-center text-slate-600">
                <span>
                  <span>CLB nu Akbou </span> <span class="fi fi-gr"></span>
                </span>
                <span class="text-red-700 w-[10%] text-center px-5">1 - 0</span>
                <span>
                  <span class="fi fi-gr"></span> <span>Afak </span>
                </span>
              </td>
              <td>HT 1-0</td>
            </tr>
            <tr>
              <td><i class="fa-regular fa-star px-2"></i> 16:00</td>
              <td class="text-red-700 w-[10%] text-center">56'</td>
              <td class="text-center text-slate-600">
                <span>
                  <span>CLB nu Akbou </span> <span class="fi fi-gr"></span>
                </span>
                <span class="text-red-700 w-[10%] text-center px-5">1 - 0</span>
                <span>
                  <span class="fi fi-gr"></span> <span>Afak </span>
                </span>
              </td>
              <td>HT 1-0</td>
            </tr>
          </tbody>
            <thead>
            <tr>
              <th colspan="4"><i class="fa-regular fa-star px-2 text-gray-400"></i> <span class="text-gray-400"><span class="fi fi-gr"></span> Algeria:</span><span class="font-semibold"> Giai bong da nu</span></th>
            </tr>
          </thead>
          <tbody class="text-gray-400">
            <tr>
              <td><i class="fa-regular fa-star px-2"></i> 16:00</td>
              <td class="text-red-700 w-[10%] text-center">56'</td>
              <td class="text-center text-slate-600">
                <span>
                  <span>CLB nu Akbou </span> <span class="fi fi-gr"></span>
                </span>
                <span class="text-red-700 w-[10%] text-center px-5">1 - 0</span>
                <span>
                  <span class="fi fi-gr"></span> <span>Afak </span>
                </span>
              </td>
              <td>HT 1-0</td>
            </tr>
            </tbody>
            <thead>
            <tr>
              <th colspan="4"><i class="fa-regular fa-star px-2 text-gray-400"></i> <span class="text-gray-400"><span class="fi fi-gr"></span> Algeria:</span><span class="font-semibold"> Giai bong da nu</span></th>
            </tr>
          </thead>
          <tbody class="text-gray-400">
            <tr>
              <td><i class="fa-regular fa-star px-2"></i> 16:00</td>
              <td class="text-red-700 w-[10%] text-center">56'</td>
              <td class="text-center text-slate-600">
                <span>
                  <span>CLB nu Akbou </span> <span class="fi fi-gr"></span>
                </span>
                <span class="text-red-700 w-[10%] text-center px-5">1 - 0</span>
                <span>
                  <span class="fi fi-gr"></span> <span>Afak </span>
                </span>
              </td>
              <td>HT 1-0</td>
            </tr>
          </tbody>
        </table> -->
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
  </div>
  
  <!-- <?php if(! have_posts()): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'warning']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning']); ?>
      <?php echo __('Sorry, no results were found.', 'sage'); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <?php echo get_search_form(false); ?>

  <?php endif; ?> -->

  <!-- <?php while(have_posts()): ?> <?php (the_post()); ?>
    <?php echo $__env->first(['partials.content-' . get_post_type(), 'partials.content'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endwhile; ?>

  <?php echo get_the_posts_navigation(); ?> -->
  <script>
    window.jsData = <?php echo json_encode($scheduleArray) ?>;
  </script>
<?php $__env->stopSection(); ?>

<!-- <?php $__env->startSection('sidebar'); ?>
  <?php echo $__env->make('sections.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?> -->

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wp-content/themes/themeSage/resources/views/index.blade.php ENDPATH**/ ?>