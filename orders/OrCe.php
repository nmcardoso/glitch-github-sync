<!--Get contents of OrCe from forum-->
<script>
	fetch("https://scratchdb.lefty.one/v2/forum/post/4594238").then(response => response.json()).then(json => { //get the post content
		let OrCe = json.content.html; //get only the html
		let OrCeDiv = document.createElement("div");
                OrCeDiv.innerHTML = OrCe;
                document.body.appendChild(OrCeDiv);
        });
</script>
