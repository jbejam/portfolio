 <footer id="footer" class="footer">
    <div class="row">
        <div class="column">
            <div class="tob-bar">
                <div class="top-bar-left">
                    <ul class="menu">
                        <li>
                            <p>Website developed and designed by <strong>Jesús Bejarano</strong>.</p><p><small>&copy;&nbsp;<?php echo date("Y"); ?> Jesús Bejarano. All rights reserved.</mall></p>
                        </li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="menu simple">
                        
<li>
    <a title="Github" href="http://github.com/jbeja" target="_blank">
        <svg>
            <use xlink:href="#github"></use>
        </svg>
    </a>
</li>





<li>
    <a title="LinkedIn" href="https://ve.linkedin.com/in/jes%c3%bas-bejarano-33677758" target="_blank">
        <svg>
            <use xlink:href="#linkedin"></use>
        </svg>
    </a>
</li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?=get_baseurl();?>js/jquery.min.js"></script>
<script src="<?=get_baseurl();?>js/foot.min.js"></script>
<script>
</script>


<script>
    $(document).ready(function () {
      var snippets = [].slice.call(document.getElementsByTagName('CODE'));
      var codeblocks = [].map.call(snippets, function (i) { return i.textContent});
      var worker = new Worker('highlight-worker.js');
      worker.onmessage = function(event) {
          [].forEach.call(event.data, function (code, i) {
           snippets[i].classList.add('hljs');
           snippets[i].innerHTML = code.value;
         });
      };
      worker.postMessage({
          codeblocks: codeblocks,
          hugo: Hugo,
          }
      );
    });

</script>



<script async>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'Your Google Analytics tracking id', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
