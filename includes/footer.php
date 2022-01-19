    <!-- content end here -->
    </main>
    <footer class="page__footer <?= isset($addClassFooter) ?  $addClassFooter : ''; ?>">
        <!-- footer start here -->
        <!-- footer end here -->
    </footer>
    </body>
    <!-- script here for global -->
    <?= resources('js', isset($footerJS) ? $footerJS : '', true) ?>
    </html>