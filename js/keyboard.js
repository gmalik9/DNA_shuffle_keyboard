$(function(){
	var $write = $('#write'),
		shift = false,
		capslock = false;
	var $write2 = $('#write2');
	
	$('#keyboard button').click(function(){
		var $this = $(this),
			character = $this.html(); // If it's a lowercase letter, nothing happens to this variable
		
		// Shift keys
		if ($this.hasClass('left-shift') || $this.hasClass('right-shift')) {
			$('.letter').toggleClass('uppercase');
			$('.symbol span').toggle();
			
			shift = (shift === true) ? false : true;
			capslock = false;
			return false;
		}
		
		// Caps lock
		if ($this.hasClass('capslock')) {
			$('.letter').toggleClass('uppercase');
			capslock = true;
			return false;
		}
		
		// Delete
		if ($this.hasClass('delete')) {
			var html = $write.html();
			var html2 = $write2.html();
			
			$write.html(html.substr(0, html.length - 5));
			$write2.html(html2.substr(0, html2.length - 3));
			return false;
		}
		
		// Special characters
		if ($this.hasClass('symbol')) character = $('span:visible', $this).html();
		if ($this.hasClass('space')) character = ' ';
		if ($this.hasClass('tab')) character = "\t";
		if ($this.hasClass('return')) character = "\n";
		
		// Uppercase letter
		if ($this.hasClass('uppercase')) character = character.toUpperCase();
		
		// Remove shift once a key is clicked.
		if (shift === true) {
			$('.symbol span').toggle();
			if (capslock === false) $('.letter').toggleClass('uppercase');
			
			shift = false;
		}
		
		// Add the character
		//$write.html($write.html() + character);
		//alert(character);
		$.ajax({
    	type:"post",
    	// url:"http://localhost/~gmalik9/DNA%20Keyboard/services/dna_parser.php",
    	url:"../dna_with_shuffle/services/dna_parser.php",
    	data:{
    		chr:character
    	},
    	success:function(result){
    		var dna = result.split(' ');
      $("#write").append(dna[0]+' '),
      $("#write2").append(dna[1]+' ')

      //$("#div2").val(result);
      //jQ_append("#div2", result);
    }});
	});
});
