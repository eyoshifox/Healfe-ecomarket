

<?php $__env->startSection('title'); ?>
Экомаркет
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>

<section id="hero" class="d-flex align-items-center justify-content-left" >
    <div class="container text-left">
      <div class="row justify-content-left">
        <div class="col-md-6 col-lg-8">
          <h1>Экомаркет «Healfe»<br>  с заботой
            о вашем <br> здоровье!
          </h1>
  
        
       
          
        </div>
      </div>
     
    </div>
  </section>

  <section class="slidebar " id="slidebar">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="public/images/swiper1.jpg" class="slide-img" alt="..."></div>
        <div class="swiper-slide"><img src="public/images/swiper2.jpg" class="slide-img"  alt="..."></div>
        <div class="swiper-slide"><img src="public/images/swiper3.jpg " class="slide-img"  alt="..."></div>
        <div class="swiper-slide"><img src="public/images/swiper4.jpg " class="slide-img"  alt="..."></div>
        
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div> 
   
         
    
      
    
  
     
    
  </section>
  <section class="parallax ">
    <div class="container text-center">
      <div class="row justify-content-center">
        <h3>О нас</h3>
        <div id="seventh" class="buttonBox">
          <button><a href="<?php echo e(route('about')); ?>">Узнать подробнее</a> </button>
        </div>
       
        </div>
    </div>
  </section>

  <section class="popular" id="popular">
    <div class="container  text-center">
      <div class="row ">
         <div class="col-xxl-12 ">
          <h2 class="text-center mb-3"><b>Товары недели</b> </h2>
      </div><!--  end row -->
     <div class="row justify-content-center text-center">
       <div class="swiper-popular">
         <div class="swiper-wrapper">
            <?php if($swiper1 && !$swiper1->isEmpty()): ?>
            <?php $__currentLoopData = $swiper1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="swiper-slide">
            <a href="<?php echo e(route('item', ['id' => $s->id])); ?>">  <div class="card">
               <div class="img-box">
                <img src="<?php echo e($s->photo); ?>"  alt="">
                 
               </div>
               <a href="<?php echo e(route('item', ['id' => $s->id])); ?>"><p class="content-title"><?php echo e($s->name); ?></p></a>
               <div class="content">
                
                 <span class="price"><?php echo e($s->price); ?> ₽</span>
                 <span class="weight"><?php echo e($s->weight); ?>г.</span>
               </div>
              
               <a href="<?php echo e(route('item', ['id' => $s->id])); ?>" class="add-cart" type="button">Подробнее</a>
             </div> </a> <!--  end card-->
             
           </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<div class="row my-5">
    <div class="col-12 text-center">
        <h5><b>Товары не найдены!</b></h5>
    </div>
</div>
<?php endif; ?>
      
</div>
</div>
</div>
     </section>

     <section class="promo" id="promo">
        <div class="container-fluid text-center align-items">
         <div class="row ">
           <div class="col-xxl-12">
             <h2 class="text-center mb-3"><b>Акции</b> </h2>
           </div>
        </div><!--  end row -->
        <div class="row justify-content-center text-center">
         <div class="swiper-popular">
           <div class="swiper-wrapper">
            <?php if($swiper2 && !$swiper2->isEmpty()): ?>
            <?php $__currentLoopData = $swiper2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="swiper-slide">
               <a href="<?php echo e(route('item', ['id' => $s->id])); ?>">
               <div class="card">
                 <div class="img-hover">
                 <div class="img-box">
                   <div class="sale">20%</div>
                   <img src="<?php echo e($s->photo); ?>"  alt="">
                 </div>
               </div>
                 <a href="<?php echo e(route('item', ['id' => $s->id])); ?>"><p class="content-title"><?php echo e($s->name); ?></p></a>
                 <div class="content">
                  
                   <span class="price"><?php echo e($s->price); ?> ₽</span>
                   <span class="weight"><?php echo e($s->weight); ?>г.</span>
                 </div>
                
                 <a href="<?php echo e(route('item', ['id' => $s->id])); ?>" class="add-cart" type="button">Подробнее</a>
               </div></a><!--  end card-->
               
             </div><!--  end slide-->
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<div class="row my-5">
    <div class="col-12 text-center">
        <h5><b>Товары не найдены!</b></h5>
    </div>
</div>
<?php endif; ?>
</div>
</div>
</div>
         </section>
         <section class="promo" id="promo">
            <div class="container-fluid text-center align-items">
             <div class="row ">
               <div class="col-xxl-12">
                 <h2 class="text-center mb-3"><b>Рекомендуем</b> </h2>
               </div>
            </div><!--  end row -->
            <div class="row justify-content-center text-center">
             <div class="swiper-popular">
               <div class="swiper-wrapper">
                <?php if($swiper3 && !$swiper3->isEmpty()): ?>
                <?php $__currentLoopData = $swiper3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="swiper-slide">
                   <a href="<?php echo e(route('item', ['id' => $s->id])); ?>">
                   <div class="card">
                     <div class="img-hover">
                     <div class="img-box">
                       <img src="<?php echo e($s->photo); ?>"  alt="">
                     </div>
                   </div>
                     <a href="<?php echo e(route('item', ['id' => $s->id])); ?>"><p class="content-title"><?php echo e($s->name); ?></p></a>
                     <div class="content">
                      
                       <span class="price"><?php echo e($s->price); ?> ₽</span>
                       <span class="weight"><?php echo e($s->weight); ?>г.</span>
                     </div>
                    
                     <a href="<?php echo e(route('item', ['id' => $s->id])); ?>" class="add-cart" type="button">Подробнее</a>
                   </div></a><!--  end card-->
                   
                 </div><!--  end slide-->
                 
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<div class="row my-5">
    <div class="col-12 text-center">
        <h5><b>Товары не найдены!</b></h5>
    </div>
</div>
<?php endif; ?>
                </div>
                 
                
                 </div>
           </div><!--  end row -->
              
            </div>
             </section>
             <section id="question">
              <div class="row d-flex justify-content-center mb-5">
                <h2 class="text-center mb-3"><b>Популярные вопросы</b> </h2>
                <div class="col-xxl-8 mt-4">
                  <div class="accordion" id="myAccordion">
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                              <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Я не смог принять доставку, возможно ли назначить новую?</button>									
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                              <div class="card-body">
                                  <p>Если вы не смогли принять доставку, можно договориться о платной доставке заказа в другой день (п. 24 Правил продажи товаров дистанционным способом).</p>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                              <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Через какое время мне вернутся денежные средства при возврате товара?</button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
                              <div class="card-body">
                                  <p>10 дней – срок для возврата денег за некачественный товар. Он отсчитывается со дня предъявления требования (претензии) (ст. 22 ЗОЗПП). 10 дней – срок для принятия продавцом решения по требованию о скидке (уменьшении цены) за некачественный товар.</p>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                              <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Какими способами я могу вернуть товар?</button>                     
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                              <div class="card-body">
                                  <p>Напишите заявление на обмен или возврат товара</p>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFour">
                              <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">Можно ли вернуть деньги не тем способом, которым была произведена оплата товара?</button>                     
                          </h2>
                          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                              <div class="card-body">
                                  <p>О возврате денежных средств за товар (услугу), ранее оплаченный с использованием платежной карты» определяет, что в случае недоступности банковской карты, с которой был произведен расчет, покупатель имеет право получить возврат любым иным способом, включая наличные.</p>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFive">
                              <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">Можно ли вернуть денежные средства на другую карту, не ту, которой производилась оплата?</button>                     
                          </h2>
                          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                              <div class="card-body">
                                  <p>Запрета на возврат денежных средств на другую карту (а не ту, с которой была произведена оплата) законодательством не установлено.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
             
          </div>
             </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/e/eyoshij0/eyoshij0.beget.tech/public_html/resources/views/index.blade.php ENDPATH**/ ?>