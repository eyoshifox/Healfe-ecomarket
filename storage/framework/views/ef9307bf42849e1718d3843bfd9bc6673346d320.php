<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>
        <?php echo $__env->yieldContent('title'); ?> - Healfe
    </title>
</head>
<body>
  <!-- Header!!!! -->
  <div class="wrapper">
    <?php echo $__env->make('include.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <header id="header" class="fixed-top"  >
    
  
  
         <nav class="navbar navbar-expand-lg navbar-dark py-3" style="position:relative;" > 
         
            <div class="wrapper-menu" id="show">
              <div class="line-menu half start"></div>
              <div class="line-menu"></div>
              <div class="line-menu half end"></div>
             
            </div>
           
            <span class="name-cat">Каталог товаров</span>
          
          
          <!-- <button class="drp-catalog-btn"><img src="images/icons/left-align.svg" width="20" height="20" alt="/">Каталог товаров</button> -->
      <div class="container" >
       
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>"> <img src="/public/images/icons/logo3.png" alt="Icon logo"> </a> 
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-3 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="<?php echo e(route('about')); ?>">О нас</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo e(route('contact')); ?>">Контакты</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="<?php echo e(route('news')); ?>">
                Новости
              </a> </li>
           
          </ul>
          <form class="d-flex ms-auto " >
          <div class="input-group" id="header-search">
            <input class="form-control mr-2" id="top-search" type="search" placeholder="Найти.." aria-label="Search">
            <svg class="input-icon" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.7101 2.66327C10.639 -0.407531 5.66052 -0.407531 2.58972 2.66327C-0.481079 5.73407 -0.481079 10.7129 2.58972 13.7837C5.22888 16.4225 9.27348 16.7864 12.309 14.8903L15.2365 17.8171C15.869 18.4493 16.894 18.4493 17.5258 17.8171C18.1583 17.1846 18.1583 16.16 17.5258 15.5286L14.645 12.6486C16.7348 9.58679 16.4263 5.37947 13.7101 2.66327ZM11.7474 11.8209C9.76092 13.8081 6.53928 13.8081 4.55244 11.8209C2.5656 9.83411 2.5656 6.61247 4.55244 4.62527C6.53928 2.63879 9.76092 2.63879 11.7474 4.62527C13.7353 6.61247 13.7353 9.83411 11.7474 11.8209Z" fill="#DBC513"/>
              </svg>
            <button  class="bth-search" type="submit">Искать</button>
            </div>
  
            
  
            
          </form>
         
               
          <div class="col-md-3 text-end p-2 dropdown" id="budjes">
            <?php if(Auth::check()): ?>
           
            <a href="<?php echo e(route('cart')); ?>"  class="icons-head" ><img src="/public/images/icons/shopping-bag.svg" height="24" width="24" alt="" ></a>
            <a href="<?php echo e(route('logout')); ?>" class="logout">Выход</a>
            <?php else: ?>
              <a href="profile.html" id="navbarDropdown" class="icons-head dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="/public/images/icons/user-solid.svg" height="24" width="24" alt=""></a>

              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"  data-bs-toggle="modal" data-bs-target="#auth">Войти</a>
                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#reg">Регистрация</a>
                
              </ul>
              <?php endif; ?>
           
            
</div> 
        </div>
      </div>
    </nav> 
    <nav id="sidebar">
    
      <div class="p-4 ">
        <!-- <h5>Каталог</h5> -->
        
        <div  id="catalog-adaptation" style="display: none;">
          <ul class=" list-unstyled" id="pageSubmenu1">
           
            
              <a class="link-adaptation " aria-current="page" href="<?php echo e(route('about')); ?>">О нас</a>
            
           
              <a class="link-adaptation" href="<?php echo e(route('contact')); ?>">Контакты</a>
           
            
              <a class="link-adaptation " href="<?php echo e(route('news')); ?>">
                Новости
              </a> 
              <?php if(Auth::check()): ?>
              <a href="<?php echo e(route('cart')); ?>"  class="link-adaptation" ><img src="/public/images/icons/shopping-bag.svg" height="16" width="16" alt="" >Корзина</a>
              <a href="<?php echo e(route('logout')); ?>" class="link-adaptation">Выход</a>
              <?php else: ?>
              <a class="link-adaptation" href="#"  data-bs-toggle="modal" data-bs-target="#login">Войти</a>
              <a class="link-adaptation" href="#" data-bs-toggle="modal" data-bs-target="#register">Регистрация</a>
           
             <?php endif; ?>
             <p>
              <button class="btn-catalog" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Каталог
              </button>
            </p>
            <div class="collapse" id="collapseExample">
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
           <li><a href="<?php echo e(route('catalog', ['id' => $c->id])); ?>"><span class="fa fa-chevron-right mr-2"></span> <?php echo e($c->name); ?></a></li>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
         
          </ul>
        </div>
          <div id="catalog-sidebar" style="display: flex; overflow-y: scroll; height: 400px;">
            <ul class=" list-unstyled" id="pageSubmenu1">
          
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
             <li><a href="<?php echo e(route('catalog', ['id' => $c->id])); ?>"><span class="fa fa-chevron-right mr-2"></span> <?php echo e($c->name); ?></a></li>
              
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
            </ul>
          </div>
            
         
         
      </div>
    </nav>
  </header>

  <?php echo $__env->yieldContent('body'); ?>

    <!-- Footer!!!! -->
<footer  >
    <div class="row d-flex flex-wrap align-items-center justify-content-center justify-content-md-between ">
      <div class="col-md-3 p-4"><a href="#"><p class="footer-number p-4">+ 8-800-5555-35-35</p></a></div>  

   
   <ul class="nav col-12 col-md-auto justify-content-center " >
    <a class="navbar-logo" href="#"> <img src="/public/images/icons/logo3.png" alt="Icon logo"> </a> 
     </ul>
     
  
   
    <div class="col-md-3 text-end p-4 list-unstyled " id="footer-social">
     <a class="link-dark" href="#"><img src="/public/images/icons/vk.svg" width="37" height="37" alt="vk"></a>
     <a class="link-dark" href="#"><img src="/public/images/icons/fb.svg" width="37" height="37" alt="facebook"></a>
     
    </div>
  </div><!-- /end row -->
    <div class="d-flex flex-wrap justify-content-between align-items-center  " id="footer-block">

      <p class="  col-md-4 mb-0  p-3"> <a href="#" class="footer-link">Политика конфиденциальности</a> </p>
      
      <ul class="nav col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto">
        <li><a href="#" class="footer-link px-2  p-3">Возврат и обмен</a></li>
        <li><a href="#" class="footer-link px-2  p-3">Доставка</a></li>
        <li><a href="#" class="footer-link px-2 p-3" ><img src="/public/images/footer-cards.png" alt=""></a></li>
      </ul>

      
    </div>
  
   
  </footer>
</div><!--  end wrapper -->
     
    
     <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    
     <script type="module">
      import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'
    
      const swiper = new Swiper()
      
    </script>
  <script src="/public/js/jquery-3.6.0.min.js"></script>
  <script src="/public/js/main.js"></script>
  <script src="/public/js/item.js"></script>
  <script src="/public/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH /home/e/eyoshij0/eyoshij0.beget.tech/public_html/resources/views/layout/main.blade.php ENDPATH**/ ?>