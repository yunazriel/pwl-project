<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
      <i class="bi bi-grid"></i>
      <span>Home</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
      <i class="bi bi-cart-check"></i>
      <span>Keranjang</span>
    </a>
  </li>

  <?php
  if (session()->get('role') == 'admin') {
  ?>
  <li class="nav-item">
    <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
      <i class="bi bi-receipt"></i>
      <span>Produk</span>
    </a>
  </li>
  <?php
  }
  ?>

  <li class="nav-item">
    <a class="nav-link <?php echo (uri_string() == 'pesanan') ? "" : "collapsed" ?>" href="pesanan">
      <i class="bi bi-cart-check"></i>
      <span>pesanan</span>
    </a>
  </li>
</ul>

</aside><!-- End Sidebar-->