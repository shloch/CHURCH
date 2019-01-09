
$(document).ready(function() {

  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    defaultDate: '2019-01-01',
    navLinks: true, // can click day/week names to navigate views
    //selectable: true,
    selectHelper: true,
    select: function(start, end) {
      var title = prompt('Event Title:');
      var eventData;
      if (title) {
        eventData = {
          title: title,
          start: start,
          end: end
        };
        $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
      }
      $('#calendar').fullCalendar('unselect');
    },
    editable: true,
    eventLimit: true, // allow "more" link when too many events
    events: [
      {
        title: 'Mess:click pour infos',
        url: 'messEvenement.html',
        start: '2019-01-06',
        color: 'green'
      },
      {
        title: 'Mess:click pour infos',
        url: 'messEvenement.html',
        start: '2019-01-13',
        color: 'green'
      },
      {
        id: 999,
        title: 'Evenement regulier',
        start: '2019-01-09',
        color: 'hotpink'
      },
      {
        id: 999,
        title: 'Evenement regulier',
        start: '2019-01-26',
        color: 'hotpink'
      },
      {
        title: 'Mess:click pour infos',
        url: 'messEvenement.html',
        start: '2019-01-20',
        color: 'green'
      },
      {
        title: 'Mess:click pour infos',
        url: 'messEvenement.html',
        start: '2019-01-27',
        color: 'green'
      },
      {
        title: 'Autres evenement',
        start: '2019-01-17',
        color: 'puple'
      },
      {
        title: 'Autres evenement',
        start: '2019-01-21',
        color: 'puple'
      },
      {
        title: 'Autres evenement',
        start: '2019-01-05',
        color: 'puple'
      },
      {
        title: 'Dinner',
        start: '2018-03-12T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2018-03-13T07:00:00'
      },
      {
        title: 'Click for Google',
        url: 'main.html',
        start: '2018-03-28'
      }
    ]
  });

});
