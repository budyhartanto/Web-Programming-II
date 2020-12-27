<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">
        <?php $config = $this->Default_m->getWhere('tabel_config', ['id_config' => 1])->row(); ?>
        <div>
            <h1 class="text-light"><a href="<?= base_url(); ?>"><span><?= $config->webname; ?></span></a></h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url('home/about'); ?>">Biodata</a></li>
                <li><a href="<?= base_url('home/blog'); ?>">Blog</a></li>  
                <li><a href="<?= base_url('data/buku'); ?>">List</a></li>  
                
                
            </ul>
            
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->