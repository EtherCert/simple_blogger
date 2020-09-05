<?php 
session_start();
if(!$_SESSION['id']){
   header('Location: login.php'); 
}
include('head.php');
include('nav.php');
?>  
<section class="download section-padding" style="height: 500px !important; ">
 <div class="container">
    <div class="row">
       <div class="mock-float col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
          <br><br><br><br><br><br><br>
          <div class="site-intro-content" style="color: white !important;">
             <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s" style="color: white; visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
                أهلًا بك متدرب22 
             </h2>
             <ul class="list-inline list-unstyled header-links wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.25s; animation-name: fadeInUp;">
                <li>
                   <a style="color: white !important;" href="/">
                   الرئيسية / 
                   </a>
                </li>
                <li>
                   <span>
                   المدونات
                   </span>
                </li>
             </ul>
          </div>
       </div>
    </div>
 </div>
</section>
<section id="about" class="explain section-padding">
 <div class="container">
    <div class="row">
       <div class="col-lg-2 col-md-7 col-sm-12 col-xs-12"  style="padding: 0 !important; margin: 0 !important;">
          <div id="general" class="accordion"  style="padding: 0 !important; margin: 0 !important;">
             <ul class="accordion-list accordion-drop">
                <li class="default">
                   <div class="drop-title">
                      <p>المدونات</p>
                      <span class="icon-holder"> <span class="icon"></span> </span>
                   </div>
                   <ul class="menu-text" style="padding: 10px;">
                      <a style="color: white;" href='#'>- عرض المدونات</a>
                      <br>
                      <a style="color: white;" href='#'>- إضافة مدونة</a>
                   </ul>
                </li>
                <li class="default">
                   <div class="drop-title">
                      <p>رسائل الزوار</p>
                      <span class="icon-holder"> <span class="icon"></span> </span>
                   </div>
                   <ul class="menu-text" style="padding: 10px;">
                      <a style="color: white;" href='#'>- عرض المستخدمون </a>
                      <br>
                      <a style="color: white;" href='#'>- إضافة مستخدم</a>
                   </ul>
                </li>
                <li class="default">
                   <div class="drop-title">
                      <p>المستخدمون</p>
                      <span class="icon-holder"> <span class="icon"></span> </span>
                   </div>
                   <ul class="menu-text" style="padding: 10px;">
                      <a style="color: white;" href='#'>- عرض المستخدمون</a>
                      <br>
                      <a style="color: white;" href='#'>- إضافة مستخدم</a>
                   </ul>
                </li>
             </ul>
          </div>
       </div>
       <div class="col-lg-10 col-md-5 col-sm-12 col-xs-12">
          <div class="col-md-12">
             <form action="#" method="get" novalidate="novalidate">
                <div class="row">
                   <div class="col-md-5">
                      <div class="form-group">
                         <label for="Username">عنوان المدونة</label>
                         <input name="id" class="form-control" value="">
                      </div>
                   </div>
                   <div class="col-md-5">
                      <div class="form-group">
                         <label for="Username">نوع المدونة</label>
                         <select name="status" class="form-control">
                            <option value=""></option>
                            <option value="قيد الإنشاء">قيد الإنشاء</option>
                            <option value="مرسلة"> مرسلة</option>
                         </select>
                      </div>
                   </div>
                   <div class="col-md-1">
                      <div class="form-group">
                         <button type="submit" class="btn btn-danger" style="margin-top: 25px;">ابحث</button>
                      </div>
                   </div>
                </div>
             </form>
             <div class="table-responsive">
                <table class="table table-hover table-striped">
                   <thead>
                      <tr>
                         <th class="text-center">رقم وارد عام</th>
                         <th class="text-center">تاريخ وارد عام</th>
                         <th class="text-center">الموضوع</th>
                         <th class="text-center">السرية</th>
                         <th class="text-center">الأهمية</th>
                         <th class="text-center">عدد الأوراق</th>
                         <th class="text-center">الحالة</th>
                         <th class="text-center" width="10%"></th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td class="text-center">
                            <span class="btn btn-bold btn-font  btn-label-info">
                            114
                            </span>
                         </td>
                         <td nowrap="nowrap" class="text-left">
                            <div class="text-info"><i class="fa fa-calendar"></i>&nbsp;2020-08-29</div>
                            <div class="text-warning"><i class="fa fa-clock"></i>&nbsp;08:43:57</div>
                         </td>
                         <td class="text-center">تةخىخم</td>
                         <td class="text-center">عادي</td>
                         <td class="text-center">مهم</td>
                         <td class="text-center">
                            <span class="kt-badge kt-badge--danger kt-badge--md">4</span>
                         </td>
                         <td class="text-center">
                            <span class="btn btn-bold btn-sm btn-font-sm btn-label-success">مرسلة</span>
                         </td>
                         <td class="fitwidth">
                            <div class="kt-widget2__actions">
                               <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                               المزيد
                               </a>
                               <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(39px, 39px, 0px);">
                                  <ul class="kt-nav">
                                     <li class="kt-nav__item">
                                        <a style="color: black;" href="https://socialworkers.org.sa/manage/admin/transactions-ticket/114" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-edit"></i>
                                        <span class="kt-nav__link-text">تعديل</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <a style="color: black;" href="https://socialworkers.org.sa/manage/admin/transactions-received/114" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-trash"></i>
                                        <span class="kt-nav__link-text">حذف</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <a style="color: black;" href="https://socialworkers.org.sa/manage/admin/transactions/114" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-eye"></i>
                                        <span class="kt-nav__link-text">التفاصيل</span>
                                        </a>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </td>
                      </tr>
                      <tr>
                         <td class="text-center">
                            <span class="btn btn-bold btn-font  btn-label-info">
                            110
                            </span>
                         </td>
                         <td nowrap="nowrap" class="text-left">
                            <div class="text-info"><i class="fa fa-calendar"></i>&nbsp;2020-08-28</div>
                            <div class="text-warning"><i class="fa fa-clock"></i>&nbsp;17:04:50</div>
                         </td>
                         <td class="text-center">uuuuuu</td>
                         <td class="text-center">سري</td>
                         <td class="text-center">مهم</td>
                         <td class="text-center">
                            <span class="kt-badge kt-badge--danger kt-badge--md">5</span>
                         </td>
                         <td class="text-center">
                            <span class="btn btn-bold btn-sm btn-font-sm btn-label-success">مرسلة</span>
                         </td>
                         <td class="fitwidth">
                            <div class="kt-widget2__actions">
                               <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                               <i class="flaticon-more-1"></i>
                               </a>
                               <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(39px, 39px, 0px);">
                                  <ul class="kt-nav">
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions-ticket/110" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-glasses"></i>
                                        <span class="kt-nav__link-text">تذكرة مراجعة</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions-received/110" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-print"></i>
                                        <span class="kt-nav__link-text">بيان الاستلام</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions-history/110" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-history"></i>
                                        <span class="kt-nav__link-text">تتبع المعاملة</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions/110" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-eye"></i>
                                        <span class="kt-nav__link-text">التفاصيل</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <form method="post" class="form-inline" action="https://socialworkers.org.sa/manage/admin/transactions/110">
                                           <input type="hidden" name="_token" value="R1u1EUlJy9h19rvLXF26bAcE6LpqeEUPMT76aZij">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button onclick="return confirm('هل أنت متأكد من حذف المعاملة  uuuuuu؟')" style="margin-right: 12px;" type="submit" class="btn btn-elevate btn-pill">
                                           <i class="kt-nav__link-icon fa fa-trash"></i>
                                           <span class="kt-nav__link-text">حذف</span>
                                           </button>
                                        </form>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </td>
                      </tr>
                      <tr>
                         <td class="text-center">
                            <span class="btn btn-bold btn-font  btn-label-info">
                            100
                            </span>
                         </td>
                         <td nowrap="nowrap" class="text-left">
                            <div class="text-info"><i class="fa fa-calendar"></i>&nbsp;2020-08-24</div>
                            <div class="text-warning"><i class="fa fa-clock"></i>&nbsp;05:31:45</div>
                         </td>
                         <td class="text-center">تهخت</td>
                         <td class="text-center">عادي</td>
                         <td class="text-center">مهم</td>
                         <td class="text-center">
                            <span class="kt-badge kt-badge--danger kt-badge--md">85</span>
                         </td>
                         <td class="text-center">
                            <span class="btn btn-bold btn-sm btn-font-sm btn-label-success">مرسلة</span>
                         </td>
                         <td class="fitwidth">
                            <div class="kt-widget2__actions">
                               <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                               <i class="flaticon-more-1"></i>
                               </a>
                               <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(39px, 39px, 0px);">
                                  <ul class="kt-nav">
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions-ticket/100" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-glasses"></i>
                                        <span class="kt-nav__link-text">تذكرة مراجعة</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions-received/100" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-print"></i>
                                        <span class="kt-nav__link-text">بيان الاستلام</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions-history/100" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-history"></i>
                                        <span class="kt-nav__link-text">تتبع المعاملة</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions/100" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-eye"></i>
                                        <span class="kt-nav__link-text">التفاصيل</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <form method="post" class="form-inline" action="https://socialworkers.org.sa/manage/admin/transactions/100">
                                           <input type="hidden" name="_token" value="R1u1EUlJy9h19rvLXF26bAcE6LpqeEUPMT76aZij">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button onclick="return confirm('هل أنت متأكد من حذف المعاملة  تهخت؟')" style="margin-right: 12px;" type="submit" class="btn btn-elevate btn-pill">
                                           <i class="kt-nav__link-icon fa fa-trash"></i>
                                           <span class="kt-nav__link-text">حذف</span>
                                           </button>
                                        </form>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </td>
                      </tr>
                      <tr>
                         <td class="text-center">
                            <span class="btn btn-bold btn-font  btn-label-info">
                            89
                            </span>
                         </td>
                         <td nowrap="nowrap" class="text-left">
                            <div class="text-info"><i class="fa fa-calendar"></i>&nbsp;2020-08-23</div>
                            <div class="text-warning"><i class="fa fa-clock"></i>&nbsp;09:50:45</div>
                         </td>
                         <td class="text-center">اختهخ</td>
                         <td class="text-center">عادي</td>
                         <td class="text-center">مهم</td>
                         <td class="text-center">
                            <span class="kt-badge kt-badge--danger kt-badge--md">44</span>
                         </td>
                         <td class="text-center">
                            <span class="btn btn-bold btn-sm btn-font-sm btn-label-success">مرسلة</span>
                         </td>
                         <td class="fitwidth">
                            <div class="kt-widget2__actions">
                               <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="false">
                               <i class="flaticon-more-1"></i>
                               </a>
                               <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(39px, 39px, 0px);">
                                  <ul class="kt-nav">
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions-ticket/89" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-glasses"></i>
                                        <span class="kt-nav__link-text">تذكرة مراجعة</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions-received/89" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-print"></i>
                                        <span class="kt-nav__link-text">بيان الاستلام</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions-history/89" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-history"></i>
                                        <span class="kt-nav__link-text">تتبع المعاملة</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <a href="https://socialworkers.org.sa/manage/admin/transactions/89" class="kt-nav__link">
                                        <i class="kt-nav__link-icon fa fa-eye"></i>
                                        <span class="kt-nav__link-text">التفاصيل</span>
                                        </a>
                                     </li>
                                     <li class="kt-nav__item">
                                        <form method="post" class="form-inline" action="https://socialworkers.org.sa/manage/admin/transactions/89">
                                           <input type="hidden" name="_token" value="R1u1EUlJy9h19rvLXF26bAcE6LpqeEUPMT76aZij">                                                      <input type="hidden" name="_method" value="DELETE">                                                      <button onclick="return confirm('هل أنت متأكد من حذف المعاملة  اختهخ؟')" style="margin-right: 12px;" type="submit" class="btn btn-elevate btn-pill">
                                           <i class="kt-nav__link-icon fa fa-trash"></i>
                                           <span class="kt-nav__link-text">حذف</span>
                                           </button>
                                        </form>
                                     </li>
                                  </ul>
                               </div>
                            </div>
                         </td>
                      </tr>
                   </tbody>
                </table>
                <div class="text-center">
                   <div class="ls-button-group demo-btn ls-table-pagination">
                      <div class="pagination-container">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
</section>
<?php 
include('footer.php');
?>  