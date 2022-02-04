$(function() {
	$('table.servers tbody tr').not('.loading').not('.template').remove();
	$('table.servers tbody tr.loading').show();

	$.getJSON('servers?game=action&matchmode=0', function(data) {
		$('table.servers tbody tr.loading').hide();
		var table = $('table.servers tbody');
		var template = $('table.servers tr.template');

		for (var k in data) {
			var row = data[k];
			var self = template.clone().css({ display: 'table-row'}).removeClass('template');

			if (row.clients > 0) {
				self.addClass('active');
			}

			self.find('.hostname img').attr('src', 'img/flags/' + row.country.toLowerCase() + '.png').attr('alt', row.country).attr('title', row.country);
			self.find('.hostname span').text(row.hostname);
			self.find('.address').text(row.ip + ':' + row.port);
			self.find('.players').text(row.clients + ' / ' + row.maxclients);
			self.find('.map').text(row.mapname);
			self.find('.connect a').attr('href', row.uri);
			self.appendTo(table);
		}
	});
});
