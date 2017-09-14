<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>DNA Keyboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
// http://yelotofu.com/labs/jquery/snippets/shuffle/demo.html

jQuery(function($){
    // unordered list
    $('button.item').click(function(){
        // $('ul').shuffle();
        $('#cont').shuffle();
    });

    $('button.item').click(function(){
        // $('ul').shuffle();
        $('#cont2').shuffle();
    });

    $('button.item').click(function(){
        // $('ul').shuffle();
        $('#cont3').shuffle();
    });

    $('button.item').click(function(){
        // $('ul').shuffle();
        $('#cont4').shuffle();
    });
    
    // a series of paragraphs
    $('button.div').click(function(){
        // $('#container').shuffle();
        $('#cont').shuffle();
    });

    // an array
    var arr = [1,2,3,4,5,6];
    $('#array').text(arr.join(', '));
    $('button.array').click(function(){
        arr = $.shuffle(arr);
        $('#array').text(arr.join(', '));
    });
});


(function($){

    $.fn.shuffle = function() {
        return this.each(function(){
            var items = $(this).children().clone(true);
            return (items.length) ? $(this).html($.shuffle(items)) : this;
        });
    }
    
    $.shuffle = function(arr) {
        for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i), x = arr[--i], arr[i] = arr[j], arr[j] = x);
        return arr;
    }
    
})(jQuery);


/*$(document).ready(function(){
	function jQ_append(id_of_input, text){
    $(id_of_input).val($(id_of_input).val() + text);
}

  $("button").click(function(){
  	var val1=$(this);
  	//alert(val1.val());
    $.ajax({
    	type:"post",
    	url:"http://localhost/DNA%20Keyboard/services/dna_parser.php",
    	data:{
    		chr:val1.val()
    	},
    	success:function(result){
      $("#write").append(result),
      //$("#div2").val(result);
      jQ_append("#div2", result);
    }});
  });
});*/
</script>



</head>
<body>

<div id="container">
<center><button class="item">Shuffle Keyboard</button></center>
	<textarea id="write" rows="6" cols="30" placeholder='DNA Sequence'></textarea>
	<textarea id="write2" rows="6" cols="30" placeholder='Protein Sequence'></textarea>
	<ul id="keyboard">

		<div id="cont">
		<button id="word" class="symbol"><span class="off">`</span><span class="on">~</span></button>
		<button id="word" class="symbol"><span class="off">1</span><span class="on">!</span></button>
		<button id="word" class="symbol"><span class="off">2</span><span class="on">@</span></button>
		<button id="word" class="symbol"><span class="off">3</span><span class="on">#</span></button>
		<button id="word" class="symbol"><span class="off">4</span><span class="on">$</span></button>
		<button id="word" class="symbol"><span class="off">5</span><span class="on">%</span></button>
		<button id="word" class="symbol"><span class="off">6</span><span class="on">^</span></button>
		<button id="word" class="symbol"><span class="off">7</span><span class="on">&amp;</span></button>
		<button id="word" class="symbol"><span class="off">8</span><span class="on">*</span></button>
		<button id="word" class="symbol"><span class="off">9</span><span class="on">(</span></button>
		<button id="word" class="symbol"><span class="off">0</span><span class="on">)</span></button>
		<button id="word" class="symbol"><span class="off">-</span><span class="on">_</span></button>
		<button id="word" class="symbol"><span class="off">=</span><span class="on">+</span></button>
		</div>

		<button class="delete lastitem">delete</button>
		<button id="word" class="tab">tab</button>
		
		<div id="cont2">

		<button id="word" class="letter" value="q">q</button>
		<button id="word" class="letter">w</button>
		<button id="word" class="letter">e</button>
		<button id="word" class="letter">r</button>
		<button id="word" class="letter">t</button>
		<button id="word" class="letter">y</button>
		<button id="word" class="letter">u</button>
		<button id="word" class="letter">i</button>
		<button id="word" class="letter">o</button>
		<button id="word" class="letter">p</button>
		<button id="word" class="symbol"><span class="off">[</span><span class="on">{</span></button>
		<button id="word" class="symbol"><span class="off">]</span><span class="on">}</span></button>
		<button id="word" class="symbol lastitem"><span class="off">\</span><span class="on">|</span></button>
		
		</div> <!-- Comment this line 1 of 2 -->
		
		<button class="capslock">caps lock</button>
		
		<div id="cont3"> <!-- Comment this line 2 of 2 -->

		<button id="word" class="letter">a</button>
		<button id="word" class="letter">s</button>
		<button id="word" class="letter">d</button>
		<button id="word" class="letter">f</button>
		<button id="word" class="letter">g</button>
		<button id="word" class="letter">h</button>
		<button id="word" class="letter">j</button>
		<button id="word" class="letter">k</button>
		<button id="word" class="letter">l</button>
		<button id="word" class="symbol"><span class="off">;</span><span class="on">:</span></button>
		<button id="word" class="symbol"><span class="off">'</span><span class="on">&quot;</span></button>
		</div>

		<button id="word" class="return lastitem tooltips" disabled="disabled">return<span>return key disabled in passwords</span></button>
		<button class="left-shift">shift</button>
		
		<div id="cont4">

		<button id="word" class="letter">z</button>
		<button id="word" class="letter">x</button>
		<button id="word" class="letter">c</button>
		<button id="word" class="letter">v</button>
		<button id="word" class="letter">b</button>
		<button id="word" class="letter">n</button>
		<button id="word" class="letter">m</button>
		<button id="word" class="symbol"><span class="off">,</span><span class="on">&lt;</span></button>
		<button id="word" class="symbol"><span class="off">.</span><span class="on">&gt;</span></button>
		<button id="word" class="symbol"><span class="off">/</span><span class="on">?</span></button>
		
		</div>

		<button class="right-shift lastitem">shift</button>


		<button id="word" class="space lastitem">space</button>
	</ul>
</div>

<!-- <button class="item">Shuffle Keyboard</button> -->

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> -->
<script type="text/javascript" src="js/keyboard.js"></script>
</body>
</html>