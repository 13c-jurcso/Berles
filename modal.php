<?php if (isset($_SESSION['alert_message'])): ?>
    <div id="alertModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">×</span>
            <h3><?php echo $_SESSION['alert_type'] === 'success' ? 'Siker' : 'Figyelmeztetés'; ?></h3>
            <p><?php echo htmlspecialchars($_SESSION['alert_message']); ?></p>
            <button type="button" class="btn" onclick="closeModal()">Bezárás</button>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    openModal('alertModal');
});
    </script>
<?php endif; ?>