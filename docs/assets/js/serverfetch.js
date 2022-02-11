<script>
	$(function() {
		$('table.servers tbody tr').not('.loading').not('.template').remove();
		$('table.servers tbody tr.loading').show();

			$.ajax({
			type: "GET",
			url: "http://scraper.aq2world.com/servers",
			dataType: "json",
			success: function(data){
				$('table.servers tbody tr.loading').hide();
				var table = $('table.servers tbody');
				var template = $('table.servers tr.template');

				for (var k in data) {
					var row = data[k];
					var self = template.clone().css({ display: 'table-row'}).removeClass('template');

					if (row.clients > 0) {
						self.addClass('active');
					}

					self.find('.hostname img').attr('src', 'docs/assets/img/flags/' + row.country + '.gif').attr('alt', row.country).attr('title', row.country);
					self.find('.hostname span').text(row.name);
					self.find('.address').text(row.address + ':' + row.port);
					self.find('.players').text(row.numplayers + ' / ' + row.maxplayers);
					self.find('.map').text(row.map);
					self.appendTo(table);
				}
			}
		});
	});
</script>
