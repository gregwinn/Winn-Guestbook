$('document').ready(function() {

	// Fix IE z-index

		/*var zIndexNumber = 1000;
		$('div').each(function() {
			$(this).css('zIndex', zIndexNumber);
			zIndexNumber -= 10;
		});*/
		
	// Push footer down
	
		$('#container').append('<div id="push" />');

	// Datepicker
	
		$('.datepicker').datepicker({showAnim: 'fadeIn'});
		$('.datepicker').after('<img class="datepickericon" src="images/icons/calendar.png" alt="calendar" />');
		
	// WYSIWYG
	
		$('.wysiwyg').wysiwyg();
		
	// Custom <select>
	
		$('select').wrap('<div class="my-skinnable-select" />');
	
		$(document).ready(function() {
    		$('.my-skinnable-select').each(function(i) {
        		selectContainer = $(this);
        	    selectContainer.removeClass('my-skinnable-select');
		        selectContainer.addClass('skinned-select');
		        selectContainer.children().before('<div class="select-text">a</div>').each(function() {
		        	for (var i = 0; i < this.options.length; i++) {
		        		if(this.options[i].selected == true) {
		        			$(this).prev().text(this.options[i].innerHTML);
		        		}
		        	}
          		});
        	
	        	var parentTextObj = selectContainer.children().prev();
	    	    selectContainer.children().click(function() {
		        	parentTextObj.text(this.options[this.selectedIndex].innerHTML);
				})
			});
  		});
  		
  	// Text inside textfield
  		var active_color = '#000'; // Color of user provided text
		var inactive_color = '#969696'; // Color of default text
	
		$('input[type="text"], input[type="password"]').each(function() {
			var value = $(this).parent().children('label').html();

			if($(this).attr("value") == "") {
				$(this).attr("value", value);
				$(this).css("color", inactive_color);
			}
		});
  	
  		var default_values = new Array();
  		
  		$('input[type="text"], input[type="password"]').focus(function() {
    		if (!default_values[this.id]) {
      			default_values[this.id] = this.value;
    		}
    		if (this.value == default_values[this.id]) {
      			this.value = '';
      			this.style.color = active_color;
    		}
    		
    		$(this).blur(function() {
      			if (this.value == '') {
        			this.style.color = inactive_color;
        			this.value = default_values[this.id];
      			}
    		});
  		});

	// Modal box
	
		jQuery.fn.fadeToggle = function(speed, easing, callback) { // Custom fade toggle function
   			return this.animate({opacity: 'toggle'}, speed, easing, callback); 
		}; 
		
		$('a[rel="modal"]').each(function() {
			var id = $(this).attr("href");
			var modalbox = $(id).html();
			$(this).wrap('<div class="modal" />');
			$(this).parent().append(modalbox);
			$(id).remove();
		});
		
		$('a[rel="modal"]').click(function() {
			$('.modalbox').fadeOut(200);
			$(this).parent().children('.modalbox').fadeToggle(200);
			$('#overlay').show();
			return false;
		});
		
		$('body').append('<div id="overlay" />'); // Add overlay to DOM
	
		$('#overlay').click(function() { // When the overlay is clicked the mailbox will disappear
			$('#overlay').hide();
			$('.modalbox').fadeOut(200);
		});
		
	// Charts
		
		$('.bargraph').visualize({ // Create awesome charts!
			type: 'bar',
			height: '200px',
			colors: ['#005ba8','#1175c9','#92d5ea','#ee8310','#8d10ee','#5a3b16','#26a4ed','#f45a90','#e9e744'],
			appendTitle: false
		});
		
		$('.linegraph').visualize({ // Create awesome charts!
			type: 'line',
			height: '200px',
			lineWeight: 2,
			colors: ['#005ba8','#1175c9','#92d5ea','#ee8310','#8d10ee','#5a3b16','#26a4ed','#f45a90','#e9e744'],
			appendTitle: false
		});
		
		$('.areagraph').visualize({ // Create awesome charts!
			type: 'area',
			height: '200px',
			lineWeight: 1,
			colors: ['#005ba8','#1175c9','#92d5ea','#ee8310','#8d10ee','#5a3b16','#26a4ed','#f45a90','#e9e744'],
			appendTitle: false
		});
		
		$('.linegraph').hide(); // Hide original table
		$('.bargraph').hide();
		$('.areagraph').hide();

	// Navigation tabs with smooth transitions:
	
		$('#main-nav > li > ul').hide(); // Hide all subnavigation
		$('#main-nav > li > a.current').parent().children("ul").show(); // Show current subnavigation	
			
		$('#main-nav > li > a[href="#"]').click( // Click!
			function() {
				$(this).parent().siblings().children("a").removeClass('current'); // Remove .current class from all tabs
				$(this).addClass('current'); // Add class .current
				$(this).parent().siblings().children("ul").fadeOut(150); // Hide all subnavigation
				$(this).parent().children("ul").fadeIn(150); // Show current subnavigation
				return false;
			}
		);
		
	// Subtitle fix
	
		var subtitle = $('#content > h2');
		$('#header').append(subtitle);
		$('#content > h2').remove();
	
	// Content tabs:
		
		$('.content-box-header ul li:first-child a').addClass('current'); // Add .current to the first class
		$('.content-box .tab-content').hide(); // Hide all .tab-content divs
		$('.content-box .tab-content:first-child').show(); // Show default tabs
	
		$('.content-box-header ul li a').click(function() {
			$(this).parent().siblings().find("a").removeClass('current'); // Remove .current from all tabs
			$(this).addClass('current'); // Set tab to current
			var tabcontent = $(this).attr('href'); // Get link to requested tab
			$(tabcontent).siblings().hide(); // Hide all other .tab-content divs
			$(tabcontent).show(); // Show content div
			return false;
		});
		
	// Alternating table rows
	
		$('tbody tr').removeClass("alt-row"); // Remove all .alt-row classes
		$('tbody tr:even').addClass("alt-row"); // Add .alt-row to even table rows
		
	// Check-all
	
		$('thead th input[type="checkbox"]').click(function() { // Click a checkbox that's in the <thead>
			$(this).parent().parent().parent().parent().find("input[type='checkbox']").attr('checked', $(this).is(':checked')); // Find all checkboxes and check them if needed
		});
		
	// Tooltip-confirmation
	
		$('.confirmation').wrap('<div class="confirm" />');
	
		$('.confirm > a').click(function() {
			$('.tooltip').fadeOut(200, function() { // Remove all tooltips
				$(this).remove();
			});
			var link = $(this).parent().children("a").attr('href'); // Get the requested link
			$(this).parent().append('<div class="tooltip"><p>Are you sure?</p><a href="' + link + '">Yes</a> | <a href="#" class="close">No</a></div>'); // Adding the tooltip to the DOM
			
			$('.close').click(function() { // Closing the tooltip
				$('.tooltip').fadeOut(200, function() {
					$(this).remove();
				});
				return false;
			});

			$(this).parent().children('.tooltip').fadeIn(200);
			return false; // Make sure it doesn't follow the link immediately
		});
	
	// Collapse content boxes:
	
		$('.content-box-header h3').click(function() {
			if($(this).parent().parent().hasClass('closed')) {
				$(this).parent().parent().children('.content-box-content').show();
				$(this).parent().parent().removeClass('closed');
			} else {
				$(this).parent().parent().children('.content-box-content').hide();
				$(this).parent().parent().addClass('closed');
			}
		});

	// Close notifications:
	
		$('div.notification').click(function() {
			$(this).fadeOut(200, function() {
				$(this).hide();
			});
		});
		
	// Awesome tables with dynamically generated pagination
	
		$('table.pagination').each(function() {
			var perPage = $(this).attr("rel"); // Number of items per page
		
			$(this).children("tbody").children().hide(); // Hide all table-entries
			var childrenCount = $(this).children("tbody").children().size(); // Get total count of entries
			var pageCount = Math.ceil(childrenCount / perPage);
			
			$(this).find("tfoot tr td").append('<div class="pagination" />');
			$(this).find(".pagination").append('<a href="#first" rel="first">First</a>');
			
			for(var i = 0; i < pageCount; i++) {
				$(this).find(".pagination").append('<a href="#" class="graybutton pagelink" rel="' + (i + 1) + '">' + (i + 1) + '</a>');
			}
			
			$(this).find(".pagination").append('<a href="#last" rel="last">Last</a>');
			
			for(var i = 0; i < perPage; i++) { // Loop through entries
				$(this).children("tbody").children("tr:nth-child(" + (i + 1) + ")").show(); // Show requested entry
				$(this).find("tfoot .pagination a:nth-child(2)").addClass("active");
			}
			
			$(this).find('tfoot .pagination a[rel="first"]').click(function() {
				$(this).siblings().removeClass("active");
				$(this).siblings('a:nth-child(2)').addClass("active");
				
				$(this).parent().parent().parent().parent().parent().children("tbody").children().hide();
				
				for(var i = 0; i < perPage; i++) {
					$(this).parent().parent().parent().parent().parent().children("tbody").children("tr:nth-child(" + (i + 1) + ")").show();
				}
				return false;
			});
			
			$(this).find('tfoot .pagination a[rel="last"]').click(function() {
				$(this).siblings().removeClass("active");
				$(this).siblings('a:nth-child(' + (pageCount + 1) + ')').addClass("active");
				
				$(this).parent().parent().parent().parent().parent().children("tbody").children().hide();
				
				for(var i = 0; i < perPage; i++) {
					$(this).parent().parent().parent().parent().parent().children("tbody").children("tr:nth-child(" + (i + (pageCount - 1) * perPage + 1) + ")").show();
				}
				return false;
			});
			
			$(this).find('tfoot .pagination a.pagelink').click(function() {
				$(this).siblings().removeClass("active"); // Remove all .active classes
				$(this).addClass("active"); // Add class .active
				
				var offset = perPage * ($(this).attr("rel") - 1); // Define offset
			
				$(this).parent().parent().parent().parent().parent().children("tbody").children().hide(); // Hide all other entries
			
				for(var i = 0; i < perPage; i++) { // Loop required entries
					$(this).parent().parent().parent().parent().parent().children("tbody").children("tr:nth-child(" + (i + 1 + offset) + ")").show(); // Show requested entry
				}
				return false;
			});
		});
	
});