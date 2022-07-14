
<?php $__env->startSection('title'); ?>
   Админ панель 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<section id="adminprofile">
    <div class="container mb-6">
        <div class="row d-flex justify-content-center ">
            <div class="col-xxl-8 text-center p-3">
              <div class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="index.html" id="breadcrumb-link">Главная</a></li>
                  <li class="breadcrumb-item"><a href="news.html" id="breadcrumb-link">Новости</a></li>
                  
              </div>
         
          <h1 class="title">Панель управления</h1>
            </div>
          </div>
          <!-- <div class="row mt-3" >
            <div class="d-flex justify-content-center " id="navigation-block" >
                        
                        <a href="profile.html" class="navigation" >Изменить профиль</a>
                        <a href="#" class="navigation" id="nav-right" >История заказов</a>
                    
                    
              
           
            </div>
          
          </div> -->
          
          <div class="row">
            <!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link text-dark active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" >Категории</button>
    </li>
   
    <li class="nav-item " role="presentation" >
      <button class="nav-link text-dark" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false"  >Товары</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-dark" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false"  >Обработка заказов</button>
    </li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content m-3">
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="row">
    <div class="col-4">
        
            <button type="button" class="list-group-item list-group-item-action " aria-current="true">
              Мясная продукция
            </button>
    </div>
    <div class="col-4"><button type="button" class="list-group-item list-group-item-action">Фрукты и овощи</button>
     </div>
     <div class="col-4">   <button type="button" class="list-group-item list-group-item-action">Молочные продукты</button>
        </div>
        <div class="col-4">
            <button type="button" class="list-group-item list-group-item-action">Хлеб и выпечка</button>
       
        </div>
        <div class="col-4"> <button type="button" class="list-group-item list-group-item-action">Без глютена</button>
            </div>
            <div class="col-4">
                <button type="button" class="list-group-item list-group-item-action">Без сахара</button>
            </div>
   <div class="col-12 d-flex justify-content-center">
    <div class="group-bth">
        <a href="#" class="addCat" type="button" data-bs-toggle="modal"  data-bs-target="#addCat">Добавить категорию</a>
      </div>
   </div>
     
</div>
     
        </div>

    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">f...</div>
    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">..s.</div>
  </div>
          </div>
      
          <div class="row justify-content-center d-flex  mt-5">
            
              
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Зарегестрированные пользователи</h3>
                    </div>
                    <div class="panel-body">
                        <div id="shieldui-grid1" role="grid" aria-readonly="true" class="sui-grid sui-grid-core">
                            <div class="sui-gridheader"><table class="sui-table sui-non-selectable">
                                <colgroup>
                                    <col style="width:70px"><col><col><col style="width:270px">
                                </colgroup>
                                <thead>
                                    <tr role="row" class="sui-columnheader">
                                        <th data-field="id" role="columnheader" tabindex="-1" class="sui-headercell">
                                            <a href="#" class="sui-link sui-unselectable" unselectable="on" tabindex="-1">ID</a>
                                        </th>
                                        <th data-field="name" role="columnheader" tabindex="-1" class="sui-headercell">
                                            <a href="#" class="sui-link sui-unselectable" unselectable="on" tabindex="-1">Фио</a>
                                        </th><th data-field="company" role="columnheader" tabindex="-1" class="sui-headercell">
                                            <a href="#" class="sui-link sui-unselectable" unselectable="on" tabindex="-1">Логин</a>
                                        </th>
                                        <th data-field="email" role="columnheader" tabindex="-1" class="sui-headercell">
                                            <a href="#" class="sui-link sui-unselectable" unselectable="on" tabindex="-1">Email </a>
                                        </th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="sui-hide">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="sui-gridcontent">
                            <table class="sui-table sui-hover sui-selectable">
                                <colgroup>
                                    <col style="width:70px">
                                    <col>
                                    <col>
                                    <col style="width:270px">
                                    <col style="width:35px">
                                </colgroup>
                                <tbody>
                                    <tr class="sui-row" role="row">
                                        <td role="gridcell" tabindex="-1" class="sui-cell">0</td>
                                        <td role="gridcell" tabindex="-1" class="sui-cell">Sue Sharpe</td>
                                        <td role="gridcell" tabindex="-1" class="sui-cell">Mitroc</td>
                                        <td role="gridcell" tabindex="-1" class="sui-cell">suesharpe@mitroc.com</td>
                                        <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                    </tr>
                                    <tr class="sui-alt-row" role="row">
                                            <td role="gridcell" tabindex="-1" class="sui-cell">1</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Nieves Hubbard</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Syntac</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">nieveshubbard@syntac.com</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                        </tr>
                                        <tr class="sui-row" role="row">
                                            <td role="gridcell" tabindex="-1" class="sui-cell">2</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Anastasia Underwood</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Gallaxia</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">anastasiaunderwood@gallaxia.com</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                        </tr>
                                        <tr class="sui-alt-row" role="row">
                                            <td role="gridcell" tabindex="-1" class="sui-cell">3</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Maxine Haley</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Songbird</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">maxinehaley@songbird.com</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                        </tr>
                                        <tr class="sui-row" role="row"><td role="gridcell" tabindex="-1" class="sui-cell">4</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Bennett Alvarez</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Marvane</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">bennettalvarez@marvane.com</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                        </tr>
                                        <tr class="sui-alt-row" role="row"><td role="gridcell" tabindex="-1" class="sui-cell">5</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Myrna Ellison</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Zoxy</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">myrnaellison@zoxy.com</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                        </tr>
                                        <tr class="sui-row" role="row">
                                            <td role="gridcell" tabindex="-1" class="sui-cell">6</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Karyn Day</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Apex</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">karynday@apex.com</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                        </tr>
                                        <tr class="sui-alt-row" role="row">
                                            <td role="gridcell" tabindex="-1" class="sui-cell">7</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Carolyn Bernard</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Interfind</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">carolynbernard@interfind.com</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                        </tr>
                                        <tr class="sui-row" role="row">
                                            <td role="gridcell" tabindex="-1" class="sui-cell">8</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Tamara Long</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Emtrak</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">tamaralong@emtrak.com</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                        </tr>
                                        <tr class="sui-alt-row" role="row">
                                            <td role="gridcell" tabindex="-1" class="sui-cell">9</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Farley Booth</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Applidec</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">farleybooth@applidec.com</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                        </tr>
                                        <tr class="sui-row" role="row">
                                            <td role="gridcell" tabindex="-1" class="sui-cell">10</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Deborah Stewart</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Flexigen</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">deborahstewart@flexigen.com</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                        </tr>
                                        <tr class="sui-alt-row" role="row">
                                            <td role="gridcell" tabindex="-1" class="sui-cell">11</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Johanna Allen</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">Zoarere</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell">johannaallen@zoarere.com</td>
                                            <td role="gridcell" tabindex="-1" class="sui-cell" ><a href="#"><img src="images/icons/close.svg" id="close" width="20" height="20" alt=""></a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                           
                                    </div>
                    </div>
                    </div>
                    
                </div>
            </div>
          
       
        
          
        
    </div>
   
   
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/e/eyoshij0/eyoshij0.beget.tech/public_html/resources/views/adminprofile.blade.php ENDPATH**/ ?>