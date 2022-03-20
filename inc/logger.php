<?php


add_action('wp_footer', function () {
    // 	global $post;
    // 	logger( $post );
    // 	$blocks = parse_blocks( $post->post_content );
    // 	foreach( $blocks as $block ) {
    // 			logger( $block ); 
    // 	}
});


/**
 * Pretty Printing
 */
function logger($obj, $label = '')
{
    $data = json_encode(print_r($obj, true));
?>
    <style>
        #bsdLogger {
            position: fixed;
            top: 0;
            left: 0px;
            border-left: 4px solid #bbb;
            padding: 6px;
            background: white;
            color: #cc0a0a;
            z-index: 999;
            font-size: 0.75rem;
            width: 400px;
            height: 100vh;
            overflow: scroll;
        }

        .admin-bar #bsdLogger {
            top: 32px;
            height: calc(100vh - 32px);
        }
    </style>
    <script type="text/javascript">
        var doStuff = function() {
            var obj = <?php echo $data; ?>;
            var logger = document.getElementById('bsdLogger');
            if (!logger) {
                logger = document.createElement('div');
                logger.id = 'bsdLogger';
                document.body.appendChild(logger);
            }
            ////console.log(obj);
            var pre = document.createElement('pre');
            var h2 = document.createElement('h2');
            pre.innerHTML = obj;
            h2.innerHTML = '<?php echo addslashes($label); ?>';
            logger.appendChild(h2);
            logger.appendChild(pre);
        };
        window.addEventListener("DOMContentLoaded", doStuff, false);
    </script>
<?php
}
