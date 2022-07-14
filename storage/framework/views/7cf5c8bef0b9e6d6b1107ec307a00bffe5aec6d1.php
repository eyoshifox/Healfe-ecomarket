
<?php $__env->startSection('title'); ?>
    Новости - Healfe
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<section id="media">
    <div class="container">
        
            <div class="row d-flex  justify-content-center mb-5">
                <div class="col-xxl-8 text-center p-3">
                   
                        <div class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>" id="breadcrumb-link">Главная</a></li>
                     
                            <li class="breadcrumb-item active" ><a href="<?php echo e(route('news')); ?>" id="breadcrumb-link">Новости</a></li>
                        </div>
                        <div class="breadcrumb-adaptiv2ver">
                          <li class="breadcrumb-item"><a href="<?php echo e(route('about')); ?>" id="breadcrumb-link">О нас</a></li>
                        </div>
                   
                    <h1>Новости и статьи</h1>
                </div>
               
             
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-xxl-12 mb-5">
                <div class="row justify-content-center mt-3">
                  <div class="col-2">
                    <ul>
                      <li>Архив</li>
                        <li><a href="#" class="category-link">Июнь 2022</a></li>
                        <li><a href="#" class="category-link">Июль 2022</a></li>
                        
                      </ul>
                </div>
                     <div class="col-sm-8">
                      <article class="blog-post">
                        <h2 class="blog-post-title mb-1">Отличные новости для тех, кто любит побаловать себя вкусненьким, но следит за фигурой!</h2>
                        <p class="blog-post-meta">Июнь 1, 2022</p>
                
                       
                        
                        <p>

                          Теперь в наших магазинах можно купить ПРОТЕИНОВОЕ мороженое Bombbar. <br>
                          
                          3 вкуса: крем-брюле, шоколад и классический пломбир.<br>
                          14 г белка в порции, никакого сахара и всего 173 ккал!<br>
                          
                          Мороженое можно купить на Сахарова, 53 и Тверитина, 46</p>
                       
                      </article>
               
                      <!-- <div class="card">
                        <div class="item-groupimg">
                          <img src="images/media/img1.jpg" class="card-img-top" alt="...">
                        </div>
                        
                        <div class="card-body">
                          <p class="media-name">glamour, женский журнал о моде</p>
                          <a href=""><h6 class="card-title">Обзор лучших платьев</h6></a>
                          
                        </div>
                      </div> end card -->
                     </div><!--  end col3 -->
                    
                       
                  </div>
                      <!-- <a href="#" type="button" class="btn-load" id="btn-load">Загрузить еще</a>  -->
                    
                    
                  
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jojo\Desktop\OpenServer\domains\healfe\resources\views/news.blade.php ENDPATH**/ ?>