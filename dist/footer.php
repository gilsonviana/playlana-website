        <footer>
            <div class="footbar-box">
                <div class="container">
                    <div class="row">
                        <div class="col-s1-three col-s2-half col-s3-one">
                            <nav class="footer-menu text-uppercase">
                                <ul>
                                    <li><a class="<?php echo (is_home()) ? 'current-menu-item' : ''; ?>" href="">blog</a></li>
                                    <li><a class="<?php echo (is_page( 9 )) ? 'current-menu-item' : ''; ?>" href="">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-s1-three">
                            <p class="copyright"><span class="font-bold">Playlana</span> The world needs your best</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <?php wp_footer(); ?>
</body>
</html>