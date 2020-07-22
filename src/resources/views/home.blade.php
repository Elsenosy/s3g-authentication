@extends('S3GAuthentication::layouts.template')
@section('content')
<div class="row full justify-content-end">
    <!--***Start page content***-->
    <div class="col-md-10 box-left cont">
        <!-- End contant Tab -->

        <!-- Start Dashboard -->
        <div class="row tab" id="dash">
            <div class="col-12">
                <div class="row text-right">
                    <div class="col-4">
                        <div class="box-admin box-dash">
                            <a href="#"> 3 مستخدمين ينتظروا الموافقة </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-admin box-dash">
                            <a href="#"> فعاليه جديد </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-admin box-dash">
                            <a href="#"> الأعضاء الاكثر تفاعلا على المنصة</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-admin box-dash-side" data-open="#mangusers">
                            <a href="#"> إدارة الأعضاء </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-admin box-dash-side" data-open="#engagements">
                            <a href="#"> الصلاحيات </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-admin box-dash-side" data-open="#settings">
                            <a href="#"> الإعدادات </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Dashboard -->

        <!-- Start contant Tab Manage User -->
        <div class="row tab  d-none managUsers" id="mangusers">
            <div class="col-12 bottom-box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="btn-groupdropright text-right">
                            <button class="btn btn-secondary btn-rig" type="button"> إضافة عضو</button>
                            <!-- button popup-->
                            <button class="btn btn-secondary btn-rig" type="button" data-toggle="modal"
                                data-target="#myModal">
                                إنشاء كود تسجيل
                            </button>
                        </div>
                        <!--model-->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content text-right box-pop">
                                    <h5 class="text-right">إنشاء كود مستخدم جديد</h5>
                                    <form action="{{ route('sendInvitationMail') }}" method="POST">
                                        @csrf
                                        <label class="putemail">البريد الإلكتروني: </label>
                                        <label class="creatcode codeshow">كود التسجيل: </label>
                                        <input class="putemail" name="email" type="email" placeholder="admin@gmail.com">
                                        <input class="creatcode codeshow text-center" type="text"
                                            placeholder="se#5ty6se#dd">
                                        <div class="btn-groupdropright text-right putemail">
                                            <button class="btn btn-secondary btn-rig btncode" type="submit">
                                                إنشاء كود تسجيل
                                            </button>
                                        </div>

                                    </form>

                                    <div class="btn-groupdropright text-right creatcode codeshow">
                                        <button class="btn btn-secondary btn-rig " type="button">
                                            نسخ الكود
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--model-->
                    </div>
                    <div class="col-lg-8">
                        <div class="top-bottom-box text-left">
                            <label> بحث </label>
                            <div class="btn-group has-search">
                                <input type="text">
                            </div>
                            <label> رتبة العضوية</label>
                            <select class="box-content">
                                <option value="1">مسئول</option>
                                <option value="2">كاتب</option>
                                <option value="3">محرر</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class=" box-content table-responsive-md">
                            <table class="table text-right ">
                                <thead>
                                    <tr>
                                        <th scope="col">اسم العضو</th>
                                        <th scope="col">البريد الإلكتروني</th>
                                        <th scope="col"> الرتبة </th>
                                        <th scope="col"> تاريخ الإنضمام</th>
                                        <th scope="col"> الحالة </th>
                                        <th scope="col"> التقييم </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">حكم عبد الله </th>
                                        <td>admin@gmail.com</td>
                                        <td> مسئول </td>
                                        <td>7/3/2019</td>
                                        <td>فعال </td>
                                        <td> ممتاز </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">آمال سيد </th>
                                        <td>admin@gmail.com</td>
                                        <td> مسئول </td>
                                        <td>7/3/2019</td>
                                        <td>فعال</td>
                                        <td> ممتاز </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> حفصة إياد</th>
                                        <td>admin@gmail.com</td>
                                        <td> مسئول </td>
                                        <td>7/3/2019</td>
                                        <td>فعال </td>
                                        <td> جيد جدا </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">نور الإسلام </th>
                                        <td>admin@gmail.com</td>
                                        <td> مسئول </td>
                                        <td>7/3/2019</td>
                                        <td>غير فعال </td>
                                        <td> جيد </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> عمار ياسر </th>
                                        <td>admin@gmail.com</td>
                                        <td> مسئول </td>
                                        <td>7/3/2019</td>
                                        <td> نوعا ما </td>
                                        <td> جيد </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> عمر محمد </th>
                                        <td>admin@gmail.com</td>
                                        <td> مسئول </td>
                                        <td>7/3/2019</td>
                                        <td>فعال </td>
                                        <td> ممتاز </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> أنس خالد</th>
                                        <td>admin@gmail.com</td>
                                        <td> مسئول </td>
                                        <td>7/3/2019</td>
                                        <td>فعال </td>
                                        <td> ممتاز </td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> حبيبة خالد</th>
                                        <td>admin@gmail.com</td>
                                        <td> مسئول </td>
                                        <td>7/3/2019</td>
                                        <td>فعال </td>
                                        <td> ممتاز </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End contant Tab Manage User -->

        <!-- Start contant Tab  -->
        <div class="row tab  d-none engagements" id="engagements">
            <div class="col-sm-12 bottom-box">
                <div class="row">
                    <div class="col-md-2">
                        <div class="btn-groupdropright text-right">
                            <!-- button popup-->
                            <button class="btn btn-secondary btn-rig " type="button" data-toggle="modal"
                                data-target="#myModalengag">
                                إضافة مدير
                            </button>
                        </div>

                        <!--model-->
                        <div class="modal" id="myModalengag">
                            <div class="modal-dialog">
                                <div class="modal-content text-right box-pop">
                                    <h5 class="text-right"> إضافة صلاحية </h5>
                                    <label> العنوان: </label>
                                    <input type="text" placeholder="https://s3geeks.com">
                                    <label> لينك الصفحة: </label>
                                    <input type="text" placeholder="https://s3geeks.com/services">
                                    <div class="row box">
                                        <div class="col-6">
                                            <label class="container-radio"> مدير عام
                                                <input type="radio" checked="checked" name="date">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="container-radio">سفير
                                                <input type="radio" checked="checked" name="date">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="container-radio"> مدير فريق
                                                <input type="radio" checked="checked" name="date">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="container-radio"> عضو
                                                <input type="radio" checked="checked" name="date">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="btn-groupdropright text-right">
                                        <button class="btn btn-secondary btn-rig" type="button">
                                            إضافة الصلاحية
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--model-->
                    </div>
                    <div class="col-md-10">
                        <div class="top-bottom-box text-left">
                            <label> بحث </label>
                            <div class="btn-group has-search">
                                <input type="text">
                            </div>

                            <label> رتبة العضوية</label>
                            <select class="box-content">
                                <option value="1">مسئول</option>
                                <option value="2">كاتب</option>
                                <option value="3">محرر</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class=" box-content table-responsive-md">
                            <table class="table text-right ">
                                <thead>
                                    <tr class="row-eq-height">
                                        <th scope="col">اسم العضو</th>
                                        <th scope="col"> الصلاحية </th>
                                        <th scope="col"> الإعدادت </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="row-eq-height">
                                        <td>
                                            <span class="image"><img src="" alt=""></span>
                                            <p> حكم عبد الله<br>admin@gmail.com</p>
                                        </td>
                                        <td>مسئول</td>
                                        <td>
                                            <span class="edit"> تعديل </span>
                                            <span class="dele"> حذف </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="image"><img src="" alt=""></span>
                                            <p> آمال سيد <br>admin@gmail.com</p>
                                        </td>
                                        <td>مشترك</td>
                                        <td>
                                            <span class="edit"> تعديل </span>
                                            <span class="dele"> حذف </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="image"><img src="" alt=""></span>
                                            <p> حفصة إياد<br>admin@gmail.com</p>
                                        </td>
                                        <td>محرر</td>
                                        <td>
                                            <span class="edit"> تعديل </span>
                                            <span class="dele"> حذف </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <span class="image"><img src="" alt=""></span>
                                            <p> نور الإسلام<br>admin@gmail.com</p>
                                        </td>
                                        <td>كاتب</td>
                                        <td>
                                            <span class="edit"> تعديل </span>
                                            <span class="dele"> حذف </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End contant Tab -->

        <!-- Start Workshop -->
        <div class="row d-none tab" id="workshop">
            <div class="col-12">
                <div class="shop text-center">
                    <p><i class="fas fa-check"></i></p>
                    <h3>لقد تمت أرشفة الورش بنجاح</h3>
                    <div class="workbtn">
                        <button class="btn btn-secondary btn-rig" type="button" data-toggle="modal"
                            data-target="#myMod">
                            <i class="fas fa-link"></i> ورشة جديدة
                        </button>
                        <button class="btn btn-secondary btn-rig" type="button"><i class="fas fa-th-large"></i>إستعراض
                            الورش</button>
                    </div>
                </div>
                <div class="modal" id="myMod">
                    <div class="modal-dialog">
                        <div class="modal-content text-right box-pop">
                            <h4>فورم أرشفة الورش</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>اسم الورشة</label>
                                    <input type="text" placeholder="ورشة التطوير والتدريب">
                                </div>
                                <div class="col-md-12">
                                    <div class="row row-feild">
                                        <div class="col-md-12">
                                            <label style="">ميعاد الورشة</label>
                                        </div>
                                        <div class="col-md-5">
                                            <input id="datepicker" width="100%" value="02/04/2018" />
                                        </div>
                                        <div class="col-md-2 text-center">
                                            <span><i class="fas fa-level-down-alt"></i></span>
                                        </div>
                                        <div class="col-md-5 ">
                                            <input class="float-left" id="datepicker1" width="100%"
                                                value="02/04/2018" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row row-feild">
                                        <div class="col-md-12">
                                            <label>مكان الورشة</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select>
                                                <option value="1"> مصر , محافظة قنا</option>
                                                <option value="1"> مصر , محافظة قنا</option>
                                                <option value="1"> مصر , محافظة قنا</option>
                                                <option value="1"> مصر , محافظة قنا</option>
                                                <option value="1"> مصر , محافظة قنا</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-secondary btn-rig" type="button" data-toggle="modal"
                                                data-target="#myModplace">
                                                <i class="fas fa-plus-circle"></i> إضافة مكان
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row row-feild">
                                        <div class="col-md-12">
                                            <label>المدربين</label>

                                        </div>
                                        <div class="col-md-10">
                                            <select>
                                                <option value="1">م/ آنس خالد</option>
                                                <option value="1">م/ آنس خالد</option>
                                                <option value="1">م/ آنس خالد</option>
                                                <option value="1">م/ آنس خالد</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-secondary btn-rig" type="button" data-toggle="modal"
                                                data-target="#myModtrainer">
                                                <i class="fas fa-plus-circle"></i> إضافة مدرب
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row row-feild">
                                        <div class="col-md-12">
                                            <label for=""> وصف الورشة</label>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="" id="" cols="30" rows="5"
                                                placeholder="يتم استخدام نص لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ  للأحرف الموجودة في اللغة العربية بدلا من أو  عوضاً عن استخدام “هنا يوجد محتوى نصي، هنا يوجد محتوى نصي”  و تكرارها كثيرا في بعض المواقع الالكترونية الحديثة فيستخدم نص لوريم ايبسوم فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 add-btn">
                                    <div class="row row-feild">
                                        <div class="col-md-12">
                                            <label>المتطوعين</label>
                                        </div>
                                        <div class="col-md-10">
                                            <select>
                                                <option value="1">المصممة/ حبيبة خالد</option>
                                                <option value="1">المصممة/ حبيبة خالد</option>
                                                <option value="1">المصممة/ حبيبة خالد</option>
                                                <option value="1">المصممة/ حبيبة خالد</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-secondary btn-rig">
                                                <i class="fas fa-plus-circle"></i> إضافة متطوع
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row row-feild">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="">أسماء الحضور</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="file" />
                                                    <span class="btn-rig">
                                                        <i class="fas fa-plus-circle"></i>
                                                        اضافة ملف
                                                        <span class="filename"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <label class="">صور الورش</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="file" />
                                                <span class="btn-rig">
                                                    <i class="fas fa-plus-circle"></i>
                                                    اضافة ملف
                                                    <span class="filename"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-secondary btn-scn  btn-rig " type="button">
                                        <i class="fas fa-archive"></i> أرشفة المواقع
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start pop up palce workshop  -->
                <div class="modal" id="myModplace">
                    <div class="modal-dialog">
                        <div class="modal-content text-right box-pop">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>اسم المكان</label>
                                    <input type="text" placeholder=" مكان الورشة">
                                </div>
                                <div class="col-md-12">
                                    <div class="row row-feild">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="">العنوان </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder=" مصر، محافظة قنا">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="">البريد الإلكتروني </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="info@s3geeks.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class=""> رقم الهانف </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="+2 01094008382">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class=""> الموقع الإلكتروني </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="s3geeks.com ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label> رابط حساب فيسبوك</label>
                                            <input type="text" placeholder="https://www.facebook.com/S3Geeks/">
                                        </div>
                                        <div class="col-md-12">
                                            <label> رابط حساب تويتر</label>
                                            <input type="text" placeholder="https://www.facebook.com/S3Geeks/">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class=""> العدد التي تستوعبه القاعة</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="+2 01094008382">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="">هل المكان مكيف</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="نعم،مكيف">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-secondary btn-scn" type="button">
                                    <i class="fas fa-map-marker-alt"></i> إضافة المكان
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End pop up palce workshop  -->

                <!-- Start popup trainer -->
                <div class="modal" id="myModtrainer">
                    <div class="modal-dialog">
                        <div class="modal-content text-right box-pop">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row row-feild">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="">الاسم الأول </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="آمال">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class=""> الاسم الآخير</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="سيد">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="">العنوان</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="مصر ، محافظة قنا">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class=""> البريد الإلكتروني </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="info@s3geeks.com ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class=""> رقم الهاتف</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="+2 01000223333 ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class=""> رقم هاتف آخر</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="+2 0105553320">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label> رابط حساب فيسبوك</label>
                                            <input type="text" placeholder="https://www.facebook.com/S3Geeks/">
                                        </div>
                                        <div class="col-md-12">
                                            <label> رابط حساب تويتر</label>
                                            <input type="text" placeholder="https://twitter.com/s3geeks">
                                        </div>
                                        <div class="col-md-12">
                                            <label> رابط حساب لينكد إن</label>
                                            <input type="text" placeholder="https://www.linkedin.com/company/s3geeks">
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="">أسماء الحضور</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="file" />
                                                    <span class="btn-rig">
                                                        <i class="fas fa-plus-circle"></i>
                                                        اضافة ملف
                                                        <span class="filename"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-secondary btn-scn" type="button">
                                    <i class="fas fa-plus-circle"></i> إضافة مدرب
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End pop up palce trainer  -->
            </div>
        </div>
        <!--End Workshop -->

        <!--***general settings***-->
        <div class="row setings d-none tab" id="settings">
            <div class="col-md-6">
                <!--***main settings***-->
                <div class="box">
                    <h4>الاعدادات الرئيسية</h4>
                    <div class="section">
                        <label>عنوان الموقع</label>
                        <input type="text" placeholder="صعيدي جيكس">
                        <label>البريد الاكتروني</label>
                        <input type="email" placeholder="geeks@mail.com">
                        <label class="font-weight-bold">الصفحة الرئيسية</label>
                        <label class="container-radio">صفحة اخر مقال
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <div class="img-con">
                            <label class="container-radio">صفحة محددة
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <select>
                                <option value="1">قائمة الصفحات</option>
                                <option value="2">الرئيسية</option>

                            </select>
                        </div>

                        <label class="font-weight-bold">افاتار</label>
                        <label class="container-radio">صفحة اخر مقال
                            <input type="radio" checked="checked" name="img">
                            <span class="checkmark"></span>
                        </label>
                        <div class="img-con">
                            <label class="container-radio">صفحة محددة
                                <input type="radio" checked="checked" name="img">
                                <span class="checkmark"></span>
                            </label>
                            <select>
                                <option value="1">اختر صورة</option>
                                <option value="2">الافتراضية 1</option>

                            </select>
                        </div>
                    </div>
                </div>
                <!--***media & images***-->
                <div class="box">
                    <h4>الصور والميديا</h4>
                    <div class="section">
                        <div class="img-con">
                            <span>صور مصغرة</span>
                            <div class="num-cont">
                                <span>الطول</span>
                                <input type="number" name="quantity" min="1" max="150" value="150">
                                <span>العرض</span>
                                <input type="number" name="quantity" min="1" max="150" value="150">
                            </div>
                        </div>
                        <div class="img-con">
                            <span>صورة متوسطة</span>
                            <div class="num-cont">
                                <span>الطول</span>
                                <input type="number" name="quantity" min="1" max="300" value="300">
                                <span>العرض</span>
                                <input type="number" name="quantity" min="1" max="300" value="300">
                            </div>
                        </div>
                        <div class="img-con">
                            <span>صورة كبيرة</span>
                            <div class="num-cont">
                                <span>الطول</span>
                                <input type="number" name="quantity" min="1" max="900" value="900">
                                <span>العرض</span>
                                <input type="number" name="quantity" min="1" max="900" value="900">
                            </div>
                        </div>
                    </div>
                </div>
                <!--***posts and comments***-->
                <div class="box">
                    <h4>المقالات والتعليقات</h4>
                    <label class="font-weight-bold">التعليقات والمناقشة</label>
                    <div class="section">
                        <label class="container-box">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            السماح لغير المسجلين بالتعليق والرد على التعليقات
                        </label>
                        <label class="container-box">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            الحصول على إشعارات عند إضافة تعليقات جديدة
                        </label>
                        <label class="container-box">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            إيقاف التعليقات تلقائيا على جميع المقالات
                        </label>
                        <label class="container-box">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            إظهار زر تسجيل الدخول في خانة التعليقات
                        </label>
                        <label class="container-box">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            تنبيه المستخدمين المحظورين من التعليق
                        </label>
                    </div>
                </div>
                <!--***main theme***-->
                <div class="box">
                    <h4>الثيم الإفتراضي للوحة التحكم </h4>
                    <div class="section">
                        <div class="sw-cont">

                            <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                            <span>تمكين الدارك ثيم كثيم افتراضي لجميع المستخدمين</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!--***times and dates***-->
                <div class="box">
                    <h4>اللغة والوقت</h4>
                    <div class="img-con">
                        <label class="font-weight-bold">
                            لغة الموقع الإفتراضية
                        </label>
                        <select>
                            <option value="1">العربية</option>
                            <option value="2">الرئيسية</option>

                        </select>
                    </div>
                    <label class="font-weight-bold">التنسيق الزمني</label>
                    <div class="section">

                        <label class="container-radio">تاريخ طويل
                            <input type="radio" checked="checked" name="date">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-radio">تاريخ قصير
                            <input type="radio" checked="checked" name="date">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-radio">وقت طويل
                            <input type="radio" checked="checked" name="time">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container-radio">وقت قصير
                            <input type="radio" checked="checked" name="time">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <div class="img-con">
                        <label class="font-weight-bold">المنطقة الزمنية</label>
                        <select>
                            <option value="1">Egypt , Qena , UTC +3</option>
                            <option value="2">الافتراضية</option>

                        </select>
                    </div>
                </div>
                <!--***Acounts & login***-->
                <div class="box">
                    <h4>الحسابات واعدادات الدخول</h4>
                    <label class="font-weight-bold">تسجيل الدخول</label>
                    <div class="section">
                        <label class="container-box">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            السماح لغير المسجلين بالتسجيل في الموقع تلقائياً

                        </label>
                        <label class="container-box">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            الحصول على إشعارات عند إضافة مستخدم جديد
                        </label>
                        <label class="container-box">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            إضافة العضوية الإفتراضية للمستخدمين الجدد
                        </label>
                        <label class="container-box">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            تنبيه المستخدمين المحظورين

                        </label>
                    </div>

                    <label class="font-weight-bold">الحسابات</label>
                    <div class="section">
                        <label class="container-box">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            السماح للمستخدمين بحذف حساباتهم على الموقع
                        </label>
                    </div>
                </div>
                <!--***blocked words***-->
                <div class="box">
                    <h4>قائمة الكلمات المسيئة</h4>
                    <textarea></textarea>
                    <p class="note">ضع فاصلة بين الكلمات</p>
                </div>
                <!--***social media***-->
                <div class="box">
                    <h4>مواقع التواصل الاجتماعي</h4>
                    <div class="section">
                        <label class="container-box">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            السماح بإضافة روابط التواصل الإجتماعي
                        </label>
                        <label class="container-box">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            تمكين تسجيل الدخول عن طريق التواصل الإجتماعي
                        </label>
                    </div>
                </div>
            </div>
            <div class="btn-cont">
                <button class="main-btn btn-rig">حفظ التغييرات</button>
                <button class="sec-btn ">استعادة الإفتراضية</button>
            </div>
        </div>

        <!--Start Profile-->
        <div class="row tab  d-none profile" id="profile">
            <div class="col-sm-12 bottom-box">
                <div class="row">
                    <div class="col-5">
                        <div class="row">
                            <div class="col-12  text-center">
                                <div class="box">
                                    <div class="image"><img src="logos3.png" alt=""></div>
                                    <h3>صعيدي جيكس</h3>
                                    <p class="text-center">info@s3geeks.com</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="box">
                                    <h4>نبذة عني</h4>
                                    <textarea></textarea>
                                    <h4> روابط التواصل الإجتماعي</h4>
                                    <div class="social text-center">

                                        <span><i class="fab fa-youtube "></i></span>


                                        <span><i class="fab fa-twitter"></i></span>


                                        <span><i class="fab fa-dribbble"></i></span>


                                        <span><i class="fab fa-skype"></i></span>


                                        <span><i class="fab fa-linkedin-in"></i></span>

                                        <span><i class="fab fa-github"></i></span>


                                        <span><i class="fab fa-facebook-f"></i></span>


                                        <span><i class="fab fa-instagram"></i></span>


                                        <span><i class="fab fa-behance chosed"></i></span>

                                        <input type="text" class="social">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="box">
                                    <h4> التخصص </h4>
                                    <select>
                                        <option value="1"> مصمم ومبرمج مواقع</option>
                                        <option value="2">مدون</option>
                                    </select>
                                    <h4> المهارات </h4>
                                    <input class="form-control" type="text" placeholder="مهاراتك" id="skl">
                                    <div class="btn-groupdropright text-right">
                                        <!-- button popup-->
                                        <button class="btn btn-secondary btn-rig skill-btn" type="button">
                                            إضافة مهارة
                                        </button>
                                        <div class="skill-box">
                                            <span>Html5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 box-left">
                        <div class="box box-top">
                            <div class="form-group row box-fields">
                                <label for="staticEmail" class="col-12 col-form-label"> اسم المستخدم</label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" placeholder="صعيدي جيكس">
                                </div>
                                <label for="staticEmail" class="col-12 col-form-label"> البريد الإلكتروني </label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" placeholder="info@s3geeks.com">
                                </div>
                                <label for="staticEmail" class="col-12 col-form-label"> المكان </label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" placeholder="مصر - قنا">
                                </div>
                                <label for="staticEmail" class="col-12 col-form-label"> تاريخ الميلاد </label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="date">
                                </div>
                                <label for="staticEmail" class="col-12 col-form-label"> رقم الهاتف </label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="text" placeholder="01002035587">
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="form-group row box-fields">
                                <label for="staticEmail" class="col-12 col-form-label"> كلمة المرور الجديدة </label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="password" placeholder="***********">
                                </div>
                                <label for="staticEmail" class="col-12 col-form-label"> أعد كلمة المرور الجديدة </label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="password" placeholder="***********">
                                </div>
                                <div class="col-sm-12 btn-groupdropright text-right">
                                    <button class="btn btn-secondary btn-rig " type="button">
                                        تأكيد تغيير كلمة المرور
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 btn-groupdropright text-right btn-save">
                        <button class="btn btn-secondary btn-rig" type="button">
                            حفظ التغييرات
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--End Profile-->
    </div>
</div>

@endsection 