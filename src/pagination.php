<!-- pagination.php -->
<nav aria-label="Ejemplo de navegación de página">
  <ul class="pagination justify-content-center">
    <!-- Enlace a la página anterior -->
    <?php if ($currentPage > 1): ?>
      <li class="page-item">
        <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>" aria-label="Anterior">
          <span aria-hidden="true">&laquo; Anterior</span>
        </a>
      </li>
    <?php else: ?>
      <li class="page-item disabled">
        <span class="page-link" aria-hidden="true">&laquo; Anterior</span>
      </li>
    <?php endif; ?>

    <!-- Enlaces a los números de página -->
    <?php for ($page = 1; $page <= $totalPages; $page++): ?>
      <li class="page-item <?php echo ($page == $currentPage) ? 'active' : ''; ?>">
        <a class="page-link" href="?page=<?php echo $page; ?>"><?php echo $page; ?></a>
      </li>
    <?php endfor; ?>

    <!-- Enlace a la página siguiente -->
    <?php if ($currentPage < $totalPages): ?>
      <li class="page-item">
        <a class="page-link" href="?page=<?php echo $currentPage + 1; ?>" aria-label="Siguiente">
          <span aria-hidden="true">Siguiente &raquo;</span>
        </a>
      </li>
    <?php else: ?>
      <li class="page-item disabled">
        <span class="page-link" aria-hidden="true">Siguiente &raquo;</span>
      </li>
    <?php endif; ?>
  </ul>
</nav>
