        </div>
    </div>
    <div id="footer">
        <div class="container"> <div class="row">
            <div class="fwidgets">
                <div class="col-sm-4">
                    <h2> Reach Us </h2>

                    EmasDigi<br>
                    Jl. Pattimura no.35 <br>
                    Kebayoran Baru, Jakarta Selatan <br>
                    Indonesia

                </div>
               <div class="col-sm-4">
                     <h2> Links </h2>
                   <ul>
                        <li><a href="https://emasdigi.com">EmasDigi Website</a></li>
                        <!-- <li><a href="#">Second link</a></li>
                        <li><a href="#">Third link</a></li>
                        <li><a href="#">Fourth link</a></li> -->
                    </ul>

                </div>
                <div class="col-sm-4">
                    <h2> Contact US </h2>

                    <i class="icon-phone-sign"></i> +62 21 5069 0859 <br>
                    <i class="icon-envelope"></i> tanya@emasdigi.com

                    <div class="social-icons">
                        <ul>
                            <li> <a href="#"> <i class="icon-facebook"></i> </a> </li>
                            <li> <a href="#"> <i class="icon-twitter"></i> </a> </li>
                            <li> <a href="#"> <i class="icon-google-plus"></i> </a> </li>
                            <li> <a href="#"> <i class="icon-linkedin"></i> </a> </li>
                            <li> <a href="#"> <i class="icon-github"></i> </a> </li>
                        </ul>
                    </div>
                </div>

            <div class="clear"></div>
            </div>

            <div class="col-md-12">
                <div class="footer-content">
                    <p>Copyright &copy; <?php echo date('Y'); ?> <?php echo (string) $ost->company ?: 'osTicket.com'; ?> - All rights reserved.</p>
                    <a id="poweredBy" href="http://osticket.com" target="_blank"><?php echo __(''); ?></a>
                </div>
            </div>
        </div></div>
    </div>
<div id="overlay"></div>
<div id="loading">
    <h4><?php echo __('Please Wait!');?></h4>
    <p><?php echo __('Please wait... it will take a second!');?></p>
</div>
<?php
if (($lang = Internationalization::getCurrentLanguage()) && $lang != 'en_US') { ?>
    <script type="text/javascript" src="ajax.php/i18n/<?php
        echo $lang; ?>/js"></script>
<?php } ?>
<script type="text/javascript">
    getConfig().resolve(<?php
        include INCLUDE_DIR . 'ajax.config.php';
        $api = new ConfigAjaxAPI();
        print $api->client(false);
    ?>);
</script>
</body>
</html>
