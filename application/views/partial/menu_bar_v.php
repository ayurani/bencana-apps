<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php if ($this->session->userdata('user')->user_image == null) : ?>
                    <img src="<?= base_url() ?>asset/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                <?php else : ?>
                    <img src="<?= base_url() ?>asset/avatars/<?= $this->session->userdata('user')->user_image ?>" class="img-circle" alt="User Image"/>
                <?php endif ?>
            </div>
            <div class="pull-left info">
                <?php $name = explode('@', $this->session->userdata('user')->user_email); ?>
                <p><?= $name[0] ?></p>

                <i class="fa fa-circle text-success"></i> Online
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="<?= base_url() ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Data Master</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url('admin/master/kategori') ?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
                    <li><a href="<?= base_url('admin/master/staff') ?>"><i class="fa fa-circle-o"></i> Staff</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Data Pemetaan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url('admin/maps/kejahatan') ?>"><i class="fa fa-circle-o"></i> Kejahatan</a></li>
                    <li><a href="<?= base_url('admin/maps/kemacetan') ?>"><i class="fa fa-circle-o"></i> Kemacaten</a></li>
                    <li><a href="<?= base_url('admin/maps/kebanjiran') ?>"><i class="fa fa-circle-o"></i> Kebanjiran</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>