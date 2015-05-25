<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
		</div><!--.container page-container-->
			
			
        <footer class="containter-fluid" id="site-footer" role="contentinfo">
            <div class="container footer-container">
                <div id="footer-row" class="row site-footer">
                    <div class="col-md-4 footer-left">
                        <?php 
                        if (!dynamic_sidebar('footer-left')) {
                            printf(__('Powered by %s', 'bootstrap-basic'), 'WordPress');
                            /**echo ' | ';
                            printf(__('Theme: %s', 'bootstrap-basic'), '<a href="http://okvee.net">Bootstrap Basic</a>');*/
                        } 
                        ?> 
                    </div>
                    <div class="col-md-4 footer-right text-right">
                        <?php dynamic_sidebar('footer-middle'); ?> 
                    </div>
                    <div class="col-md-4 footer-right text-right">
                        <?php dynamic_sidebar('footer-right'); ?> 

                    </div>
                    <!--Copyright-->
                    <span id="footer-cw">All Content Copyright &copy; 2015<br>Jennifer Hendricks Black Ceramic Arts</span>
                </div>
            </div>
        </footer>
		
		
		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>