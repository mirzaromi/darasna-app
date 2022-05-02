<script src="/assets/disto/js/jquery.js"></script>
<script src="/assets/disto/js/fluidvids.js"></script>
<script src="/assets/disto/js/infinitescroll.js"></script>
<script src="/assets/disto/js/justified.js"></script>
<script src="/assets/disto/js/slick.js"></script>
<script src="/assets/disto/js/theia-sticky-sidebar.js"></script>
<script src="/assets/disto/js/aos.js"></script>
<script src="/assets/disto/js/custom.js"></script>
<script>
    const terbaru = document.getElementById('terbaru');
    const instagram = document.getElementById('instagram');
    

    function getBrowserSize() {
        var w, h;

        if (typeof window.innerWidth != 'undefined') {
            w = window.innerWidth; //other browsers
            h = window.innerHeight;
        } else if (typeof document.documentElement != 'undefined' && typeof document.documentElement.clientWidth !=
            'undefined' && document.documentElement.clientWidth != 0) {
            w = document.documentElement.clientWidth; //IE
            h = document.documentElement.clientHeight;
        } else {
            w = document.body.clientWidth; //IE
            h = document.body.clientHeight;
        }
        return {
            'width': w,
            'height': h
        };
    }

    
    if (parseInt(getBrowserSize().width) < 768) {
        for (let i = 3; i < terbaru.children.length-1; i++) {
            terbaru.children[i].style.display = "none";
        }
        for (let j = 3; j < instagram.children.length-1; j++) {
            instagram.children[j].style.display = "none";
        }
    }
</script>
