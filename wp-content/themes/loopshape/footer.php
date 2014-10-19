<div id="footer">
    <ul>
        <li>
            <p>
                Web Development Area
            </p>
        </li>
        <li>
            <p>
                Website created by: Arjuna Noorsanto
            </p>
        </li>
        <li>
            <p>
                2012-2014 Hamburg / Germany
            </p>
        </li>
    </ul>
</div>
</section>
<script type="text/javascript">
    (function() {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/client:plusone.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })(); 
</script>
<script>
    function signinCallback(authResult) {
        if (authResult['access_token']) {
            document.getElementById('signinButton').setAttribute('style', 'display: none');
        } else if (authResult['error']) {
        }
    };
</script><script src="./Templates/js/require.js" data-main="./Templates/js/main"></script>
</body>
</html>