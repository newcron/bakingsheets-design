<footer class="footer">
    <p class="footer-blogtitle"><strong class="footer-blogtitle-em">Bakingsheets.</strong> Keep Calm and bake on.</p>
    <p class="footer-copyright">&copy; 2014 - <?php echo date("Y");?> Bakingsheets. All rights reserved.</p>
</footer>
<?php
wp_footer();


if($_GET["debug_sql"]==1) {
    echo "<pre>";
    print_r($wpdb->queries);
    echo "</pre>";
}

?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/app.js" async></script>
</body>
</html>
