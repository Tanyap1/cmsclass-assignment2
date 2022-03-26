  <?php wp_footer();?>
  
  <footer>

  <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"> <i class="fa-brands fa-facebook-f"></i> </a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a></div>
            <ul class="list-inline">
            <?php
wp_nav_menu(
    array(
        'theme_location' => 'bottom-menu',
        'menu_class' => 'bottom-menu d-flex'
    )
    );?>
            </ul>
            <p class="copyright">Yield Book by Tanya © 2022</p>
        </footer>
</footer>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
