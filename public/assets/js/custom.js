// prediction

// events
$('.accordian-body').on('show.bs.collapse', function () {
    $(this).closest("events-table")
        .find(".collapse.in")
        .not(this)
        .collapse('toggle')
})