</main>
<!-- end of page content -->
<footer class="site-footer">
    <section class="page-id-<?php echo get_the_ID(); ?>">
        <div class="footer-logo-wrap" ><?= wp_get_attachment_image(19, 'full', false, ['alt' => 'pharma logo']) ?></div>
        <div>
            <ul>
                <li class="footer-menu-heading">PharmaCare (NZ) Ltd
                <li>228 Bush Road</li>
                <li>Albany, Auckland 0632</li>
                <li>New Zealand</li>
                <li>+64 9 415-8624</li>
                <li>info@pharmacarenz.co.nz</li>
            </ul>
        </div>
        <div>
            <ul>
                <li class="footer-menu-heading">About Efamol&#174;</li>
                <li><a href="<?= the_permalink(2) ?>" target="_self" rel="noopener">Why Efamol&#174;?</a></li>
                <li><a href="<?= the_permalink(22) ?>" target="_self" rel="noopener">Products</a></li>
                <li><a href="<?= the_permalink(21) ?>" target="_self" rel="noopener">Blog</a></li>
                <li><a href="<?= the_permalink(23) ?>" target="_self" rel="noopener">Stockists</a></li>
                <li><a href="<?= the_permalink(172) ?>" target="_self" rel="noopener">Privacy Policy</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <li class="footer-menu-heading">Social Media</li>
                <li >
                    <div class="social-icons-wrap">
                        <a href="https://www.facebook.com/Efamol.NZ/" target="_blank" rel="noopener">
                            <svg stroke="currentColor" fill="white" stroke-width="0" viewBox="0 0 512 512" height="2.5rem" width="2.5rem" xmlns="http://www.w3.org/2000/svg">
                                <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/efamolnz/" target="_blank" rel="noopener">
                            <svg stroke="currentColor" fill="white" stroke-width="0" viewBox="0 0 16 16" height="2.5rem" width="2.5rem" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                            </svg>
                        </a>
                    </div>
                </li>


            </ul>
        </div>
        <div><?= wp_get_attachment_image(18, 'full', false, [
        	'class' => 'footer-logo-resize',
        	'alt' => 'efamol research logo',
        ]) ?></div>
    </section>
    <div>
        <p class="gold">If symptoms persist or you have side effects, see your healthcare professional.<br /> PharmaCare New Zealand.
            &#169; 2021 &#8212; PharmaCare NZ Ltd &#8212; All Rights Reserved Terms & Conditions<br />Website designed by <a href="https://www.rockefeller.nz/" target="_blank" rel="noopener">Rockefeller</a></p>
    </div>
</footer>



<?php wp_footer(); ?>

</body>

</html>