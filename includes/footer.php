    <!-- content end here -->
    </main>
    <footer class="page__footer <?= isset($addClassFooter) ?  $addClassFooter : ''; ?>">
        <!-- footer start here -->
        <!-- footer end here -->
    </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- script here for global -->
    <?= resources('js', isset($footerJS) ? $footerJS : '', true) ?>

    </html>