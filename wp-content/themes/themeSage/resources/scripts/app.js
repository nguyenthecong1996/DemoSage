import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

console.log(jsData)

function checkTimeStartMatch(params) {
  var matchTimeStr = params
  // var matchTime = new Date(matchTimeStr);
  // var currentTime = new Date();
  var matchTime = new Date('2024-01-20 16:00:00');
  var currentTime = new Date('2024-01-20 16:25:00');
  
  if (currentTime >= matchTime) {
    if (currentTime.getTime() - matchTime.getTime() > 45 * 60 * 1000) {
      matchTime.setMinutes(matchTime.getMinutes() + 90);
  
      // Tính số phút chênh lệch
      var minutesDifference = Math.floor((matchTime - currentTime) / (1000 * 60));
  
      console.log("Đang ở hiệp 2 và còn " + minutesDifference + " phút để kết thúc trận đấu.");

      return minutesDifference + 45;
    } else {
      var minutesPlayed = Math.floor((currentTime - matchTime) / (1000 * 60));
       return minutesPlayed;
    }
  } else {
    return 'Chưa diễn ra';
  }
}

function splitString(i) {
  let inputString = i;
  let parts = inputString.split('/');
  
  let valueBeforeSlash = parts;
  return valueBeforeSlash
}


$(document).ready(function() {
  function createTable(tableType) {
    
    var tableHTML = '<table class="table-auto">';

    switch (tableType) {
      case 'all':
        tableHTML += `<table class="table-auto">`;
        for (let x in jsData) {
          tableHTML += `<thead>
            <tr>
              <th colspan="4"><i class="fa-regular fa-star text-gray-400 px-2"></i> <span class="text-gray-400"><span class="fi fi-gr"></span> ${splitString(x)[0]}:</span><span class="font-semibold"> ${splitString(x)[1]}</span></th>
            </tr>
          </thead>
          <tbody class="text-gray-400">`;
          for (let i in jsData[x]) {
            tableHTML += `
              <tr class="text-gray-400">
                <td><i class="fa-regular fa-star px-2"></i>${jsData[x][i].match_time_start}</td>
                <td class="text-red-700 w-[10%] text-center">${checkTimeStartMatch(jsData[x][i].MatchTime)}'</td>
                <td class="text-center text-slate-600">
                  <span>
                    <span>${jsData[x][i].teamA}</span> <span class="fi fi-gr"></span>
                  </span>
                  <span class="text-red-700 w-[10%] text-center px-5">${parseInt(jsData[x][i].HomeScore) + parseInt(jsData[x][i].HomeHalfScore)} - ${parseInt(jsData[x][i].GuestScore) + parseInt(jsData[x][i].GuestHalfScore)}</span>
                  <span>
                    <span class="fi fi-gr"></span> <span>${jsData[x][i].teamB} </span>
                  </span>
                </td>
                <td>HT 1-0</td>
              </tr>
            </tbody>`;
          }
        }
        tableHTML += `</table>`;
      break;
      case 'live':
        tableHTML += `<table class="table-auto">
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
      </table>`;
      break;
      case 'finished':
        tableHTML += `<table class="table-auto">
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
      </table>`;
      break;
      case 'schedule':  
      tableHTML += `<table class="table-auto">
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
      </table>`;
      break;  
      default:
        break;
    }

    tableHTML += '</table>';
    return tableHTML;
}

  $('.create-table-btn').on('click', function() {
    var tableType = $(this).data('table-type');
    var tableHTML = createTable(tableType);
    $('.create-table-btn').parent().removeClass('bg-red-700 text-white').addClass('bg-gray-300 text-gray-700');

    $(this).parent().addClass('bg-red-700 text-white').removeClass('bg-gray-300 text-gray-700')
    $('.table-container').html(tableHTML);
  });

});
