<!--BBCode Parser -  line 1: call parser file. line 2: choose bbcode to convert-->
<script src="https://cdn.jsdelivr.net/gh/wGEric/phpBB-BBCode-Javascript-Parser/bbcodeParser.min.js"></script>
<script>
	bbcodeParser.addBBCode("[b]{TEXT}[/b]", "<b>{TEXT}</b>"), bbcodeParser.addBBCode("[big]{TEXT}[/big]", '<p class="big">{TEXT}</p>'), bbcodeParser.addBBCode("[color={COLOR}]{TEXT}[/color]", '<span style="color:{COLOR}">{TEXT}</span>'), bbcodeParser.addBBCode("[small]{TEXT}[/small]", "<small>{TEXT}</small>"), bbcodeParser.addBBCode("[wiki]{SIMPLETEXT}[/wiki]", '<a href="https://en.scratch-wiki.info/wiki/Special:Search?search={SIMPLETEXT}">{SIMPLETEXT}</a>'), bbcodeParser.addBBCode("[wiki={SIMPLETEXT}]{TEXT}[/wiki]", '<a href="https://en.scratch-wiki.info/wiki/Special:Search?search={SIMPLETEXT}">{TEXT}</a>'), bbcodeParser.addBBCode("[wp={SIMPLETEXT}]{TEXT}[/wp]", '<a href="https://en.wikipedia.org/wiki/Special:Search?search={SIMPLETEXT}">{TEXT}</a>'), bbcodeParser.addBBCode("[wp]{SIMPLETEXT}[/wp]", '<a href="https://en.wikipedia.org/wiki/Special:Search?search={SIMPLETEXT}">{SIMPLETEXT}</a>'), bbcodeParser.addBBCode("[google]{SIMPLETEXT}[/google]", '<a href="http://www.google.com/search?hl=en&amp;q={SIMPLETEXT}&amp;btnG=Google+Search">{SIMPLETEXT}</a>'), bbcodeParser.addBBCode("[google={SIMPLETEXT}]{TEXT}[/google]", '<a href="http://www.google.com/search?hl=en&amp;q={SIMPLETEXT}&amp;btnG=Google+Search">{TEXT}</a>'), bbcodeParser.addBBCode("[dict={SIMPLETEXT}]{TEXT}[/dict]", '<a href="http://dictionary.reference.com/browse/{SIMPLETEXT}">{TEXT}</a>'), bbcodeParser.addBBCode("[dictionary]{SIMPLETEXT}[/dictionary]", '<a href="http://dictionary.reference.com/browse/{SIMPLETEXT}">{SIMPLETEXT}</a>'), bbcodeParser.addBBCode("[dictionary={SIMPLETEXT}]{TEXT}[/dictionary]", '<a href="http://dictionary.reference.com/browse/{SIMPLETEXT}">{TEXT}</a>'), bbcodeParser.addBBCode("[dict]{SIMPLETEXT}[/dict]", '<a href="http://dictionary.reference.com/browse/{SIMPLETEXT}">{SIMPLETEXT}</a>'), bbcodeParser.addBBCode("[img]{URL}[/img]", '<img src="{URL}">'), bbcodeParser.addBBCode("[img={URL}]", '<img src="{URL}">'), bbcodeParser.addBBCode("[url={URL}]{TEXT}[/url]", '<a href="{URL}">{TEXT}</a>'), bbcodeParser.addBBCode("[url]{URL}[/url]", '<a href="{URL}">{URL}</a>'), bbcodeParser.addBBCode("[i]{TEXT}[/i]", "<i>{TEXT}</i>"), bbcodeParser.addBBCode("[u]{TEXT}[/u]", "<u>{TEXT}</u>"), bbcodeParser.addBBCode("[s]{TEXT}[/s]", "<s>{TEXT}</s>"), bbcodeParser.addBBCode("[list]{TEXT}[/list]", "<ul><li>{TEXT}</li></ul>"), bbcodeParser.addBBCode("[*]{TEXT}", "</li><li>{TEXT}"), bbcodeParser.addBBCode("[quote]{TEXT}[/quote]", "<blockquote>{TEXT}</blockquote>"), bbcodeParser.addBBCode("[quote={TEXT1}]{TEXT}[/quote]", "<blockquote><cite>{TEXT1} wrote:</cite>{TEXT}</blockquote>"), bbcodeParser.addBBCode("[scratchblocks]{TEXT}[/scratchblocks]", '<pre class="blocks"><code class="plaintext">{TEXT}</code></pre>'), bbcodeParser.addBBCode("[code={IDENTIFIER}]{TEXT}[/code]", '<pre><code class="lang-{IDENTIFIER}">{TEXT}</code></pre>'), bbcodeParser.addBBCode("[code]{TEXT}[/code]", '<pre><code class="plaintext">{TEXT}</code></pre>'), bbcodeParser.addBBCode("[center]{TEXT}[/center]", '<div style="text-align:center">{TEXT}</div>');
</script>

<!--Get contents of OrCe from forum-->
<script>
	fetch("https://scratchdb.lefty.one/v2/forum/post/4594238").then(response => response.text()).then(html => { //get the post content
		var OrCe = JSON.parse(html).content.bb; //get only the bbcode
		//future: add [] escape code, emojis, and ordered lists
		console.log(bbcodeParser.bbcodeToHtml(OrCe)) //convert bbcode to html. in future, will output to page instead of console
	});
</script>

<!--Create scratchblocks in case they are used in an order form - line 13: call parser file. line 14: call scratchblock styles file. lines 15-19: set parser settings-->
<script src="https://scratchblocks.github.io/js/scratchblocks-v3.4-min.js"></script>
<link rel="stylesheet" src="/scratchblocks.css">
<script>
	scratchblocks.renderMatching('pre.blocks', {
		style: 'scratch3', //Optional, defaults to 'scratch2'.
		languages: ['en'], //Optional, defaults to ['en'].
		inline: false, //Optional, defaults to false.
	});
</script>

<!--Add code sintax highlighighlighting in case it is used in an order form - line 22: call parser file. line 23: call styles file-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.3.2/build/styles/github-gist.min.css">
<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.3.2/build/highlight.min.js"></script>