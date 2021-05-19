</div>
    <script>
        $(".buttonBars").click(function() {
            console.log("hello");
            $(".buttonBars").toggleClass("change");
            $(".navbar_short_screen").toggleClass("nav_list_on");
        });
    </script>

<?php wp_footer(); ?>
</body>
</html>