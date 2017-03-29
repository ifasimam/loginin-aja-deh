      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Loginin</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <?php /* About */ ?>
              <?php if(!empty($halaman) && $halaman == 'about'): ?>
                <li class="active"><a href="<?php echo e(url('about')); ?>">About <span class="sr-only">(current)</span></a></li>
              <?php else: ?>
                <li><a href="<?php echo e(url('about')); ?>">About</a></li>
              <?php endif; ?>

              <?php /* User */ ?>
              <?php if(Auth::check() && Auth::user()->level == 'admin'): ?>
                <?php if(!empty($halaman) && $halaman == 'user'): ?>
                  <li class="active"><a href="<?php echo e(url('user')); ?>">User <span class="sr-only">(current)</span></a></li>
                <?php else: ?>
                  <li><a href="<?php echo e(url('user')); ?>">User</a></li>
                <?php endif; ?>
              <?php endif; ?>
            </ul>

            <?php /* Link Login */ ?>
            <ul class="nav navbar-nav navbar-right">
              <?php if(Auth::check()): ?>
                <li><a href="<?php echo e(url('logout')); ?>"><?php echo e(Auth::user()->name); ?></a></li>
                <li><a href="<?php echo e(url('logout')); ?>">Logout</a></li>
              <?php else: ?>
                <li><a href="<?php echo e(url('login')); ?>">Login</a></li>
              <?php endif; ?>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
