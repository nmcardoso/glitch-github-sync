<!--Get contents of OrCe from forum-->
<script>
	fetch("https://scratchdb.lefty.one/v2/forum/post/4594238").then(response => response.json()).then(json => { //get the post content
		let OrCe = json.content.html; //get only the html
		let OrCeDiv = document.createElement("div");
                OrCeDiv.innerHTML = OrCe;
                document.body.appendChild(OrCeDiv);
        });
</script>
<!--Create scratchblocks in case they are used in an order form - line 13: call parser file. line 14: call scratchblock styles file. lines 15-19: set parser settings-->	
<script src="https://scratchblocks.github.io/js/scratchblocks-v3.4-min.js"></script>	
<link rel="stylesheet" href="../css/scratchblocks.css">	
<script>	
	scratchblocks.renderMatching('pre.blocks', {	
		style: 'scratch3', //Optional, defaults to 'scratch2'.	
		languages: ['en'], //Optional, defaults to ['en'].	
		inline: false, //Optional, defaults to false.	
	});	
</script>
<!-- code blocks css -->
<link rel="stylesheet" href="https://cdn.scratch.mit.edu/scratchr2/static/__f4f5f6fe9f78c5d67e8f699f71f746dd__//djangobb_forum/css/pygments.css">
<!-- bbcode css -->
<link rel="stylesheet" href="../css/bbcode.css">
