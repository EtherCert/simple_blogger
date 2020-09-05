<?php 
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
                           إضافة مدونة
                           </span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="explain section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-2 col-md-7 col-sm-12 col-xs-12" style="padding: 0 !important; margin: 0 !important;">
                  <div id="general" class="accordion" style="padding: 0 !important; margin: 0 !important;">
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
                     <form action="#">
                        <h2>إضافة مدونة</h2>
                        <div class="name">
                           <input type="text" name="title" placeholder="العنوان" required> 
                        </div>
                        <br>
                        <div class="name">
                           <select name="cat_id" required class="mystyle">
                              <option>اختر نوع المدونة</option>
                              <option>خدمة</option>
                              <option>خبر</option>
                              <option>من نحن</option>
                           </select>
                        </div>
                        <br>
                        <div class="name">
                           <input type="file" name="img" placeholder="الصورة" required class="mystyle" title='اختر الصورة' accept="image/*"> 
                        </div>
                        <br>
                        <div class="name">
                           <textarea type="text" name="details" placeholder="التفاصيل" required> </textarea>
                        </div>
                        <br>
                        <div class="submit">
                           <button class="form-submit" name="submit">حفظ</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php 
include('footer.php');
?>