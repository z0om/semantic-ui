$('.tooltip').popup();

$(document).ready(function () {
	$('.ui.dropdown').dropdown();
});

$('.message .close')
.on('click', function () {
	$(this)
		.closest('.message')
		.transition('fade');
});

$('.card .dimmable').dimmer({
	on: 'hover'
});