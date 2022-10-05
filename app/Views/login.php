<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container">
        <div class="row">
         <div class="col-md-4 mx-auto pt-5">
            <form method="POST" action="<?= base_url('/login/login_action'); ?>">
               <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
               <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password">
               </div>
               <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
               </div>
               <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <p>
               <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                  <div class="alert alert-warning">
                     <?php echo session()->getFlashdata('gagal') ?>
                  </div>
               <?php } ?>
            </p>
         </div>
      </div>
</div

<?= $this->endSection() ?>