<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('admin/dist/img/user_img.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link ">
            <i class="fa fa-th"></i>
            <p>
             قائمة ضبط الأخبار
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/news" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p> العمليات على الخبر</p>
              </a>
            </li>
          </ul>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
                <i class="fa fa-th"></i>
              <p>
               قائمة ضبط الصور
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/photo" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>تعديل وحذف صورة</p>
                </a>
              </li>
            </ul>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link ">
                    <i class="fa fa-th"></i>
                  <p>
                   قائمة ضبط الإحصائيات
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/statistic" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> التعديل على الإحصائيات </p>
                    </a>
                  </li>
                </ul>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="fa fa-th"></i>
                      <p>
                       قائمة ضبط الحوكمة
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/policie" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p> تعديل السياسات واللوائح </p>
                        </a>
                      </li>

                        <li class="nav-item">
                          <a href="/financial_report" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p> تعديل التقارير المالية </p>
                          </a>
                        </li>
                    </ul>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-th"></i>
                          <p>
                           قائمة ضبط التراخيص
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="/liceneses" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p> عرض وتعديل التراخيص </p>
                            </a>
                          </li>
                        </ul>

                      <li class="nav-item has-treeview">
                        <a href="#" class="nav-link ">
                            <i class="fa fa-th"></i>
                          <p>
                           قائمة ضبط الموظفين
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="/employees" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p> إضافة وتعديل الموظفين </p>
                            </a>
                          </li>
                        </ul>


                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link ">
                                <i class="fa fa-th"></i>
                              <p>
                               قائمة ضبط الممتلكات
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="/owns" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p> العمليات علي الممتلكات </p>
                                </a>
                              </li>
                            </ul>


                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link ">
                                <i class="fa fa-th"></i>
                              <p>
                               قائمة ضبط الاستديو
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="/stiduoes" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p> العمليات علي الاستديو </p>
                                </a>
                              </li>
                            </ul>

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link ">
                                    <i class="fa fa-th"></i>
                                  <p>
                                   قائمة ضبط تواصل معنا
                                    <i class="right fas fa-angle-left"></i>
                                  </p>
                                </a>
                                <ul class="nav nav-treeview">
                                  <li class="nav-item">
                                    <a href="/contact_us" class="nav-link">
                                      <i class="far fa-circle nav-icon"></i>
                                      <p>   عرض الرسائل </p>
                                    </a>
                                  </li>
                                </ul>


                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link ">
                                        <i class="fa fa-th"></i>
                                      <p>
                                       قائمة ضبط الفرص المتاحة
                                        <i class="right fas fa-angle-left"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                        <a href="/opportunity" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>  اضافة وتعديل الفرص </p>
                                        </a>
                                      </li>
                                    </ul>

                                    <li class="nav-item has-treeview">
                                        <a href="#" class="nav-link ">
                                            <i class="fa fa-th"></i>
                                          <p>
                                           قائمة ضبط المستخدمين
                                            <i class="right fas fa-angle-left"></i>
                                          </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                          <li class="nav-item">
                                            <a href="{{ route('users.index') }}" class="nav-link">
                                              <i class="far fa-circle nav-icon"></i>
                                              <p>  اضافة مستخدم جديد </p>
                                            </a>
                                          </li>
                                        </ul>


                                    <li class="nav-item has-treeview">
                                        <a href="{{ route('index') }}" class="nav-link ">
                                            <i class="fa fa-th"></i>
                                          <p>
                                            الموقع التعريفي
                                            <i class="right fas fa-angle-left"></i>
                                          </p>
                                        </a>


                      </li>
                    </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
